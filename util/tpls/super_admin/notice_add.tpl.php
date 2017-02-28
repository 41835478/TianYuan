<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=notice" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回公告列表</a>
			<form class="am-form" id="sform">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>发布公告</legend>
					<div class="am-form-group">
						<label for="cname">标题</label>
						<input type="text" name="title" id="title" placeholder="输入标题" value="<?=$info['title']?>">
					</div>
					<div class="am-form-group">
						<label for="doc-ta-1">公告内容</label>
						<textarea name="content" rows="10" id="content" placeholder="输入公告内容"><?=$info['content']?></textarea>
					</div>
					<p><a onclick="savenotice()" class="am-btn am-btn-primary am-radius">提交</a></p>
				</fieldset>
			</form>
			
</div>
<script type="text/javascript">
function savenotice(){
	var title=$('#title').val();
	if (title.length<1){
		alert('标题填写有误!');
		return;
	}
	var content=$('#content').val();
	if (content.length<1){
		alert('内容填写有误!');
		return;
	}
	$.ajax({
		type:'post',
		url:'/?m=admin&a=notice&c=save&id=<?=$id?>',
		data:{'title':title,'content':content},
		success:function(r){
			if(r=='ok'){
				alert('发布成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.href="/?m=admin&a=notice";},1200);
		}
	});
}
</script>

<?php include T('super_admin','footer');?>