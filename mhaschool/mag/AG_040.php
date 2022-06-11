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
								<p class="sub_main_title">'.$ag['4001'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['4002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['40021'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['400211'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['400212'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['400213'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['4003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['40031'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['40032'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['40033'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['40034'].'</th>
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
	$layout->set("sub_title", ""); //$ag['4001']
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#a_4").addClass("active");
document.getElementById("subimage").style.backgroundPosition="-33px -80px"; 
</script>