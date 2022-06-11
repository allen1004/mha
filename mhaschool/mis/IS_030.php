<?php
	include("../layout/template.class.php");
	include("../layout/left_menu.php");

	$content = '
		<table class="sub_table">
			<tr>
				<th class="sub_td">
					<table>
						<tr>
							<th class="sub_td">
								<p class="sub_main_title">가정통신문</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">| 사진</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<p>- 본교가 인정하는 교단이나 교단에 소속된 교회 및 선교 단체에서 부모 모두 해외 선교사로 파송을 받아 현재 사역 중인 선교사의 자녀</p>
							</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
					</table>
				</th>
			</tr>
		</table>
	';

	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("../layout/com_layout.tpl");
	$layout->set("header_login", $a_login);
	$layout->set("side_menu", $i_menu);
	$layout->set("sub_title", "가정 통신문");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#i_3").addClass("active");
</script>