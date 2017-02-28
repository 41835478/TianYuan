<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>设置收货人信息</title>
	<meta name="Author" content="Zero">
	<link href="/static/css/wxsite/addorder.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/static/js/j.js"></script>
	<script type="text/javascript">
		function selectCity(e,idstr){
			$.ajax({
				type:'post',
				url:'/ac.php?type=qu',
				dataType:'json',
				data:{'m':'admin','a':'area','areaid':e},
				success:function(city){
					var o = document.getElementById(idstr);
					o.options.length =1;
					if (city.length>1){
						o.style.display='inline-block';
						for (var i in city){
							o.options.add(new Option(city[i].name,city[i].areaid));
						}
					}else{
						setCity(e);
						o.style.display='none';
					}
				}
			});
		}
		function setCity(id){
			$('#areaid').val(id);
		}
	</script>
</head>
<body>
	<div id="container" class="tab_add_a">
	<form method="post" id="address_fid">
		<input type="hidden" name="a" value="saveaddress" />
		<table cellpadding="4">
			<tr>
				<th width="90px"><span style="color:red">*</span>&nbsp;收货人：</th>
				<td><input type="text" name="linkman" id="chk_linkman" value="<?=$address['linkman']?>" placeholder="填写收货人姓名" /></td>
			</tr>
			<tr>
				<th><span style="color:red">*</span>&nbsp;所在地区：</th>
				<td>
<?php $all_pc=$db->getAll("select `areaid`,`name` from `web_shop_area` where `parentid`=0");?>
					<select id="p" onchange="selectCity(this.value,'c')">
					<option value="0">请选择</option>
<?php foreach($all_pc as $p){?>
					<option value="<?=$p['areaid']?>"><?=$p['name']?></option>
<?php }?>
					</select>
					<select id="c" onchange="selectCity(this.value,'q')">
						<option value="0">请选择</option>
					</select>
					<select id="q" onchange="setCity(this.value)">
						<option value="0" selected>请选择</option>
					</select>
					<input type="hidden" name="areaid" id="areaid" value="<?=$address['areaid']?>" />
				</td>
			</tr>
			<tr>
				<th><span style="color:red">*</span>&nbsp;详细地址：</th>
				<td><input type="text" style="width:270px" name="address" id="chk_address" value="<?=$address['address']?>" placeholder="填写收货详细地址" /></td>
			</tr>
			<tr>
				<th><span style="color:red">*</span>&nbsp;手机号码：</th>
				<td><input type="text" name="phone" id="chk_phone" value="<?=$address['phone']?>" placeholder="填写收货人手机号码" /></td>
			</tr>
			<tr>
				<th>固定电话：</th>
				<td><input type="text" name="tell" id="chk_tell" value="<?=$address['tell']?>" placeholder="填写收货人固定电话" /></td>
			</tr>
			<tr>
				<th>邮箱：</th>
				<td><input type="text" name="mail" id="chk_mail" value="<?=$address['mail']?>" placeholder="填写收货人邮箱" /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="key" value="<?=$key?>" /></td>
				<td><button type="button" onclick="save_address()">保存收货人信息</button></td>
			</tr>
		</table>
	</form>
	</div>
<script type="text/javascript">
	function save_address(){
		var chk_linkman=$('#chk_linkman').val();
		if (chk_linkman.length<1){
			window.top.art.dialog.tips('请填写收货人姓名');
			return;
		}
		var areaid=$('#areaid').val();
		if (areaid<1){
			window.top.art.dialog.tips('请选择收货地区');
			return;
		}
		var chk_address=$('#chk_address').val();
		if (chk_address.length<2){
			window.top.art.dialog.tips('请填写收货详细地址');
			return;
		}
		var chk_phone=$('#chk_phone').val();
		if (chk_phone.length<1){
			window.top.art.dialog.tips('请填写收货人手机号码');
			return;
		}
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=ajax',
			data:$('#address_fid').serialize(),
			success:function(d){
				if (d=='ok'){
					window.top.art.dialog.tips('保存成功');					
					window.top.flush_address();
					window.top.layer.closeAll();
				}else{
					window.top.location.reload(true);
				}
			}
		});
	}
</script>
</body>
</html>