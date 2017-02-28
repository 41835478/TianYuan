<?php include T('seller_admin','header');?>
<script type="text/javascript" src="/static/plugin/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/static/plugin/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="/static/plugin/fancybox/jquery.fancybox.css?t=1266"/>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right"></i> <?=$catenav?>  <i class="fa fa-angle-right" aria-hidden="true"></i> <?=$info['title']?></p>
</div>
<style type="text/css">
.MagicZoomPup {border: 1px solid #aaa;background: #fff;cursor: hand;left: 0;}
#photo_box{width:360px;position:relative;height:440px;}
#showAreaImage{width:360px;height:360px;overflow:hidden;margin:0 auto;position:relative;}
#showBigImage{width:400px;height:400px;overflow:hidden;background-color:#fff;border:1px solid #e4e4e4;position:absolute;top:0;left:100%;z-index:99;display:none}
#showBigImageInner{width:800px;height:800px;overflow:hidden;position:absolute;left:0;top:0}
#showAreaImage img{width:100%;overflow:hidden;}
#main_img_area{position:absolute;top:0;left:0;right:0;height:350px;z-index:20;cursor:pointer;}
#showArea{width:350px;height:60px;overflow:hidden;margin:0 auto;padding:15px 1px 2px 1px ;}
#showAreaBar{width:175px;height:175px;overflow:hidden;display:none;position:absolute;z-index:10;top:0;left:0;background-color:#666;filter:alpha(opacity=50);-moz-opacity:0.5;opacity:0.5;}
#showAreaBar i{display:inline-block;position:absolute;left:1px;top:1px;bottom:1px;right:1px;background-color:#FEDE4F;}
#showArea ul{}
#showArea ul li{width:50px;height:50px;border:2px solid #fff;float:left;margin-right:9px;box-shadow: 0px 0px 2px #ccc;-moz-box-shadow:0px 0px 2px #ccc}
#showArea ul li.hover{border-color:red}	
</style>
<div id="main" class="cont">
	<div id="left_con">
		<div id="top_zone">
			<div id="goods_thumb">
				<div id="photo_box">
					<div id="showAreaImage">
						<img src="<?=str_replace('_real','_350_350',$photos[0]['thumb'])?>" rel="<?=$photos[0]['thumb']?>" id="main_img" class="main_img" />
						<div id="showAreaBar"><i></i></div>
						<div id="main_img_area"></div>
					</div>
					<div id="showArea">
						<ul>
				<?php foreach($photos as $k=>$v) {?>
							<li rel="MagicZoom" class="tsSelectImg<?=$k<1?' hover':''?>"><img height="50" width="50" src="<?=str_replace('_real','_50_50',$v['thumb'])?>" rel="<?=$v['thumb']?>" /></li>
				<?php }?>
						</ul>
					</div>
					<div id="showBigImage"><div id="showBigImageInner" style="background:url('<?=$photos[0]['thumb']?>') no-repeat"></div></div>
				</div>
				<div class="meta">
					<span class="share">分享</span>
					<span class="mark" onclick="fav(<?=$id?>)">收藏商品</span>
					<span class="fr" style="color:#999" onclick="report(<?=$id?>)">举报</span>
					<div class="share-pop" style="display: none;">
						<div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1429338652454"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
						<script>with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)]; </script>
					</div>
				</div>
				
			</div>
<style type="text/css">
.quan_bar{
	font-size:14px;
	line-height:25px;
	height:25px;
	background: url('/static/img/quan.png') no-repeat center left;
	padding-left: 65px;
	margin-bottom: 5px;
}
.quan_bar a{
	display: block;
	width:100%;
	height: 25px;
	cursor: pointer;
}
.quan_arrow{
	width:25px;
	height: 25px;
	background: url('/static/img/quan_arrow.png') no-repeat center;
	cursor: pointer;
}
#get_quan{
	font-size: 15px;
	padding: 30px;
	display:none; 
}
.get_quan_btn{
	display: block;
	width: 150px;
	height: 50px;
	text-align: center;
	font-size: 16px;
	line-height: 50px;
	color: #fff;
	margin: 0 auto;
	background-color: #599f00;
	border-radius: 5px;
	margin-top: 30px;
	cursor: pointer;
}
a.get_quan_btn:hover{
	color:#fff;
}
</style>
<script type="text/javascript">
function report(gid){
	if(confirm("确定要举报该商品吗?")){ 
		layer.prompt({
			title: '输入要回复的内容 50字左右',
			formType: 0 
		}, function(txt){
			$.ajax({
				type:'post',
				url:'/home/comment.html?c=reply',
				data:{'cid':id,'reply':txt},
				success:function(r){
					if(r=='ok'){
						layer.alert('回复成功');
					}else{
						layer.alert(r);
					}
					setTimeout(function(){window.location.reload(true);},1200);
				}
			});
		});
	};
}
function get_quan(id){
	var name=$('#quan_'+id).html();
	$('#get_quan').html('<h2>'+name+'</h2><a onclick="active_quan('+id+')" class="get_quan_btn">立即领取</a>');
	layer.open({
		type: 1,
		title:'领取优惠券',
		skin: 'layui-layer-rim', //加上边框
		area: ['420px', '240px'], //宽高
		content: $('#get_quan')
	});
}
function active_quan(id){
	<?php if(empty($_userid)){?>
		layer.alert('您还没有登录！');
		window.location.href="/login.html";
		return false;
	<?php }?>
	$.ajax({
		type:'post',
		url:'/ajax.html?a=quan',
		data:{'id':id},
		success:function(d){
			layer.alert(d);
			setTimeout(function(){
				window.location.reload();
			},1000);
		}
	});
}
</script>

<div id="get_quan"></div>
			<div id="goods_detail">
				<h2><?=$info['title']?></h2>
				<h3><?=$info['subtitle']?></h3>
				<div class="price_zone">
				<?php foreach ($quan as $q => $u) {?>
					<div class="quan_bar">
						<a onclick="get_quan(<?=$u['id']?>)"><div class="quan_name fl" id="quan_<?=$u['id']?>"><?=$u['title']?></div>
						<span class="quan_arrow fr"></span></a>
					</div>
				<?php }?>
					<p>价&nbsp;&nbsp;&nbsp;&nbsp;格：<span class="price_big">&yen;<?=$info['price']?></span></p>
					<p>原&nbsp;&nbsp;&nbsp;&nbsp;价：<span><s>&yen;<?=$info['oldprice']?></s></span></p>
				</div>
				<div class="extra">
					<p>快&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;递：由 <?=$shop['title']?$shop['title']:'商城自营平台';?> 发货并负责售后服务</p>
					<!--<p>运&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费：<?=$trans_info?></p>-->
					<p class="p-delivery"><span class="s-title">购买数量：</span>
						<span class="s-pro-num" unselectable="on" style="-webkit-user-select:none;-moz-user-select:none;" onselectstart="return false">
							<em class="em-sub" onclick="setAmount.reduce('.txt-num')">-</em>
							<input type="text" class="txt txt-num" name="num" id="buyNum" value="1" onkeyup="setAmount.modify('.txt-num');">
							<em class="em-add" onclick="setAmount.add('.txt-num',<?=$info['num']?>)">+</em>
						</span>
					</p>
					<div class="sale_info">
						<ul>
							<li><p>月销量 <span><?=$info['buy']?></span></p></li>
							<li><p>累计评价 <span><?=$tol?></span></p></li>
							<li><p>送商城积分 <span><?=intval($info['price'])?></span> 分</p></li>
						</ul>
					</div>
					<div class="btn_zone">
						<a id="buy_now" class="buynow">立即购买</a>
						<a id="add_cart" class="addcart">加入购物车</a>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
$('#buy_now').click(function(){
	var ef=$('input.txt-num:first');
	var num=ef.val();
	if (num>0){
		$.ajax({
			type:'post',
			url:'/ajax.html?a=addcart',
			data:{'id':<?=$id?>,'num':num,'fxid':<?=$fxid?>},
			success:function(d){
				window.location.href="/cart.html";
			}
		});
	}else{
		art.dialog.alert('请设置一个购买数量');
	}
});
$('#add_cart').click(function(){
	var ef=$('input.txt-num:first');
	var num=ef.val();
	if (num>0){
		$.ajax({
			type:'post',
			url:'/ajax.html?a=addcart',
			data:{'id':<?=$id?>,'num':num,'fxid':<?=$fxid?>},
			success:function(d){
				if (d=='ok'){
					centerAndShow('cart_tips');
					setTimeout(function(){
						$('#cart_tips b i').css('left','0').animate({'left':'50px'},'slow','swing');
					},400);
				}else if(d=='mok'){
					art.dialog.tips('已成功添加到购物车');
				}else{
					//window.location.reload(true);
				}
			}
		});
	}else{
		art.dialog.alert('请设置一个购买数量');
	}
});
</script>
<div id="cart_tips">
	<div id="cart_inner">
		<h3>商品已成功加入购物车！ <b><i></i></b></h3>
		<div class="cart_btn"><a href="/cart.html" style="color: #fff">去购物车结算</a><span>您还可以 <i onclick="hh('cart_tips')">继续购物</i></span></div>
	</div>
</div>
		<div id="detail_area">
			<div id="leftbar">
				<div class="search_zone ler">
					<p class="ltit">店内搜索</p>
					<p>关键字：<input type="text" id="" /></p>
					<p>价 &nbsp;&nbsp;格：<input type="text" id="" placeholder=" &yen;"/> - <input type="text" id="" placeholder=" &yen;"/></p>
					<p style="padding-left:55px"><button type="button" onclick="filter()" style="padding:2px 5px">确定</button></p>
				</div>
<?php if(!empty($shop)){?>
				<div id="shop_info">
					<h3><?=$shop['title']?></h3>
					<h4 onclick="fav_shop(<?=$info['userid']?>)"><?=$favshop?'取消收藏':'收藏店铺';?></h4>
					<p>公司名称：<?=$shop['title']?></p>
					<p>所在地：<?=$shop['address']?></p>
					<p>联系电话：<?=$shop['tel']?></p>
					<h5><a href="/shop/<?=$info['userid']?>.html">进入店铺</a></h5>
				</div>
<?php }?>				
				<div class="search_zone ler">
					<p class="ltit">店内热销商品</p>
<?php foreach($hot_sale as $k=>$v) {?>
					<div class="left_item">
						<a href="/show/<?=$v['id']?>.html"><img src="<?=$v['thumb']?>" width="100%"/></a>
						<p><?=$v['title']?></p>
						<p><strong>&yen;<?=$v['price']?>元</strong></p>
					</div>
<?php }?>
				</div>
			</div>


			<div id="right_zone">
				<div class="des_tab">
					<p><span class="sel" rel="1">商品详情</span><span rel="2">累计评价</span></p>
				</div>
				<div id="tab_1" class="intro_div">
<?php if(!empty($arr_spec)){?>
					<div class="detail_top">
						<div class="cols">
							<h3>商品属性：</h3>
<?php foreach($arr_spec as $k=>$v) {?>
							<p><?=$v['specname']?>:<?=$v['specval']?></p>
<?php }?>
						</div>
					</div>
<?php }?>
					<div id="good_intro">
						<?=$info['content']?>
					</div>
				</div>
				<div id="tab_2" class="intro_div">
					<div id="comment">
						<h3>商品评价</h3>
						<div class="mc">
							<div id="i-comment">
								<div class="rate">
									<strong><?=$pos_per?><span>%</span></strong>
									<br><span>好评度</span>
								</div>
								<div class="percent">
									<dl>
										<dt>好评<span>(<?=$pos_per?>%)</span></dt>
										<dd> <div style="width: <?=$pos_per?>%;"></div></dd>
									</dl>
									<dl>
										<dt>中评<span>(<?=$neu_per?>%)</span></dt>
										<dd class="d1"><div style="width: <?=$neu_per?>%;"> </div></dd>
									</dl>
									<dl>
										<dt>差评<span>(<?=$neg_per?>%)</span></dt>
										<dd class="d1"><div style="width: <?=$neg_per?>%;"> </div></dd>
									</dl>
								</div>
								<div class="actor">
									<ul></ul>
								</div>
								<div class="btns">
									<div>您可对已购商品进行评价</div>
									<a class="btn-comment" target="_blank">发评价领积分</a>
								</div>
							</div>
						</div>
					</div>
<script type="text/javascript">
$(function(){
	$('.ui-switchable-item').click(function(){
		$(this).siblings().removeClass('curr');
		$(this).addClass('curr');
	});
});
</script>

					<div id="comments-list" class="m">
						<div class="mt">
							<div class="mt-inner m-tab-trigger-wrap clearfix">
								<ul class="m-tab-trigger">
									<li class="ui-switchable-item trig-item curr"><a href="javascript:level('all');">全部评价<em>(<?=$tol?>)</em></a></li>
									<li class="ui-switchable-item trig-item"><a href="javascript:level('positive');">好评<em>(<?=$positive?>)</em></a></li>
									<li class="ui-switchable-item trig-item"><a href="javascript:level('neutral');">中评<em>(<?=$neutral?>)</em></a></li>
									<li class="ui-switchable-item trig-item"><a href="javascript:level('neg');">差评<em>(<?=$negative?>)</em></a></li>
									<li class="ui-switchable-item trig-item"><a href="javascript:level('pic');">有图片的评价<em>(<?=$haspic?>)</em></a></li>
								</ul>
							</div>
						</div>
						<div id="comment-0" class="mc ui-switchable-panel comments-table ui-switchable-panel-selected" style="display: block;">
							<div class="com-table-header">
								<span class="item column1">评价心得</span><span class="item column2">顾客满意度</span><span class="item column3">购买信息</span><span class="item column5">评论者</span>
							</div>
							<div class="com-table-main">
		<?php foreach($comments as $k=>$v){?>
								<div class="comments-item"data-top="">
									<table class="com-item-main clearfix">
									<tbody>
									<tr>
										<td class="com-i-column column1">
											<div class="p-comment">
												<span class="desc"><?=$v['content']?></span>  <b class="time"><?=date('Y-m-d H:i',$v['addtime'])?></b>
											</div>
		<?php if(!empty($thumbs[$v['id']])){?>
											<div class="J-p-show-img p-show-img clearfix"><table>
												<tbody>
													<tr>
		<?php foreach($thumbs[$v['id']] as $kk=>$vv){?>
														<td>
														<a class="J-show-more-pic comment-show-pic-wrap fancybox_pics" data-ind="0" href="<?=$vv['thumb']?>" data-href="" data-fancybox-group="lb" data-original="<?=$vv['thumb']?>"> 
														<img src="<?=str_replace('_real','_60_80',$vv['thumb'])?>" alt="相关图片"></a>
														</td>
		<?php }?>
													</tr>
												</tbody>
											</table><span class="show-number">共<?=count($thumbs[$v['id']])?>张图片</span>
											</div>
		<?php }?>
										</td>
										<td class="com-i-column column2">
											<div class="grade-star g-star<?=$v['star']?>">&nbsp;</div>
										</td>
										<td class="com-i-column column3">
											<div class="type-item">
												
											</div>
											<div class="type-item">
		<?php
		$extra=unserialize($ids[$v['gid']]['extra']);
			if(!empty($all_extra_rel)){foreach($all_extra_rel[$spid] as $ke=>$ve) {
				if(isset($extra[$ve['id']])){?>
												<span class="label"><?=$ve['cname']?>：</span><span class="text"><?=implode('',$extra[$ve['id']])?></p>
		<?php } } }?>
											</div>
										</td>
										<td class="com-i-column column5">
											<div class="user-item">
												<span class="user-name">
													<?php 
													if($v['mm']==1){
														$num=mb_strlen($_pe[$v['userid']]['nickname'],'utf-8');
														$f=mb_substr($_pe[$v['userid']]['nickname'],0,1,'utf-8');
														$l=mb_substr($_pe[$v['userid']]['nickname'],$num-1,1,'utf-8');
														echo $f.'***'.$l;
													}else{
														echo $_pe[$v['userid']]['nickname'];
													} ?>
												</span>
											</div>
											<div class="user-item">
												<span class="u-vip-level" style="color:#ff0000">
													<?php
													$myscore=$_pe[$v['userid']]['score'];
													$areaid=$_pe[$v['userid']]['areaid'];
													$areaname=getFullArea($all_area,$areaid,' ');
													if(empty($myscore)){
														$myscore=0;
													}
													if($myscore<1){
														$lev='注册会员';
													}elseif($myscore>1&&$myscore<99){
														$lev='铜牌会员';
													}elseif($myscore>99&&$myscore<499){
														$lev='银牌会员';
													}elseif($myscore>499){
														$lev='金牌会员';
													};
													echo $lev;
													?>
												</span><span class="u-addr"><?=$areaname?></span>
											</div>
											<div class="user-item">
												<span class="buy-time"><?=date('Y-m-d H:i',$_ords[$v['cid']]['addtime'])?> 购买</span>
											</div>
										</td>
									</tr>
									</tbody>
									</table>
									
									
								</div>
		<?php }?>
							</div>
							<div class="com-table-footer">
								<div class="ui-page-wrap clearfix">
									<div class="ui-page"><?=str_replace('href','onclick',$pagestr)?></div>
								</div>
							</div>
						</div>
						<div id="comment-1" class="mc none ui-switchable-panel comments-table" style="display: none;">
							<div class="loading-style1">
								<b></b>加载中，请稍候...
							</div>
						</div>
						<div id="comment-2" class="mc none ui-switchable-panel comments-table" style="display: none;">
							<div class="loading-style1">
								<b></b>加载中，请稍候...
							</div>
						</div>
						<div id="comment-3" class="mc none ui-switchable-panel comments-table" style="display: none;">
							<div class="loading-style1">
								<b></b>加载中，请稍候...
							</div>
						</div>
						<div id="comment-4" class="mc none ui-switchable-panel comments-table" style="display: none;">
							<div class="loading-style1">
								<b></b>加载中，请稍候...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="right_con">
		<h3>同类推荐</h3>
<?php foreach($tj_item as $k=>$v) {?>
		<div class="tj_item">
			<a href="/show/<?=$v['id']?>.html"><img src="<?=$v['thumb']?>" width="100%"/></a>
			<p><?=$v['title']?></p>
			<p class="price">&yen; <?=$v['price']?></p>
		</div>
<?php }?>
	</div>
</div>
<script type="text/javascript" src="/static/js/mall.js"></script>
<script type="text/javascript">
$(".share").click(function(){
	$(".share-pop").toggle();
});
$('.des_tab span').click(function(){
	var e=$(this);
	var id=e.attr('rel');
	$('.des_tab span').removeClass('sel');
	e.addClass('sel');
	$('.intro_div').hide();
	$('#tab_'+id).show();
});


var relid=$('.bar_list li.selected').attr('rel');
var Show_main='<?=$show_main?>';
var UID=<?=$uid?>;
var Gid=<?=$id?>;
var USERID=<?=$_userid?>;
var lev='all';
function replay_func(i){
<?php if(!$_userid){?>
		window.location.href="/login.html";
<?php }else{?>
		var e=$(i);
		e.parent().find('.J-reply-con').toggle();
		e.parent().siblings('.comment-replylist').toggle();
		var name=e.attr("rel");
		e.siblings('.reply-textarea').find('.reply-input').attr('placeholder','回复 '+name+'：');
<?php }?>
}

$(function(){
	//点击图片出现fancybox样式
	$(".fancybox_pics").fancybox({
		nextClick:true,
		closeBtn  : true,
		openEffect  : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',
		helpers : {
			title : {
				type : 'inside'
			},
			buttons	: {}
		},
		afterLoad : function() {}
	});
});

function page(e){
	var rel=$(e).attr('rel');
	var urll='/'+Gid+'.html?c=level';
	$.ajax({
		type:'post',
		url:urll,
		data:{'ty':lev,'page':rel},
		async:false,
		success:function(d){
			$('.com-table-main').remove();
			$('.com-table-footer').remove();
			$('.comments-table').append(d);
		}
	});
}
</script>
<?php include T('seller_admin','footer');?>