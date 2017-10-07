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
			<div class="title">可视化</div>
			</div>
  </div>
	
	<div id="wrapper">
		<div id="scroller">
		   <div class="main-container">
		     <ul class="list-group">
		       <li class="list-group-item" onclick="javascript:window.location.href='csoft.php'">
               综合楼安全
		       </li>
		       <li class="list-group-item" onclick="javascript:window.location.href='ssoft.php'">
		       营业厅安全
		       </li>
		       <li class="list-group-item" onclick="javascript:window.location.href='esoft.php'">
		       通信基站安全
		       </li>
		       <li class="list-group-item" onclick="javascript:window.location.href='psoft.php'">
		       工程建设安全
		       </li>
		     </ul>
		   </div>
		</div>
	</div>


  <?php 
		include 'template/footer.php'
	?>
</body>
</html>