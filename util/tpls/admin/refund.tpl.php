<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.form_info{padding:10px 20px;min-height:0;overflow:hidden;font-size:14px;line-height:25px;}
.form_info input,select,textarea{border:1px solid #ccc;padding:5px}
.form_info p{margin-bottom:10px;}
.tj_btn{width:200px;height:46px;text-align:center;background-color:#dd2726;line-height:46px;font-size:16px;display:block;color:#fff;margin-top:30px;margin-left:70px;}
a.tj_btn:hover{color:#fff}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">退款管理</div>
		<form id="return_form">
		<input type="hidden" name="oid" value="<?=$oid?>"/>
		<div class="form_info">
			<p>订单编号：<input type="text" id="" value=" <?=$order['no']?>" disabled/></p>
			<p>退款类型：<select name="type">
				<option value="0">请选择</option>
				<option value="1">退款退货</option>
				<option value="2">仅退款</option>
			</select></p>
			<p>退款金额：<input type="text" name="fee" value=" &yen; <?=$order['fee']?>" style="color:red"/></p>
			<p>退款原因：<select name="reason" style="width:300px">
				<option value="0">7天无理由退换货</option>
				<option value="1">未收到货</option>
				<option value="2">商品质量问题</option>
				<option value="3">与卖家协商一致退款</option></select></p>
			<p>退款说明：<textarea name="extra" rows="3" cols="" style="width:300px"></textarea></p>
			<p>退款方式：<select name="way" style="width:300px">
				<option value="0">请选择退款方式</option>
				<option value="1">微信</option>
				<option value="2">支付宝</option>
				<option value="3">银行卡（请注明哪家银行）</option></select></p>
			<p>退款账号：<input type="text" name="account" value="<?=$order['account']?>" style="width:600px"/></p>
			<p>联系方式：<input type="text" name="tel" value="<?=$order['tel']?>" style="width:300px" placeholder="请填写您的手机号"/></p>
			<a onclick="sub_form()" class="tj_btn">提交</a>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript">
function sub_form(){
	var data=$('#return_form').serialize();
	$.ajax({
		type:'post',
		url:'/home/active.html?c=savereturn',
		data:data,
		success:function(r){
			if(r=='ok'){
				layer.alert('退款申请成功');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.href="/home/return.html";},1200);
		}
	});
}
</script>

<?php include T('seller_admin','footer');?>