<?php include T('show/m/common','header');?>

<?if (!$zf_type) {?>

<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size: 18px;}
	h4{font-size: 16px;}
	.head{background-color: #fff;}
	.addorder-base{float: left;width: 94%;margin-left: 3%;border-radius: 5px;background-color: #ffffff;min-height: 100px;margin-top: 15px;}
	.address-info{float:left;margin:10px 10px 10px 10px;width: 80%;}
	.address-info p{color: #6A6A6A;margin-bottom: 10px;margin-top: 10px;}
	.can-edit{float:left;height: 35px;width: 10%;text-align: right;margin-top: 10px;}
	.can-edit {color: #ABD13E;}
	.yh-info-title{float: left;color: #ABD13E;margin-left: 10px;}
	.yh-info-content{float: left;}
	.yh-info{border-bottom: 1px solid #E6E6E6;height: 60px;line-height: 60px;width: 94%;margin-left: 3%;}
	.yh-info img{width: 50px;float: right;margin-top: 15px;margin-right: 10px;}
	.score{color: #FF8F02;}
	.border-bottom{border-bottom:1px solid #E6E6E6;width: 94%;}
	.title{color: #333333;}
	.yh-list-info{float:left;min-height: 50px;line-height:50px;width: 90%;background-color: #F5F5F5;padding-left: 10%;display: none;}
	.yh-list-info input{width: 70px;border: none;text-align: center;}
	.quan-list{float: left;width: 100%;height: 50px;line-height: 50px;}
	.submit{width: 100%;height: 50px;background-color: #FF9000;text-align: center;line-height: 50px;color: #ffffff;position: fixed;bottom: 0;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">支付方式</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
		<div class="addorder-base">
			<div class="address-info yh-info">
				<h4 class="">支付方式</h4>
			</div>
			<div class="address-info yh-info">
				<h4 class="yh-info-title"><img src="/static/img/wap/zfb_logo.png" style="margin-top:0px;"></h4>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">支付宝支付</p>
				<img class="zf-type zf-checked" style="width:25px;" src='/static/img/wap/checked.png'>
				<input type="checkbox" name="zf-type" value="zfb" checked style="display:none;">
			</div>
			<div class="address-info yh-info">
				<h4 class="yh-info-title"><img src="/static/img/wap/wx_logo.png" style="margin-top:0px;"></h4>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">微信支付</p>
				<img class="zf-type" style="width:25px;" src='/static/img/wap/zf-un-checked.png'>
				<input type="checkbox" name="zf-type" value="wx" style="display:none;">
			</div>
		</div>
	</form>
		<div style="height:50px;float:left;width:50px;"></div>
		<div class="submit">立即支付</div>
	</div>
<? }?>

<form id="payform" method="post" action="/mallpay.html?d=index"  target="_blank" style="display:none;">
	<input type="hidden" name="default_bank" id="default_bank" />
	<input id="in_count" type="hidden" name="oid" value="<?=$id?>" />
	<input type="hidden" name="from" value="<?=$now_domain?>" />
	<input type="submit" value="立即支付" id="paySubmit" class="ui-button ui-button-XL" >
</form>

<?php include T('show/m/common','footer');?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
	wx.config({
		appId: '<?php echo $signPackage["appId"];?>',
		timestamp: <?php echo $signPackage["timestamp"];?>,
		nonceStr: '<?php echo $signPackage["nonceStr"];?>',
		signature: '<?php echo $signPackage["signature"];?>',
		jsApiList: [
			'onMenuShareTimeline',
			'onMenuShareAppMessage',
			'onMenuShareQQ',
			'onMenuShareWeibo',
			'chooseWXPay'
		]
	});
	
	var zf_type = '<?=$zf_type?>';

	if (zf_type == 'zfb') {
		$('#payform').submit();
	}

	$('.zf-type').click(function() {

		$('.zf-type').removeClass('zf-checked').attr('src', '/static/img/wap/zf-un-checked.png').next().prop('checked', false);
		if ($(this).hasClass('zf-checked')) {
			$(this).attr('src', '/static/img/wap/zf-un-checked.png');
			$(this).removeClass('zf-checked');
			$(this).next().prop('checked', false);
		} else {
			$(this).attr('src', '/static/img/wap/checked.png');
			$(this).addClass('zf-checked');
			$(this).next().prop('checked', true);
		}

	});

	$('.submit').click(function() {

		var zf_type = '';
		$('input[name="zf-type"]').each(function() {
			if ($(this).prop('checked')) {
				zf_type = $(this).val();
			}
		});

		if (zf_type == 'zfb') {
			$('#payform').submit();
		} else {
			wxzf();
		}
	});

	function wxzf() {
		$.ajax({
			type:'post',
			url:'/wxpay.html?c=wxajax',
			dataType:'json',
			data:{'oid':<?=$id?>},
			success:function(data){
				//alert(data);
				if (data.msg){
					switch (data.msg){
						case 'noopenid':
							alert('无openid,支付失败');
							break;
						case 'nomoney':
							alert('金额异常,支付失败');
							break;
						case 'nooid':
							alert('无此订单,支付失败');
							break;
					}				
				}else{

					//alert(data.timeStamp+"\n"+data.nonceStr+"\n"+data.package+"\n"+data.paySign+'\n'+data.appId);
					wx.chooseWXPay({
						timestamp: data.timeStamp, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
						nonceStr: data.nonceStr, // 支付签名随机串，不长于 32 位
						package: data.package, // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
						signType: "MD5", // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
						paySign: data.paySign, // 支付签名
						success: function (res) {
							if (res.errMsg=='chooseWXPay:ok'){
								layer.msg('支付成功!');
								setTimeout(function(){window.location.href="http://www.kingmanor.cn/wxpay.html?c=update_order&id=<?=$id?>";},800);
							}else{
								alert('支付失败，请重新选择并支付...');
								setTimeout(function(){window.location.reload(true);},1000);	
							}
						}
					});
				}
			}
		});

	}
</script>