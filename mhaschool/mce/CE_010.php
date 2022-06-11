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
								<p class="sub_main_title">'.$ce["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['1002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10021'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10022'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['1003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['1004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10042'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['1005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['10051'].'</th>
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
	$layout->set("side_menu", $c_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#c_1").addClass("active");
$("#subimage").css('background-image', 'url(../images/ce_main.jpg)');
</script>