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
				<div class="title">互联网安全平台</div>
			</div>
		</div>
	<div class="main-container">
			<div class="row" style="margin: 0">
				<div class="col-sm-10 col-sm-offset-1">
					<div style="margin-top: 70px;" class="login-container">
						<div class="center">
							<span class="red"></span>
						</div>
						<div class="space-7"></div>
						<div>
							<div style="margin-top: 32px;">
								<div class="widget-main">
									<form id="form1">
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" placeholder="请输入用户名" class="form-control">
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>
											<div class="space-14"></div>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" placeholder="请输入密码" class="form-control">
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>
											<div class="clearfix">
												<label for="">
													验证码
												</label>
											</div>
											<div class="clearfix">
												<button type="button" class="col-xs-12 pull-right btn btn-sm btn-primary" style="font-size: 16px">
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
		</div>
</body>
</html>