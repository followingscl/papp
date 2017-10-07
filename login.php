<?php include 'template/header.php' ?>
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
			<div class="title">互联网安全管理平台</div>
		</div>
  </div>
  <div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
		  
		  </div>
		</div>
	</div>
</body>
</html>