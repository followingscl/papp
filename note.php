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
			<div class="title">工作笔记</div>
			</div>
  </div>
	
	<div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="margin-top: 40px;">
		  
		  <table class="table">
		    <tr>
		      <td style="border: 0;">沐阳公司8月5日工作笔记</td>
		      <td style="text-align: right; border: 0;">2017.8.6</td>
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