<?php include T('seller_admin','header');?>
<style type="text/css">
.shop_nav{background-color:#f8f8f8;height:30px;font-size:12px;line-height:30px;}
.nav_r span{padding-right:20px;}
.nav_r span cite{color:#ca001a;font-style:normal;font-size:12px;}
.logo_area{width:100%;height:120px;background:url('<?=$diy_info['thumb']?>') no-repeat center;}
.logo{width:500px;height:120px;}
.shop_menus{width:100%;height:30px;background-color:#163c23;font-size:15px;line-height:30px;}
.shop_menus ul li{float:left;padding:0 20px;text-align:center;}
.shop_menus ul li a{color:#fff;cursor:pointer}
.shop_menus ul li:hover{background-color:#015521;}
.lubo{ width: 100%; min-width:1000px;clear: both; position: relative; height:790px;}
.lubo_box{ position: relative; width: 100%; height:790px; }
.lubo_box li{ float: left;position: absolute; top: 0; left: 0; width: 100%; height:790px; opacity: 0;filter:alpha(opacity=0);}
.lubo_box li a{ display: block;width: 100%;  height: 100%;}
.lubo_box li img{ width: 100%; height: 790px;}
.cir_box{ overflow: hidden; position: absolute; z-index: 100;}
.cir_box li{ float: left; width: 30px; height: 5px; margin:0 5px; cursor: pointer; background: #fff; opacity: 0.8;filter:alpha(opacity=80);}
.cir_on{ background: #000 !important;}
.lubo_btn{ position: absolute; width: 100%; top: 340px;}
.left_btn, .right_btn{ width: 30px; height: 80px; background: #000;opacity: 0.8;filter:alpha(opacity=80); cursor: pointer; color: #fff; line-height: 80px; font-size: 30px; text-align: center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.left_btn{ float: left;}
.right_btn{ float: right;}
.links{margin-top:30px;}
.shop_ads{min-height:0;overflow:hidden;margin-top:30px;}
</style>
<script type="text/javascript" src="/static/js/lubotu.js"></script>
<div class="shop_nav">
	<div class=" x_margin">
		<div class="nav_r fr">
			<span><?=$shop_config['title']?></span>
			<span>描述 <cite>5.0分<cite></span>
			<span>服务 <cite>5.0分<cite></span>
			<span>发货 <cite>5.0分<cite></span>
		</div>
	</div>	
</div>
<div class="logo_area">
	<div class="x_margin">
		<div class="logo fl"><img src="<?=$shop_config['logo']?>"/></div>
	</div>
</div>
<style type="text/css">
.z_margin{width:1200px;margin: 0 auto;}
.shop_sub{position: absolute;top:0;left:50%;width:100px;margin-left: -505px;min-height: 0;overflow: hidden;display: none;z-index: 999;}
.shop_sub ul li{text-indent: 20px;line-height: 30px;color:#fff;background-color: #163c23;}
.shop_sub ul li p{color:#fff;font-size: 13px;}
.shop_sub ul li a{color:#fff;font-size: 12px;}
</style>
<script type="text/javascript">
$(function(){
	$('#show_sub').mouseover(function(){
		$('.shop_sub').show();
	});
	$('.shop_sub').mouseleave(function(){
		$('.shop_sub').hide();
	});
});
</script>
<div class="shop_menus">
	<div class="z_margin">
		<ul>
			<li><a href="">店铺首页</a></li>
			<li id="show_sub">
				<a id="all_menu">全部分类</a>
			</li>
<?php foreach($shop_menus as $k=>$v) {?>
			<li><a href="<?=$v['url']?>"><?=$v['title']?></a></li>
<?php }?>
			<?php if(empty($care)){?><li><a onclick="fav_shop(<?=$id?>)">收藏店铺</a></li><?php }?>
		</ul>
	</div>
</div>
<div class="lubo">
	<div class="shop_sub">
		<ul>
<?php foreach ($shop_cate as $k => $v) {?>
			<li>
				<p><a href="/<?=$id?>/cate/<?=$v['id']?>.html"><?=$v['name']?></a></p>
				<?php foreach ($v['sub'] as $s => $r) {?>
				<p><a href="/<?=$id?>/cate/<?=$r['id']?>.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> <?=$r['name']?></a></p>
				<?php }?>
			</li>
<?php }?>
		</ul>
	</div>
	<ul class="lubo_box">
<?php $n=1;foreach($banners as $k=>$v) {?>
		<li <?php if($n==1){?>style=" opacity: 1;filter:alpha(opacity=100);"<?php }?>><a href="<?=$v['url']?>" style="background:url(<?=$v['thumb']?>) center top no-repeat"></a></li>
<?php $n++;}?>
	</ul>
</div>
<script type="text/javascript">
$(function(){
    $(".lubo").lubo({
    });
})
</script>
<div class="shop_ads x_margin">
	<?=$diy_info['content']?>
</div>
<div class="links x_margin">
	<p>友情链接：
<?php foreach($links as $k=>$v) {?>
	<a href="<?=$v['linkurl']?>"><?=$v['title']?></a>
<?php }?>
	</p>
</div>
<script type="text/javascript">
function fav_shop(id){
	$.ajax({
		type:'post',
		url:'/ajax.html?a=fav',
		data:{'dataid':id,'type':2},
		success:function(r){
			layer.alert(r);
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
</script>
<?php include T('seller_admin','footer');?>
