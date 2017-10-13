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
        
      <div class="title">大额现金未入柜</div>
    </div>
  </div>
  <div id="wrapper" style="background-color: #fff;">
    <div id="scroller">

      <div id="main-container" clss="main-container" style="padding-top: 50px;">
          <h4 style="margin:15px;line-height:30px;text-align:center;">沐阳分公司某家营业厅大额现金未入柜</h3>
          
          <p style="margin:30px 15px;line-height: 30px;font-size:15px;">
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp8月7日沐阳总公司核对账目时发现某家营业厅有五万元现金未入保险柜，询问当班经理和营业员后分别罚款一千元和五百元现金以此警戒。
          </p>
          <time style="float: right;margin:15px;">2017/8/8</time>
      </div>
    </div>
  </div>
  <?php 
    include 'template/footer.php'
  ?>

</body>
</html>