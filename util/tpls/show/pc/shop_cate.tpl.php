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
			<li><a href="/shop/<?=$uid?>.html">店铺首页</a></li>
			<li id="show_sub">
				<a id="all_menu">全部分类</a>
			</li>
<?php foreach($shop_menus as $k=>$v) {?>
			<li><a href="<?=$v['url']?>"><?=$v['title']?></a></li>
<?php }?>
			<?php if(empty($care)){?><li><a onclick="fav_shop(<?=$uid?>)">收藏店铺</a></li><?php }?>
		</ul>
	</div>
</div>

<div id="main" class="cont" style="position:relative;padding-top: 30px">
	<div class="shop_sub">
		<ul>
<?php foreach ($shop_cate as $k => $v) {?>
			<li>
				<p><a href="/<?=$uid?>/cate/<?=$v['id']?>.html"><?=$v['name']?></a></p>
				<?php foreach ($v['sub'] as $s => $r) {?>
				<p><a href="/<?=$uid?>/cate/<?=$r['id']?>.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> <?=$r['name']?></a></p>
				<?php }?>
			</li>
<?php }?>
		</ul>
	</div>
	<div class="filter_bar">
		<div class="f-sort">
			<div class="sort">
				<ul>
					<li class="default <?php if(empty($og)){?>curr<?php }?>"><a href="/<?=$uid?>/cate/<?=$catid?>.html">综合</a><i></i></li>
					<li class="default <?php if($og=='price'){?>curr<?php }?>"><a href="/<?=$uid?>/cate/<?=$catid?>.html?og=price&tp=<?=$tp==1?2:1;?>">价格</a><i <?php if($tp==2){?>class="za"<?php }?>></i></li>
					<li class="default <?php if($og=='sale'){?>curr<?php }?>"><a href="/<?=$uid?>/cate/<?=$catid?>.html?og=sale">销量</a><i></i></li>
					<li class="default <?php if($og=='env'){?>curr<?php }?>"><a href="/<?=$uid?>/cate/<?=$catid?>.html?og=env">环保等级</a><i></i></li>
				</ul>
			</div>
			<div class="pagin"><?=$pagestr?></div>
			<div class="total">
				共<span><?=$nums['num']?></span>个商品
			</div>
		</div>
	</div>
	<div id="goods_list">
		<div class="p-list">
    		<ul class="list-all">
<?php foreach($list as $k=>$v) {?>
        	    <li>
					<div class="l-wrap">
						<div class="pic">
							<a target="_blank" href="/show/<?=$v['id']?>.html" class="trackref"> 
								<img src="<?=$v['thumb']?>" alt="<?=$v['title']?>">
							</a>
						</div>
						<div class="price">
							<span>
								<span class="p-now"><strong>￥<?=$v['price']?></strong></span>
								<span class="p-nor">￥<?=$v['oldprice']?></span>
								<span class="active"></span>
							</span>
						</div>
						<div class="title-a">
							<a title="<?=$v['title']?>" target="_blank" href="/show/<?=$v['id']?>.html" class="trackref"><?=$v['title']?></a>
						</div>
						<p style="color:#999;font-size:12px;margin-top:10px">山东<span class="fr">包邮</span></p>
					</div>
					<div class="action">
						<a onclick="addcart(<?=$v['id']?>)">加入购物车</a>
						<a href="/show/<?=$v['id']?>.html">查看详情</a>
					</div>
				</li>
<?php }?>				
            </ul>
			<div style="clear:both"></div>
		</div>
		<div id="right_con" style="margin-right:10px">
			<h3>同类推荐</h3>
<?php if(!empty($tj_item)){foreach($tj_item as $k=>$v) {?>
			<div class="tj_item">
				<a href="/show/<?=$v['id']?>.html"><img src="<?=$v['thumb']?>" width="100%"/></a>
				<p><?=$v['title']?></p>
				<p class="price">&yen; <?=$v['price']?></p>
			</div>
<?php }}?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('ul.list-all li').mouseover(function(){
			$(this).addClass('curr');
			$(this).find('.action').show();
		})
		$('ul.list-all li').mouseleave(function(){
			$(this).removeClass('curr');
			$(this).find('.action').hide();
		})
	})
function addcart(id){
	$.ajax({
		type:'post',
		url:'/ajax.html?a=addcart',
		data:{'id':id,'num':1},
		success:function(d){
			if (d=='ok'){
				art.dialog.tips('已成功添加到购物车');
			}
		}
	});		
}
		
</script>  
<?php include T('seller_admin','footer');?>