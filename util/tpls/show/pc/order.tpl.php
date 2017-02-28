<?php include T('seller_admin','header');?>
<link href="/static/css/wxsite/order.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.mr10 b{font-weight:normal;color:red}
</style>
<div id="pay_area">
	<div class="cont_div" id="order">
		<div class="o-left">
			<h3 class="o-title">请您及时付款，以便订单尽快处理！&nbsp; &nbsp; 订单号：<?=$order['no']?></h3>
			<p class="o-tips">请您在提交订单后<span class="font-red">24小时</span>内完成支付，否则订单会自动取消。</p>
		</div>
		<div class="o-right">
			<div class="o-price"><em>应付金额</em><strong><?=$order['fee']?></strong><em>元</em></div>
			<div class="o-detail" id="orderDetail"><a onclick="toggleDetail(this);">订单详情<i></i></a></div>
		</div>
	</div>
	<div class="cont_div" id="listPayOrderInfo" style="display: none;">
		<!-- 单笔订单 -->
<?php if($order['is_bond']==1){?>
		<div class="o-list-info">
			<span class="mr10" id="shdz">保证金订单</span>
		</div>
<?php }else{?>
		<div class="o-list-info">
			<span class="mr10">商品总价：<b>&yen;<?=$order['org_fee']?></b></span>
			<span class="mr10">运费：<b>&yen;<?=$order['trans_fee']?></b></span>
			<span class="mr10">积分抵扣：<b>&yen;<?=$order['discount']?></b></span>
			<span class="mr10">优惠券抵扣：<b>&yen;<?=$order['quan']?></b></span>
		</div>
		<div class="o-list-info">
			<span class="mr10" id="shdz">收货地址：<?=getFullAddress($all_area,$address['areaid'],'')?><?=$address['address']?></span>
			<span class="mr10" id="shr">收货人：<?=$address['linkman']?></span>
			<span id="mobile"><?=$address['phone']?></span>
		</div>
<?php }?>
		<div class="o-list-info">
			<span id="spmc">商品名称：<?=$order['is_bond']==1?'缴纳保证金':$shop_html;?></span>
		</div>
		<!-- 单笔订单 end -->
	</div>
	<script type="text/javascript">
		function toggleDetail(i){
			var e=$(i);
			if (e.hasClass('opened')){
				e.removeClass('opened');
				$('#listPayOrderInfo').slideUp();
			}else{
				e.addClass('opened');
				$('#listPayOrderInfo').slideDown();
			}
		}
		$(function(){		
			$('#pay ul li input').click(function(){
				var e=$(this);
				$('#default_bank').val(e.val());
				$('#pay ul li .clickon').removeClass('clickon');
				e.parent().find('label').addClass('clickon'); 
			});
			$('#payment .pay_item h2').click(function(){
				var e=$(this);
				$('#payment .pay_selected').removeClass('pay_selected');
				e.parent().addClass('pay_selected');
			});
		});
	</script>
	<div id="payment" class="cont_div">
		<div class="pay_item pay_selected">
			<h2>支付宝/网银支付</h2>
			<div id="pay" class="netbanks tbc">
				<ul>
					<li class="alipay"><input type="radio" name="defaultbank" id="i_alipay" value="" checked="checked"><label for="i_alipay" class="clickon"><b>&nbsp;</b></label></li>
					<li class="icbc"><input type="radio" name="defaultbank" id="i_icbc" value="ICBC-DEBIT"><label for="i_icbc"><b>&nbsp;</b></label></li>
					<li class="ccb"><input type="radio" name="defaultbank" id="i_ccb" value="CCB-DEBIT"><label for="i_ccb"><b>&nbsp;</b></label></li>
					<li class="abc"><input type="radio" name="defaultbank" id="i_abc" value="ABC"><label for="i_abc"><b>&nbsp;</b></label></li>
					<li class="psbc"><input type="radio" name="defaultbank" id="i_psbc" value="POSTGC"><label for="i_psbc"><b>&nbsp;</b></label></li>
					<li class="cbc"><input type="radio" name="defaultbank" id="i_cbc" value="COMM-DEBIT"><label for="i_cbc"><b>&nbsp;</b></label></li>
					<li class="boc"><input type="radio" name="defaultbank" id="i_boc" value="BOCB2C"><label for="i_boc"><b>&nbsp;</b></label></li>
					<li class="cmb"><input type="radio" name="defaultbank" id="i_cmb" value="CMB"><label for="i_cmb"><b>&nbsp;</b></label></li>
					<li class="spdb"><input type="radio" name="defaultbank" id="i_spdb" value="SPDB"><label for="i_spdb"><b>&nbsp;</b></label></li>
					<li class="ccbc"><input type="radio" name="defaultbank" id="i_ccbc" value="CITIC"><label for="i_ccbc"><b>&nbsp;</b></label></li>
					<li class="cib"><input type="radio" name="defaultbank" id="i_cib" value="CIB"><label for="i_cib"><b>&nbsp;</b></label></li>
					<li class="ceb"><input type="radio" name="defaultbank" id="i_ceb" value="CEBBANK"><label for="i_ceb"><b>&nbsp;</b></label></li>
					<li class="cmbc"><input type="radio" name="defaultbank" id="i_cmbc" value="CMBC"><label for="i_cmbc"><b>&nbsp;</b></label></li>
					<li class="cgb"><input type="radio" name="defaultbank" id="i_cgb" value="GDB"><label for="i_cgb"><b>&nbsp;</b></label></li>				
					<li class="pab"><input type="radio" name="defaultbank" id="i_pab" value="SPABANK"><label for="i_pab"><b>&nbsp;</b></label></li>
				</ul>
			</div>
			<form id="payform" method="post" action="/mallpay.html?d=index"  target="_blank">
				<input type="hidden" name="default_bank" id="default_bank" />
				<input id="in_count" type="hidden" name="oid" value="<?=$id?>" />
				<input type="hidden" name="from" value="<?=$now_domain?>" />
				<input type="submit" value="立即支付" id="paySubmit" class="ui-button ui-button-XL" onclick="combinSubmitPay()">
			</form>
			<script type="text/javascript">
				function combinSubmitPay(){
					$('#zhifu_tips').show();
					//art.dialog.confirm('支付成功？',function(){},function(){});
				}
				function hidetips(){
					$('#zhifu_tips').hide();
				}
			</script>
		</div>
		<div class="pay_item">
			<h2>微信支付</h2>
			<div class="p-w-bd">
				<div class="p-w-box">
					<div class="pw-box-hd">
						<img src="/wxpay_wxpay_<?=$id?>.html" width="298">
					</div>
					<div class="pw-box-ft">
						<p>请使用微信扫一扫</p>
						<p>扫描二维码支付</p>
					</div>
				</div>
				<div class="p-w-sidebar"></div>
			</div>
		</div>
	</div>
</div>
<div id="zhifu_tips">
	<p class="tip_tit">支付信息提示<span onclick="hidetips()"></span></p>
	<div class="show_tips">
		<p>请在新打开的支付页面上完成付款，付款完成前不要关闭此窗口。</p>
		<p>如果您在支付过程中遇到问题，请联系客服：<b>400-6353-400</b> </p>
	</div>
	<a href="/?m=admin&a=order" class="tbtn1"></a>
	<a onclick="hidetips()" class="tbtn2"></a>
</div>
<?php include T('seller_admin','footer');?>