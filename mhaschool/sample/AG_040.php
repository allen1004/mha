<!DOCTYPE html>
<html>
<head>
<style>
.tablink {
	position: relative; 
	top: 0px; 
	width: "20%"; 
	height: 30px; 
}

.tablink:hover {
    background-color: #777;
}
</style>
</head>
<body>

	<button class="tablink" onclick="openCity('01', this, 'grey')">1 월</button>
	<button class="tablink" onclick="openCity('02', this, 'grey')">2 월</button>
	<button class="tablink" onclick="openCity('03', this, 'gray')">3 월</button>
	<button class="tablink" onclick="openCity('04', this, 'gray')">4 월</button>
	<button class="tablink" onclick="openCity('05', this, 'gray')">5 월</button>
	<button class="tablink" onclick="openCity('06', this, 'gray')">6 월</button>
	<button class="tablink" onclick="openCity('07', this, 'gray')">7 월</button>
	<button class="tablink" onclick="openCity('08', this, 'gray')">8 월</button>
	<button class="tablink" onclick="openCity('09', this, 'gray')">9 월</button>
	<button class="tablink" onclick="openCity('10', this, 'gray')">10 월</button>
	<button class="tablink" onclick="openCity('11', this, 'gray')">11 월</button>
	<button class="tablink" onclick="openCity('12', this, 'gray')">12 월</button>
	


<div id="01" style="display:block;">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="02" style="display:none;">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="03" style="display:none;">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="04" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>

<div id="05" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="06" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="07" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="08" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="09" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="10" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="11" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<div id="12" style="display:none;">
  <h3>Oslo</h3>
  <p>Oslo is the capital of Norway.</p>
</div>
<script>
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
	typ.style.backgroundColor = color;
}
</script>
     
</body>
</html> 