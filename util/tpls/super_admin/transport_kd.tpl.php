<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
		<div class="am-cf am-padding am-padding-bottom-0">
			<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">物流工具</strong> / <small>Transport Tools</small></div>
		</div>
		<hr>
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>
<style type="text/css">
.layui-form{padding-top:30px;}
</style>
			<div id="trans">
		<form id="trans_form">
			<input type="hidden" name="c" value="save"/>
			<div class="layui-form-item">
				<label class="layui-form-label" style="width:120px;">最大派送范围</label>
				<div class="layui-input-inline">
					<input type="text" name="distance" value="<?=$transinfo['distance']?>" placeholder="仅填写数字即可" class="layui-input">
				</div>
				<div class="layui-form-mid layui-word-aux">单位：千米 / 公里</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label" style="width:120px;">费用计算方式</label>
				<div class="layui-input-inline">
					<input type="radio" name="fee_compute_mode" onclick="compute_mode('weight')" title="按重量计算" checked>按重量计算&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" onclick="compute_mode('number')" name="fee_compute_mode" title="按商品件数计算">按商品件数计算
				</div>
			</div>
			<div class="layui-form-item" id="item_fee" style="display: none;">
				<label class="layui-form-label" style="width:120px;">单件费用</label>
				<div class="layui-input-inline">
					<input type="text" name="one" value="<?=$transinfo['one']?>"  placeholder="请输入单件费用" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item" id="base_fee">
				<label class="layui-form-label" style="width:120px;">首重1KG以内费用</label>
				<div class="layui-input-inline">
					<input type="text" name="first" value="<?=$transinfo['first']?>"  placeholder="首重1KG以内费用" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item" id="step_fee">
				<label class="layui-form-label" style="width:120px;">续重每1KG或其零数的费用</label>
				<div class="layui-input-inline">
					<input type="text" name="plus" value="<?=$transinfo['plus']?>"  placeholder="续重每1KG或其零数的费用" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">&nbsp;</label>
				<div class="layui-input-inline">
					<a class="layui-btn" onclick="save_form()">保存</a>
				</div>
			</div>
			<hr>
			<p>注：.....</p>
		</form>
	</div>
</div>
<script type="text/javascript">
function save_form(){
	var data=$('#trans_form').serialize();
	$.ajax({
		type:'post',
		url:'/home/transport.html',
		data:data,
		success:function(r){
			if(r=='ok'){
				layer.alert('保存成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}


function compute_mode(mode){
	if (mode=='weight'){
		$('#item_fee').hide();
		$('#base_fee').show();
		$('#step_fee').show();
	}else{
		$('#item_fee').show();
		$('#base_fee').hide();
		$('#step_fee').hide();
	}
}

layui.use(['form'], function(){
  var form = layui.form();
});
</script>

<?php include T('super_admin','footer');?>