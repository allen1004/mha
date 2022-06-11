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
								<p class="sub_main_title">'.$ag['7001'].'</p>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">
								<span style="font-size:25px;">'.$ag['7002'].'</span>
							</th>
						</tr>
						<tr>
							<th class="sub_td_message">'.$ag['70021'].'</th>
						</tr>
						<tr><th class="under_line"></th></tr>
	
						<tr>
							<th class="sub_td_message">
								<div id="map-canvas" style="width: 100%; height: 600px"></div>
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
	$layout->set("sub_title", ""); //$ag['7001']
	$layout->set("contents", $content);
	$layout->set("footers", $footers);
	
	echo $layout->output();
?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC0XjL1GifYjBFb3n4lVViJWp3a-L3JELM&sensor=false"></script>
<script type="text/javascript">
	setLanguage("<?php echo $setLang;?>"); //언어 변경
	$("#a_7").addClass("active");
	document.getElementById("subimage").style.backgroundPosition="-33px -80px"; 
	function initialize() {
		var mylocation = new google.maps.LatLng('14.595887', '121.195381'); // 지도에서 가운데로 위치할 위도와 경도
		var mapOptions = {
			center: mylocation, // 지도에서 가운데로 위치할 위도와 경도(변수)
			zoom: 16, // 지도 zoom단계
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}

		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); // id: map-canvas, body에 있는 div태그의 id와 같아야 함

		// 마커로 사용할 이미지 주소
		var marker = new google.maps.Marker({
			position: mylocation,
			map: map,
			title: "Manila Hankuk Academy"
        });

		var infowindow = new google.maps.InfoWindow({
			content: "<h2>Manila Hankuk Academy</h2",
			maxWidth: "100%"
		});
		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map, marker);
		});
	}
	initialize();
</script>

