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
				<div class="title">发布</div>
			</div>
  </div>
  <div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 50px;">
			  <div class="stmm">
			  <form class="form">
			    <div style="padding-left: 20px; padding-right: 20px;margin-top: 20px;">
             	  <label class="inline">发表主题</label>
             	  <label class="pull-right"><button onclick="#" style="background-color: rgb(107,130,250);border:1px solid grey;">发表</button></label>
                 </div> 
			    <div id="input" style="padding-left: 10px; margin-right: 10px; margin-top: 20px;">
			    <input type="text" class="form-control" id="theme" placeholder="请输入主题">
			    <textarea class="form-control" rows="20" placeholder="请输入内容" style="resize: none; margin-top: 20px;"></textarea>
			    </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
  <?php 
		include 'template/footer.php'
	?>
</body>
</html>