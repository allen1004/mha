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
								<p class="sub_main_title">'.$ag['6001'].'</p>
							</th>
						</tr>
										
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6002'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6003'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6004'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60041'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6007'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60071'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6012'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60121'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>				
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6015'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60151'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6017'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60171'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6018'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60181'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6019'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60191'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6020'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60201'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6021'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60211'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$ag['6022'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$ag['60221'].'</th>
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
	$layout->set("sub_title", ""); //$ag['6001']
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#a_6").addClass("active");
$("#subimage").css('background-image', 'url(../images/ag_060.jpg)');
document.getElementById("subimage").style.backgroundPosition="-63px -70px"; 
</script>