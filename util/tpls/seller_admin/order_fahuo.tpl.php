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
.div_2 .ifram{position:relative;width:110px;height:32px;margin-top:20px;overflow:hidden;}
.div_2 .ifram img{width:100%;}
.div_2 .ifram_1{position:absolute;top:0;left:0;opacity:0;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">填写发货信息</div>
		<form class="layui-form" id="ex_form" method="post" action="/?m=admin&a=order&c=fhsave">
			<div class="layui-form-item">
				<label class="layui-form-label">当前订单号</label>
				<div class="layui-input-block">
					<input value="<?=$order['no']?>" style="background-color:#eee" class="layui-input" disabled/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">当前商品</label>
				<div class="layui-input-block">
					<input value="<?=$ginfo['title']?>" style="background-color:#eee" class="layui-input" disabled/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">买家姓名</label>
				<div class="layui-input-block">
					<input value="<?=$address['linkman']?>" style="background-color:#eee" class="layui-input" disabled/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">买家地址</label>
				<div class="layui-input-block">
					<input value="<?=getFullAddress($all_area,$address['areaid'],'')?><?=$address['address']?>" style="background-color:#eee" class="layui-input" disabled/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">买家电话</label>
				<div class="layui-input-block">
					<input value="<?=$address['phone']?>" class="layui-input" style="background-color:#eee" disabled/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">填写运单号</label>
				<div class="layui-input-block">
					<input name="exp_no" id="exp_no" value="<?=$info['exp_no']?>" class="layui-input"/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">快递公司</label>
				<div class="layui-input-block">
					<input type="radio" name="exp_company" value="顺丰速运" title="顺丰速运">
					<input type="radio" name="exp_company" value="申通快递" title="申通快递">
					<input type="radio" name="exp_company" value="圆通快递" title="圆通快递">
					<input type="radio" name="exp_company" value="韵达快递" title="韵达快递">
					<input type="radio" name="exp_company" value="中通快递" title="中通快递">
				</div>
			</div>
			<a class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" onclick="sub_form()">保存</a>
			<input type="hidden" name="oid" value="<?=$oid?>"/>
			<input type="hidden" name="gid" value="<?=$gid?>"/>
		</form>
	</div>
</div>
<script type="text/javascript">
function sub_form(){
	var no=$('#exp_no').val();
	if (no.length<1) {
		layer.alert('快递单号不能为空！');
		return false;
	}
	var com=$('input[name="exp_company"]:checked').val();
	if (com==undefined) {
		layer.alert('快递公司不能为空！');
		return false;
	}
	$('#ex_form').submit();
}


</script>
<script type="text/javascript">
layui.use('form', function(){
  var form = layui.form();
});
 </script>
 
<?php include T('seller_admin','footer');?>