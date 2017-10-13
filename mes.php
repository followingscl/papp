<?php include 'template/header.php' ?>
			<a class="back">
				<img src="assets/img/back.png" alt="" style="width: 1rem">
			</a>
			<a class="edit" style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative;">
				  <img src="assets/img/edit.png" style="width: 2rem;vertical-align: middle;">
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
				
			<div class="title">消息发布</div>
			</div>
  </div>
	
	<div id="wrapper" class="mes">
		<div id="scroller">
		 	<div class="main-container">
		 		<div class="row">
					<div class="col-xs-12">
						<ul class="list-unstyled spaced">
							<li>
								<p>某手机卖场公司上旬检查出，可隐患仍未修改，请在8月15日前完成整改</p>
								<span class="pull-right">2017.08.13</span>
							</li>
							<li>
								<p>某手机卖场公司上旬检查出，可隐患仍未修改，请在8月15日前完成整改某手机卖场公司上旬检查出，可隐患仍未修改，请在8月15日前完成整改</p>
								<span class="pull-right">2017.08.13</span>
							</li>
							
						</ul>
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