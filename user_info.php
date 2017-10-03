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
				<a style="float: right;
				padding-top: 3%;padding-right: 3%;position: relative; color: #ffffff;font-size: 18px;">
				 保存
				</a>
			<div class="title">个人信息</div>
		</div>
  </div>
  <div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;">
		   
           <ul class="list-group">
             <li class="list-group-item" onclick="javascript:window.location.href='alterphoto.php'">
             	<label class="inline"><img src=""></label>
             	<label class="pull-right" style="vertical-align: middle;">修改头像</label>
             </li>
             <li class="list-group-item">
                <label class="inline">昵称</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item">
             	<label class="inline">职位</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item">
               <label class="inline">隶属</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item">
             	<label class="inline">单位</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item">
              <label class="inline">联系方式</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item" onclick="javascript:window.location.href='alterpassword.php'">
              <label class="inline">修改密码</label>
             	<label class="pull-right"><img src="./assets/img/to.png" style="width:20px;height: 20px;"></label>
             </li>
             <li class="list-group-item">
              <label class="inline">版本更新</label>
             	<label class="pull-right"></label>
             </li>
             <li class="list-group-item" onclick="javascript:window.location.href='aboutus.php'">
              <label class="inline">关于我们</label>
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