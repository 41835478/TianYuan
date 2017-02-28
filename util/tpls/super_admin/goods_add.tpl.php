<?php include T('super_admin','header');?>
<style type="text/css">
[class*=am-u-]+[class*=am-u-]:last-child{float:left;}
</style>
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
					Width:'900px',
					height:'400px',
					items : ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', 'lineheight','|','plainpaste','wordpaste', '|', 'image','multiimage','table','baidumap','|', 'link'],
					imageTabIndex:1
			});
	});
</script>
<link rel="stylesheet" href="/static/layui/css/layui.css">
<script src="/static/layui/layui.js"></script>
<style type="text/css">
.layui-form-label{width:120px}	
.layui-form{padding-top:30px;}
</style>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=goods" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回商品列表</a>
			<form method="post" action="index.php" id="cate_a_from" class="layui-form">
				<table cellpadding="5" style="margin-top:20px">
					<div class="layui-form-item">
						<label class="layui-form-label">平台分类</label>
						<div class="layui-input-inline">
							<select name="pid" lay-filter="pid">
								<option value="0" selected="selected">请选择分类</option>
							<?php foreach($parent as $k=>$v) {?>
								<option value="<?=$v['id']?>"><?=$v['name']?></option>
							<?php }?>
							</select>
						</div>
						<div class="layui-input-inline" id="sid">
							
						</div>
						<div class="layui-input-inline" id="gid" >
							
						</div>
					</div>
<script>
layui.use('form', function(){
	var form = layui.form();
	form.on('select(pid)', function(data){
		var pid=data.value;
		$.ajax({
			type:'post',
			url:'/?m=admin&a=ajax',
			data:{'id':pid},
			success:function(data){
				$('#sid').html(data);
				form.render('select');
			}
		});
	}); 
	form.on('select(sid)', function(data){
		var sid=data.value;
		$.ajax({
			type:'post',
			url:'/?m=admin&a=ajax',
			data:{'id':sid},
			success:function(data){
				if (data=='1'){
					$('#gid').hide();
				}else{
					$('#gid').show();
					$('#gid').html(data);
					form.render('select');
				}
				
			}
		});
	});
});
</script>

					<div class="layui-form-item">
						<label class="layui-form-label">商品标题</label>
						<div class="layui-input-inline">
							<input type="text" name="title" id="chk_title" style="width:800px" value="<?=$goods['title']?>" class="layui-input" placeholder="请填写商品标题"/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品副标题</label>
						<div class="layui-input-inline">
							<input type="text" name="subtitle" style="width:800px" lay-verify="subtitle" value="<?=$goods['subtitle']?>" autocomplete="off" placeholder="请填写商品副标题" class="layui-input">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品货号</label>
						<div class="layui-input-inline">
							<input type="tel" name="goods_sn" lay-verify="goods_sn"  value="<?=$goods['goods_sn']?>" autocomplete="off" class="layui-input" placeholder="请填写商品货号">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">原价</label>
						<div class="layui-input-inline">
							<input type="text" name="oldprice" value="<?=$goods['oldprice']?>" lay-verify="oldprice" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">必填项，单位元，精确到小数点后两位</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商城价</label>
						<div class="layui-input-inline">
							<input type="text" name="price" value="<?=$goods['price']?>" lay-verify="price" id="chk_price" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">必填项，单位元，精确到小数点后两位</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">库存数量</label>
						<div class="layui-input-inline">
							<input type="text" name="num" value="<?=$goods['num']?>" lay-verify="num" id="chk_num" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">必填项，库存数目，购买成功会自动减少，库存为0则无法再被购买</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品重量</label>
						<div class="layui-input-inline">
							<input type="text" name="weight" value="<?=$goods['weight']?>" lay-verify="weight" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">必填项，单位千克/公斤，用于邮费计算</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品体积</label>
						<div class="layui-input-inline">
							<input type="text" name="ms" value="<?=$goods['ms']?>" lay-verify="ms" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">必填项，单位立方米，用于邮费计算</div>
					</div>
					<!--<div class="layui-form-item">
						<label class="layui-form-label">返现金额</label>
						<div class="layui-input-inline">
							<input type="text" name="weight" value="<?=$goods['weight']?>" lay-verify="weight" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid layui-word-aux">该商品可以返现的金额</div>
					</div>-->
<style type="text/css">
.c_g{display:none;}
b.b_bg{display:block;width:940px;height:38px;background:#F9F9F9;font-size:16px;line-height:38px;text-indent:16px;color:#2595FF;font-weight:normal;}
#add_spec{width:30px;height:30px;background:url('http://jizan.7192.com/static/img/icon_blue.png?t=2') no-repeat -130px -331px;background-size:550px 605px;float:left;margin-left:10px;cursor:pointer;}
#dele_spec{width:30px;height:30px;background:url('http://jizan.7192.com/static/img/icon_blue.png') no-repeat -510px -137px;background-size:550px 605px;float:left;margin-left:10px;cursor:pointer;}
#gift_div{width:400px;height:40px;}	
</style>
<script type="text/javascript">
$(function(){
	$('#add_spec').click(function(){
		var str='<div id="gift_div"><input type="text" name="specname[]" class="layui-input" placeholder="属性名" style="width:150px;float:left;" value=""/><span style="padding-left:10px;float:left;"><input type="text" name="specval[]" class="layui-input" placeholder="属性值" style="width:150px;" value="" /></span><a title="点击删除" id="dele_spec"></a></div>';
		$('#gift').append(str); 
	});

	$("#dele_spec").live("click",function(){
		$(this).parent().remove();
	});
});
</script>

					<div class="layui-form-item">
						<label class="layui-form-label">商品属性</label>
						<div class="layui-input-inline" id="gift">
							<?php if(!empty($arr_spec)){
							$n=0;foreach($arr_spec as $k=>$v){?>
							<div id="gift_div">
								<input type="text" name="specname[]" class="layui-input" placeholder="属性名" style="width:150px;float:left;" value="<?=$v['specname']?>"/>
								<span style="padding-left:10px;float:left;"><input type="text" name="specval[]" class="layui-input" placeholder="属性值" style="width:150px;" value="<?=$v['specval']?>" /></span>
								<?php if($n==0){?>
								<a title="点击添加礼品" id="add_spec"></a>
								<?php }else{?>
								<a title="点击删除礼品" id="dele_spec"></a>
								<?php }?>
							</div>
							<?php $n++;}}else{?>
							<div id="gift_div">
								<input type="text" name="specname[]" class="layui-input" placeholder="属性名" style="width:150px;float:left;" value=""/>
								<span style="padding-left:10px;float:left;"><input type="text" name="specval[]" class="layui-input" placeholder="属性值" style="width:150px;" value="" /></span>
								<a title="点击添加礼品" id="add_spec"></a>
							</div>
							<?php }?>
						</div>
						
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">运费方式</label>
						<div class="layui-input-inline" style="width:300px">
							
							<select name="flvid" id="flvid">
								<option value="0">选择运费模板</option>
		<?php if(!empty($info['userid'])){
			$flvs=$db->getAll('select * from `web_shop_flv` where `uid`='.$info['userid']);
			if(!empty($flvs)){
				foreach($flvs as $flv) {?>
								<option value="<?=$flv['id']?>"<?=$flv['id']==$info['flvid']?' selected':''?>><?=$fee_tp[$flv['type']]['tit']?>_<?=$flv['title']?></option>
				<?php }}}?>
							</select><br/>
							<a href="/?m=admin&a=trans" class="am-btn am-btn-secondary">管理运费模板</a>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">上传缩略图</label>
						<div class="layui-input-inline">
							<iframe src="/home/upfile.html?tb=6" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
							<input type="hidden" name="thumb" value="<?=$goods['thumb']?>" id="chk_thumb" />
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">缩略图预览</label>
						<div class="layui-input-inline">
							<div id="site_logo_prev">
								<img src="<?=$goods['thumb']?>"  width="100px"/>
							</div> 
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品图集</label>
						<div class="layui-input-block">
							<h4 style="height:30px;line-height:30px;overflow:hidden">提示：上传2-5张图片，jpg 或者jpeg格式，单张图片不超过2MB，建议尺寸800X800像素，上传成功后，可以通过拖动图片来改变排序!</h4>				
							<div id="thumbnails">
<?php if(is_array($mywork)){foreach($mywork as $v){?>
							<div class="u_single <?php if($v['thumb']==$info['thumb']):?>fcf_color<?php endif;?>">
								<div class="top_img_z1"><img src="<?=str_replace('_real','_350_350',$v['thumb'])?>"/></div>
								<div class="opop">
									<a href="<?=$v['thumb']?>" target="_blank">原图</a>
									<a onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);">删除</a>
									<label><input type="radio" name="info[cover]" value="<?=$v['id']?>"<?php if($v['thumb']==$info['thumb']){echo ' checked';}?> onclick="set_face_z(this)"/><span>封面</span></label>
									<input type="hidden" name="info[sort][]" value="<?=$v['id']?>"/>
								</div>
							</div>
<?php }}?>
								<div id="upload_btn_area"><div class="uploadbtn" id="upload_btn"><span id="spanButtonPlaceholder"></span></div></div>
							</div>
							<div id="divFileProgressContainer" style="clear:both;"></div>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">商品详情</label>
						<div class="layui-input-inline">
							<textarea name="content" id="chk_content"><?=isset($goods['content'])?$goods['content']:'';?></textarea> 
						</div>
					</div>

					<input type="hidden" name="m" value="admin">
					<input type="hidden" name="a" value="goods">
					<input type="hidden" name="c" value="save">
					<input type="hidden" name="id" value="<?=$id?>" />
					<input type="button" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" value="保存" onclick="check_data()">
			</form>
</div>
<link href="/static/plugin/swfupload/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/plugin/swfupload/jqueryui.js"></script>
<script type="text/javascript" src="/static/plugin/swfupload/su.js"></script>
<script type="text/javascript" src="/static/plugin/swfupload/handlers.js"></script>
<script type="text/javascript">
$( "#thumbnails" ).sortable({handle: '.top_img_z1',revert:true, items:'div.u_single',opacity:0.6});
function show_org(pic){
	window.open('/index.php?m=admin&a=showphoto&picid='+pic);
}
var swfu;
window.onload = function () {
	swfu = new SWFUpload({
		upload_url: "/ac.php",
		post_params: {"m":"admin","a":"photo","PHPSESSID": "<?php echo session_id(); ?>"},
		file_size_limit : "3 MB",
		file_types : "*.jpg",
		file_types_description : "JPG Images",
		file_upload_limit : "5",
		file_queue_error_handler : fileQueueError,
		file_dialog_complete_handler : fileDialogComplete,
		upload_progress_handler : uploadProgress,
		upload_error_handler : uploadError,
		upload_success_handler : uploadSuccess,
		upload_complete_handler : uploadComplete,
		button_image_url : "/static/plugin/swfupload/images/SmallSpyGlassWithTransperancy_17x18.gif",
		button_placeholder_id : "spanButtonPlaceholder",
		button_width: 130,
		button_height: 180,
		button_text : '<span class="button">&nbsp;</span>',
		button_text_style : '.button { font-family: Helvetica, Arial, sans-serif; font-size: 12pt; } .buttonSmall { font-size: 10pt; }',
		button_text_top_padding: 0,
		button_text_left_padding: 18,
		button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
		button_cursor: SWFUpload.CURSOR.HAND,
		flash_url : "/static/plugin/swfupload/swfupload.swf",
		custom_settings : {
			upload_target : "divFileProgressContainer"
		},
		debug: false
	});
};
/*var modify;
(function(){
	modify = setInterval(function(){
		if(window.onbeforeunload){
			clearInterval(modify);
			return;
		}else{
			var ipts = document.getElementById('thumbnails').getElementsByTagName('a');
			if(ipts.length){
				window.onbeforeunload = function(){
					return "刷新和离开当前页面会导致您填写的信息丢失\n确定要离开吗？";
				};
			}
		}
	},1000);
})();*/
function check_data(){
	var chk_title=$('#chk_title').val();
	if (chk_title.length<1){
		layer.alert('商品标题不能为空');
		return false;
	}else if(chk_title.length>100){
		layer.alert('商品标题不能超过100字');
		return false;
	}
	var chk_price=$('#chk_price').val();
	if (chk_price.length<1||chk_price<=0){
		layer.alert('商品价格不能为空');
		return false;
	}
	var chk_num=parseInt($('#chk_num').val(),10);
	if (chk_num<=0){
		layer.alert('商品库存不能为空');
		return false;
	}	
	editor.sync();
	var leng= editor.html().length;
	if(leng>20000){
		layer.alert('内容不能超过20000字');
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
<?php include T('super_admin','footer');?>