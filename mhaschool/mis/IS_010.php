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
								<p class="sub_main_title">'.$is["1001"].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<p style="font-size:25px;">'.$is['1002'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message_cnt" style="width:840px;">
								'.$is["10020"].'
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.
							$is["100201"].$is["100202"].$is["100203"].$is["100204"].$is["100205"].$is["100206"].
							$is["100207"].$is["100208"].$is["100209"].$is["100210"].$is["100211"].$is["100212"]
							.'</th>
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
	$layout->set("side_menu", $i_menu);
	$layout->set("sub_title", "");
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript">
setLanguage("<?php echo $setLang;?>"); //언어 변경
$("#i_1").addClass("active");

function openCity(obj, typ, color) {
	document.getElementById("01").style.display = "none";
	document.getElementById("02").style.display = "none";
	document.getElementById("03").style.display = "none";
	document.getElementById("04").style.display = "none";
	document.getElementById("05").style.display = "none";
	document.getElementById("06").style.display = "none";
	document.getElementById("07").style.display = "none";
	document.getElementById("08").style.display = "none";
	document.getElementById("09").style.display = "none";
	document.getElementById("10").style.display = "none";
	document.getElementById("11").style.display = "none";
	document.getElementById("12").style.display = "none";
    document.getElementById(obj).style.display = "block";
}
</script>