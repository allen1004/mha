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
								<p class="sub_main_title">'.$ds["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1004'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10042'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1005'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10051'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1006'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10061'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10062'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10063'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1007'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10071'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1008'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10081'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1009'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10091'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1010'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10101'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['1011'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['10111'].'</th>
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
	$layout->set("side_menu", $d_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#d_1").addClass("active");
$("#subimage").css('background-image', 'url(../images/ds_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="-33px -60px"; 
</script>