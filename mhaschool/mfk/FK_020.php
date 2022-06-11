<?php
	include("../layout/template.class.php");
	include("../layout/left_menu.php");

	$content = '
		<table class="sub_table">
			<tr>
				<th class="sub_td">
					<table width="100%">
						<tr>
							<th class="sub_td">
								<p class="sub_main_title">'.$fk["2001"].'</p>
							</th>
						</tr>
						<tr>
							<th style="text-align:right; padding: 0px 50px 0px 0px;">
								<a style="display:none;" id="downloadLink" href="#" download="#"></a>
								<input type="button" class="download" value="'.$fk["20011"].'" onClick="javascript:goDownload(4);">
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['2002'].'</span>
							</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['2003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['2004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20042'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20043'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['2005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20051'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['20052'].'</th>
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
	$layout->set("side_menu", $f_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#f_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/fk_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="-63px -73px";
</script>