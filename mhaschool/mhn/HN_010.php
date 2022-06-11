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
								<p class="sub_main_title">'.$hn["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:23px;">'.$hn['1002'].'</span>
							</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1003'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$hn['10031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1004'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$hn['10041'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1005'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$hn['10051'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1006'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10061'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message_padding">'.$hn['100611'].'</th>
						</tr>									
						<tr>
							<th class="sub_td_message">'.$hn['100612'].'</th>
						</tr>									
						<tr>
							<th class="sub_td_message">'.$hn['10062'].'</th>
						</tr>									
						<tr>
							<th class="sub_td_message_padding">'.$hn['100621'].'</th>
						</tr>									
						<tr>
							<th class="sub_td_message">'.$hn['100622'].'</th>
						</tr>								
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1007'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10071'].'</th>
						</tr>									
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1008'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10081'].'</th>
						</tr>										
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1009'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10091'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1010'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10101'].'</th>
						</tr>	
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$hn['1011'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$hn['10111'].'</th>
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
	$layout->set("side_menu", $h_menu);
	$layout->set("sub_title", "교목실 안내");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#h_1").addClass("active");
</script>