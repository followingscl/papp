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
			<div class="title">打分检查</div>
			</div>
  </div>
	
	<div id="wrapper" class="grade">
		<div id="scroller">
		 	<div class="main-container">
		 		<div class="row">
					<div class="col-sm-12">
						<div class="tabbable">
							<ul class="nav nav-tabs" id="myTab">
								<li class="active">
									<a class="notap" data-toggle="tab" href="#building">
										<!-- <i class="green ace-icon fa fa-home bigger-120"></i> -->
										综合楼
									</a>
								</li>

								<li>
									<a class="notap" data-toggle="tab" href="#business">
										营业厅
									</a>
								</li>

								<li>
									<a class="notap" data-toggle="tab" href="#base">
										通信基站
									</a>
								</li>

								<li>
									<a class="notap" data-toggle="tab" href="#project">
										工程建设
									</a>
								</li>
							</ul>

							<div class="tab-content">
								<div id="building" class="tab-pane fade in active">
									<div class="row">
										<div class="col-xs-12">
											<table class="table table-hover">
												<div class="col-sm-6 col-xs-6" style="padding-left: 0;">
															<!-- <label for="form-field-select-1"></label> -->
															<select class="form-control" id="form-field-select-1">
																<option value="">受检公司</option>
																<option value="AL">1</option>
																<option value="AK">1</option>
																<option value="AZ">1</option>
															</select>
															</div>
															<div class="col-sm-6 col-xs-6" style="padding-left: 0;">
															<select class="form-control" id="form-field-select-1">
																<option value="">楼宇名称</option>
																<option value="AL">1</option>
																<option value="AK">1</option>
																<option value="AZ">1</option>
															</select>
													</div>
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

								<div id="business" class="tab-pane fade">
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

								<div id="base" class="tab-pane fade">
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

								<div id="project" class="tab-pane fade">
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

</body>
</html>