<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size:100%;font-size: 18px;}
	.head{background-color: #fff;}
	.sc-list{float:left;width: 100%;height: 150px;margin-bottom:20px;background-color: #fff;font-size: 18px;}
	.sc-list img{float: left;width: 30%;padding: 10px;}
	.sc-pro-info{float: left;width: 50%;}
	.sc-pro-info p{margin-top: 35px;}
	.price{color: #FE8F01;font-weight: bold;}
	.old-price{text-decoration:line-through;font-size: 16px;color: #cccccc;font-weight: bold;}
	.add-cart{float: left;width:10%;margin-top: 100px;}
	.add-cart img{float: left; width: 90%;padding: 0px;}
	.sc-footer{position: fixed;bottom: 0;height: 60px;width: 100%;background-color: #ffffff;border-top:1px solid #aed13f;}
	.cart {display: block;width: 100px;height: 100px;position: fixed;bottom: 5px;right: 10px;background: url(/static/img/wap/cart.png) no-repeat center #aed13f;background-size: 70% auto;border-radius: 50%;}
	.dot {display: block;width: 30px;height: 30px;border-radius: 50%;background-color: #fe8f00;float: right;text-align: center;color: #fff;line-height: 30px;font-size: 18px;}
	.sc-footer ul{width: 90%;}
	.sc-footer ul, li{float: left;text-align: center;list-style-type: none;font-size: 20px;}
	.sc-type{width: 40%;height: 60px;line-height: 60px;}
	.sc-line{height: 60px;line-height: 60px;color: #AED13F;font-size: 40px;}
	.choice{color: #fe8f00;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">我的收藏</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
	<?php foreach($favgoods as $k=>$v) {
		$goods=$db->get_One('select * from `web_shop_goods` where id='.$v['dataid']);
	?>
		<div class="sc-list">
			<img src="<?=$goods['thumb']?>">
			<div class="sc-pro-info">
				<p><?=$goods['title']?></p>
				<p>
					<span class="price">￥<?=$goods['price']?></span>
					<span class="old-price">￥<?=$goods['oldprice']?></span>
				</p>
			</div>
			<div class="add-cart">
				<a onclick="addcart(<?=$goods['id']?>)">
					<img src="/static/img/wap/sc_gwc.png">
				</a>
			</div>
		</div>
	<?php }?>
		<div class="sc-footer">
			<ul>
				<li class="sc-type"><a class="choice" href="/home/mark.html" class="sel">收藏的商品</a></li>
				<li class="sc-line">|</li>
				<li class="sc-type"><a href="/home/mark.html?org=shop">收藏的店铺</a></li>
			</ul>
			<a href="/cart.html" class="cart"><span class="dot"><?php echo $cartCount; ?></span></a>
		</div>
	
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	function addcart(id){
		$.ajax({
			type:'post',
			url:'/ajax.html?a=addcart',
			data:{'id':id,'num':1},
			success:function(d){
				if (d=='mok'){
					layer.msg('已成功添加到购物车');
					var count = parseInt($('.dot').text());
					count ++;
					$('.dot').text(count);
				} else {
					layer.msg('添加失败，请重试');
				}
			}
		});		
	}

</script>