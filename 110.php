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
			<div class="title">110</div>
			</div>
  </div>
	
	<div id="wrapper">
		<div id="scroller">
		 	<div class="main-container">
		 	   <div class="divtable">
		 	    <table class="table">
		 	    	<tr>
		 	    	  <td>单位:</td>
		 	    	  <td>宿城果园手机卖场</td>
		 	    	  <td>2017.08.10</td>
		 	    	  <td>09:37</td>
		 	    	</tr>
		 	    	<tr>
		 	    	  <td>类型:</td>
		 	    	  <td>消防安全</td>
		 	    	</tr>
		 	    </table>
		 	   </div>
		 	</div>
		</div>
	</div>


  <?php 
		include 'template/footer.php'
	?>
</body>
</html>