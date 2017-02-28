<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}

</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<blockquote class="layui-elem-quote">
			<p>您当前的账户余额：<span style="color:red;font-size:25px">&yen; <?=$yu?></span></p><hr>
			<a href="/home/cash.html?c=log" class="layui-btn layui-btn-small">查看资金流水</a>
			<a href="/home/cash.html?c=txlog" class="layui-btn layui-btn-small">查看提现记录</a>
		</blockquote>
		<form method="post" class="layui-form" id="return_form">
		<div class="layui-form-item">
			<label class="layui-form-label">提现金额</label>
			<div class="layui-input-block">
				<input id="cash" name="cash" placeholder="请输入提现金额" class="layui-input"/>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">提现方式</label>
			<div class="layui-input-block">
				<select name="way" lay-filter="way" style="width:300px">
				<option value="0">请选择退款方式</option>
				<option value="1">微信</option>
				<option value="2">支付宝</option>
				<option value="3">银行卡（请注明哪家银行）</option></select>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">输入账号</label>
			<div class="layui-input-block">
				<input id="account" name="account" placeholder="请填写您的账号 银行卡请注明开户行" class="layui-input"/>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">您的姓名</label>
			<div class="layui-input-block">
				<input id="name" name="name" placeholder="请填写您的姓名 用于核对账户信息" class="layui-input"/>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">联系方式</label>
			<div class="layui-input-block">
				<input id="tel" name="tel" placeholder="请填写您的手机号" class="layui-input"/>
			</div>
		</div>
		<a class="layui-btn layui-btn-big layui-btn-radius" onclick="apply_cash()">提交申请</a>
		</form>
	</div>
</div>
<script type="text/javascript">
function apply_cash(){
	var cash=$('#cash').val();
	if(cash.length<1){
		layer.alert('请检查提现金额！');
		return;
	}
	var account=$('#account').val();
	if(account.length<1){
		layer.alert('请检查提现账户！');
		return;
	}
	var name=$('#name').val();
	if(name.length<1){
		layer.alert('请检查姓名！');
		return;
	}
	var tel=$('#tel').val();
	if(tel.length<1){
		layer.alert('请检查手机号码！');
		return;
	}
	var data=$('#return_form').serialize();
	$.ajax({
		type:'post',
		url:'/home/cash.html?c=apply',
		data:data,
		success:function(r){
			if(r=='ok'){
				layer.alert('提现申请提交成功！');
			}else{
				layer.alert(r);
			}
		}
	});
}
layui.use('form', function(){
	var form = layui.form();
});
</script>
 
<?php include T('seller_admin','footer');?>