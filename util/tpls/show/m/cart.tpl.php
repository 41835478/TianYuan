<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	.head{background-color: #fff;}
	.order-list{width:100%;margin-top: 15px;background-color: #fff;float: left;border-top: 1px solid #DEDEDE;border-bottom: 1px solid #DEDEDE;}
	.order-shop-name{height: 50px;font-size: 18px;line-height: 50px;}
	.order-shop-logo{float: left;padding: 10px;height: 25px;}
	.order-shop-logo img{width: 30px;}
	.order-type{float: right;font-size: 18px;color: #FF9000;margin-right: 10px;}
	.product-info{float: left;height: 150px;width:100%;background-color: #F5F5F5;padding-top: 10px;padding-bottom: 10px;margin-bottom: 5px;}
	.product-img{float: left;width: 120px;margin-right: 10px;}
	.product-img img{width: 120px;}
	.product-title{float: left;font-size: 14px;width: 40%;}
	.product-title p{float: left;}
	.product-price{float: left;font-size: 14px;font-weight: bold;}
	.true-price{color: #FF9207;}
	.product-num{color: #999999;}
	.product-total{float:left;height: 30px;width: 100%;font-size: 14px;text-align: right;line-height: 30px;}
	.product-button{float: left;width: 100%;height: 40px;margin-top: 10px;}
	.product-button a{font-size: 14px;padding: 5px;height: 20px;line-height: 20px;}
	.ckwl{float: right;height: 30px; line-height: 30px;border: 1px solid #D6D6D6;margin-right: 15px;background-color: #fff;border-radius: 5px;}
	.qrsh{float: right;height: 30px; line-height: 30px;background: #FF9000;margin-right: 15px;border: 1px solid #FF9000;border-radius: 5px;color: #fff;}
	.list-checked{float: left;}
	.list-checked img{width: 20px;margin-top:15px;margin-left: 15px;margin-right: 15px;}
	.good-checked{line-height: 130px;}
	.product-num{float: right;font-size: 20px;}
	.product-num p{float: left;margin:0;text-align: center;border: 1px solid #FE9D1F;color: #FE9D1F;border-radius:5px;}
	.product-num .add{height: 20px;margin-top: 15px;line-height: 20px; width: 20px;margin-left: 5px;margin-right: 10px;}
	.product-num .num{width: 50px;line-height: 40px;height: 40px;margin-top: 5px;}
	.product-num .del{height: 20px;margin-top: 15px;line-height: 20px; width: 20px;margin-right: 5px;}
	.comment_footer{width: 100%;height: 50px;position: fixed;bottom: 0;border-top: 1px solid #ADD03E;z-index: 999;background-color: #fff;font-size: 12px;}
	.fbpj{float: right;height: 100%;width: 100px;background-color: #AED13F;color: #fff;text-align: center;line-height: 50px;}
	.cart-total{    float: left;height: 50px;font-size: 14px;line-height: 50px;text-align: center;margin-left: 10px;}
	.all-total{color: #FE9D1F}
	.cart-del{background-color: #fff;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">购物车</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;">编辑</div>
			<div class="cart-finish" style="float:right;margin-right:15px;font-size:18px;display:none;">完成</div>
		</div>
	<form method="get" id="form_cart_id" action="/addorder.html">
		<?php foreach($cart_info as $k=>$v){?>
			<?php $n=0;foreach($v as $kk=>$kv) {
			$this_total=$kv['good']['price']*$kv['num'];
			$total_fee+=$this_total;
			$extra=unserialize($kv['good']['extra']);
			?>
			<div class="order-list">
				<div class="order-shop-name">
					<div class="list-checked shop-checked checked"><img src="/static/img/wap/checked.png" /></div>
					<div class="order-shop-logo"><img src="/static/img/wap/shop_logo.png"></div>
					<div style="float:left;"><?=$shopname?$shopname:'平台自营';?></div>
					<div class="order-type"></div>
				</div>
				<div class="product-info">
					<div class="list-checked good-checked checked">
						<img src="/static/img/wap/checked.png" />
						<input name="gid[]" value="<?=$kv['good']['id']?>" type="checkbox" checked="checked" style="display:none;" class="gid" />
					</div>
					<div class="product-img">
						<img src="<?=$kv['good']['thumb']?>">
					</div>
					<div class='product-title'>
						<p><?=$kv['good']['title']?></p>
						<p style="color:#9A9A9A;"></p>
					</div>
					<div class="product-price">
						<p class="true-price"><span>￥</span><?=$kv['good']['price']?></p>
						<p class="old-price"><span></span><?=$kv['good']['weight']?> kg</p>
					</div>
					<div class="product-num">
						<p class="del">-</p>
						<p class="num"><?=$kv['num']?></p>
						<input class="good_num" type="text" gid="<?=$kv['good']['id']?>" max="<?=$kv['good']['num']?>" rel="<?=$kv['good']['price']?>" value="<?=$kv['num']?>" style="display:none;" />
						<p class="add">+</p>
					</div>
				</div>
				<div class="product-button">
					<?php if ($v['status'] == 1) {?>
						<a  class="qrsh">立即支付</a>
					<?php } else if ($v['status'] == 2) {?>
						<a  class="qrsh">确认收货</a>
						<a href="https://m.kuaidi100.com/" target="_blank" class="ckwl">查看物流</a>
					<?php } else if ($v['status'] == 4) {?>
						<a  class="qrsh">评价</a>
						<a href="https://m.kuaidi100.com/" target="_blank" class="ckwl">申请退款</a>
						<a href="https://m.kuaidi100.com/" target="_blank" class="ckwl">删除订单</a>
					<?php }?>
				</div>
			</div>
			<?php $n++;}?>
		<?php }?>
	</form>
		<div class="comment_footer">
				<div class="list-checked all-checked checked"><img src="/static/img/wap/checked.png" /></div>
				<div class="cart-total ">合计：<span class="all-total">￥ 0.00<span></div>
			<a class="fbpj js" onclick="sub_order()">结算</a>
			<div class="cart-del fbpj" style="display:none;"><img src="/static/img/wap/del_btn.png" style="width:70px;"></div>
		</div>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">

	function sub_order(){
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=ajax',
			data:{'a':'loginsta'},
			success:function(d){
				if (d=='200'){
					$('#form_cart_id').submit();
				}else if(d=='503'){
					window.location.href="/?m=wxsite&mod=login";
				}else{
					window.location.reload(true);
				}
			}
		});
	}

	getTotal();

	// 删除
	$('.cart-del').click(function() {

		var idStr = '';

		$('.good-checked').each(function() {
			if ($(this).hasClass('checked')) {
				var id = $(this).find('input[name="gid"]').val();
				idStr = id + ',';
			}
		})

		if (!idStr) {
			layer.msg('请选择一个商品');
			return false;
		}

		$.post('/cart.html?c=del', {strs:idStr}, function(data) {

			if (data == 'ok') {
				layer.msg('删除成功');

				$('.good-checked').each(function() {
					var parents = $(this).parents('.order-list');

					if ($(this).hasClass('checked')) {
						$(this).parents('.product-info').remove();
					}

					if (parents.find('.product-info').length == 0) {
						parents.remove();
					}
				});
			} else {
				layer.msg('删除失败');
			}
		});
	})

	//编辑
	$('.cart-edit').click(function() {
		$(this).hide();
		$('.cart-finish').show();
		$('.js').hide();
		$('.cart-total').hide();
		$('.cart-del').show();

		checked($('.list-checked'), true);
	});

	//完成
	$('.cart-finish').click(function() {
		$(this).hide();
		$('.cart-edit').show();
		$('.js').show();
		$('.cart-total').show();
		$('.cart-del').hide();

		checked($('.list-checked'), false);
		getTotal();
	});

	$('.add').click(function() {
		var good_num = $(this).parent().find('.good_num');
		var gid = good_num.attr('gid');
		var max = good_num.attr('max');
		var now = good_num.val();

		var add_num = parseInt(now) + 1;
		if (add_num <= max) {

			up_gid_num(gid, add_num);

			$(this).siblings('.num').text(add_num);
			$(this).parent().find('.good_num').val(add_num);

			if (!$(this).parents('.product-info').find('.good-checked').hasClass('checked')) {
				$(this).parents('.product-info').find('.good-checked').click();
			} else {
				getTotal();
			}
			
		} else {
			layer.msg('已超过最大数目！');
		}
	});

	$('.del').click(function() {
		var good_num = $(this).parent().find('.good_num');
		var gid = good_num.attr('gid');
		var max = good_num.attr('max');
		var now = good_num.val();

		var add_num = parseInt(now) - 1;
		if (add_num >= 1) {

			up_gid_num(gid, add_num);

			$(this).siblings('.num').text(add_num);
			$(this).parent().find('.good_num').val(add_num);

			if (!$(this).parents('.product-info').find('.good-checked').hasClass('checked')) {
				$(this).parents('.product-info').find('.good-checked').click();
			} else {
				getTotal();
			}
		}

	});

	// 商品选中
	$('.good-checked').click(function() {

		if ($(this).hasClass('checked')) {
			checked($(this), true);
		} else {
			checked($(this), false);
		}

		var shop_checked = $(this).parents('.order-list').find('.shop-checked');

		if (shop_checked.hasClass('checked')) {
			var i = 0;
			$(this).parents('.product-info').each(function() {
				if ($(this).find('good-checked').hasClass('checked')) {
					i ++;
				}
			});

			$(this).find('input[name="gid"]').prop('checked', false);

			if (i == 0) {
				checked(shop_checked, true);
				checked($('.all-checked'), true);
			}
		} else {
			checked(shop_checked, false);
			$(this).find('input[name="gid"]').prop('checked', true);
		}

		getTotal();
	});

	// 店铺全选
	$('.shop-checked').click(function() {

		var token = true;

		if ($(this).hasClass('checked')) {
			checked($(this), true);
			checked($('.all-checked'), true);
		} else {
			checked($(this), false);
			token = false;
		}

		$(this).parents('.order-list').find('.good-checked').each(function() {
			checked($(this), token);
		});

		getTotal();
	});

	// 全选
	$('.all-checked').click(function() {

		var token = true;

		if ($(this).hasClass('checked')) {
			checked($(this), true);
		} else {
			checked($(this), false);
			token = false;
		}

		$('#form_cart_id').find('.list-checked').each(function() {
			checked($(this), token);
		});

		getTotal();
	});

	function checked(obj, checked) {
		if (checked) {
			obj.find('img').attr('src', '/static/img/wap/un_checked.png');
			obj.removeClass('checked');
			if (obj.find('input[name="gid[]"]')) {
				obj.find('input[name="gid[]"]').prop('checked', false);
			}
		} else {
			obj.find('img').attr('src', '/static/img/wap/checked.png');
			obj.addClass('checked');
			if (obj.find('input[name="gid[]"]')) {
				obj.find('input[name="gid[]"]').prop('checked', true);
			}
		}
	}

	function getTotal() {

		var total = 0;

		$('.good-checked').each(function() {

			if ($(this).hasClass('checked')) {
				var price = $(this).parents('.product-info').find('.good_num').attr('rel');
				var num = parseInt($(this).parents('.product-info').find('.num').text());

				total += price * num;
			}
		});

		$('.all-total').text('￥ '+total.toFixed(2));
	}

	function up_gid_num(gid,num){
		var index = layer.load(1, {
		  shade: [0.1,'#fff'] //0.1透明度的白色背景
		});
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'setCart','id':gid,'num':num},
			success:function(d){
				layer.close(index);
				if (d=='ok'){
					return 'ok';
				}else{
					window.location.reload(true);
				}
			}
		});
	}
</script>