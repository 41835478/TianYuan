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
	.sc-pro-info p{margin-top: 20px;}
	.price{color: #FE8F01;font-weight: bold;}
	.old-price{text-decoration:line-through;font-size: 16px;color: #cccccc;font-weight: bold;}
	.add-cart{float: left;width:14%;margin-top: 100px;height: 30px;line-height: 28px;text-align: center;border: 1px solid #ccc;border-radius: 10%;}
	.add-cart a{font-size: 12px;padding: 0px;margin: 0px;}
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
	<?php foreach($favshop as $k=>$v) {
		$shop=$db->get_One('select * from `web_shop` where userid='.$v['dataid']);	
		$fav_count=$db->findOne('select count(*) from `web_shop_care` where dataid='.$v['dataid'].' and type=2');
		$nums=$db->findOne('select count(*) from `web_shop_goods` where userid='.$v['dataid']);
	?>
		<div class="sc-list">
			<img src="<?=$shop['logo']?>">
			<div class="sc-pro-info">
				<p><?=$shop['title']?></p>
				<p style="font-size:14px;">
					已有<span class="price"><?=$fav_count?></span>人收藏
				</p>
				<p style="font-size:14px;">
					共有<span class="price"><?=$nums?></span>件商品
				</p>
			</div>
			<div class="add-cart">
				<a onclick="unfa(<?=$v['id']?>)">
					取消关注
				</a>
			</div>
		</div>
	<?php }?>
		<div class="sc-footer">
			<ul>
				<li class="sc-type"><a href="/home/mark.html" class="sel">收藏的商品</a></li>
				<li class="sc-line">|</li>
				<li class="sc-type"><a class="choice" href="/home/mark.html?org=shop">收藏的店铺</a></li>
			</ul>
			<a href="/cart.html" class="cart"><span class="dot"><?php echo $cartCount; ?></span></a>
		</div>
	
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	function unfa(id){
		layer.confirm('您确定要取消收藏此店铺吗？', {
	  		btn: ['确定','取消'] //按钮
		}, function(){
	  		$.ajax({
				type:'post',
				url:'/home/mark.html?org=unfav',
				data:{'id':id},
				success:function(r){
					if(r=='ok'){
						layer.alert('商品取消收藏成功！');
					}else{
						layer.alert(r);
					}
					setTimeout(function(){window.location.reload(true);},1200);
				}
			});
		});
	}

</script>