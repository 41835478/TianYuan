<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
			<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">积分设置</strong> / <small>Score Rate</small></div>
		  </div>
		  <hr>
			<form class="am-form" id="sform">
			  <fieldset>
					<div class="am-form-group">
						<label for="yuan">多少积分=1元</label>
						<input type="text" name="yuan" placeholder="请填写整数数字" value="<?=$info['yuan']?>" style="width:300px">
					</div>
					<div class="am-form-group">
						<label for="fan">消费&yen;1元返还积分数 </label>
						<input type="text" name="fan" placeholder="请填写整数数字" value="<?=$info['fan']?>" style="width:300px">
					</div>
					<div class="am-form-group">
						<label for="login">每天登录奖励积分</label>
						<input type="text" name="login" placeholder="输入积分数 请填写整数数字" value="<?=$info['login']?>" style="width:300px">
					</div>
					<div class="am-form-group">
						<label for="invite">注册奖励积分</label>
						<input type="text" name="invite" placeholder="输入积分数 请填写整数数字" value="<?=$info['invite']?>" style="width:300px">
					</div>
					<p><a onclick="saveconfig()" class="am-btn am-btn-primary am-radius">提交</a></p>
				</fieldset>

			</form>
</div>
<script type="text/javascript">
function saveconfig(){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=rate&c=save',
		data:$('#sform').serialize(),
		success:function(r){
			if(r=='ok'){
				alert('保存成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.href="/?m=admin&a=rate";},1200);
		}
	});
}
</script>

<?php include T('super_admin','footer');?>