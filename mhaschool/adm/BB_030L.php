<?php
	include("../layout/template.class.php");
	include("../layout/left_menu.php");
	require_once("../dbconfig.php");
	
	$gopg = "BB_030L.php";

	/* 페이징 시작 */
	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	$sql_page = "SELECT COUNT(*) AS CNT FROM TB_BOARD_JG020 ORDER BY BB_NO DESC";

	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	if( $conn->connect_error ) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$result  = $conn->query($sql_page); //전체 글수
	$row     = $result->fetch_assoc();
	$allPost = $row['CNT']; //전체 게시글의 수
	$onePage = 10; // 한 페이지에 보여줄 게시글의 수.
	$allPage = ceil($allPost / $onePage); //전체 페이지의 수

	$oneSection     = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
	$currentSection = ceil($page / $oneSection); //현재 섹션
	$allSection     = ceil($allPage / $oneSection); //전체 섹션의 수

	$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지
	if( $currentSection == $allSection ) {
		$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
	} else {
		$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
	}

	$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
	$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.
	
	$paging = ''; // 페이징을 저장할 변수
	//첫 페이지가 아니라면 처음 버튼을 생성
	if( $page != 1 ) {
		$paging .= '<a href="javascript:goBoradPage(\''.$gopg.'\', 1, 1);"><span class="badge" style="background:purple;width:45px;height:25px;padding:5px;";>First</span></a>';
	}
	//첫 섹션이 아니라면 이전 버튼을 생성
	if($currentSection != 1) {
		$paging .= '<a href="javascript:goBoradPage(\''.$gopg.'\', 1, '.$prevPage.');"><span class="badge" style="background:purple;width:45px;height:25px;padding:5px;";>Prev.</span></a>';
	}
	for($i = $firstPage; $i <= $lastPage; $i++) {
		if($i == $page) {
			if( $i == 1 ) {
				$paging .= '<span class="badge" style="background:black;width:45px;height:25px;padding:5px;";>First</span>';
			}
			$paging .= '<span class="badge" style="background:black;width:30px;height:25px;padding:5px;";>' . $i . '</span>';
		} else {
			$paging .= '<a href="javascript:goBoradPage(\''.$gopg.'\', 1, '.$i.');"><span class="badge" style="background:purple;width:30px;height:25px;padding:5px;">'.$i.'</span></a>';
		}
	}
	//마지막 섹션이 아니라면 다음 버튼을 생성
	if($currentSection != $allSection) {
		$paging .= '<a href="javascript:goBoradPage(\''.$gopg.'\', 1, '.$nextPage.');"><span class="badge" style="background:purple;width:45px;height:25px;padding:5px;";>Next.</span></a>';
	}
	//마지막 페이지가 아니라면 끝 버튼을 생성
	if($page != $allPage) {
		$paging .= '<a href="javascript:goBoradPage(\''.$gopg.'\', 1, '.$allPage.');"><span class="badge" style="background:purple;width:45px;height:25px;padding:5px;";>Last</span></a>';
	} else {
		$paging .= '<span class="badge" style="background:black;width:45px;height:25px;padding:5px;";>Last</span>';
	}
	$paging .= '';
	
	/* 페이징 끝 */
	$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문	

	$sql = "
		SELECT 
			  BB_NO
			, BB_TITLE
			, BB_MESSAGE
			, CONCAT(SUBSTR(BB_WRT_DT, 1, 4), '-', SUBSTR(BB_WRT_DT, 5, 2), '-', SUBSTR(BB_WRT_DT, 7, 2)) AS BB_WRT_DT
			, BB_WRT_NM
		FROM TB_BOARD_JG020 ORDER BY BB_NO DESC ".$sqlLimit;

	$content = '
	<table class="sub_table">
		<tr>
			<th class="sub_td">
				<table>
					<tr>
						<th class="sub_td">
							<p class="sub_main_title">후원내역관리</p>
						</th>
					</tr>
				</table>
			</th>
		</tr>
		<tr>
			<th class="sub_td_button" style="text-align: right;"><input type="button" class="board-button" value="Write" onClick="javascript:goWrite(3);"></th>
		</tr>
		<tr>
			<th class="sub_td">
	';
	$content .= '
				<table id="board_list">
					<tr>
						<th width="10%">번호</th>
						<th width="60%">제목</th>
						<th width="15%">후원자</th>
						<th width="15%">후원일자</th>
					</tr>
			';
	
	$result = $conn->query($sql);
	$i=0;
	while( $row = $result->fetch_assoc() ) {
		$content .= '
					<tr>
						<td align="center">'. $row["BB_NO"] .'</td>
						<td><a href="javascript:goBoradDetail(\'BB_030W.php?no='.$row["BB_NO"].'\', 1, '.$nextPage.');">'.$row["BB_TITLE"].'</a></td>
						<td align="center">'.$row["BB_WRT_NM"].'</td>
						<td align="center">'.$row["BB_WRT_DT"].'</td>
					</tr>
		';
	}
	$conn->close();

	$content .= '
				</table>
			</th>
		</tr>
		<tr>
			<th class="sub_td_message_cnt">';
	$content .= $paging;
	$content .= '
			</th>
		</tr>
	</table>
	';

	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("../layout/com_layout.tpl");
	$layout->set("header_login", $a_login);
	$layout->set("side_menu", $admin_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#k_3").addClass("active");
</script>