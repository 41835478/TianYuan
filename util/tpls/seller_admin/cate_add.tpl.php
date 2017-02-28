<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{width: 966px;min-height: 600px;overflow: hidden;float: right;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">添加商品分类<a href="/home/cate.html" class="fr layui-btn layui-btn-small layui-btn-normal">返回分类列表</a></div>
		<div class="cate_add">
			<form class="layui-form">
			<div class="layui-form-item">
				<label class="layui-form-label">分类标题：</label>
				<div class="layui-input-inline">
					<input type="text" id="name" value="<?=$info['name']?>" placeholder="请输入标题" autocomplete="off" class="layui-input">
				</div>
				<div class="layui-form-mid layui-word-aux">请输入标题</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">所属分类：</label>
				<div class="layui-input-block">
					<select id="parent">
						<option value="0">顶级分类</option>
						<?php foreach($shop_cate_top as $k=>$v) {?>
						<option value="<?=$v['id']?>" ><?=$v['name']?></option>
						<?php }?>
					</select>
				</div>
			</div>
			<input type="hidden" id="id" value="<?=$id?>"/>
			<a class="layui-btn layui-btn-primary layui-btn-radius" onclick="save()">保存分类</a>
			</form>
		</div>
	</div>
</div>
<script>
layui.use(['form'], function(){
  var form = layui.form() 
});
</script>



<script type="text/javascript">
function save(){
	var name=$('#name').val();
	if(name.length<1){
		layer.alert('分类标题不能为空');
		return;
	}
	var tp=$('#parent').val();
	var id=$('#id').val();
	$.ajax({
		type:'post',
		url:'/home/cate.html?c=save&id='+id,
		data:{'name':name,'parent':tp},
		success:function(r){
			if(r=='ok'){
				layer.alert('分类保存成功');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.href="/home/cate.html";},1200);
		}
	});
}
</script>

<?php include T('seller_admin','footer');?>