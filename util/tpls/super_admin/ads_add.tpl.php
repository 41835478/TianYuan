<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=ads&pid=<?=$pid?>" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回广告列表</a>
			<form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>发布广告</legend>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">广告标题：</label>
						<div class="am-u-sm-10">
						  <input type="text" placeholder="输入广告标题：" name="title" id="title" value="<?=$info['title']?>">
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">广告链接：</label>
						<div class="am-u-sm-10">
						  <input type="text" placeholder="输入广告链接" id="link" name="link" value="<?=$info['link']?>">
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">上传广告图片：</label>
						<div class="am-u-sm-10">
							<iframe src="/?m=admin&a=upfile&tb=7" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
							<input type="hidden" name="img" value="<?=$info['img']?>" id="chk_thumb" />
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">广告图片预览：</label>
						<div class="am-u-sm-10">
							<div id="site_logo_prev">
								<img src="<?=$info['img']?>" alt="图片" width="100px"/>
							</div>
						</div>
					</div>
					<input type="hidden" name="m" value="admin">
					<input type="hidden" name="a" value="ads">
					<input type="hidden" name="c" value="save">
					<input type="hidden" name="id" value="<?=$id?>">
					<input type="hidden" name="pid" value="<?=$pid?>">
					<div class="am-form-group">
					  <div class="am-u-sm-9 am-u-sm-push-3">
						<button type="button" class="am-btn am-btn-primary" onclick="check_data()">保存信息</button>
					  </div>
					</div>
				</fieldset>
			</form>
</div>
<?php include T('super_admin','footer');?>
<script type="text/javascript">
function check_data(){
	var title=$('#title').val();
	if (title.length<1){
		alert('广告标题填写有误!');
		return;
	}
	var link=$('#link').val();
	if (link.length<1){
		alert('广告链接填写有误!');
		return;
	}
	$('#cate_a_from').submit();
}
function setImg(file){
	$('#chk_thumb').val(file);
	$('#site_logo_prev').css('borderColor','#999').html('<img src="'+file+'" alt="Logo" width="100px"/>');
}
</script>