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
								<p class="sub_main_title">'.$gn["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$gn["1002"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["10021"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["10022"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["10023"].'</th>
						</tr>
	
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
	$layout->set("side_menu", $g_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#g_1").addClass("active");
$("#subimage").css('background-image', 'url(../images/gn_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="0px -90px";
</script>