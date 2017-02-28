<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
<?php 
$all_pc=$db->getAll("select `areaid`,`name` from `web_area` where `parentid`=0");
if($shop_config['areaid']){
	$city=intval($shop_config['areaid']);
	$city_info=$db->get_one("select `parentid`,`arrparentid` from `web_area` where `areaid`={$city}");
	$top_pid_arr=explode(',',$city_info['arrparentid']);
	$top_pid=intval($top_pid_arr[0]);
	$parent=$db->get_one("select `areaid`,`arrchildid` from `web_area` where `areaid`={$city_info['parentid']}");
	$ac_sql="select `areaid`,`name` from `web_area` where `areaid` in ({$parent['arrchildid']})";
	$all_city=$db->getAll($ac_sql);
}?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=shop" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回商铺列表</a>
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商铺基础资料</strong> / <small>Shop information</small></div>
			  </div>
			<hr>
			<form method="post" action="/index.php" id="cate_a_from" class="am-form am-form-horizontal">
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">商铺名称：</label>
					<div class="am-u-sm-10">
					  <input type="text" id="chk_title" placeholder="输入你的商铺名称" name="title" value="<?=$shop_config['title']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">商铺说明：</label>
					<div class="am-u-sm-10">
					  <input type="text" id="chk_des" placeholder="100字以内,将用作首页分享内容" name="des" value="<?=$shop_config['des']?>">
					</div>
				</div>
				<!--<div class="am-form-group">
				  <label class="am-u-sm-2 am-form-label">所属地区：</label>
				  <select id="p" onchange="selectCity(this.value)" style="width:200px;display:inline-block;margin-left:18px">
					<option value="0">请选择</option>
<?php foreach($all_pc as $p){?>
						<option value="<?=$p['areaid']?>" <?php if($p['areaid']==$top_pid){echo 'selected';}?>><?=$p['name']?></option>
<?php }?>
				  </select>
				  <span class="am-form-caret"></span>
				  <select id="c" name="areaid" style="width:200px;display:inline-block">
						<option value="0">请选择</option>
<?php if($all_city&&$city){foreach($all_city as $c){?>
					<option value="<?=$c['areaid']?>" <?php if($c['areaid']==$city){echo 'selected';}?>><?=$c['name']?></option>
<?php }}?>
					</select>
				</div>-->
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">商铺联系人：</label>
					<div class="am-u-sm-10">
					  <input type="text" placeholder="请填写商铺主要负责人的姓名" id="chk_lman" name="linkman" value="<?=$shop_config['linkman']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">联系电话：</label>
					<div class="am-u-sm-10">
					  <input type="email" id="chk_lphone" placeholder="手机/座机均可，必填项" name="tel" value="<?=$shop_config['tel']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">联系邮箱：</label>
					<div class="am-u-sm-10">
					  <input type="email" id="chk_lmail" placeholder="请填写您的E-mail" name="email" value="<?=$shop_config['email']?>">
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">上传商铺Logo：</label>
					<div class="am-u-sm-10">
						<iframe src="/?m=admin&a=upfile&tb=7" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
						<input type="hidden" name="logo" value="<?=$shop_config['logo']?>" id="chk_thumb" />
					</div>
				</div>
				<div class="am-form-group">
					<label class="am-u-sm-2 am-form-label">商铺Logo预览：</label>
					<div class="am-u-sm-10">
						<div id="site_logo_prev">
							<img src="<?=$shop_config['logo']?>"  width="100px"  class="am-thumbnail"/>
						</div>
					</div>
				</div>
				<input type="hidden" name="m" value="admin">
				<input type="hidden" name="a" value="shop">
				<input type="hidden" name="c" value="save">
				<input type="hidden" name="id" value="<?=$id?>">
				<div class="am-form-group">
				  <div class="am-u-sm-9 am-u-sm-push-3">
					<button type="button" class="am-btn am-btn-primary" onclick="check_data()">保存信息</button>
				  </div>
				</div>
			</form>
		
	</div>
<script type="text/javascript">
	function check_data(){
		var chk_title=$('#chk_title').val();
		if (chk_title.length<1){
			alert('商铺名称不能为空');
			return false;
		}else if(chk_title.length>50){
			alert('商铺名称不能超过50字');
			return false;
		}
		var chk_dsp=$('#chk_des').val();
		if (chk_dsp.length<1){
			alert('商铺说明不能为空');
			return false;
		}else if(chk_dsp.length>100){
			alert('商铺说明不能超过100字');
			return false;
		}
		var chk_area=parseInt($('#c').val(),10);
		if (chk_area<1){
			alert('请选择一个所属地区');
			return false;
		}
		var chk_lman=$('#chk_lman').val();
		if (chk_lman.length<1){
			alert('商铺联系人不能为空');
			return false;
		}else if(chk_lman.length>20){
			alert('商铺联系人不能超过20字');
			return false;
		}
		var chk_lphone=$('#chk_lphone').val();
		if (chk_lphone.length<1){
			alert('联系电话不能为空');
			return false;
		}else if(chk_lphone.length<6||chk_lphone.length>14){
			alert('请填写正确的联系电话');
			return false;
		}
		var chk_lmail=$('#chk_lmail').val();
		if (chk_lmail.length<1){
			alert('联系邮箱不能为空');
			return false;
		}else if(chk_lmail.length<10||chk_lmail.indexOf('@')<1){
			alert('请填写正确的联系邮箱');
			return false;
		}
		var cate_icon=$('#chk_thumb').val();
		if (cate_icon.length<20){
			$('#site_logo_prev').css('borderColor','red');
			alert('请上传Logo图片');
			return false;
		}else{
			$('#site_logo_prev').css('borderColor','#999');
		}
		$('#cate_a_from').submit();
	}
	function setImg(file){
		$('#chk_thumb').val(file);
		$('#site_logo_prev').css('borderColor','#999').html('<img src="'+file+'" width="100px"/>');
	}
	function selectCity(e){
		$.ajax({
			type:'post',
			url:'/ac.php',
			data:{'m':'admin','a':'area','id':e},
			success:function(r){
                var o = document.getElementById('c');
                o.options.length = 0;
                eval('var city='+r+';');
                for(var i=0,l=city.length;i<l;i++){
                    o.options.add(new Option(city[i].name,city[i].id));
                }
			}
		});
	}
</script>
<?php include T('super_admin','footer');?>