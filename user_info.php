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
				padding-top: 3%;padding-right: 3%;position: relative; color: #ffffff; font-size: 18px;">
				  保存
				</a>
			<div class="title">个人信息</div>
		</div>
  </div>
  <div id="wrapper">
		<div id="scroller">
		  <div id="main-container" clss="main-container" style="padding-top: 70px; padding-left: 10px; padding-right: 10px;"> 
          <ul class="list-group">
              <li class="list-group-item">
                <lable class="inline"></lable> 
                <a href="#" class="pull-right" style="color:#000000;">修改头像</a>              
              </li>
              <li class="list-group-item">
              <lable class="inline">昵称</lable>
              <span class="pull-right"></span>            
               </li>
              <li class="list-group-item">
              <lable class="inline">职位</lable> 
              <span class="pull-right"></span>             
              </li>
              <li class="list-group-item">
               <lable class="inline">隶属</lable>
               <span class="pull-right"></span>
              </li>
              <li class="list-group-item">
              <lable class="inline">单位</lable>
              <span class="pull-right"></span>
              </li>
              <li class="list-group-item">
              <lable class="inline">联系方式</lable>
              <span class="pull-right"></span>
              </li>
              <li class="list-group-item">
              <a href="#" class="inline" style="color:#000000;">修改密码</a>
               
              </li>
              <li class="list-group-item">
              <lable class="inline">版本更新</lable>
              <span class="pull-right"></span>
              </li>
              <li class="list-group-item">
              <a href="#" class="inline" style="color:#000000;">关于我们</a>
               
              </li>
          </ul>

		  </div>
		</div>
	</div>
</body>
</html>