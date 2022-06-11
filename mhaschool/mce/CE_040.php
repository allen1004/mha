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
								<p class="sub_main_title">'.$ce["4001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['4002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['4003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40031'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40032'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40033'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40034'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['4004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40042'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40043'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['4005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40051'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40052'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['4006'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['40061'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ce['40062'].'</th>
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
$("#c_4").addClass("active");
$("#subimage").css('background-image', 'url(../images/ce_main.jpg)');
</script>