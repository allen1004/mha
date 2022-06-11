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
								<p class="sub_main_title">'.$ag["3001"].'</p>
							</th>
						</tr>
						<tr>
							<th style="text-align:center; padding: 50px 0px 50px 0px;">
								<img src="../images/logo_big.gif">
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['3002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['30021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>

						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['3003'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['30031'].'</th>
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
	$layout->set("sub_title", ""); //$ag["3001"]
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#a_3").addClass("active");
document.getElementById("subimage").style.backgroundPosition="-33px -80px"; 
</script>