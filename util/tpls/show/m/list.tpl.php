<?php include T('show/m','header');?>
<style type="text/css">
.bar{height:120px;min-height:0;overflow:hidden;text-align: center;font-size: 28px;color:#abd140;background-color: #fff;position: relative;}
.arrow{display: block;position: absolute;top:0;left:10px;width:80px;height:120px;background:url('/static/img/arrow.jpg') no-repeat center;background-size: 60px auto;}
.empty{min-height:120px;padding-top: 380px;background:url('/static/img/empty.jpg') no-repeat center;background-size: 150px auto;text-align: center;font-size: 24px;color:#666;}
.btn{width:200px;height: 60px;border-radius: 10px;border:1px solid #abd140;display: block;margin: 0 auto;margin-bottom: 20px;}
a.btn{font-size: 24px;line-height: 60px;color:#abd140;}
.ser{background-color: #abd140}
a.ser{color:#fff;}
.search{position:absolute;top:10px;left:100px;}
.result{display:block;position:absolute;top:70px;left:100px;color:#999}
#main_list{min-height:0;overflow:hidden;padding-bottom:100px;}
#main_list ul li{height:180px;padding:15px;margin-top:5px;background-color:#fff;position:relative;}
#main_list ul li .thumb{width:180px;height:180px;float:left;}
.list_info{width:400px;float:left;margin-left:15px;font-size:24px;}
.list_info h2{font-size:26px;margin-bottom:5px;}
.list_info h2 a{color:#555}
.list_info h3{font-size:24px;color:#fe8f12;width:400px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;margin-bottom:20px;}
.list_info p{color:#999}
.list_info p span{color:#fe8f12;font-size:26px;margin-right:20px;}
.list_info .cart{width:60px;height:60px;position:absolute;bottom:10px;right:20px;display:block;background:url('/static/img/m/cart.jpg') no-repeat center;background-size:100% auto}
.cart{display:block;width:150px;height:150px;position:fixed;bottom:100px;right:20px;background:url('/static/img/m/cart.png') no-repeat center #aed13f;background-size:100px auto;border-radius:50%;}
.dot{display:block;width:40px;height:40px;border-radius:50%;background-color:#fe8f00;float:right;text-align:center;color:#fff;line-height:40px;font-size:24px;}
</style>
<div class="bar">
	<a class="arrow" onclick="javascript:history.go(-1);"></a>
	<div class="search"><input type="text" name="s_key" value="<?=$_GET['key']?>"><a class="s_btn s_search"></a></div>
	<span class="result">共搜到<?=$nums['num']?>种产品</span>
</div>
<div id="main_list">
	<ul>
<?php foreach($list as $k=>$v) {?>
		<li>
			<div class="thumb"><a href="/show/<?=$v['id']?>.html"><img src="<?=$v['thumb']?>" width="100%"/></a></div>
			<div class="list_info">
				<h2><a href="/show/<?=$v['id']?>.html"><?=$v['title']?></a></h2>
				<h3><?=$v['subtitle']?></h3>
				<p><span>&yen;<?=$v['price']?></span> <s>&yen;<?=$v['oldprice']?></s></p>
				<span class="cart" onclick="add_cart(<?=$v['id']?>)"></span>
			</div>
		</li>
<?php }?>
	</ul>
</div>
<script type="text/javascript">
function add_cart(id){
	var num=$('.dot').html();
	$.ajax({
		type:'post',
		url:'/ajax.html?a=addcart',
		data:{'id':id,'num':1},
		success:function(d){
			if (d=='ok'){
				$('.dot').html(parseInt(num)+1);
				alert('已成功添加到购物车');
			}
		}
	});	
}
</script>
<a href="/cart.html" class="cart"><span class="dot"><?=$cartnum?></span></a>
<div id="fix_menu">
	<ul>
		<li>
			<a href="/">
				<span class="ico"><img src="/static/img/ico-0.jpg" height="100%"></span>
				<p>首页</p>
			</a>
		</li>
		<li class="sel">
			<a href="/allcate.html">
				<span class="ico"><img src="/static/img/ico-22.jpg" height="100%"></span>
				<p>分类</p>
			</a>
		</li>
		<li>
			<a href="/cart.html">
				<span class="ico"><img src="/static/img/ico-3.jpg" height="100%"></span>
				<p>购物车</p>
			</a>
		</li>
		<li>
			<a href="/?m=admin">
				<span class="ico"><img src="/static/img/ico-4.jpg" height="100%"></span>
				<p>个人中心</p>
			</a>
		</li>
	</ul>
</div>
<?php include T('show/m','footer');?>
<script type="text/javascript">
	$('.s_search').click(function() {

		var key = $('input[name="s_key"]').val();
		window.location.href="/search.php?key="+key;
	});
</script>