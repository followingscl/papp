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
								<span class="test"></span>
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
												<table class="table table-hover" style="margin-top: 40px;">
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
																	<input type="checkbox" style="width: 1em;" />
																</label>
															</td>
														</tr>
														<tr>
															<td>
																1.是否24小时双人值守，并具有上岗资质，值守人员是否熟练掌握自动报警自动灭火等消防设施操作、掌握突发情况下应急处理措施和流程
															</td>
															<td class="center">
																<label class="pos-rel">
																	<input type="checkbox" style="width: 1em;" />
																</label>
															</td>
														</tr>
														<tr>
															<td>
																1.是否24小时双人值守，并具有上岗资质，值守人员是否熟练掌握自动报警自动灭火等消防设施操作、掌握突发情况下应急处理措施和流程
															</td>
															<td class="center">
																<label class="pos-rel">
																	<input type="checkbox" style="width: 1em;" />
																</label>
															</td>
														</tr>
													</tbody>
												</table>
										</div><!-- /.span -->
									</div>
									<!-- <div class="row"></div> -->
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
												<input class="form-control person" data-rel="tooltip" type="text" id="form-field-6" placeholder="受检人" title="Hello Tooltip!" data-placement="bottom" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label no-padding-right" for="form-field-6">月日</label>
											<div class="col-xs-9">
												<input class="form-control" data-rel="tooltip" type="text" id="form-field-6" placeholder="月日" title="Hello Tooltip!" data-placement="bottom" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label no-padding-right" for="form-field-6"></label>
											<div class="col-xs-9">
												<button class="btn btn-info">提交</button>
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
					<div style="height: 20px"></div>
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
			$.ajax({
				url: '/path/to/file',
				type: 'default GET (Other values: POST)',
				dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {param1: 'value1'},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			$('.rating').raty({
				'cancel' : true,
				'starType' : 'i'
			})
			$('#building table input').on('click', function() {
				var l = $('#building table input').length - $('#building table input:checked').length;
				var star = $('#building .rating i');

				if(l == 0) {
					$(star)[5].click()
				} else if (1<= l && l <= 3) {
					$(star)[4].click()
				} else if (4<= l && l <= 8) {
					$(star)[3].click()
				}	else if (9<= l && l <= 14) {
					$(star)[2].click()
				}else if (15<= l) {
					$(star)[1].click()
				}
			})
			
		})
		
		</script>
</body>
</html>