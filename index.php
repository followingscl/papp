<?php include 'template/header.php' ?>
		<a class="back" href="user_info.php">
			<i class="glyphicon glyphicon-user"></i>
		</a>
		<div class="title">互联网安全平台</div>
		</div>
	</div>

	<div id="wrapper">
		<div id="scroller">

			<div class="main-container index" style="padding-top: 0;background: #F4F4F4;">
				<div class="main-container-inner">
					<div id="allmap" style="height: 220px;"></div>
		    </div>

		    <div class="row text-center tasks" style="">
					<div class="col-sm-4 col-xs-4">
						<a href="task.php">
							<i class="ace-icon fa fa-list green"></i>
							<!-- <img src="assets/img/email.png" alt=""> -->
							
							<span>任务中心</span>
						</a>
					</div>
					<div class="col-sm-4 col-xs-4">
						<a href="send.php">
							<i class="ace-icon fa fa-envelope-o orange"></i>
							<!-- <img src="assets/img/email.png" alt=""> -->
							
							<span>消息发布</span>
						</a>
					</div>
					<div class="col-sm-4 col-xs-4">
						<a href="warning.php">
							<i class="ace-icon fa fa-exclamation-circle red"></i>
							<!-- <img src="assets/img/email.png" alt=""> -->
							
							<span>预警</span>
						</a>
					</div>
				</div>
				
				<div class="row" style="padding: 23px 0;background: #fff;border-top: 1px solid #cdcdcd;">
					<div class="col-xs-6 text-center syinner">
						<a href="virtual.php">
							<div class="index_icon" style="background: #3E9EE0">
								<i class="ace-icon fa fa-book white" style="font-size: 2em"></i>
							</div>
						</a>
						<!-- <img src="assets/img/2.png" alt=""> -->
						<div class="icon-text">可视化</div>
					</div>
					<div class="col-xs-6 text-center syinner">
						<a href="grade.php">
							<div class="index_icon" style="background: #F67C3C">
								<i class="ace-icon fa fa-star white" style="font-size: 2em"></i>
							</div>
						</a>
						<!-- <img src="assets/img/2.png" alt=""> -->
						<div class="icon-text">打分检查</div>
					</div>
				</div>
				<div class="row" style="padding-bottom: 23px;background: #fff;border-bottom: 1px solid #cdcdcd;">
					<div class="col-xs-6 text-center syinner">
						<a href="progress.php">
							<div class="index_icon" style="background: #F36464">
								<i class="ace-icon fa fa-calendar white" style="font-size: 2em"></i>
							</div>
						</a>
						<!-- <img src="assets/img/2.png" alt=""> -->
						<div class="icon-text">整改进度</div>
					</div>
					<div class="col-xs-6 text-center syinner">
						<a href="notin.php">
							<div class="index_icon" style="background: #16C3BC">
								<i class="ace-icon fa fa-desktop white" style="font-size: 2em"></i>
							</div>
						</a>
						<!-- <img src="assets/img/2.png" alt=""> -->
						<div class="icon-text">曝光台</div>
					</div>
				</div>
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