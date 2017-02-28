<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">

</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">申请成为促销员</div>
		<form class="layui-form" id="cate_a_from" method="post">
			<div class="layui-form-item">
				<label class="layui-form-label">姓名</label>
				<div class="layui-input-block">
					<input type="text" name="name" id="chk_name" value="<?=$apply_info['name']?>"  lay-verify="name" placeholder="请输入您的姓名" autocomplete="off" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">电话</label>
				<div class="layui-input-block">
					<input type="text" name="tel" id="chk_tel"  value="<?=$apply_info['tel']?>"  lay-verify="tel" placeholder="请输入您的电话" autocomplete="off" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">身份证号</label>
				<div class="layui-input-block">
					<input type="text" name="id_no" id="chk_no"  value="<?=$apply_info['id_no']?>"  lay-verify="id_no" placeholder="请输入您的身份证号" autocomplete="off" class="layui-input">
				</div>
			</div>
			
			<div class="layui-form-item">
				<label class="layui-form-label">上传身份证照片</label>
				<div class="layui-input-inline">
					<iframe src="/home/upfile.html?tb=6" border="0" frameborder="0" scrolling="no" width="260" height="60"></iframe>
					<input type="hidden" name="id_pic"  value="<?=$apply_info['id_pic']?>" id="chk_thumb" />
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">照片预览</label>
				<div class="layui-input-inline">
					<div id="site_logo_prev">
						<img src="<?=$apply_info['id_pic']?>" width="100px"/>
					</div> 
				</div>
			</div>
			<input type="hidden" name="m" value="admin">
			<input type="hidden" name="a" value="member">
			<input type="hidden" name="c" value="saveapply">
			<input type="button" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" value="保存" onclick="check_data()">
		</form>
	</div>
</div>
<script type="text/javascript">
function check_data(){
	var chk_name=$('#chk_name').val();
	if (chk_name.length<1){
		layer.alert('姓名不能为空');
		return false;
	}
	var chk_tel=$('#chk_tel').val();
	if (chk_tel.length<1){
		layer.alert('电话不能为空');
		return false;
	}
	var chk_no=$('#chk_no').val();
	if (chk_no<=0){
		layer.alert('身份证号码不能为空');
		return false;
	}else{
		$('#cate_a_from').submit();
	}
}
function setImg(file){
	$('#chk_thumb').val(file);
	$('#site_logo_prev').css('borderColor','#999').html('<img src="'+file+'" width="100px"/>');
}
</script>

<?php include T('seller_admin','footer');?>