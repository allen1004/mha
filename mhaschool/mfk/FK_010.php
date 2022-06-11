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
								<p class="sub_main_title">'.$fk["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$fk['10021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1003'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1004'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10041'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1005'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10051'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1006'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10061'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1007'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10071'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1008'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10081'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1009'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10091'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1010'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10101'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1011'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10111'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1012'].'</span>
							</th>
						</tr>
					
						<tr>
							<th class="sub_td_message">'.$fk['10121'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>		
									
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$fk['1013'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$fk['10131'].'</th>
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
$("#f_1").addClass("active");
$("#subimage").css('background-image', 'url(../images/fk_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="-63px -73px"; 
</script>