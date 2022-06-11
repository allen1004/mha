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
								<p class="sub_main_title">'.$jg["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$jg['1002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$jg['10021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$jg['1003'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$jg['10031'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$jg['1004'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$jg['10041'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$jg['100411'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$jg['10042'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$jg['100421'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$jg['1005'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$jg['10051'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$jg['1006'].'</span>
							</th>
						</tr>			
						<tr>
							<th class="sub_td_message">'.$jg['10061'].'</th>
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
	$layout->set("side_menu", $j_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#j_1").addClass("active");
</script>