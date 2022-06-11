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
								<p class="sub_main_title">'.$gn["2001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$gn["2002"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["20021"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
						
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$gn["2003"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["20031"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$gn["2004"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["20041"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$gn["2005"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$gn["20051"].'</th>
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
$("#g_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/gn_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="0px -90px";
</script>