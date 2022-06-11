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
								<p class="sub_main_title">'.$bg["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th style="text-align:right; padding: 0px 50px 0px 0px;">
								<a style="display:none;" id="downloadLink" href="#" download="#"></a>
								<input type="button" class="download" value="'.$bg["1002"].'" onClick="javascript:goDownload(1);">
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["1003"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10031"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10032"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["1004"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10041"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10042"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10043"].'</th>
						</tr>
						<tr><td class="under_line"></td></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["1005"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10051"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["1006"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["10061"].'</th>
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
	$layout->set("side_menu", $b_menu);
	$layout->set("sub_title", ""); //$bg["1001"]
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#b_1").addClass("active");
$("#subimage").css('background-image', 'url(../images/bg_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="0px 10px";
</script>