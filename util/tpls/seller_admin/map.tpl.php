<!Doctype html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>百度地图</title>
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="Author" content="Zero">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="generator" content="bd-mobcard">
	<script type="text/javascript" src="http://static.7192.com/js/jquery-1.7.1.min.js"></script>
	<script src="http://qingjian.7192.com/webstatic/js/jquery.artDialog.js?skin=aero" type="text/javascript" language="javascript"></script>
	<script type="text/javascript" src="http://qingjian.7192.com/webstatic/js/DatePicker/WdatePicker.js"></script>
	<script src="http://qingjian.7192.com/webstatic/js/iframeTools.js" type="text/javascript" language="javascript"></script>
<style type="text/css">
@charset "UTF-8";
/* CSS Document */
body{margin:0;padding:0;font:12px Helvetica,"Microsoft YaHei",san-serif;background:#fff;}
div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
table,td,tr,th{font-size:12px}
li{list-style-type:none}
img{vertical-align:top;border:0}
ol,ul{list-style:none}
h1,h2,h3,h4,h5,h6{font-size:12px;font-weight:normal}
address,cite,code,em{font-weight:normal;font-style:normal}
a{text-decoration:none;color:#666;}
a:hover{text-decoration:none;}
a:hover{color:red;}
/*commonality*/
.g_mo{width:1200px;margin:0 auto;overflow:hidden}
.g_fl{float:left;}
.g_fr{float:right;}
.g_di1{display:block;}
.g_di2{display:none;}
/* content */
body,#map_kj01{width:680px;height:400px;margin:0 auto;position:relative;}
#main_area{height:400px;}
</style>
</head>
<body>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Ujt57aQupvUnOqQ6FLMxKG2I"></script>
<div id="map_kj01">
	<div id="txt_search">
		<label for="where">地点：</label>
		<input id="where" name="where" type="text" >
		<input type="button" value="地图上找" onclick="search_map()" />
	</div>
	<div id="main_area"></div>
</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Ujt57aQupvUnOqQ6FLMxKG2I"></script>
<script type="text/javascript">
$(function(){
	$('#banquetaddress').change(function(){
		repeat_address();
	});
	repeat_address();
});
var map_tips_sta=1;
function search_map(){
	map_tips_sta=1;
	sear(document.getElementById('where').value);
}
function repeat_address(){
	map_tips_sta=0;
	var address=$('#banquetaddress').val();
	$('#where').val(address);
	sear(address);
}
	function selectCity(e){
		$.get('/s/area.php?id='+e, function(r){
			var o = document.getElementById('c');
			o.options.length = 0;
			eval('var city='+r+';');
			for(var i=0,l=city.length;i<l;i++){
				o.options.add(new Option(city[i],city[i]));
			}
		});
	}
	var map = new BMap.Map("main_area"),mkr=null;
<?php if($shop_info['mapdata']){
$points = explode(',',$shop_info['mapdata']);
}else{
$points = array('116.404','39.915','12');
}?>
	var point = new BMap.Point(<?=$points[0]?>, <?=$points[1]?>);
	map.addControl(new BMap.MapTypeControl({anchor: BMAP_ANCHOR_TOP_LEFT}));
	map.enableScrollWheelZoom();
	map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT, offset: new BMap.Size(10, 60)}));
	map.centerAndZoom(point, <?=isset($points[2])? $points[2] : '12'?>);
	var marker = new BMap.Marker(point);
	window.parent.$('#mapdata').val('<?=$points[0]?>,<?=$points[1]?>,<?=isset($points[2])? $points[2] : '12'?>');
	map.addOverlay(marker);
	map.addEventListener("zoomend", function(){
		map.setCenter(marker.point);
	}); 
	function resetmap(){
		marker.enableDragging();
		map.addEventListener("dragend", function(){
			var center=map.getCenter();
			marker.setPosition(center);
			window.parent.$('#mapdata').val(center.lng + ',' + center.lat+ ','+map.getZoom());
		}); 
		map.addEventListener("zoomend", function(){    
			var center=map.getCenter();
			window.parent.$('#mapdata').val(center.lng + ',' + center.lat+ ','+map.getZoom());
		});
	}
	function fixcity(e){
		map.addEventListener('tilesloaded',function(){
			marker.setPosition(map.getCenter());
		});
		map.setCenter(e);
		map.setZoom(12);
		window.parent.$('#mapdata').val(e.point.lng + ',' + e.point.lat+ ',12');
	}
	var local = new BMap.LocalSearch(map, {
		renderOptions:{map: map},
		onSearchComplete: function(data_arr){
			if (local.getStatus() == BMAP_STATUS_SUCCESS){  
				var pos_1=data_arr.getPoi(0);
				window.parent.$('#mapdata').val(pos_1.point.lng + ',' + pos_1.point.lat+ ','+map.getZoom());
				map.setCenter(pos_1.point);
				marker.setPosition(map.getCenter());
				if (map_tips_sta){
					art.dialog.alert('<span style="color:#36f">搜索完毕后，请使用鼠标选定位置再保存地图！</span>');
				}
			}else{
				if (map_tips_sta){
					art.dialog.alert('<span style="color:#36f">抱歉没有找到相关地点</span>');
				}
			}
		}
	});
	function sear(result){//地图搜索
		local.search(result);
	}

	function firstsetmap(){
		var myCity = new BMap.LocalCity();
		myCity.get(function(result){
			var cityName = result.name,
				point = result.center;
				map.setCenter(point);
				marker.setPosition(point);
				window.parent.$('#mapdata').val(point.lng + ',' + point.lat+ ',12');
		});
	}
	<?php if(empty($shop_info['mapdata'])){?>
		firstsetmap();
	<?php }?>
		resetmap();
</script>
</body>
</html>