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
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺首页管理</div>
		<form class="layui-form" method="post" id="sub_form">
		<input type="hidden" name="c" value="save"/>
			<div class="layui-form-item">
				<label class="layui-form-label">店铺首页顶部背景图</label>
				<div class="layui-input-inline">
					<div id="img">
						<input type="hidden" name="thumb" value="<?=$diy_info['thumb']?$diy_info['thumb']:'';?>" />
						<div  class="img"><img src="<?=$diy_info['thumb']?$diy_info['thumb']:'';?>" width="600px"/></div>
						<div class="div_2">
							<p class="ifram"><img src="/static/img/up_c1.png" alt="上传图片" />
								<iframe style="margin-top:10px;" src="/log/upfile.php?tb=2" width="110" height="32" frameborder="0" class="ifram_1"></iframe>
							</p>
						</div>
					</div>
				</div>
				<div class="layui-form-mid layui-word-aux">建议尺寸：1920 x 120</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">商品详情</label>
				<div class="layui-input-block">
					<textarea name="content" id="chk_content"><?=isset($diy_info['content'])?$diy_info['content']:'';?></textarea> 
				</div>
			</div>
			<input type="submit" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" value="保存" onclick="sub_form()">
		</form>
	</div>
</div>
<script type="text/javascript">
function setImg(d){
	$('#img').find('input').val(d);
	$('#img').find('.img img').attr('src',d);
}
function sub_form(){
	editor.sync();
	$('#sub_form').submit();
}
</script>
 
<?php include T('seller_admin','footer');?>