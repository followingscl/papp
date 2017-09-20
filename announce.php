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
			<div class="title">发布</div>
			<!-- <a class="back pull-right" style="">
				<i class="glyphicon glyphicon-remove-sign"></i>
			</a> -->
			</div>
  </div>
  <div id="main-container" clss="main-container" style="padding-top: 50px;">
			  <div class="stmm">
			  <form role="form">
			    <table class="table">
			      <tr>
			        <td style="font-size: 15px;text-align: center;">发表主题</td>
			        <td style="text-align: center;"><button style="background-color: rgb(107,130,250); color: rgb(255,255,255); border: 2px solid #f5f5f5;">发表</button></td>
			      </tr>
			    </table>
			    <div id="input" style="padding-left: 10px; margin-right: 10px;">
			    <input type="text" class="form-control" id="theme" placeholder="请输入主题">
			    <textarea class="form-control" rows="20" placeholder="请输入内容" style="resize: none; margin-top: 20px;"></textarea>
			    </div>
			    </form>
			  </div>
	</div>
  
</body>
</html>