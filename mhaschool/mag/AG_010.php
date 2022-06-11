<?php
	include("../layout/template.class.php");
	include("../layout/left_menu.php");

	$greeting = '
		<table class="sub_table">
			<tr>
				<th class="sub_td">
					<p class="sub_main_title">재단 이사장 인사말</p>
				</th>
			</tr>
			<tr>
				<th class="sub_td">
					<table border="0" width="100%">
						<tr>
							<th>
								<img class="img_outline" src="../images/prin.jpg">
							</th>
							<th style="padding-left: 100px; width:100%;">
								<p class="sub_main_name" style="font-size: 25px;">교장 곽인환</p>
							</th>
						</tr>
					</table>
				</th>
			</tr>
			<tr>
				<th class="sub_td_message">
					마닐라 한국아카데미 홈페이지 방문을 환영합니다.<br>
					본교는 한국 선교사 자녀 교육을 위해 1994년 한국 교계의 연합과 노력으로 세운 최초의 선교사 자녀 학교이며, 2006년 이후
					명성교회(김삼환 목사사무)에서 재단을 운영하고 있습니다.
					<br><br>
					본교는 헌신된 교사 선교사들이 기독교적 세계관을 바탕으로 세계 각 지역에서 모여든 한국 MK들을 한국인으로서의 분명한 정체성과
					철저한 기독교 신앙으로 양육하여 차세대 선교 일군으로 준비하고 있습니다.
					<br><br>
					이를 위해 본교는 기본에 충실한 신앙지도자, 교과교육 전문가로서의 교사진을 확뵤해 나가고 있습니다. 또한 학생들이
					기본에 충실하며 큰 꿈을 가지고 세계를 이끌어 갈 기독학생으로 건강하게 자라나서 하나님 나라와 국가에 크게 쓰임 받는 인재로
					양성되도록 최선을 다고 있습니다.
				</th>
			</tr>
		</table>			
	';

	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("../layout/com_layout.tpl");
	$layout->set("header_login", $a_login);
	$layout->set("side_menu", $a_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $greeting);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
	setLanguage("<?php echo $setLang;?>"); //언어 변경
	$("#a_1").addClass("active"); //left 확성화
	$("#subimage").css('background-image', 'url(../images/ag_010.jpg)');
	document.getElementById("subimage").style.backgroundPosition="-63px -50px"; 
</script>