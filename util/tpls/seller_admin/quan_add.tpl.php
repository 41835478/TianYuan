<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}
.div_2 .ifram{position:relative;width:110px;height:32px;margin-top:20px;overflow:hidden;}
.div_2 .ifram img{width:100%;}
.div_2 .ifram_1{position:absolute;top:0;left:0;opacity:0;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">添加优惠券<a href="/home/quan.html" class="fr layui-btn layui-btn-small">返回优惠券列表</a></div>
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
 
<?php include T('seller_admin','footer');?>