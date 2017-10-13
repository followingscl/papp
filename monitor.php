<?php include 'template/header.php' ?>
			<a class="back">
				<img src="assets/img/back.png" alt="" style="width: 1rem">
			</a>
			<script type="text/javascript">
					var ass = document.getElementsByTagName('a');
					for(var i = 0;i < ass.length;i ++){
						if(ass[i].getAttribute('class') == 'back'){
							var hammertime = new Hammer(ass[i]);
		          hammertime.on("tap", function (ev) {
		              	// window.history.go(-1);
		              	window.location = 'index.php'
		          });
						} else if (ass[i].getAttribute('class') == 'edit') {
							var hammertime = new Hammer(ass[i]);
		          hammertime.on("tap", function (ev) {
              	window.location = 'announce.php'
		          });
						}
					}
				</script>
			<div class="title">视频监控</div>
			</div>
  </div>

 	<div id="wrapper">
		<div id="scroller">
		 	<div class="main-container">
		 	<div class="row">
			  <div class="col-xs-3">
			    <img src="">
			  </div>
			  <div class="col-xs-6">
			    <p style="margin-top: 5%;">宿城果园手机卖场</p>
			    <p class="glyphicon glyphicon-user" style="color: rgb(156, 209, 247);">(在线)</p>
			  </div>
			  <div class="col-xs-3">
			   <p class="glyphicon glyphicon-lock" style="color: rgb(68,68,68); margin-top: 25%;"></p>
			  </div>
			</div>
			<div class="row">
			  <div class="col-xs-3">
			    <img src="">
			  </div>
			  <div class="col-xs-6">
			    <p style="margin-top: 5%;">宿城区南海路旗舰店</p>
			    <p class="glyphicon glyphicon-user" style="color: rgb(156, 209, 247);">(在线)</p>
			  </div>
			  <div class="col-xs-3">
			   <p class="glyphicon glyphicon-lock" style="color: rgb(68,68,68); margin-top: 25%;"></p>
			  </div>
		    </div>
		    <div class="row">
			  <div class="col-xs-3">
			    <img src="">
			  </div>
			  <div class="col-xs-6">
			    <p style="margin-top: 5%;">宿城黄运路手机卖场</p>
			    <p class="glyphicon glyphicon-user" style="color: rgb(156, 209, 247);">(在线)</p>
			  </div>
			  <div class="col-xs-3">
			   <p class="glyphicon glyphicon-plus" style="color: rgb(139,195,74); margin-top: 25%;"></p>
			  </div>
			</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		.more{
			color: #6cc4f1 !important;
		}
	</style>
	<?php 
		include 'template/footer.php'
	?>
</body>
</html>