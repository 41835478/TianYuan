<?php include T('show/m','header');?>
<div id="top_bar">
	<div class="location fl">潍坊</div>
	<div class="search fl"><input type="text" name="s_key"><a class="s_btn s_search"></a></div>
</div>
<link rel="stylesheet" type="text/css" href="http://jf.7192.com/static/css/swiper.min.css" />
<style>
	.swiper-pagination {text-align: center;}
	.swiper-pagination-bullet {background-color: #fff; width: 12px; height: 12px;}
</style>
	
<div class="mobile_banner content swiper-container">
	<div class="swiper-wrapper">
<?php $banner_ad=getads(48,3);
foreach($banner_ad as $k=>$v) {?>
		<div class="swiper-slide"><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" class="lazy"></a></div>
<?php }?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<script type="text/javascript" src="http://jf.7192.com/static/js/swiper.min.js"></script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-container',{
		pagination: '.swiper-pagination',
        preloadImages: true,
        watchSlidesVisibility: true,
        loop: 'loop',
        autoplay : 5000,
        autoplayDisableOnInteraction : false,
        autoHeight: true,
    });
</script>
<div class="nav">
	<ul>
<?php $n=1; foreach($all_cate as $k=>$v) {?>
		<li class="ico<?=$n?>">
			<a href="/list/<?=$v['id']?>.html"><?=$v['name']?> </a>
		</li>
<?php $n++;}?>
	</ul>
</div>
<div class="toutiao"><p><a href="">上看到了和分公司领导关怀</a></p></div>
<img src="/static/img/tuijian.jpg" width="100%">
<style type="text/css">
.ad_hot{min-height:0;overflow:hidden;margin-bottom: 10px;}
.ad1{width:640px;height:240px;margin-bottom: 3px;overflow:hidden;}	
.ad2{width:382px;height:373px;}
.ad21{width:382px;height:185px;margin-bottom: 3px;overflow:hidden;}
.ad22{width:382px;height:185px;overflow:hidden;}
.ad3{width:255px;height:373px;overflow:hidden;}
.brand{width:640px;min-height: 0;overflow: hidden;}
.brand ul{width:660px;}
.brand ul li{width:210px;height:280px;float: left;overflow: hidden;margin-right: 5px;margin-bottom: 10px;}
.brand ul li a{display: block;}
</style>
<div class="ad_hot">
<?php 
$ad1=getads(49,1);
$ad2=getads(50,4);
$ad3=getads(51,2);
?>
	<div class="ad1"><a href="<?=$ad1[0]['link']?>"><img src="<?=$ad1[0]['img']?>" width="100%" alt="<?=$ad1[0]['title']?>" /></a></div>
	<div class="ad2 fl">
		<div class="ad21"><a href="<?=$ad2[0]['link']?>"><img src="<?=$ad2[0]['img']?>" width="100%" alt="<?=$ad2[0]['title']?>" /></a></div>
		<div class="ad22"><a href="<?=$ad2[1]['link']?>"><img src="<?=$ad2[1]['img']?>" width="100%" alt="<?=$ad2[1]['title']?>" /></a></div>
	</div>
	<div class="ad3 fr"><a href="<?=$ad3[0]['link']?>"><img src="<?=$ad3[0]['img']?>" width="100%" alt="<?=$ad3[0]['title']?>" /></a></div>
</div>
<div style="clear:both"></div>
<div class="ad_hot">
	<div class="ad2 fl">
		<div class="ad21"><a href="<?=$ad2[2]['link']?>"><img src="<?=$ad2[2]['img']?>" width="100%" alt="<?=$ad2[2]['title']?>" /></a></div>
		<div class="ad22"><a href="<?=$ad2[3]['link']?>"><img src="<?=$ad2[3]['img']?>" width="100%" alt="<?=$ad2[3]['title']?>" /></a></div>
	</div>
	<div class="ad3 fr"><a href="<?=$ad3[1]['link']?>"><img src="<?=$ad3[1]['img']?>" width="100%" alt="<?=$ad3[1]['title']?>" /></a></div>
</div>
<img src="/static/img/brand.jpg" width="100%">
<div class="brand">
	<ul>
<?php $ad_brand=getads(52,9);
foreach($ad_brand as $k=>$v) {
?>
			<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
	</ul>
</div>
<?php include T('show/m','footer');?>
<script type="text/javascript">
	$('.s_search').click(function() {

		var key = $('input[name="s_key"]').val();
		window.location.href="/search.php?key="+key;
	});
</script>