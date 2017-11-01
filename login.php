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
	</head>
	<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-container" id="navbar-container">
				<div class="title">互联网安全管理平台登录</div>
		</div>
  </div>
  <div id="wrapper" style="bottom: 0">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
		  		<div>
							<div style="margin-top: 32px;">
								<div class="widget-main">
									<form id="form1">
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input id="email" type="text" placeholder="请输入用户名" class="form-control">
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>
											<div class="space-14"></div>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input id="password" type="password" placeholder="请输入密码" class="form-control">
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>
											<div class="space-14"></div>
											<div class="clearfix">
												<button type="button" id="login" class="col-xs-12 pull-right btn btn-sm btn-primary" style="font-size: 16px">
													<i class="icon-key"></i>登录</button>
											</div>
											<div class="space-4"></div>
										</fieldset>
									</form>
									<div class="space-6"></div>
								</div>
							</div>
						</div>
		  </div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery.2.1.1.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#login').on('click',function(event) {
				$.ajax({
					url: 'http://223.68.10.47:8888/admin/login'//,
					// type: 'default GET (Other values: POST)',

					// dataType: 'json'//,
					
				})
				.done(function(res) {
					console.log("success");
					// console.log(res)
					console.log(document.cookie)
					var token = res.match(/name=\"_token\"\svalue=\"(.+)\"/)[1]	
					$.ajax({
						url: 'http://223.68.10.47:8888/admin/login',
						type: 'post',
						dataType: 'text',
						data: {
							email: $('#email').val(),
							password: $('#password').val(),
							_token: token
						},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
				})
				.fail(function(res) {
					console.log("error");
					console.log(res)

				})
			});
			
			
		});
	</script>
</body>
</html>