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
								<p class="sub_main_title">'.$bg["2001"]. '</p>
							</th>
						</tr>
						<tr>
							<th style="text-align:right; padding: 0px 50px 0px 0px;">
								<a style="display:none;" id="downloadLink" href="#" download="#"></a>
								<input type="button" class="download" value="'.$bg["1002"].'" onClick="javascript:goDownload(2);">
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["2003"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20031"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20032"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["2004"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20041"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20042"].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20043"].'</th>
						</tr>
						<tr><td class="under_line"></td></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["2005"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20051"].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$bg["2006"].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$bg["20061"].'</th>
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
	$layout->set("sub_title", ""); //$bg["2001"]
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#b_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/bg_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="0px 10px";
</script>