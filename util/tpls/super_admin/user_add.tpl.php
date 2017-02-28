<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=user" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回用户列表</a>
			<form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>编辑用户资料</legend>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">选择用户组</label>
						<div class="am-u-sm-10">
							<select id="doc-ta-1" name="type">
								<option value="0" selected="selected">普通会员</option>
								<option value="1" >超级管理员</option>
								<option value="2">商铺管理员</option>
							</select>
						</div>
					</div>
					<input type="hidden" name="m" value="admin">
					<input type="hidden" name="a" value="user">
					<input type="hidden" name="c" value="save">
					<input type="hidden" name="id" value="<?=$id?>">
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-push-3">
							<button type="button" class="am-btn am-btn-primary" onclick="check_data()">保存信息</button>
						</div>
					</div>
				</fieldset>
			</form>
		
		</div>
	</div>
</div>
<script type="text/javascript">
function check_data(){
	$('#cate_a_from').submit();
}
</script>

<?php include T('super_admin','footer');?>