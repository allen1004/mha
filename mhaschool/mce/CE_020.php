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
								<p class="sub_main_title">'.$ce["2001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['2002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20021'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20022'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['2003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['2004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ce['20042'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['2005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20051'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20052'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ce['2006'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ce['20061'].'</th>
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
$("#c_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/ce_main.jpg)');
</script>