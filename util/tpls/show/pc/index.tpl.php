<?php include T('seller_admin','header');?>
<style type="text/css">
.indexpage .nav_top .nav_nav .nav_nav_mian_list{display:block;}
</style>
<div class="banner">
	<div class="banner_arct">
		<div class="banner_content">
			<div class="banner_content_main"> 
				<div class="content__cell content__cell--slider">
					<div class="component-index-slider">
						<div class="index-slider ui-slider log-mod-viewed">
							<div class="pre-next"> <a style="opacity: 0.8; display: none;" href="javascript:;" hidefocus="true" class="mt-slider-previous sp-slide--previous"></a> <a style="opacity: 0.8; display: none;" href="javascript:;" hidefocus="true" class="mt-slider-next sp-slide--next"></a> </div>
							<div class="head ccf">
								<ul class="trigger-container ui-slider__triggers mt-slider-trigger-container">
<?php $banner_ad=getads(4,3);
$n=1;
foreach($banner_ad as $k=>$v) {?>	
									<li class="mt-slider-trigger <?php if($n==1){?>mt-slider-current-trigger<?php }?>"><?=$v['title']?></li>
<?php $n++;}?>
								<div style="clear:both"></div>
								</ul>
							</div>
							<ul class="content">
<?php $n=1;foreach($banner_ad as $k=>$v) {?>	
								<li class="cf" <?php if($n>1){?>style="opacity: 1; display:none"<?php }?>>
									<a href="<?=$v['link']?>"><img  src="<?=$v['img']?>"></a>
								</li>
<?php $n++;}?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner_right">
			<div class="side-cal mb10">
<?php $weekarray=array("日","一","二","三","四","五","六");
$test=new Calendar;
$Year=$test->Cal(date('Y'),date('m'),date('d'));
?>
				<div class="title"><span><?=date('Y年m月d日',time())?></span><em>星期<?=$weekarray[date("w")]?></em></div>
				<div class="inner">
					<img src="/static/img/lunar_bg.jpg"  alt="<?=$Year['month']?><?=$Year['day']?>" width="210" height="140" class="lazy" style="display: block;">
					<div class="date clearfix">
					  <div class="mask">&nbsp;</div><span class="month"><?=$Year['month']?></span><span class="day"><?=$Year['day']?></span>
					</div>
				</div>
				<div class="btm">
					<div class="roller hn-roller pngfix" style="overflow: hidden;">
						<div class="list">
							<a><i class="fa fa-graduation-cap"></i> hi，欢迎您的访问！</a>
						</div>
					</div>
				</div>
			</div>	
			<div class="side-log">
			<?php if($_userid>0){?>
				<div class="user">
					<div class="name"><span>您好，<?=$username?></span> <a href="http://mall.com/logout.html">[退出]</a></div>
				</div>
			<?php }else{?>
				<div class="btns clearfix"><a href="http://mall.com/login.html" target="_blank" rel="nofollow">登 录</a><a href="http://mall.com/login.html" class="last" target="_blank" rel="nofollow">免费注册</a></div>
			<?php }?>
			</div>
			<div class="zhoubian">
				<ul>
					<li><a href="http://ditu.amap.com/search?query=火车票" target="_blank">火车票</a></li>
					<li><a href="http://ditu.amap.com/search?query=加油站" target="_blank">加油站</a></li>
					<li><a href="http://ditu.amap.com/search?query=酒店" target="_blank">酒店</a></li>
					<li><a href="http://ditu.amap.com/search?query=ATM取款" target="_blank">ATM取款</a></li>
					<li><a href="http://ditu.amap.com/search?query=自行车服务" target="_blank">自行车服务</a></li>
					<li><a href="http://ditu.amap.com/search?query=农家乐" target="_blank">农家乐</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="notice_bar x_margin">
	<div class="notice-left">
		<h3>公告信息</h3>
		<div class="n_list">
<?php foreach($notice as $k=>$v) {?>
			<p><a onclick="show_notice(<?=$v['id']?>)"><strong>[公告]</strong><?=$v['title']?></a></p>
			<div id="notice_<?=$v['id']?>" class="notice_con"><?=$v['content']?></div>
<?php }?>
		</div>
	</div>
<script type="text/javascript">
function show_notice(id){
	layer.open({
		type: 1,
		area: ['500px', '300px'],
		shade: false,
		content: $('#notice_'+id)
	});
}

</script>
	<div class="notice-right">
<?php $ad_11=getads(11,1);?>
		<a href="<?=$ad_11[0]['link']?>"><img src="<?=$ad_11[0]['img']?>" width="100%" alt="<?=$ad_11[0]['title']?>" /></a>
	</div>
</div>
<div id="index_main" class="x_margin">
	<h2 class="index_tit"><img src="/static/img/1-1.jpg"/>热门推荐</h2>
	<div id="ad_1">
		<ul>
<?php $ad_1=getads(5,4);
foreach($ad_1 as $k=>$v) {
?>
			<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
		</ul>
	</div>
	<h2 class="index_tit"><img src="/static/img/1-2.jpg"/>品牌推荐</h2>
	<div id="ad_2">
		<ul>
<?php $ad_6=getads(6,4);
foreach($ad_6 as $k=>$v) {
?>
			<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
		</ul>
	</div>
	<div class="ad_3">
<?php $ad_7=getads(7,1);
$sub2=get_item(2);
?>
		<a href="<?=$ad_7[0]['link']?>"><img src="<?=$ad_7[0]['img']?>" width="100%" alt="<?=$ad_7[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/1-3.jpg" width="40px"/>田园采摘<span class="fr"><?=$sub2?></span></h2>
	<div class="ad_4">
		<div class="w600 fl">
			<div class="col_l friut">
				<h2>水果频道</h2>
				<h3>集实力商家重磅来袭</h3>
				<div class="s_img"><img src="/static/img/s1.jpg"/></div>
				<h4>水果</h4>
				<p class="col_item"><a href="">到付</a> | <a href="">到付</a> | </p>
				<div class="col_news">
					<p><a href="">集实力商家重集实力商家重磅来袭磅来袭</a></p>
					<p><a href="">集实力商家重磅来袭</a></p>
					<p><a href="">集实力商家重磅来袭</a></p>
				</div>
			</div>
			<div class="col_r">
				<ul>
<?php $ad_8=getads(8,4);
foreach($ad_8 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
				</ul>
			</div>
		</div>
		<div class="w600 fl">
			<div class="col_l friut">
				<h2>水果频道</h2>
				<h3>集实力商家重磅来袭</h3>
				<div class="s_img"><img src="/static/img/s1.jpg"/></div>
				<h4>水果</h4>
				<p class="col_item"><a href="">到付</a> | <a href="">到付</a> | </p>
				<div class="col_news">
					<p><a href="">集实力商家重集实力商家重磅来袭磅来袭</a></p>
					<p><a href="">集实力商家重磅来袭</a></p>
					<p><a href="">集实力商家重磅来袭</a></p>
				</div>
			</div>
			<div class="col_r">
				<ul>
<?php $ad_9=getads(9,4);
foreach($ad_9 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_10=getads(10,1);
$sub3=get_item(3);
?>
		<a href="<?=$ad_10[0]['link']?>"><img src="<?=$ad_10[0]['img']?>" width="100%" alt="<?=$ad_10[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-2.jpg" width="40px"/>自然观光<span class="fr"><?=$sub3?></span></h2>
	<div class="ad_4">
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_12=getads(12,1);?>
					<a href="<?=$ad_12[0]['link']?>"><img src="<?=$ad_12[0]['img']?>" width="100%" alt="<?=$ad_12[0]['title']?>" /></a>
				</div>
				<div class="list_bb">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="r_2 fl">
				<div class="r2_ad_top">
<?php $ad_14=getads(14,1);?>
					<a href="<?=$ad_14[0]['link']?>"><img src="<?=$ad_14[0]['img']?>" width="100%" alt="<?=$ad_14[0]['title']?>" /></a>
				</div>
				<div class="r2_ad__bot">
<?php $ad_15=getads(15,2);?>
					<a href="<?=$ad_15[0]['link']?>"><img src="<?=$ad_15[0]['img']?>" width="100%" alt="<?=$ad_15[0]['title']?>" /></a>
					<a href="<?=$ad_15[1]['link']?>"><img src="<?=$ad_15[1]['img']?>" width="100%" alt="<?=$ad_15[1]['title']?>" /></a>
				</div>
			</div>
		</div>
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_16=getads(16,1);?>
					<a href="<?=$ad_16[0]['link']?>"><img src="<?=$ad_16[0]['img']?>" width="100%" alt="<?=$ad_16[0]['title']?>" /></a>
				</div>
				<div class="list_bb">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="r_2 fl">
				<div class="r2_ad_top">
<?php $ad_17=getads(17,1);?>
					<a href="<?=$ad_17[0]['link']?>"><img src="<?=$ad_17[0]['img']?>" width="100%" alt="<?=$ad_17[0]['title']?>" /></a>
				</div>
				<div class="r2_ad__bot">
<?php $ad_18=getads(18,2);?>
					<a href="<?=$ad_18[0]['link']?>"><img src="<?=$ad_18[0]['img']?>" width="100%" alt="<?=$ad_18[0]['title']?>" /></a>
					<a href="<?=$ad_18[1]['link']?>"><img src="<?=$ad_18[1]['img']?>" width="100%" alt="<?=$ad_18[1]['title']?>" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_19=getads(19,1);
$sub4=get_item(4);?>
		<a href="<?=$ad_19[0]['link']?>"><img src="<?=$ad_19[0]['img']?>" width="100%" alt="<?=$ad_19[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-3.jpg" width="40px"/>农家乐<span class="fr"><?=$sub4?></span></h2>
	<div class="ad_4">
		<div class="ad_4_l fl">
<?php $ad_20=getads(20,1);?>
		<a href="<?=$ad_20[0]['link']?>"><img src="<?=$ad_20[0]['img']?>" width="100%" alt="<?=$ad_20[0]['title']?>" /></a>
		</div>
		<div class="ad_4_r fl">
			<ul>
<?php $ad_21=getads(21,6);
foreach($ad_21 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
			</ul>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_22=getads(22,1);
$sub5=get_item(5);?>
		<a href="<?=$ad_22[0]['link']?>"><img src="<?=$ad_22[0]['img']?>" width="100%" alt="<?=$ad_22[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-4.jpg" width="40px"/>生鲜直配<span class="fr"><?=$sub5?></span></h2>
	<div class="ad_4">
		<div class="ad_4_l fl">
<?php $ad_23=getads(23,1);?>
			<a href="<?=$ad_23[0]['link']?>"><img src="<?=$ad_23[0]['img']?>" width="100%" alt="<?=$ad_23[0]['title']?>" /></a>
		</div>
		<div class="ad_4_r fl">
			<ul>
<?php $ad_24=getads(24,6);
foreach($ad_24 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
			</ul>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_25=getads(25,1);
$sub6=get_item(6);?>
		<a href="<?=$ad_25[0]['link']?>"><img src="<?=$ad_25[0]['img']?>" width="100%" alt="<?=$ad_25[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-5.jpg" width="40px"/>酒店住宿<span class="fr"><?=$sub6?></span></h2>
	<div class="ad_4">
		<div class="ad_4_l fl">
<?php $ad_26=getads(26,1);?>
			<a href="<?=$ad_26[0]['link']?>"><img src="<?=$ad_26[0]['img']?>" width="100%" alt="<?=$ad_26[0]['title']?>" /></a>
		</div>
		<div class="ad_4_r fl">
			<ul>
<?php $ad_27=getads(27,6);
foreach($ad_27 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
			</ul>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_28=getads(28,1);
$sub7=get_item(13);?>
		<a href="<?=$ad_28[0]['link']?>"><img src="<?=$ad_28[0]['img']?>" width="100%" alt="<?=$ad_28[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-6.jpg" width="40px"/>私家庄园<span class="fr"><?=$sub7?></span></h2>
	<div class="ad_4">
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_29=getads(29,1);?>
					<a href="<?=$ad_29[0]['link']?>"><img src="<?=$ad_29[0]['img']?>" width="100%" alt="<?=$ad_29[0]['title']?>" /></a>
				</div>
				<div class="list_bb">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="r_2 fl">
				<div class="r2_ad_top">
<?php $ad_30=getads(30,1);?>
					<a href="<?=$ad_30[0]['link']?>"><img src="<?=$ad_30[0]['img']?>" width="100%" alt="<?=$ad_30[0]['title']?>" /></a>
				</div>
				<div class="r2_ad__bot">
<?php $ad_31=getads(31,2);?>
					<a href="<?=$ad_31[0]['link']?>"><img src="<?=$ad_31[0]['img']?>" width="100%" alt="<?=$ad_31[0]['title']?>" /></a>
					<a href="<?=$ad_31[1]['link']?>"><img src="<?=$ad_31[1]['img']?>" width="100%" alt="<?=$ad_31[1]['title']?>" /></a>
				</div>
			</div>
		</div>
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_32=getads(32,1);?>
					<a href="<?=$ad_32[0]['link']?>"><img src="<?=$ad_32[0]['img']?>" width="100%" alt="<?=$ad_32[0]['title']?>" /></a>
				</div>
				<div class="list_bb">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="r_2 fl">
				<div class="r2_ad_top">
<?php $ad_33=getads(33,1);?>
					<a href="<?=$ad_33[0]['link']?>"><img src="<?=$ad_33[0]['img']?>" width="100%" alt="<?=$ad_33[0]['title']?>" /></a>
				</div>
				<div class="r2_ad__bot">
<?php $ad_34=getads(34,2);?>
					<a href="<?=$ad_34[0]['link']?>"><img src="<?=$ad_34[0]['img']?>" width="100%" alt="<?=$ad_34[0]['title']?>" /></a>
					<a href="<?=$ad_34[1]['link']?>"><img src="<?=$ad_34[1]['img']?>" width="100%" alt="<?=$ad_34[1]['title']?>" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_35=getads(35,1);
$sub8=get_item(14);?>
		<a href="<?=$ad_35[0]['link']?>"><img src="<?=$ad_35[0]['img']?>" width="100%" alt="<?=$ad_35[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-7.jpg" width="40px"/>农资产品<span class="fr"><?=$sub8?></span></h2>
	<div class="ad_4">
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_36=getads(36,1);?>
					<a href="<?=$ad_36[0]['link']?>"><img src="<?=$ad_36[0]['img']?>" width="100%" alt="<?=$ad_36[0]['title']?>" /></a>
				</div>
				<div class="list_bb" style="background-color:#fffced">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="col_r">
				<ul>
<?php $ad_37=getads(37,4);
foreach($ad_37 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
				</ul>
			</div>
		</div>
		<div class="w600 fl">
			<div class="l_2 fl">
				<div class="ad_top">
<?php $ad_38=getads(38,1);?>
					<a href="<?=$ad_38[0]['link']?>"><img src="<?=$ad_38[0]['img']?>" width="100%" alt="<?=$ad_38[0]['title']?>" /></a>
				</div>
				<div class="list_bb" style="background-color:#ecfffd">
					<h4>地点</h4>
					<p class="col_item"><a href="">海景</a> | <a href="">山间</a> | <a href="">田园</a> | </p>
				</div>
			</div>
			<div class="col_r">
				<ul>
<?php $ad_39=getads(39,4);
foreach($ad_39 as $k=>$v) {
?>
					<li><a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a></li>
<?php }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_40=getads(40,1);
$sub9=get_item(29);?>
		<a href="<?=$ad_40[0]['link']?>"><img src="<?=$ad_40[0]['img']?>" width="100%" alt="<?=$ad_40[0]['title']?>" /></a>
	</div>
	<h2 class="index_tit2"/><img src="/static/img/s-8.jpg" width="40px"/>田园规划<span class="fr"><?=$sub9?></span></h2>
	<div class="ad_4">
		<div class="ad_4_l fl">
<?php $ad_41=getads(41,1);?>
			<a href="<?=$ad_41[0]['link']?>"><img src="<?=$ad_41[0]['img']?>" width="100%" alt="<?=$ad_41[0]['title']?>" /></a>
		</div>
		<div class="ad_4_r fl">
<?php 
$ad_2=getads(42,2);
$ad_3=getads(43,2);
?>
			<div class="w650 fl"><a href="<?=$ad_2[0]['link']?>"><img src="<?=$ad_2[0]['img']?>" width="100%" alt="<?=$ad_2[0]['title']?>" /></a></div>
			<div class="w330 fl"><a href="<?=$ad_3[0]['link']?>"><img src="<?=$ad_3[0]['img']?>" width="100%" alt="<?=$ad_3[0]['title']?>" /></a></div>
			<div class="w330 fl"><a href="<?=$ad_3[1]['link']?>"><img src="<?=$ad_3[1]['img']?>" width="100%" alt="<?=$ad_3[1]['title']?>" /></a></div>
			<div class="w650 fl"><a href="<?=$ad_2[1]['link']?>"><img src="<?=$ad_2[1]['img']?>" width="100%" alt="<?=$ad_2[1]['title']?>" /></a></div>
		</div>
	</div>
	<div class="ad_3">
<?php $ad_1=getads(44,1);
$sub6=get_item(6);
foreach($ad_1 as $k=>$v) {
?>
		<a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a>
<?php }?>
	</div>
<?php 
$ad_45=getads(45,2);
?>
	<div class="ad_bottom">
		<div class="w595 fl"><a href="<?=$ad_45[0]['link']?>"><img src="<?=$ad_45[0]['img']?>" width="100%" alt="<?=$ad_45[0]['title']?>" /></a></div>
		<div class="w595 fl"><a href="<?=$ad_45[1]['link']?>"><img src="<?=$ad_45[1]['img']?>" width="100%" alt="<?=$ad_45[1]['title']?>" /></a></div>
	</div>
</div>
<div id="links" class="x_margin">
	<p>友情链接：<?php foreach($links as $k=>$v) {?><a href="<?=$v['linkurl']?>"><?=$v['title']?></a><?php }?></p>
</div>

<div id="home_ad">
<a onclick="hide_ad()" class="close"></a>
<?php $ad_46=getads(46,1);
foreach($ad_46 as $k=>$v) {
?>
	<a href="<?=$v['link']?>"><img src="<?=$v['img']?>" width="100%" alt="<?=$v['title']?>" /></a>
<?php }?>
</div>

<script type="text/javascript">
var Cookie = {};
Cookie.set = function(name,value,exptime,path,domain){
    var exp  = new Date();
    exp.setTime(exp.getTime() + exptime*1000);
	if(!path) path='/';
	cookiestr = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
	cookiestr+=';path='+path;
	if(domain) cookiestr+=';domain='+domain;
    document.cookie = cookiestr;
}
Cookie.get = function(name){
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) return unescape(arr[2]); return null;
}
$(function(){
	var al = Cookie.get('home_ad');
	if(!al)$('#home_ad').show();
})
function hide_ad(){
	$('#home_ad').hide();
	Cookie.set('home_ad', 'close',86400);
}

</script>
<?php include T('seller_admin','footer');?>