<?php include T('seller_admin','header');?>
<link rel="stylesheet" href="/static/css/jquery-ui.css" type="text/css" media="all" />
<script src="/static/js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>
<div id="bread" class="cont">
	<p><a href="/">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i><?=$c_title?></p>
</div>
<style type="text/css">
#intro_index{width:600px;float:left;}
#qrcode{padding:5px;width:100px;float:left;margin-left:20px;border:1px solid #ccc;margin-top:50px;text-align:center;}
#qrcode p{font-size:12px;}

.img{width:100px;height:100px;overflow:hidden;float:left;margin-right:20px;}
.img img{width:100%}
.div_2 .ifram{position:relative;width:110px;height:32px;margin-top:20px;overflow:hidden;}
.div_2 .ifram img{width:100%;}
.div_2 .ifram_1{position:absolute;top:0;left:0;opacity:0;}
#map_area {width: 480px;height: 320px;overflow: hidden;position: relative;}
</style>

<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=f631da92c30e88667c3e37e442254bf5"></script>
<script>
$(function(){
	


	var map = new AMap.Map('container',{
            resizeEnable: true,
            zoom: 13,
            center: [<?=$shop_info['lng']?>,<?=$shop_info['lat']?>]
    });
	var clickEventListener = map.on('click', function(e) {
        //document.getElementById("lnglat").value = e.lnglat.getLng() + ',' + e.lnglat.getLat()
		$('#lng').val(e.lnglat.getLng());
		$('#lat').val(e.lnglat.getLat());
    });
    AMap.plugin('AMap.Geocoder',function(){
        var marker = new AMap.Marker({
            map:map,
            bubble:true
        })
        map.on('click',function(e){
            marker.setPosition(e.lnglat);
        })
    });
})
</script>
<script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">店铺基础资料设置</div>
			<div id="intro_index">
				<form method="post" class="layui-form" action="/home/shop.html?c=save" id="cate_form">
					<div class="layui-form-item">
						<label class="layui-form-label">店铺名称</label>
						<div class="layui-input-block">
							<input type="text" name="title" id="title" class="layui-input" value="<?=$shop_info['title']?$shop_info['title']:'';?>" placeholder="请填写店铺名称"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">店铺LOGO</label>
						<div class="layui-input-block">
							<div id="img">
								<input type="hidden" name="logo" value="<?=$shop_info['logo']?$shop_info['logo']:'';?>" />
								<div  class="img"><img src="<?=$shop_info['logo']?$shop_info['logo']:'';?>" alt="头像" width="100" height="100"/></div>
								<div class="div_2">
									<p>支持jpg/jpeg格式照片,照片大小300*300</br>文件小于1MB</p>
									<p class="ifram">	<img src="/static/img/up_c1.png" alt="上传图片" />
										<iframe style="margin-top:10px;" src="/log/upfile.php?tb=2" width="110" height="32" frameborder="0" class="ifram_1"></iframe>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">店铺介绍</label>
						<div class="layui-input-block">
							<input type="text" name="des" id="des" class="layui-input" value="<?=$shop_info['des']?$shop_info['des']:'';?>" placeholder="请填写店铺介绍"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">店铺公告</label>
						<div class="layui-input-block">
							<input type="text" name="notice" id="notice" class="layui-input" value="<?=$shop_info['notice']?$shop_info['notice']:'';?>" placeholder="请填写店铺公告"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">联系电话</label>
						<div class="layui-input-block">
							<input type="tel" name="tel" id="tel" class="layui-input" value="<?=$shop_info['tel']?$shop_info['tel']:'';?>" placeholder="请填写店铺公告"/>
						</div>
					</div>	
					<div class="layui-form-item">
						<label class="layui-form-label">详细地址</label>
						<div class="layui-input-block">
							<input type="text" name="address" id="address" class="layui-input" value="<?=$shop_info['address']?$shop_info['address']:'';?>" placeholder="请填写店铺详细地址"/>
						</div>
					</div>	
					<div class="layui-form-item">
						<label class="layui-form-label">所在位置</label>
						<div class="layui-input-inline">
							<input type="text" name="lng" id="lng" value="<?=$shop_info['lng']?>" class="layui-input" placeholder="经度"/>
						</div>
						<div class="layui-input-inline">
							<input type="text" name="lat" id="lat" value="<?=$shop_info['lat']?>" class="layui-input" placeholder="纬度"/>
						</div>
						<div class="layui-input-inline" style="padding-top:30px">
							<div id="container" style="width:700px; height:400px;border:1px solid #ccc;"></div>
						</div>
						<div class="layui-form-mid layui-word-aux">请点击地图选择坐标位置</div>
					</div>	
					<a class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" onclick="sub_form()">提交</a>	
				</form>
			</div>
			<!--<div id="qrcode">
				<img src="http://eicshop.7192.com/ewm.php?url=mall.com/show/<?=$_userid?>.html" width="100%"/>
				<p>扫码查看手机版</p>	
			</div>-->
	</div>
</div>

<script type="text/javascript">
function setImg(d){
	$('#img').find('input').val(d);
	$('#img').find('.img img').attr('src',d);
}
function sub_form(){
	var title=$.trim($('#title').val());
	if (title.length==0){
		art.dialog.tips('商铺名称不能为空');
		return false;
	}
	var tel=$.trim($('#tel').val());	
	if (tel.length==0){
		art.dialog.tips('联系方式不能为空');
		return false;
	}
	$('#cate_form').submit();
}
function selectCity(e){
	$.ajax({
		type:'post',
		url:'/ac.php',
		data:{'m':'admin','a':'area','id':e},
		success:function(r){
			var o = document.getElementById('c');
			o.options.length = 0;
			eval('var city='+r+';');
			for(var i=0,l=city.length;i<l;i++){
				o.options.add(new Option(city[i].name,city[i].id));
			}
		}
	});
}
</script>
<?php include T('seller_admin','footer');?>