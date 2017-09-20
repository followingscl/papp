<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title>互联网安全平台</title>
		<link rel="stylesheet" href="assets/css/other.css">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/ace.min.css" />
</head>
<body>
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
			<div class="title">互联网安全平台</div>
			<!-- <a class="back pull-right" style="">
				<i class="glyphicon glyphicon-remove-sign"></i>
			</a> -->
			</div>
  </div>
  <div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<ul>
						<li class="light-red">
							<a href="index.php" class="shouye">
								<i class="glyphicon glyphicon-home"></i>
								<div>工作笔记</div>
							</a>
						</li>
						<li class="grey">
							<a href="leave.php" class="weianqi">
								<i class="glyphicon glyphicon-time"></i>
								<div>经验交流</div>
							</a>
						</li>
						<li class="grey">
							<a href="query.php" class="chaxun">
								<i class="glyphicon glyphicon-search"></i>
								<div>110</div>
							</a>
						</li>
						<li class="light-blue">
							<a href="more.php" class="more">
								<i class="glyphicon glyphicon-user"></i>
								<div>视频监控</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
</body>
</html>