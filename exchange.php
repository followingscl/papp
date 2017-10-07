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
		              	window.history.go(-1);
		          });
						}
					}
				</script>
				<a class="edit" style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative;">
				  <img src="assets/img/edit.png" style="width: 2rem;vertical-align: middle;">
				</a>
			<div class="title">经验交流</div>
		</div>
  </div>
  <div id="wrapper" style="background-color: #fff;">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
		    <div>
				<h5 style="margin: 5px;">如何让营业员快速掌握“三要两会”口号</h4>
				<time  style="float:right;margin: 5px;">2017/8/6</time><br>
				<div style="margin:10px;">
					<button style="background-color: #fff; color: rgb(156,209,247); border-style:none;height: 28px;width:63px;text-align:center;margin:5px 40px;float: left;">回复<img src="assets/img/reply.png" style="height: 25px;width: 25px;"></button>
					<button style="background-color: rgb(156,209,247); color: #fff; border: 1px solid #e0e0e0; border-radius:4px;height: 28px;width:63px;text-align:center;margin:5px 40px;float:right;">分享<img src="assets/img/share.png" style="height: 20px;width: 20px;"></button>
				</div>
		    </div>
		  </div>
		</div>
	</div>
  <?php 
		include 'template/footer.php'
	?>
</body>
</html>