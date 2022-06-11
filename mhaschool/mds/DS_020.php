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
								<p class="sub_main_title">'.$ds["2001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ds['2002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['20021'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['20022'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['20023'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['20024'].'</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ds['20025'].'</th>
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
$("#d_2").addClass("active");
$("#subimage").css('background-image', 'url(../images/ds_main.jpg)');
document.getElementById("subimage").style.backgroundPosition="-33px -60px"; 
</script>