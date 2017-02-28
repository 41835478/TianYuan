<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="applicable-device" content="pc" />
<title><?=$uc_config['sitename']?></title>
<meta name="Keywords" content="<?=$uc_config['keywords']?>" />
<meta name="Description" content="<?=$uc_config['sitedsp']?>" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?=$uc_config['meta']?>
<script type="text/javascript" src="/static/js/j.js"></script>
<link href="/static/css/seller.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/static/layer/layer.js"></script>
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/css/index-slider.css">
<script src="/static/js/slider_index.js"></script>
<script src="/static/js/main.js"></script>
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>
<script type="text/javascript" src="/static/plugin/artDialog/jquery.artDialog.js?skin=aero"></script>
</head>
<script>
	/*navigator.geolocation.getCurrentPosition(
		function(position){
		var cords = position.coords;
		console.log(cords);
			alert("当前经度："+cords.longitude +", 纬度："+cords.latitude);
			$.ajax({
				type:'post',
				url:'/log/GetDistance.php',
				data:{'uid':122,'lng':cords.longitude,'lat':cords.latitude},
				success:function(r){
					alert(r);
					//setTimeout(function(){window.location.reload(true);},1200);
				}
			});
		},
		function(error){
			var errorTypes={1:"位置服务被拒绝", 2:"获取不到位置信息", 3:"获取位置信息超时"};
			//alert( errorTypes[error.code] +":,不能确定当前地理位置");
		}
	);*/
</script>
<body>
<div id="x_top_kj001" class="">
	<div id="" class="x_margin">
		<div id="" class="x_top_kj011 x_fl">
		<?=$uc_config['welcome']?> 您好，<?php if($_userid>0){?><a href="/home/index.html"><?=$_username?></a><a href="/logout.html" title="退出登陆">退出登陆</a><?php }else{?><a href="/login.html" title="立即登录">登录</a>
		<a href="/login.html" title="免费注册">免费注册</a><?php }?>
		</div>
		<div id="" class="x_top_kj012 x_fr">
			<ul>
				<li><a href="/home/index.html" title="我的喜庆盒" target="_blank">会员中心</a>	</li>
				<i></i>
				<li>
					<a href="/cart.html" title="购物车" target="_blank">
						<em class="x_top_em01"></em>购物车<span id="x_guwuche"><?=$cartnum?></span>件
					</a>
				</li>
				<i></i>
				<li class="x_top_js04">
					<a href="#" title="手机版" target="_blank">
						<em class="x_top_em02"></em>手机版
					</a>
					<div id="" class="x_top_kj022">
						<span></span>
					</div>
					<div id="" class="x_top_kj026 x_display2">	
						<img class="" src="<?=$uc_config['wxqr']?>" width="100%" height="" alt="手机版二维码" title="扫描二维码登陆手机版">
					</div>
				</li>
				<i></i>
				<li class="x_top_js02">
					<a href="/help/index.html" title="客户服务" target="_blank">客户服务</a>
					<div id="" class="x_top_kj022">
						<span></span>
					</div>
					<div id="" class="x_top_kj024 x_display2">
						<strong>帮助中心</strong>
						<ol>
<?php $nws=getnews(8,4);
foreach($nws as $k=>$v) {?>
							<li><a href="/news_<?=$v['id']?>.html" title="<?=$v['title']?>" target="_blank"><?=$v['title']?></a></li>
<?php }?>
						</ol>
					
					</div> 
				</li>
				<i></i>
				<li class="x_top_js03">
					<a href="javascript:" title="网站导航" target="_blank">
						<em class="x_top_em03"></em>网站导航
					</a>
					<div id="" class="x_top_kj022">
						<span></span>
					</div>
					<div id="" class="x_top_kj025 x_display2">
<?php foreach($all_cate as $k=>$v) {
$subnav=$db->getAll('select * from `web_cate` where parent='.$v['id']);?>
						<ol class="x_top_ol031 x_fl">
							<h2><a target="_blank" href=""><?=$v['name']?></a></h2>
							<li class="x_top_li032 x_fl">
								<ul class="x_top_ul033">
<?php foreach($subnav as $k=>$v) {?>
									<li><a href="/list/<?=$v['id']?>.html" ><?=$v['name']?></a></li>
<?php }?>
								</ul>
							</li>
						</ol>
						<i id="x_top_i031"></i>
<?php }?>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="head15_top_bar">
<?php $ad_top=getads(3,3);
foreach($ad_top as $k=>$v) {?>
	<a href="<?=$v['link']?>" target="_blank" style="display: block; background: url(<?=$v['img']?>) 50% 0% no-repeat;"></a>
<?php }?>
</div>
<script type="text/javascript">
$(function () { 
	var index = 0;  
	var $el = $(".head15_top_bar").children(); 
	var len = $el.length; 
	if (len <= 1) return; 
	setInterval(function () {  
		index = ++index == len ? 0 : index;  
		$el.fadeOut().eq(index).fadeIn(); 
	}, 4000);
});
</script>
<div class="logo_bar x_margin">
	<div id="logo01" class="x_fl">
		<a href="/" title="<?=$uc_config['sitename']?>">
			<img src="<?=$uc_config['logo']?>" width="100%" alt="<?=$uc_config['sitename']?>">
		</a>
	</div>
	<div id="search_box" class="x_fl">
		<div class="search_box_top ">
			<input type="text" class="search_text" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" placeholder="<?=$uc_config['search']?>">
			<button class="search_btn" onclick="search('key');return false;">搜索</button>
		</div>
		<script type="text/javascript">
			function search(id){
				//return;
				var key=$('#'+id).val();
				if (key.length<1){
					layer.alert('请填写一个关键词！');
				}else{
					window.location.href='/search.php?key='+key;
				}
			}
		</script>
		<ul>
<?php $tags=explode('/',$uc_config['tag']);
foreach($tags as $k=>$v) {?>
			<li><a href="/search.php?key=<?=$v?>"><?=$v?></a></li>
<?php }?>
		</ul>
	</div>
	<div id="shopcar_bar">
		<a href="/cart.html" title="我的购物车"><em class="x_shopcar_bar_em01"></em>我的购物车 <span>&gt;</span></a>
		<i><?=$cartnum?></i>
	</div>
</div>
<div class="nav indexpage">
	<div class="nav_top">
		<div class="nav_nav ">
			<div class="nav_nav_mian"><span></span>所有商品分类</div>
			<ul class="nav_nav_mian_list">
<?php $n=1; foreach($all_cate as $k=>$v) {
$subnav=$db->getAll('select * from `web_cate` where parent='.$v['id']);
?>
				<li class="ico<?=$n?>"><a href="/list/<?=$v['id']?>.html"><?=$v['name']?> </a>
					<div class="nav_nav_subnav">
					<?php foreach($subnav as $s=>$r) {
					$thrnav=$db->getAll('select * from `web_cate` where parent='.$r['id']);
					?>
						<p><a href="/list/<?=$r['id']?>.html"><?=$r['name']?></a><i class="fa fa-angle-right" aria-hidden="true"></i> <?php foreach($thrnav as $q=>$t) {?><a href="/list/<?=$t['id']?>.html" ><?=$t['name']?></a><?php }?></p>
					<?php }?>
					</div>  
				</li>
<?php $n++;}?>
			</ul>
		</div>
		<ul class="nav_list">
			<li><a href="/"  class="nav_list_curn">首页</a></li>
<?php foreach($all_cate as $k=>$v) {?>
			<li><a href="/list/<?=$v['id']?>.html" title="<?=$v['name']?>"><?=$v['name']?></a></li>
<?php }?>
		</ul>
	</div>
</div>