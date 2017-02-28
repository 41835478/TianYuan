<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
			<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">发货设置</strong> / <small>Score Rate</small></div>
		  </div>
		  <hr>
			<form class="am-form" id="ex_form" method="post" action="/?m=admin&a=orders&c=fhsave">
			  <fieldset>
					<div class="am-form-group">
						<label for="yuan">当前订单号：</label>
						<?=$order['no']?>
					</div>
					<div class="am-form-group">
						<label for="fan">当前商品：</label>
						<?=$ginfo['title']?>
					</div>
					<div class="am-form-group">
						<label for="login">买家姓名：</label>
						<?=$address['linkman']?>
					</div>
					<div class="am-form-group">
						<label for="invite">买家地址：</label>
						<?=getFullAddress($all_area,$address['areaid'],'')?><?=$address['address']?>
					</div>
					<div class="am-form-group">
						<label for="invite">买家电话：</label>
						<?=$address['phone']?>
					</div>
					<div class="am-form-group">
						<label for="login">填写运单号：</label>
						<input type="text"  name="exp_no" id="exp_no" value="<?=$info['exp_no']?>" style="width:300px">
					</div>
					<div class="am-form-group">
						<label for="login">快递公司：</label>
						<select name="exp_company" style="width:300px">
							<option value="顺丰速运" selected="selected">顺丰速运</option>
							<option value="申通快递">申通快递</option>
							<option value="圆通快递">圆通快递</option>
							<option value="韵达快递">韵达快递</option>
							<option value="中通快递">中通快递</option>
							<option value="商家派送">商家派送</option>
							<option value="自取">自取</option>
						</select>
					</div>
					<input type="hidden" name="oid" value="<?=$oid?>"/>
					<input type="hidden" name="gid" value="<?=$gid?>"/>
					<p><a onclick="sub_form()" class="am-btn am-btn-primary am-radius">提交</a></p>
				</fieldset>
			</form>
</div>
<script type="text/javascript">
function sub_form(){
	var no=$('#exp_no').val();
	if (no.length<1) {
		alert('快递单号不能为空！');
		return false;
	}
	$('#ex_form').submit();
}

</script>

<?php include T('super_admin','footer');?>