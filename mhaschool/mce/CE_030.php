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
								<p class="sub_main_title">'.$ce["3001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['3002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30021'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30022'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30023'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['3003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30031'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300311'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300312'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300313'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30032'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300321'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300322'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300323'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300324'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300325'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['300326'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['3004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ce['30042'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['3005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['30051'].'</th>
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
$("#c_3").addClass("active");
$("#subimage").css('background-image', 'url(../images/ce_main.jpg)');
</script>