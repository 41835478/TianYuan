<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>

		<div class="admin-content-body">
			<a href="/?m=admin&a=quan" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回优惠券列表</a>
			<hr>
			<form class="layui-form" method="post" id="quan_form">
			<input type="hidden" name="c" value="save"/>
				<div class="layui-form-item">
					<label class="layui-form-label">优惠券标题</label>
					<div class="layui-input-block">
						<input name="title" id="title" value="<?=$info['title']?>" class="layui-input"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">使用期限</label>
					<div class="layui-inline">
						<input class="layui-input" name="stime" value="<?=$info['stime']?date('Y-m-d',$info['stime']):'';?>" placeholder="开始时间" onclick="layui.laydate({elem: this, istime: true, format: 'YYYY-MM-DD'})">
					</div>-  
					<div class="layui-inline">
						<input class="layui-input" name="etime" value="<?=$info['etime']?date('Y-m-d',$info['etime']):'';?>" placeholder="结束时间" onclick="layui.laydate({elem: this, istime: true, format: 'YYYY-MM-DD'})">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">使用条件</label>
					<div class="layui-input-inline">
						<input name="beyond" id="beyond" value="<?=$info['beyond']?>" placeholder="￥" class="layui-input"/>
					</div>
					<div class="layui-form-mid layui-word-aux">单位元，消费达到该金额时可用，不限制消费金额请填写0</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">优惠券金额</label>
					<div class="layui-input-inline">
						<input name="fee" id="fee" value="<?=$info['fee']?>" placeholder="￥" class="layui-input"/>
					</div>
					<div class="layui-form-mid layui-word-aux">单位元，精确到小数点后两位</div>
				</div>
				<a class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" onclick="sub_form()">保存</a>
			</form>			
		</div>
<script type="text/javascript">
layui.use('laydate', function(){});
function setImg(d){
	$('#img').find('input').val(d);
	$('#img').find('.img img').attr('src',d);
}
function sub_form(){
	var title=$('#title').val();
	if(title.length<1){
		layer.alert('优惠券标题不能为空');
		return false;
	}
	var fee=$('#fee').val();
	if(fee.length<1){
		layer.alert('优惠券金额不能为空');
		return false;
	}
	$('#quan_form').submit();
}
</script>

<?php include T('super_admin','footer');?>