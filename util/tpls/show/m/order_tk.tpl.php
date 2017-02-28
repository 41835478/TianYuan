<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size:100%;font-size: 14px;}
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
	.product-title{float: left;font-size: 14px;width: 55%;}
	.product-title p{float: left;}
	.product-price{float: right;font-size: 14px;font-weight: bold;margin-right: 15px;}
	.true-price{color: #FF9207;}
	.old-price{color: #999999;text-decoration:line-through}
	.product-num{color: #999999;}
	.product-total{float:left;height: 30px;width: 100%;font-size: 14px;text-align: right;line-height: 30px;border-bottom: 1px solid #cccccc;}
	.product-button{float: left;width: 100%;height: 40px;margin-top: 10px;}
	.product-button a{font-size: 14px;padding: 5px 15px 5px 15px;height: 20px;line-height: 20px;}
	.ckwl{float: right;height: 30px; line-height: 30px;border: 1px solid #D6D6D6;margin-right: 15px;background-color: #fff;border-radius: 5px;}
	.qrsh{float: right;height: 30px; line-height: 30px;background: #FF9000;margin-right: 15px;border: 1px solid #FF9000;border-radius: 5px;color: #fff;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">退款/售后</div>
		</div>
		<?php foreach($list as $k=>$v) {?>
			<div class="order-list">
				<div class="order-shop-name">
					<div class="order-shop-logo"><img src="/static/img/wap/shop_logo.png"></div>
					<div style="float:left;"><?=$shopname?$shopname:'平台自营';?></div>
					<div class="order-type"><?php if($v['status']==1){echo '待支付';}else{echo '审核中';}?></div>
				</div>
				<div class="product-info">
					<div class="product-img">
						<img src="/static/img/wap/pro_img.png">
					</div>
					<div class='product-title'>
						<p>包邮 韩国仿瓷青花古铜瓶韩国仿瓷青花古铜瓶韩国仿瓷青花古铜瓶韩国仿瓷青花古铜瓶韩国仿瓷青花古铜瓶</p>
						<p style="color:#9A9A9A;"></p>
					</div>
				</div>
				<div class="product-total">
					<p style="float:right;line-height100%;margin-right:20px;">交易金额：<span>&yen;<?=$v['fee']?></span> 退款金额：<span style="color:#FF6B28;">&yen;<?=$v['fee']?></span></p>
				</div>
				<div class="product-button">
					<a onclick="cancel(<?=$v['id']?>)" class="ckwl">撤销</a>
					<?php if ($v['status'] == 1) {?>
						<a  class="qrsh">撤销</a>
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
		<?php }?>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	function cancel(id){
		$.ajax({
			type:'post',
			url:'/home/return.html?c=cancel',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					layer.alert('撤销成功！');
				}else{
					alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	}
</script>