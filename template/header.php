<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="Pragma" content="no-cache">
	<title>互联网安全平台</title>

	<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/other.css">
	<link rel="stylesheet" href="assets/css/loading.css">
	<link rel="stylesheet" href="assets/css/try.css">
	
	<script type="text/javascript" src="assets/js/iscroll.js"></script>
	<script type="text/javascript" src="assets/js/hammer.min.js"></script>

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<script type="text/javascript">
		var myScroll;
		function loaded () {
			myScroll = new IScroll('#wrapper', { mouseWheel: true });
			$('#loader-wrapper .load_title').remove();
			$('.main-container').css('opacity','1');

		}
		document.addEventListener('touchmove', function (e) { e.preventDefault(); }, { passive: false });
		
		// window.addEventListener('touchmove', func, )
	</script>

</head>
<body class="no-skin" onload="loaded()">
	<div id="loader-wrapper">
	    <div class="load_title">
				<div class="spinner">
				  <div class="rect1"></div>
				  <div class="rect2"></div>
				  <div class="rect3"></div>
				  <div class="rect4"></div>
				  <div class="rect5"></div>
				</div>
				<!-- 加载中... -->
	    </div>
		</div>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-container" id="navbar-container">