<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <a href="/?m=admin&a=feedback" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回反馈列表</a>
      <form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
      <input type="hidden" name="id" value="<?=$id?>"/>
        <fieldset>
        <legend>发布回复</legend>
          <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">回复内容：</label>
            <div class="am-u-sm-10">
              <textarea placeholder="输入内容" name="reply" id="title"><?=$info['title']?></textarea>
            </div>
          </div>
          <input type="hidden" name="m" value="admin">
          <input type="hidden" name="a" value="feedback">
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
    alert('回复内容填写有误!');
    return;
  }
  $('#cate_a_from').submit();
}
</script>

<?php include T('super_admin','footer');?>