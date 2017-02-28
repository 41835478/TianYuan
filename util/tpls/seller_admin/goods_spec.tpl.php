<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 店铺中心</p>
</div>
<style type="text/css">

</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">商品属性</div>
		<div class="layui-form-item">
<?php foreach($all_spec as $k=>$v) {?>
			<div class="layui-inline">
				<label class="layui-form-label"><?=$v['title']?></label>
				<div class="layui-input-inline">
					<input type="text" name="opt[]" class="layui-input">
				</div>
			</div>
<?php }?>				
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">&nbsp;</label>
			<div class="layui-input-inline">
				<a class="layui-btn" onclick="save_form()">保存</a>
			</div>
		</div>
		
	</div>
</div>


<?php include T('seller_admin','footer');?>