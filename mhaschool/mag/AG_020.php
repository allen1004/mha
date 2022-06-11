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
								<p class="sub_main_title">'.$ag["2001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td">
								<table>
									<tr>
										<th>
											<img class="img_outline" src="../images/prin.jpg">
										</th>
										<th style="padding-left: 100px; width:82%;">
											<p style="font-size: 25px;">'.$ag["2002"].'</p>
										</th>
									</tr>
								</table>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag["2003"].'</th>
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
	$layout->set("side_menu", $a_menu);
	$layout->set("sub_title", ""); //$ag["2001"]
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#a_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/ag_020.jpg)');
</script>