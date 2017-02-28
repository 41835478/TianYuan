<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i><?=$c_title?></p>
</div>
<style type="text/css">
	#right .a_address_top{margin:15px 0;font-size:18px;text-align:center;line-height:98px;height:98px;border:1px dashed #E2E2E2;color:#A9A9A9;cursor:pointer}
	#right .a_address_top:hover{color:#78a001}
	#right .a_address_top cite{font-size:22px;font-style:normal;color:#A9A9A9;}
	#a_address{width:100%;overflow:hidden;}
	#a_address li{border:1px solid #E3E3E3;margin-bottom:15px;padding:0 20px 15px 20px;}
	#a_address li .p_1{font-size:16px;font-weight:bold;height:50px;line-height:50px;}
	#a_address li .p_1 em {float:right;font-size:22px;font-weight:bold;cursor:pointer}
	#a_address li .table_1 {font-size:14px;line-height:25px;}
	#a_address li .table_1 th{font-weight:normal;color:#ccc;text-align:right;width:75px}
	#a_address li .table_1 td{padding-left:15px;}
	#a_address li .p_2{text-align:right;line-height:40px;color:#78a001;height:40px;}
	#a_address li .p_2 span{cursor:pointer;}
	#a_address li .p_2 .span_2{margin-left:30px;}
	.add_adress{padding:6px 15px;font-size:14px;background-color:#78A001;color:#fff;cursor:pointer;}
	#a_address .p_1 .mor{background-color:#78A001;color:#fff;font-size:14px;margin-left:20px;font-weight:normal;padding:3px 8px}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">收货地址管理</div>
		<div  class="a_address_top"onclick="add_address()"><cite>+</cite> 添加新地址</div>
		<ul id="a_address">
<?php 

if(!empty($my_address)){
foreach($my_address as $kv) {
$address=unserialize($kv['address']);
$area_str=getFullAddress($all_area,$address['areaid'],' ');
?>
			<li id="add_<?=$kv['id']?>" rel="<?=$kv['id']?>">
				<p class="p_1"><?=$address['linkman']?>
<?php if($kv['sort']==1){?>
				<span class="mor">默认地址</span>
<?php }?>
				
				<em onclick="del_df('<?=$kv['id']?>')">&times;</em></p>
				<table class="table_1">
					<tr>
						<th >收货人:</th>
						<td><?=$address['linkman']?></td>
					</tr>
					<tr>
						<th >所在地区:</th>
						<td><?=$area_str?> </td>
					</tr>
					<tr>
						<th >详细地址:</th>
						<td><?=$address['address']?></td>
					</tr>
					<tr>
						<th >手 机:</th>
						<td><?=$address['phone']?></td>
					</tr>
					<tr>
						<th >固定电话:</th>
						<td><?=$address['tell']?></td>
					</tr>
					<tr>
						<th >邮 箱:</th>
						<td><?=$address['mail']?></td>
					</tr>
				</table>
				<p class="p_2">
<?php if($kv['sort']!=1){?>
					<span class="span_1"onclick="set_df(<?=$kv['id']?>)">设为默认地址</span>
<?php }?>
					<span class="span_2"onclick="edit_df(<?=$kv['id']?>)" >编辑</span>
				</p>
			
			</li>
<?php }} ?>			
		</ul>
		<span class="add_adress" onclick="add_address()">+增加新地址</span>
	</div>
</div>
<script type="text/javascript">
	function add_address(){
		art.dialog.open('/?m=wxsite&mod=address',{
			id:'add_address_log',
			title:'新增收货人信息'
		});
	}
	function edit_df(key){
		art.dialog.open('/?m=wxsite&mod=address&key='+key,{
			id:'add_address_log',
			title:'更改收货人信息'
		});
	}
	function del_df(key){
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=ajax',
			data:{'a':'deladdress','key':key},
			success:function(d){
				if (d=='ok'){
					art.dialog.tips('删除成功');
					setTimeout(function(){window.location.reload(true);},500);
				}
			}
		});
	}
	function set_df(key){
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=ajax',
			data:{'a':'dfaddress','key':key},
			success:function(d){
				if (d=='ok'){
					art.dialog.tips('设置成功');
					setTimeout(function(){window.location.reload(true);},500);
				}
			}
		});
	}

</script>
<?php include T('seller_admin','footer');?>