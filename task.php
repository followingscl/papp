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
			<div class="title">任务中心</div>
			</div>
  </div>
	
	<div id="wrapper" class="task">
		<div id="scroller">
		 	<div class="main-container">
		 		<!-- <div class="page-content"> -->
		 			
		 			<div class="row">
						<div class="col-xs-12">
							<ul class="list-unstyled spaced">
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>
								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>

								<li>
									<h4>宿城果园手机卖场检查
									<i class="ace-icon fa fa-angle-right pull-right"></i>
									</h4>
									<p>2017年7月15日</p>
								</li>

							
							</ul>
						</div>
					</div>
					
				<!-- </div> -->
		 	</div>
		</div>
	</div>


  <?php 
		include 'template/footer.php'
	?>
	<script type="text/javascript">
	$(function() {
		// $('.edit').on('tap', function() {
		// 	alert('rfe')
		// })
		$('.edit').ontap = function () {
			alert('rtgt')
		}
	})
	</script>
</body>
</html>