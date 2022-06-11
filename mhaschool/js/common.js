/*메인슬라이드 hover했을때 sub catagory 노출*/
$(function () {
	$("li.dropdown").hover(function () {
		$(this).addClass('open')
	}, function () {
		$(this).removeClass('open')
	});
});

/**
* Multi Lanaguage Function
* Declared in the file, language.pack.js
*/
function setLanguage(curLanguage) {
	console.log('setLanguage', arguments);
	$('[data-langNum]').each(function() {
		var $this = $(this);
		$this.html($.lang[curLanguage][$this.data('langnum')]);
	});
}

/*
 * Parameter : 1:Directory, 2:File Name, 3:Order, 4:Main or Sub-Page
 * Example : ('mag', 'AG_010.php', 1, '');
 */
function goPage(oDir, oPage, oOrder, oSubFlg) {
	var oPath = '';
	
	if( oSubFlg == 's' ) {
		oPath = "../"+oDir+"/"+oPage;
	} else if( oSubFlg == 'L' ) {
		oPath = "../"+oDir+"/"+oPage;
	} else {
		oPath = oDir+"/"+oPage;		
	}

	$.ajax({
		success: function(){
			$(location).attr('href', oPath); // You URL inserted
		}
	});
}

/*
 * Go to sub-page by side menu.
 */
function goSubPage(oPage, oOrder) {
	$.ajax({
		success: function(){
			$(location).attr('href', oPage); // You URL inserted
		}
	});
} 

/*
 * Go to the Main Screen.
 */
function goHome(obj) {
	if( obj == 's' ) {
		obj = '..'
	}
	goPage('..', '', '', obj);
//	window.document.location.href = "login.php";
}

/*
 * Go to the Facebook site.
 */
function goFacebook(obj) {
	window.open("http://www.facebook.com/1994MHA2017", "target=_blank, status=yes"); 
}

/*
 * Go to the Login screen.
 */
function goLogin(obj) {
	var oPath = "adm/LG_010.php";
	if( obj == 's' ) {
		oPath = "../adm/LG_010.php";
	} else if( obj == 'L' ) {
		oPath = "LG_010.php";
	}
	$.ajax({
		success: function(){
			$(location).attr('href', oPath); // You URL inserted
		}
	});
}
//enter
function EnterKey_Action() {
	if(event.keyCode == 13) {
		goLoginOn();
	}
}
function goLoginOn() {
	var action = 'LG_010C.php';
	var form_data = {
		user_id: $("#user_id").val(),
		user_pw: $("#user_pw").val()
	};
	if(form_data.user_id == "") {
		alert("Enter your Login ID!");
		document.frm.user_id.focus();
		return;
	}
	if(form_data.user_pw == "") {
		alert("Enter your password!");
		document.frm.user_pw.focus();
		return;
	}

	$.ajax({
		type: "POST",
		url: action,
		data: form_data,
		success: function(response) {
			if(response == 'fail') {
				alert("Please check your ID and Password!");
				document.frm.user_pw.value = "";
				document.frm.user_pw.focus();
			} else {
				document.getElementById("frm").action = "BB_010L.php";
				document.getElementById("frm").submit();
			}
		}
	});
}
function goLogout(obj) {
	if( obj == 's' ) {
		window.document.location.href = "../logout.php";
	}
}
/*
 * Go to the Student Record System.
 */
function goSRS(obj) {
	alert('교내에서만 사용 가능합니다.');
	window.open("http://192.168.137.50/", "target=_blank, status=yes");
}

/*
 * Session Registration
 * Multi Language
 */
function funMultiLanguage(obj, oDiv) {
	var oPath = "";
	if( oDiv == 's' || oDiv == 'L' ) {
		oPath = "../layout/com_session.php";
	} else {
		oPath = "layout/com_session.php";
	}
	var form_data = {
		lang_flg : obj
	}
	$.ajax({
		type: "POST",
		url: oPath,
		data: form_data,
		async: false,
		cache: false,
		success: function (response) {
			setLanguage(response);
		}
	});
}

/*
 * download a file.
 */
function goDownload(obj) {
	if( obj == 1 ) {
		$('#downloadLink').prop('href', '../download/MHA_k.hwp'); 
		$('#downloadLink').prop('download', 'MHA_K.hwp');
		$('#downloadLink')[0].click();
	} else if( obj == 2 ) {
		$('#downloadLink').prop('href', '../download/MHA_e.hwp'); 
		$('#downloadLink').prop('download', 'MHA_E.hwp');
		$('#downloadLink')[0].click();
	} else if( obj == 3 ) {
		$('#downloadLink').prop('href', '../download/MHA_m.hwp'); 
		$('#downloadLink').prop('download', 'MHA_M.hwp');
		$('#downloadLink')[0].click();
	} else if( obj == 4 ) { //FK_020.php
		$('#downloadLink').prop('href', '../download/APPLICATION.hwp'); 
		$('#downloadLink').prop('download', 'APPLICATION.hwp');
		$('#downloadLink')[0].click();
	}
}

/*
 * Admin screen 
 * 1. file name, 2. Order, 3. page parameter
 */
function goBoradPage(oPage, oOrder, inParm) {
	var oPath = oPage+"?page="+inParm;
	$.ajax({
		success: function(){
			$(location).attr('href', oPath); // You URL inserted
		}
	});
}
/*
 * 수정 또는 삭제를 위한 처리
 * 1. file name, 2. Order, 3. page parameter
 */
function goBoradDetail(oPage, oOrder, inParm) {
	var oPath = oPage+"&page="+inParm+"&oo=99";
	$.ajax({
		success: function(){
			$(location).attr('href', oPath); // You URL inserted
		}
	});
}
/*
 * Board 작성
 */
function goWrite(obj) {
	if( obj == 1 ) {
		goPage('adm', 'BB_010W.php', '', 's');
	} else if(  obj == 2 ) {
		goPage('adm', 'BB_020W.php', '', 's');
	} else if(  obj == 3 ) {
		goPage('adm', 'BB_030W.php', '', 's');
	}
}
/*
 * Board : 10:Create, 11:Update, 12:Delete
 */
function goBoardEvent(oSpt, obj) {
	var oPath = "";
	if( oSpt == 2 ) {
		oPath = "BB_020C.php";
	} else if( oSpt == 1 ) {
		oPath = "BB_010C.php";
	} else if( oSpt == 3 ) {
		oPath = "BB_030C.php";
	}
	
	var oType = "";
	if( obj == 10 ) {
		oType = 'C';
	} else if( obj == 11 ) {
		oType = 'U';
	} else if( obj == 12 ) {
		oType = 'D';
	}
	var form_data = {
		bb_title : $("#bb_title").val(),
		bb_message : $("#bb_message").val(),
		bb_wrt_nm : $("#bb_wrt_nm").val(),
		bb_no : $("#bb_no").val(),
		crd_type : oType
	}
	$.ajax({
		type: "POST",
		url: oPath,
		data: form_data,
		async: false,
		cache: false,
		success: function (response) {
			alert(response);
		}
	});
}


function view_layer(obj) {
	if(document.getElementById(obj).style.display != ""){
		document.getElementById(obj).style.display = '';
	} else {
		document.getElementById(obj).style.display = 'none';
	}
}

/** Creation 현재 사용중인 곳이 없음.
 * @param cookieName
 */
function writeCookie(name, value) {
	var date = new Date(); // 오늘 날짜
	var validity = 1;
	date.setDate(date.getDate() + validity);
	document.cookie = name + '=' + value + ';expires=' + date.toGMTString();
	setLanguage(value);
}

/*
 * get the value from cookies.
 */
function readCookie() {
	var cookies = document.cookie;
	var startIndex = cookies.indexOf("hm_lang") + 8;
	var obj = cookies.substring(startIndex, startIndex+2);
	return obj;
}

