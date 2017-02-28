<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	.order-menu{height: 50px;width: 100%;border-bottom: 1px solid #D6D6D6;float: left;background-color: #fff;padding-bottom: 2px;}
	.order-menu ul{margin-left: -40px;margin-top: 0px;height: 50px;line-height: 50px;}
	.order-menu ul li{float: left;list-style-type:none;width:24%;margin-left:1%;font-size: 18px;text-align: center;height: 100%;}
	.menu-checked{border-bottom: 2px solid #FF9000;color: #FF9000;}
	.order-list{width:100%;margin-top: 15px;background-color: #fff;float: left;border-top: 1px solid #DEDEDE;border-bottom: 1px solid #DEDEDE;}
	.order-shop-name{height: 50px;font-size: 18px;line-height: 50px;}
	.order-shop-logo{float: left;padding: 10px;height: 25px;}
	.order-shop-logo img{width: 30px;}
	.order-type{float: right;font-size: 18px;color: #FF9000;margin-right: 10px;}
	.product-info{float: left;height: 150px;width:100%;background-color: #F5F5F5;padding-top: 10px;padding-bottom: 10px;margin-bottom: 5px;}
	.product-img{float: left;width: 150px;margin-left: 15px;margin-right: 10px;}
	.product-img img{width: 150px;}
	.product-title{float: left;font-size: 14px;width: 40%;}
	.product-title p{float: left;}
	.product-price{float: right;font-size: 14px;font-weight: bold;margin-right: 15px;}
	.true-price{color: #FF9207;}
	.old-price{color: #999999;text-decoration:line-through}
	.product-num{color: #999999;}
	.product-total{float:left;height: 30px;width: 100%;font-size: 14px;text-align: center;line-height: 30px;}
	.product-button{float: left;width: 100%;height: 40px;margin-top: 10px;}
	.product-button a{font-size: 14px;padding: 5px;height: 20px;line-height: 20px;}
	.ckwl{float: right;height: 30px; line-height: 30px;border: 1px solid #D6D6D6;margin-right: 15px;background-color: #fff;border-radius: 5px;}
	.qrsh{float: right;height: 30px; line-height: 30px;background: #FF9000;margin-right: 15px;border: 1px solid #FF9000;border-radius: 5px;color: #fff;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">我的订单</div>
		</div>
		<div class="order-menu">
			<ul>
				<li <?php if (!$_GET['org']) {echo 'class="menu-checked"';}?>><a href="/home/order.html">全部</a></li>
				<li <?php if ($_GET['org'] == 'dfk') {echo 'class="menu-checked"';}?>><a href="/home/order.html?org=dfk">待付款</a></li>
				<li <?php if ($_GET['org'] == 'dfh') {echo 'class="menu-checked"';}?>><a href="/home/order.html?org=dfh">待收货</a></li>
				<li <?php if ($_GET['org'] == 'ysh') {echo 'class="menu-checked"';}?>><a href="/home/order.html?org=ysh">待评价</a></li>
			</ul>
		</div>
		<?php foreach($order as $k=>$v){?>
			<?php foreach($_carts[$k] as $kk=>$vv){
				$cart_info=$db->get_One('select * from `web_shop_goods_cart` where oid='.$v['id'].' and gid='.$vv['gid'].' and userid='.$v['userid']);
				if($cart_info['dili_sta']==1){
					$ex_infos=$db->get_One('select * from `web_express_info` where oid='.$vv['oid'].' and gid='.$vv['gid']);
				}
				$shopid=$db->get_One('select userid, oldprice, price from `web_shop_goods` where id='.$vv['gid']);
				$shopname=$db->findOne('select title from `web_shop` where userid='.$shopid['userid']);
			?>
			<div class="order-list">
				<div class="order-shop-name">
					<div class="order-shop-logo"><img src="/static/img/wap/shop_logo.png"></div>
					<div style="float:left;"><?=$shopname?$shopname:'平台自营';?></div>
					<div class="order-type"><?php if($v['status']==1){echo '待支付';}else{echo '已支付';}?></div>
				</div>
				<div class="product-info">
					<div class="product-img">
						<img src="<?=$goods[$vv['gid']]['thumb']?>">
					</div>
					<div class='product-title'>
						<p><?=$goods[$vv['gid']]['title']?></p>
						<p style="color:#9A9A9A;"></p>
					</div>
					<div class="product-price">
						<p class="true-price"><span>￥</span><?=$shopid['price']?></p>
						<p class="old-price"><span>￥</span><?=$shopid['oldprice']?></p>
						<p class="product-num"><span>x</span><?=$vv['num']?></p>
					</div>
				</div>
				<div class="product-total">
					共1件商品 合计：￥<?=$v['fee']?> (含运费￥<?=$v['trans_fee']?>)
				</div>
				<div class="product-button">
					<?php if ($v['status'] == 1) {?>
						<a href="/order/<?=$v['id']?>.html"  class="qrsh">立即支付</a>
					<?php } else if ($v['status'] == 2) {?>
						<a onclick="recive(<?=$vv['gid']?>,<?=$v['id']?>)"  class="qrsh">确认收货</a>
						<a href="https://m.kuaidi100.com/" target="_blank" class="ckwl">查看物流</a>
					<?php } else if ($v['status']==4&&$v['rate']==0) {?>
						<a href="/home/comment.html?c=fbpl&oid=<?=$v['id']?>"  class="qrsh">评价</a>
						<a href="/home/active.html?oid=<?=$v['id']?>" target="_blank" class="ckwl">申请退款</a>
						<!--<a href="https://m.kuaidi100.com/" target="_blank" class="ckwl">删除订单</a>-->
					<?php }?>
				</div>
			</div>
			<?php }?>
		<?php }?>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	function recive(gid,oid){
		layer.confirm('您确认已收到货并且货品完好？', {
			btn: ['我确认','取消']
		}, function(){
			$.ajax({
				type:'post',
				url:'/home/active.html?c=recive',
				data:{'gid':gid,'oid':oid},
				success:function(r){
					if(r=='ok'){
						layer.alert('确认收货成功！');
					}else{
						layer.alert(r);
					}
					setTimeout(function(){window.location.reload(true);},1200);
				}
			})
		})
	}
</script>