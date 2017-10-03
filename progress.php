<?php include 'template/header.php' ?>
			<a class="back">
				<img src="assets/img/back.png" alt="" style="width: 1rem">
			</a>
			<script type="text/javascript">
					var ass = document.getElementsByTagName('a');
					for(var i = 0;i < ass.length;i ++){
						if(ass[i].getAttribute('class') == 'back'){
							var hammertime = new Hammer(ass[i]);
		          hammertime.on("tap pan", function (ev) {
		              	window.history.go(-1);
		          });
						}
					}
				</script>
				<a class="edit" style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative;">
				  <img src="assets/img/edit.png" style="width: 2rem;vertical-align: middle;">
				</a>
			<div class="title">整改进度</div>
			</div>
  </div>
	
	<div id="wrapper" class="pro">
		<div id="scroller">
		 	<div class="main-container">
		 		<div class="row">
					<div class="col-sm-12">
						<div class="tabbable">
							<ul class="nav nav-tabs" id="myTab">
								<li class="active">
									<a class="notap" data-toggle="tab" href="#home">
										<!-- <i class="green ace-icon fa fa-home bigger-120"></i> -->
										未完成
									</a>
								</li>

								<li>
									<a class="notap" data-toggle="tab" href="#messages">
										已完成
									</a>
								</li>
							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<div class="row">
										<div class="col-xs-12">
											<table class="table table-hover">
											<!-- 	<thead>
													<tr>
														<th>受检公司</th>
														<th>名称</th>
													</tr>
												</thead> -->
												<tbody>
													<tr>
														<td>
															<a href="#">沐阳公司</a>
														</td>
														<td>移动基站</td>
													</tr>
													<tr>
														<td>
															<a href="#">宿城手机卖场</a>
														</td>
														<td>移动基站</td>
													</tr>
													<tr>
														<td>
															<a href="#">宿城海南路普通店</a>
														</td>
														<td>移动基站</td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.span -->
									</div>
								</div>

								<div id="messages" class="tab-pane fade">
									<div class="row">
										<div class="col-xs-12">
											<table class="table table-hover">
											<!-- 	<thead>
													<tr>
														<th>受检公司</th>
														<th>名称</th>
													</tr>
												</thead> -->
												<tbody>
													<tr>
														<td>
															<a href="#">沐阳公司</a>
														</td>
														<td>移动基站</td>
													</tr>
													<tr>
														<td>
															<a href="#">宿城手机卖场</a>
														</td>
														<td>移动基站</td>
													</tr>
													<tr>
														<td>
															<a href="#">宿城海南路普通店</a>
														</td>
														<td>移动基站</td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.span -->
									</div>
								</div>

							</div>
						</div>
					</div><!-- /.col -->

				</div>
		 	</div>
		</div>
	</div>


  <?php 
		include 'template/footer.php'
	?>
		<script src="assets/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		
	</script>
</body>
</html>