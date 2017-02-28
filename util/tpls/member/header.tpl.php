<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="applicable-device" content="pc" />
<title>会员中心 - <?=$uc_config['sitename']?></title>
<meta name="Keywords" content="<?=$uc_config['keywords']?>" />
<meta name="Description" content="<?=$uc_config['dsp']?>" />
<?=$uc_config['meta']?>

<script type="text/javascript" src="/static/js/j.js"></script>
<link href="/static/css/seller.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/static/layer/layer.js"></script>
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div id="x_top_kj001" class="">
	<div id="" class="x_margin">
		<div id="" class="x_top_kj011 x_fl">
		<?=$uc_config['welcome']?> 您好，<?php if($_userid>0){?><a href="/home/index.html"><?=$username?></a><a href="/logout.html" title="退出登陆">退出登陆</a><?php }else{?><a href="/login.html" title="立即登录">登录</a>
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
<style type="text/css">
.logo_bar{position:relative;}	
.logo_bar .wel{position:absolute;top:30px;left:230px;font-size:24px;}
</style>
<div class="logo_bar x_margin">
	<div id="logo01" class="x_fl">
		<a href="/" title="喜庆盒商城">
			<img src="<?=$uc_config['logo']?>" width="100%" alt="喜庆盒商城">
		</a>
		<h2 class="wel">欢迎登录</h2>
	</div>
	
</div>
