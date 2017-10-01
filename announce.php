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
			  <form role="form">
			    <table class="table">
			      <tr>
			        <td style="font-size: 15px;text-align: center;">发表主题</td>
			        <td style="text-align: center;"><button style="background-color: rgb(107,130,250); color: rgb(255,255,255); border: 2px solid #f5f5f5;">发表</button></td>
			      </tr>
			    </table>
			    <div id="input" style="padding-left: 10px; margin-right: 10px;">
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