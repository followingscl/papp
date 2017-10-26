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
												<div class="col-sm-6 col-xs-6" style="padding-left: 0;">
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
												<table class="table table-hover">
													<thead>
														<tr>
															<td >检查内容及标准</td>
															<td style="width: 80px">检查情况</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1.是否24小时双人值守，并具有上岗资质，值守人员是否熟练掌握自动报警自动灭火等消防设施操作、掌握突发情况下应急处理措施和流程
															</td>
															<td class="center">
																<label class="pos-rel">
																	<input type="checkbox" class="ace" />
																	<span class="lbl"></span>
																</label>
															</td>
														</tr>
														<tr>
															<td>
																1.是否24小时双人值守，并具有上岗资质，值守人员是否熟练掌握自动报警自动灭火等消防设施操作、掌握突发情况下应急处理措施和流程
															</td>
															<td class="center">
																<label class="pos-rel">
																	<input type="checkbox" class="ace" />
																	<span class="lbl"></span>
																</label>
															</td>
														</tr>
														<tr>
															<td>
																1.是否24小时双人值守，并具有上岗资质，值守人员是否熟练掌握自动报警自动灭火等消防设施操作、掌握突发情况下应急处理措施和流程
															</td>
															<td class="center">
																<label class="pos-rel">
																	<input type="checkbox" class="ace" />
																	<span class="lbl"></span>
																</label>
															</td>
														</tr>
													</tbody>
												</table>
										</div><!-- /.span -->
									</div>
										<form class="form-horizontal" role="form" >
											<div class="form-group">
											<label class="col-xs-3 control-label no-padding-right" for="form-field-6">备注</label>
												<div class="col-xs-9">
												<textarea class="form-control" name="" id=""></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-3 control-label no-padding-top">星级评定</label>

												<div class="col-xs-9">
													<div class="rating inline"></div>
													<div class="hr hr-16 hr-dotted"></div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-3 control-label no-padding-right" for="form-field-6">检查人员</label>
												<div class="col-xs-9">
													<input class="form-control" data-rel="tooltip" type="text" id="form-field-6" placeholder="检查人员" title="Hello Tooltip!" data-placement="bottom" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-3 control-label no-padding-right" for="form-field-6">受检人</label>
												<div class="col-xs-9">
													<input class="form-control" data-rel="tooltip" type="text" id="form-field-6" placeholder="受检人" title="Hello Tooltip!" data-placement="bottom" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-3 control-label no-padding-right" for="form-field-6">月日</label>
												<div class="col-xs-9">
													<input class="form-control" data-rel="tooltip" type="text" id="form-field-6" placeholder="月日" title="Hello Tooltip!" data-placement="bottom" />
												</div>
											</div>
										</form>
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
		<script src="assets/js/jquery.raty.min.js"></script>
		
		<script type="text/javascript">
		jQuery(function($){
			// window.addEventListener('touchmove', func, { passive: false })
			$('.rating').raty({
				'cancel' : true,
				'half': true,
				'starType' : 'i',
				
				'click': function() {
					console.log('s')
					// setRatingColors.call(this);
				},
				'mouseover': function() {
					// setRatingColors.call(this);
				},
				'mouseout': function() {
					// setRatingColors.call(this);
				}
			})
			
		})
		
		</script>
</body>
</html>