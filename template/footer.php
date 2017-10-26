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
	<!-- <script type="text/javascript" src="assets/js/jquery.1.11.1.min.js"></script> -->
	<script type="text/javascript" src="assets/js/jquery.2.1.1.min.js"></script>

	<script src="assets/js/jquery.hammer.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$('.main-container, body, #srcoller, #wrapper').on('tap click pan', function() {
					// console.log($('.form-control:focus'))
					alert('refre')
					$('.form-control:focus')?$('.form-control:focus').blur():''
				})
				$('.form-control').on('tap click pan', function(e) {
					e.stopPropagation()
				})
				$('#wrapper a').not('.notap').hammer().on("tap pan",function(){
						window.location = $(this).attr('href');
				});
				$('.notap').hammer().on("tap pan",function(){
						$(this).click();
				});
			});
		</script>
