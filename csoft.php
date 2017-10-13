<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title>互联网安全平台</title>

	<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/other.css">
	<link rel="stylesheet" href="assets/css/t.css">
	<link rel="stylesheet" href="assets/css/loading.css">
	<link rel="stylesheet" href="assets/css/try.css">
	
	<script type="text/javascript" src="assets/js/iscroll.js"></script>
	<script type="text/javascript" src="assets/js/hammer.min.js"></script>
	<script type="text/javascript">
		var myScroll;
		function loaded () {
			myScroll = new IScroll('#wrapper', { mouseWheel: true });
			$('#loader-wrapper .load_title').remove();
				$('.main-container').css('opacity','1');

		}
		document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	</script>
	<style type="text/css">
		html,body,#wrapper,.main-container,.main-container-inner,#allmap{
			height: 100%;
		}
	</style>
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
      <a class="back">
        <img src="assets/img/back.png" alt="" style="width: 1rem">
      </a>
      <script type="text/javascript">
          var ass = document.getElementsByTagName('a');
          for(var i = 0;i < ass.length;i ++){
            if(ass[i].getAttribute('class') == 'back'){
              var hammertime = new Hammer(ass[i]);
              hammertime.on("tap", function (ev) {
                    window.history.go(-1);
              });
            }
          }
        </script>
		<div class="title">综合楼安全</div>
		</div>
	</div>

	<div id="wrapper">
			<div class="main-container index" style="padding-top: 0;background: #F4F4F4;">
				<div class="main-container-inner">
					<div id="allmap"></div>
		    	</div>
			</div>
	</div>

	<?php 
		include 'template/footer.php'
	?>
	<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=piXQ5CgHFqEefqCVbhhBFfe6HjF7l4zW"></script>
	<script type="text/javascript">
		var map = new BMap.Map("allmap");    // 创建Map实例
		map.centerAndZoom(new BMap.Point(118.27549, 33.96193), 11);  // 初始化地图,设置中心点坐标和地图级别
		map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
		map.setCurrentCity("江苏省");          // 设置地图显示的城市 此项是必须设置的
		map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	</script>

</body>
</html>