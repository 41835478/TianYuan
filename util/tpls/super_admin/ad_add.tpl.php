<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=ad" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回广告位列表</a>
			<form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>发布广告位</legend>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label"><?=$info['name']?>广告位置名称：</label>
						<div class="am-u-sm-10">
						  <input type="text" placeholder="输入广告位置" name="title" id="title" value="<?=$info['name']?>">
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">宽：</label>
						<div class="am-u-sm-10">
						  <input type="text" placeholder="广告宽度（仅填数字 单位像素px）" id="width" name="width" value="<?=$info['width']?>"> px
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">高：</label>
						<div class="am-u-sm-10">
						  <input type="text" placeholder="广告高度（仅填数字 单位像素px）" id="height" name="height" value="<?=$info['height']?>"> px
						</div>
					</div>
					<input type="hidden" name="m" value="admin">
					<input type="hidden" name="a" value="ad">
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
<script type="text/javascript">
function check_data(){
	var title=$('#title').val();
	if (title.length<1){
		alert('标题填写有误!');
		return;
	}
	var width=$('#width').val();
	if (width.length<1){
		alert('宽度填写有误!');
		return;
	}
	var height=$('#height').val();
	if (height.length<1){
		alert('高度度填写有误!');
		return;
	}
	$('#cate_a_from').submit();
}
</script>
<?php include T('super_admin','footer');?>