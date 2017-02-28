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
.u_info{border:1px solid #eee;height:153px;min-height:0;overflow:hidden;}
.user{height:79px;padding-top:20px;border-bottom:1px solid #eee;background-color:#f8f8f8;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:10px;}
.name h2{font-size:16px;font-weight:bold;}
.edit{color:#009237;font-size:14px;text-decoration:underline;}
#area_lists{width:90%;min-height:0;overflow:hidden;}
#area_lists li{float:left;min-height:0;overflow:hidden;line-height:30px;margin:0 10px 10px 0;}
#area_lists li label{display:inline-block;line-height:30px;vertical-align:top;padding:5px;margin:0}
#area_lists li label input{vertical-align:middle;margin:0}
#area_lists li label span{vertical-align:middle;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">物流工具<a class="fr layui-btn layui-btn-small" onclick="add_shop_fee(<?=$id?>)"><span class="am-icon-plus"></span> 添加运费标准</a></div>
		<div id="trans">
			<div class="am-form-group">
				<form method="post" action="index.php" id="cate_a_from" class="layui-form">
				<div class="layui-form-item">
					<label class="layui-form-label">标准：</label>
					<div class="layui-input-block">
						<input type="text" disabled value="<?=$fee_tp[$flv['type']]['tit']?>" class="layui-input" placeholder="标准"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">名称：</label>
					<div class="layui-input-block">
						<input type="text" name="title" id="chk_title" value="<?=$fee['title']?>" class="layui-input" placeholder="名称"/>
					</div>
				</div>
<?php if($flv['type']==1){?>
				<div class="layui-form-item">
					<label class="layui-form-label">首重标准</label>
					<div class="layui-input-block">
						<input type="text" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" class="layui-input" placeholder="首重标准(单位：Kg)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">首重价格</label>
					<div class="layui-input-block">
						<input type="text" name="fee" id="chk_fee" value="<?=$fee['fee']?>" class="layui-input" placeholder="首重价格(单位：元)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续重标准</label>
					<div class="layui-input-block">
						<input type="text" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" class="layui-input" placeholder="续重标准(单位：Kg)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续重价格</label>
					<div class="layui-input-block">
						<input type="text" name="efee" id="chk_efee" value="<?=$fee['efee']?>" class="layui-input" placeholder="续重价格(单位：元)"/>
					</div>
				</div>
<?php }elseif($flv['type']==3){?>
				<div class="layui-form-item">
					<label class="layui-form-label">首积标准</label>
					<div class="layui-input-block">
						<input type="text" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" class="layui-input" placeholder="首积标准(单位：立方米)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">首积价格</label>
					<div class="layui-input-block">
						<input type="text" name="fee" id="chk_fee" value="<?=$fee['fee']?>" class="layui-input" placeholder="首积价格(单位：元)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续积标准</label>
					<div class="layui-input-block">
						<input type="text" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" class="layui-input" placeholder="续积标准(单位：Kg)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续积价格</label>
					<div class="layui-input-block">
						<input type="text" name="efee" id="chk_efee" value="<?=$fee['efee']?>" class="layui-input" placeholder="续积价格(单位：元)"/>
					</div>
				</div>
<?php }else{?>
				<div class="layui-form-item">
					<label class="layui-form-label">首件标准</label>
					<div class="layui-input-block">
						<input type="text" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" class="layui-input" placeholder="首件标准(单位：件)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">首件价格</label>
					<div class="layui-input-block">
						<input type="text" name="fee" id="chk_fee" value="<?=$fee['fee']?>" class="layui-input" placeholder="首件价格(单位：元)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续件标准</label>
					<div class="layui-input-block">
						<input type="text" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" class="layui-input" placeholder="续件标准(单位：件)"/>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">续件价格</label>
					<div class="layui-input-block">
						<input type="text" name="efee" id="chk_efee" value="<?=$fee['efee']?>" class="layui-input" placeholder="续件价格(单位：元)"/>
					</div>
				</div>
<?php }?>
				<div class="layui-form-item">
					<label class="layui-form-label">相关地区</label>
					<div class="layui-input-block">
						<ul id="area_lists">
<?php foreach($all_areas as $area) {
$this_fid=0;
if(isset($all_area_rel[$area['areaid']])){
	$this_fid=$all_area_rel[$area['areaid']]['fid'];
}
?>
							<li class="<?=$this_fid>0?($this_fid==$now_fid?'selected':'hasone'):'normal'?>"><input type="checkbox" <?=$this_fid==$now_fid?'checked':''?> id="c_<?=$area['areaid']?>" name="areaids[]" value="<?=$area['areaid']?>"  title="<?=$area['name']?>"/></li>
<?php }?>
						</ul>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label"></label>
					<div class="layui-input-block">
						<p>虚线为其他费率的已选地区<br/>蓝色为已选中地区，如果跟其他费率冲突，将覆盖掉之前的</p>
					</div>
				</div>
				
				<input type="hidden" name="m" value="admin" />
				<input type="hidden" name="a" value="trans" />
				<input type="hidden" name="c" value="savefee" />
				<input type="hidden" name="flvid" value="<?=$flvid?>" />
				<input type="hidden" name="id" value="<?=$now_fid?>" />
				<div class="layui-form-item">
					<label class="layui-form-label">续件价格</label>
					<div class="layui-input-block">
						<button type="button" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" onclick="save_add()" />保存信息</button>
					</div>
				</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function set_all(e){
		if (e.checked){
			console.log($('#area_lists li.normal'));
			$('#area_lists li.normal').addClass('selected');
			$('#area_lists li.normal input').attr('checked','checked');
		}else{
			$('#area_lists li.normal').removeClass('selected');
			$('#area_lists li.normal input').removeAttr('checked');
		}
		form.render();
	}
	function save_add(){
		var chk_title=$('#chk_title').val();
		if (chk_title.length<1){
			art.dialog.alert('名称不能为空');
			return;
		}
		var chk_fw=parseFloat($('#chk_fw').val());
		if (chk_fw<0){
			art.dialog.alert('首重标准能少于0');
			return;
		}
		var chk_fee=parseFloat($('#chk_fee').val());
		if (chk_fee<0){
			art.dialog.alert('首重价格不能少于0');
			return;
		}
		var chk_efee=parseFloat($('#chk_efee').val());
		if (chk_efee.length<20){
			art.dialog.alert('请上传一个品牌缩略图');
			return;
		}
		$('#cate_a_from').submit();
	}

	$(function(){
		$('#area_lists li input').click(function(){
			var e=$(this);
			var li=e.parent().parent();
			if (this.checked){
				li.addClass('selected');
			}else{
				li.removeClass('selected');
			}
		});
	});

layui.use('form', function(){
	var form = layui.form();
});
</script>
<?php include T('seller_admin','footer');?>