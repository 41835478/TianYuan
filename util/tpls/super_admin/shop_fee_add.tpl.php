<?php include T('super_admin','header');?>


<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商户运费模板</strong> / <small>Coupons
</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
			  <a href="/?m=admin&a=trans&c=showfee&id=1" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回运费标准</a>
            </div>
          </div>
        </div>
<style type="text/css">
#area_lists{width:90%;min-height:0;overflow:hidden;}
#area_lists li{float:left;min-height:0;overflow:hidden;line-height:30px;margin:0 10px 10px 0;}
#area_lists li label{display:inline-block;height:33px;line-height:30px;width:70px;vertical-align:top;border:1px solid #ddd;padding:0 0 0 6px;margin:0}
#area_lists li.hasone label{border-style:dashed}
#area_lists li.selected label{border-style:solid;border-color:#36f;color:#36f;}
#area_lists li label input{vertical-align:middle;margin:0}
#area_lists li label span{vertical-align:middle;}
</style>
        <div class="am-u-sm-12">
			<form  class="am-form am-form-horizontal" method="post" id="cate_a_from">
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">标准：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="标准" value="<?=$fee_tp[$flv['type']]['tit']?>" disabled>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">名称：</label>
					<div class="am-u-sm-10">
					  <input type="text" name="title" id="chk_title" value="<?=$fee['title']?>" placeholder="名称">
					</div>
				</div>
<?php if($flv['type']==1){?>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首重标准：</label>
					<div class="am-u-sm-10">
					  <input type="text" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" placeholder="首重标准(单位：Kg)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首重价格：</label>
					<div class="am-u-sm-10">
					  <input type="text" name="fee" id="chk_fee" value="<?=$fee['fee']?>" placeholder="首重价格(单位：元)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续重标准：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" placeholder="续重标准(单位：Kg)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续重价格：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="efee" id="chk_efee" value="<?=$fee['efee']?>" placeholder="续重价格(单位：元)">
					</div>
				</div>
<?php }elseif($flv['type']==3){?>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首积标准：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" placeholder="首积标准(单位：立方米)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首积价格：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="fee" id="chk_fee" value="<?=$fee['fee']?>" placeholder="首积价格(单位：元)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续积标准：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" placeholder="续积标准(单位：立方米)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续积价格：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="efee" id="chk_efee" value="<?=$fee['efee']?>" placeholder="续积价格(单位：元)">
					</div>
				</div>
<?php }else{?>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首件标准：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="fw" id="chk_fw" value="<?=$fee['fw']?$fee['fw']:'1'?>" placeholder="首件标准(单位：件)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">首件价格：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="fee" id="chk_fee" value="<?=$fee['fee']?>" placeholder="首件价格(单位：元)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续件标准：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="ew" id="chk_ew" value="<?=$fee['ew']?$fee['ew']:'1'?>" placeholder="续件标准(单位：立方米)">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">续件价格：</label>
					<div class="am-u-sm-10">
					  <input type="number" name="efee" id="chk_efee" value="<?=$fee['efee']?>" placeholder="续件价格(单位：元)">
					</div>
				</div>
<?php }?>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">相关地区：</label>
					<div class="am-u-sm-10">
						<ul id="area_lists">
<?php foreach($all_areas as $area) {
$this_fid=0;
if(isset($all_area_rel[$area['areaid']])){
	$this_fid=$all_area_rel[$area['areaid']]['fid'];
}
?>
							<li class="<?=$this_fid>0?($this_fid==$now_fid?'selected':'hasone'):'normal'?>"><label for="c_<?=$area['areaid']?>"><input type="checkbox" <?=$this_fid==$now_fid?'checked':''?> id="c_<?=$area['areaid']?>" name="areaids[]" value="<?=$area['areaid']?>" /><span><?=$area['name']?></span></label></li>
<?php }?>
						</ul>
						<label for="c_normal"><input type="checkbox" id="c_normal" onclick="set_all(this)" /><span>全选</span></label>
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label"></label>
					<div class="am-u-sm-10">
					  <p>虚线为其他费率的已选地区<br/>蓝色为已选中地区，如果跟其他费率冲突，将覆盖掉之前的</p>
					</div>
				</div>
				
				<input type="hidden" name="m" value="admin" />
				<input type="hidden" name="a" value="trans" />
				<input type="hidden" name="c" value="savefee" />
				<input type="hidden" name="flvid" value="<?=$flvid?>" />
				<input type="hidden" name="id" value="<?=$now_fid?>" />
				<div class="am-form-group">
				  <div class="am-u-sm-9 am-u-sm-push-3">
					<button type="button" class="am-btn am-btn-primary" onclick="save_add()" />保存信息</button>
				  </div>
				</div>
				
          </form>
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
</script>

<?php include T('super_admin','footer');?>