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
				<a class="edit" style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative;">
				  <img src="assets/img/edit.png" style="width: 2rem;vertical-align: middle;">
				</a>
			<div class="title">经验交流</div>
		</div>
  </div>
  <div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
		    <table class="table">
		      <tr>
		      	<td style="border: 0;">如何让营业员快速掌握"三要两会"口号</td>
		      	<td style="border: 0;"></td>
		      </tr>
		      <tr>
		      	<td style="border: 0;"></td>
		      	<td style="text-align: right;border: none;">2017.8.6</td>
		      </tr>
		      <tr>
		      	<td style="border: 0; padding-left: 50px;"><a style="text-decoration: none; color: rgb(156,209,247);">回复</a><button style="background-color: rgb(156,209,247); color: rgb(255,255,255); border: 1px solid #e0e0e0; float: right;">分享</button></td>
		      	<td style="border: 0;"></td>
		      </tr>
		    </table>
		  </div>
		</div>
	</div>
  <?php 
		include 'template/footer.php'
	?>
</body>
</html>