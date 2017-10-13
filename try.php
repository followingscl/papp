<?php include 'template/header.php' ?>
			<a class="back">
				<img src="assets/img/back.png" alt="" style="width: 1rem">
			</a>
				<a class="edit" style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative;">
				  <img src="assets/img/edit.png" style="width: 2rem;vertical-align: middle;">
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
			<div class="title">曝光台</div>
		</div>
  </div>
  <div id="wrapper" style="background-color: #fff;">
		<div id="scroller">
			<div id="main-container" clss="main-container" style="padding-top: 50px;">
				<ul id="try-ul">
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
				    </li>
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
				    </li>
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
				    </li>
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
				    </li>
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
				    </li>
				    <li id="try-list">
				    	<a href="notin.php"><mark id="try-mark">沐阳分公司某家营业厅大额现金未入柜</mark> <span id="try-span"><img src="assets/img/right.png"></span><time id="try-time">2017/8/8</time></a>
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