$(function(){
	var query = $('.screening ul li'),
		lock = $('.lock'),
		list_1 = $('.list_1 li'),list_2 = $('.list_2'),
		querys = $('.querys div'),lis = $('.querys div ul li');
		var reg1 = /\s+/;
		$('.terms_ul input:checked').click(); //初始化将被选中的checkbox状态改为unchecked
		// $(querys).hide(); //隐藏选项列表 8/14
		$(lock).hide(); //隐藏半透明遮罩
		$('.hidediv').hide(); //隐藏未获取到数据时的提示消息
		list();

		function list(){ //'已选'和'筛选条件是否出现'
			var list1 = $(list_1).text().replace(reg1,''),list2 = $(list_2).text().replace(reg1,''),
				lid1 = $('.list_div1'),lid2 = $('.list_div2');
			if(list1 == '' && list2 == ''){
				$('.lists').hide();
				$('#wrapper').css({'margin-top':'111px'});
				$(lock).css({'top':'140px'});
			}else if(list1 == '' && list2 != ''){
				$('.lists').show();
				$(lid1).hide();
				$('.lists').css({'height':'3em'});
				$('#wrapper').css({'margin-top':'140px'});
				$(lock).css({'top':'140px'});
			}else if(list1 != '' && list2 == ''){
				$('.lists').show();
				$(lid2).hide();
				$('.lists').css({'height':'3.5em'});
				$('#wrapper').css({'margin-top':'145px'});
				$(lock).css({'top':'145px'});
			}else{
				$(lid1).show();
				$(lid2).show();
				$('.lists').css({'height':'6.5em'});
				$('#wrapper').css({'margin-top':'186px'});
				$(lock).css({'top':'186px'});
			}
			loaded();
		}

		for(var i = 0;i < query.length;i ++) { //点击筛选条件切换选项面板
			$(query[i]).click(function(){
				$(lock).css({'width':$('#wrapper').width(),'height':$("#wrapper").height()}); //将遮罩的宽高与滚动范围同步
				var val = $(this).attr('value');
				$(querys[val-1]).toggle().siblings().hide();
				if($(querys[val-1]).css('display') == 'block'){
					$(this).css({'background-image':'url(assets/img/on_2.png)'}).siblings().css({'background-image':'url(assets/img/on_1.png)'});
					$(lock).show();
				} else {
					$(this).css({'background-image':'url(assets/img/on_1.png)'});
					$(lock).hide();
				}
			});
		}

		for(var i = 0;i < lis.length;i ++) { //'区域','861','金额'选项列表点击事件
			$(lis[i]).click(function(){
				$(this).css({'background':'#eee'}).siblings().css({'background':'#fff'});
				var text = "<span>"+$(this).children('span:first-child').text()+"</span>",
				// var text = $(this).children('span:first-child'),
					val = $(this).parent().parent().attr('value');
					hd = "<span id='"+$(query[val-1]).attr("class")+"'>"+$(query[val-1]).attr('type')+"</span>";
					$(list_1[val-1]).empty().append(hd+":").append(text);
					$(querys).hide();
					$(lock).hide();
					$(query).css({'background-image':'url(assets/img/on_1.png)'});
					list();
					aj();
					$('.lbl').css('display','block');
			});
		}

		$('.terms_ul li').unbind(); //解除li的事件绑定
		$('.middle').click(function(){ //"筛选"选项列表点击事件
			check();
			list();
			$(lock).css({'width':$('#wrapper').width(),'height':$("#wrapper").height()});
		});
		$('.click_aj').click(function(){ //点击确认触发ajax事件并将面板隐藏
			if($('#status').text() != '' || $('#type').text() != ''){
				aj();
			}
			$(querys).hide();
			$(lock).hide();
			$(query).css({'background-image':'url(assets/img/on_1.png)'});
			$('.lbl').css('display','block');
		});
		function check() {
			var inputs1 = $('.status input:checked'), inputs2 = $('.type input:checked');
			var arr1 = [], arr2 = [];
			for(var i = 0; i < inputs1.length;i ++) {
				arr1.push("<span>"+$(inputs1[i]).parent().parent().text()+"</span>");
			}
			for(var i = 0; i < inputs2.length;i ++) {
				arr2.push("<span>"+$(inputs2[i]).parent().parent().text()+"</span>");
			}
			$('#status').empty().append(arr1);
			$('#type').empty().append(arr2);
		}
		aj();
		function aj(){
			var datas = $('.list_1 li').has('span'); //包含'区域','861','金额'的元素
			var data1 = {}, data2 = {};
			//添加'区域','861','金额'的数据
			for(var i = 0;i < datas.length;i ++){
				var first = $(datas[i]).children('span').eq(0).attr('id'),
				last = $(datas[i]).children('span').eq(1).text();
				// last = $(datas[i]).children('span').eq(1).attr('value');
				data1[first] = last;
			}
			//添加'项目状态''项目阶段'数据
			if($('#status span').text().replace(reg1,'') != ''){
				data2["status"] = $('#status span').map(function(){
					return $(this).text().replace(reg1,'');
				}).get().join(',');
			}
			if($('#type span').text().replace(reg1,'') != ''){
				data2["type"] = $('#type span').map(function(){
					return $(this).text().replace(reg1,'');
				}).get().join(',');
			}
			data = $.extend({}, data1,data2); //合并两段数据
			// data = JSON.stringify($.extend({}, data1,data2));
			$.ajax({
        url: 'a.json',
        type: 'post',
        data: data,
        dataType: 'json',
        beforeSend:function(){
        	$('#loader-wrapper').css('display','block');
        	$('.demo-content').css('visibility','hidden');
        },
        success: function (responseText,status,xhr){
        	$('#loader-wrapper').css('display','none');
        	$('.demo-content').css('visibility','visible');
        	var data =  responseText.data;
        	$(".testul").empty();
          for(var i = 0;i < data.length;i ++){
          	var hts = "<li> <div class='list-group'> <a class='list-group-item' href='#1'>"+data[i].name+
          	"</a> <a class='list-group-item lastchild' href='#2'> <span class='statuss'>"+data[i].status+
          	"</span>  <span class='"+data[i].types+
          	"'> <i class='glyphicon glyphicon-th-list'></i>"+data[i].type+
          	"</span><span class='statue'> <i class='glyphicon glyphicon-map-marker'></i>"+data[i].area+
          	"</span> </a> </div> </li>";
          	$(".testul").append(hts);
          }
          if($('.testul').children('li').length == 0) { //若返回的数据为空
          	$('.hidediv').show();
          }
          loaded();
          $('a').hammer().on("tap",function(){
						window.location = $(this).attr('href')
					});
        },
        error: function (XMLHttpRequest, textStatus, errorThrown){
        	console.log(errorThrown);
        }
    	});
		}
});