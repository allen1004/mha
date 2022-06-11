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
								<p class="sub_main_title">'.$ag['5001'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['5002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<table>
									<tr>
										<th width="30%"><img src="../images/logo_big.gif" width="80%"></th>
										<th class="sub_td_message_padding">'.$ag['50021'].'</th>
									</tr>
								</table>
							</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['5003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<table>
									<tr>
										<th width="30%"><img src="../images/ag_050flag.jpg" width="80%"></th>
										<th class="sub_td_message_padding">'.$ag['50031'].'</th>
									</tr>
								</table>
							</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['5004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_cnt">
								<img src="../images/ag_050song.jpg" width="80%">
							</th>
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
	$layout->set("sub_title", ""); //$ag['5001']
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#a_5").addClass("active");
document.getElementById("subimage").style.backgroundPosition="-33px -80px"; 
</script>