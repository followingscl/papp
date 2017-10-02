	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<ul>
					<li class="light-red">
						<a href="note.php" class="shouye">
							<i class="ace-icon fa fa-bookmark"></i> <!-- fa-pencil-square-o -->
							<div>工作笔记</div>
						</a>
					</li>
					<li class="grey">
						<a href="exchange.php" class="weianqi">
							<i class="ace-icon fa fa-comments"></i>
							<div>经验交流</div>
						</a>
					</li>
					<li class="grey">
						<a href="110.php" class="chaxun">
							<i class="ace-icon fa fa-car"></i>
							<div>110</div>
						</a>
					</li>
					<li class="light-blue">
						<a href="monitor.php" class="more">
							<i class="ace-icon fa fa-camera-retro"></i>
							<div>视频监控</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery.1.11.1.min.js"></script>
	<script src="assets/js/jquery.hammer.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$('#wrapper a').not('.notap').hammer().on("tap pan",function(){
					// alert('d');
					// if ($(this).attr('href') && $(this).attr('href') != '#') {
						window.location = $(this).attr('href');
					// } else {
						// $(this).click()
					// }
							
					// window.location = $(this).attr('href')
				});
			});
		</script>