<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/">首页</a> <i class="fa fa-angle-right"></i> <?=$catenav?> </p>
</div>
<div id="main" class="cont">
	<div class="filter_bar">
		<div class="f-sort">
			<div class="sort">
				<ul>
					<li class="default <?php if(empty($og)){?>curr<?php }?>"><a href="/list/<?=$cateid?>.html">综合</a><i></i></li>
					<li class="default <?php if($og=='price'){?>curr<?php }?>"><a href="/list/<?=$cateid?>.html?og=price&tp=<?=$tp==1?2:1;?>">价格</a><i <?php if($tp==2){?>class="za"<?php }?>></i></li>
					<li class="default <?php if($og=='sale'){?>curr<?php }?>"><a href="/list/<?=$cateid?>.html?og=sale">销量</a><i></i></li>
					<li class="default <?php if($og=='env'){?>curr<?php }?>"><a href="/list/<?=$cateid?>.html?og=env">环保等级</a><i></i></li>
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
						<p style="color:#999;font-size:12px;margin-top:10px">月销量:<?=$v['buy']?><span class="fr">送商城积分:<?=intval($v['price'])?>分</span></p>
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