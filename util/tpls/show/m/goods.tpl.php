<?php include T('show/m','header');?>
<style type="text/css">
img{max-width:100%}
.bar{line-height:80px;text-align: center;font-size: 28px;color:#abd140;background-color: #fff;position: relative;}
.arrow{display: block;position: absolute;top:0;left:10px;width:80px;height:80px;background:url('/static/img/arrow.jpg') no-repeat center;background-size: 60px auto;}
.empty{min-height:120px;padding-top: 380px;background:url('/static/img/empty.jpg') no-repeat center;background-size: 150px auto;text-align: center;font-size: 24px;color:#666;}
.btn{width:200px;height: 60px;border-radius: 10px;border:1px solid #abd140;display: block;margin: 0 auto;margin-bottom: 20px;}
a.btn{font-size: 24px;line-height: 60px;color:#abd140;}
.ser{background-color: #abd140}
a.ser{color:#fff;}

#main{min-height:0;overflow:hidden;background-color:#fff;padding:20px;}

#main p{font-size:24px;line-height:40px;color:#666}
#main p span{color:#f47d13;margin-right:30px;font-size:26px;}

#fix_cart{width:640px;height:80px;position:fixed;bottom:0;left:50%;margin-left:-320px;background-color:#f2f2f2;z-index:999}
.cart{display:block;float:right;margin-right:20px;margin-top:5px;width:70px;height:70px;background:url('/static/img/m/cart.png') no-repeat center #aed13f;background-size:35px auto;border-radius:50%;}
.dot{display:block;width:25px;height:25px;border-radius:50%;background-color:#fe8f00;float:right;text-align:center;color:#fff;line-height:25px;font-size:20px;}
.num_zone{width:250px;float:left;margin:15px;text-align:center;}
.num_zone a{font-size:30px;color:#ff9000;line-height:50px;display:inline-block;width:50px}
.num_zone input{font-size:24px;line-height:40px;color:#ff9000;padding:5px;border:1px solid #ff9000;width:80px;border-radius:5px;-webkit-border-radius:5px;text-align:center;background-color:#f2f2f2;}
.add_btn{width:150px;height:50px;margin-top:15px;text-align:center;background-color:#ff9000;border-radius:5px;-webkit-border-radius:5px;color:#fff;line-height:50px;font-size:24px;}
.swiper-container {
	width: 100%;
	height: 100%;
}
.swiper-slide {
	background-position: center;
	background-size:cover;
}
#photo{width:640px;height:640px;margin:0 auto;}
</style>
<div class="bar">
	<a class="arrow" onclick="javascript:history.go(-1);"></a>商品详情
</div>
<link href="//cdn.bootcss.com/Swiper/3.4.1/css/swiper.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/Swiper/3.4.1/js/swiper.jquery.min.js"></script>
<div id="photo" class="swiper-container">
	<div class="swiper-wrapper">
<?php foreach($photos as $k=>$v) {?>
		<div class="swiper-slide" style="background-image:url(<?=$v['thumb']?>)"></div>
<?php }?>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination swiper-pagination-white"></div>
	<!-- Add Arrows -->
	<div class="swiper-button-next swiper-button-white"></div>
	<div class="swiper-button-prev swiper-button-white"></div>
</div>
<script>
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	spaceBetween: 30,
	effect: 'slide',
	autoplay : 2000,
});
</script>
<div id="main">
	<p><?=$info['title']?></p>
	<p><?=$info['subtitle']?></p>
	<p><span>促销价：&yen;<?=$info['price']?></span>原价：<s>&yen;<?=$info['oldprice']?></s></p><br>
	<p>快递：由 <?=$shop['title']?$shop['title']:'商城自营平台';?> 发货并负责售后服务</p>
	<div class="content">
		<?=$info['content']?>
	</div>
</div>
<div id="fix_cart">
	<div class="num_zone">
		<a class="em-sub" onclick="setAmount.add('.txt-num',<?=$info['num']?>)"><i class="fa fa-plus" aria-hidden="true"></i></a>
		<input type="text" class="txt txt-num" name="num" id="buyNum" value="1" onkeyup="setAmount.modify('.txt-num');"/>
		<a class="em-add" onclick="setAmount.reduce('.txt-num')"><i class="fa fa-minus" aria-hidden="true"></i></a>		
	</div>
	<a id="add_cart" class="add_btn fl">加入购物车</a>
	<a href="/cart.html" class="cart"><span class="dot"><?=$cartnum?></span></a>
</div>
<script type="text/javascript">
$('#add_cart').click(function(){
	var ef=$('input.txt-num:first');
	var num=ef.val();
	if (num>0){
		$.ajax({
			type:'post',
			url:'/ajax.html?a=addcart',
			data:{'id':<?=$id?>,'num':num,'fxid':<?=$fxid?>},
			success:function(d){
				if (d=='mok'){
					alert('已成功添加到购物车');
				}
				setTimeout(function(){window.location.reload(true);},500);
			}
		});
	}else{
		alert('请设置一个购买数量');
	}
});
var setAmount = {}
setAmount.add = function(idstr, max_num) {
	var e = $(idstr);
	var ev = parseInt(e.first().val(), 10);
	if (ev == max_num) {
		return false;
	}
	ev = Math.max(1, ev);
	ev += 1;
	e.val(ev);
};
setAmount.reduce = function(idstr) {
	var e = $(idstr);
	if (e.length > 1) {
		var ev = parseInt(e.first().val(), 10);
	} else {
		var ev = parseInt(e.val(), 10);
	}
	ev -= 1;
	ev = Math.max(1, ev);
	e.val(ev);
};
setAmount.modify = function(idstr) {
	var e = $(idstr);
	var ev = parseInt(e.val(), 10);
	if (typeof(ev) != 'Number') {
		ev = 1;
	}
	ev = Math.max(1, ev);
	e.val(ev);
};
</script>

<?php include T('show/m','footer');?>