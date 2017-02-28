<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
<link rel="stylesheet" href="/static/plugin/ke/themes/simple/simple.css" />
<script charset="utf-8" src="/static/plugin/ke/kindeditor.js"></script>
<script charset="utf-8" src="/static/plugin/ke/lang/zh_CN.js"></script>
<script type="text/javascript" language="javascript">
	var editor;
	KindEditor.ready(function(K) {
			editor = K.create('#chk_content', {
					themeType : 'simple',
					minWidth:'700px',
					height:'400px',
					items : ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', 'lineheight','|','plainpaste','wordpaste', '|', 'image','multiimage','table','baidumap','|', 'link'],
					imageTabIndex:1
			});
	});
</script>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=news" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回文章列表</a>
			<form class="am-form" method="post" action="/index.php" id="cate_a_from">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>发布新文章</legend>
					<div class="am-form-group">
						<label for="doc-ta-1">选择文章分类</label>
						<select id="doc-ta-1" name="cateid">
							<?=$op?>
						</select>
					</div>
					<div class="am-form-group">
						<label for="cname">文章标题</label>
						<input type="text" name="title" id="title" placeholder="输入标题" value="<?=$info['title']?>">
					</div>
					<div class="am-form-group">
						<label for="doc-ta-1">文章内容</label>
						<textarea name="content" id="chk_content"><?=isset($info['content'])?$info['content']:'';?></textarea>
					</div>
					<input type="hidden" name="m" value="admin">
					<input type="hidden" name="a" value="news">
					<input type="hidden" name="c" value="save">
					<input type="hidden" name="id" value="<?=$id?>">
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
	var leng= editor.html().length;
	if(leng>20000){
		art.dialog.alert('内容不能超过20000字');
		return false;
	}
	editor.sync();
	$('#cate_a_from').submit();
}
</script>

<?php include T('super_admin','footer');?>