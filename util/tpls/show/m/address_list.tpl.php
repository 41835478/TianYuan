<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size:100%;}
	.head{background-color: #fff;}
	.quan-list{float:left;width: 100%;margin-top:20px;border-top: 5px solid #ABD13E;background-color: #fff;}
	.quan-info{height: 100px; width: 100%;border-bottom: 1px solid #ccc;}
	.quan-mz{float: left;width: 100%;height: 100px;}
	.quan-mz p{float: left;}
	.mz{font-size: 20px;font-weight: bold;padding:10px;}
	.phone{width: 50%;font-size: 16px;padding: 15px;}
	.address{font-size: 14px;padding: 10px;width:80%;}
	.dead-time{float: left;width:55%;height: 50px;font-size: 16px;line-height: 50px;font-weight: bold;color: #424242;}
	.quan-time{height: 50px;line-height: 50px;text-align: right;font-size: 12px;padding-right: 10px;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">地址列表</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
<?php
 foreach($my_address as $kv) {
	$address=unserialize($kv['address']);
	$area_str=getFullAddress($all_area,$address['areaid'],' ');
?>
		<div class="quan-list">
			<a href="address.html?key=<?=$kv['id']?>">
				<div class="quan-info">
					<div class="quan-mz">
						<p class="mz"><?=$address['linkman']?></p>
						<p class="phone"><?=$address['phone']?></p>
						<p class="address"><?php if ($kv['sort'] == 1) {?><span style="width:30px;height:20px;background-color:#ABD13E;color:#ffffff;font-size:14px;padding:3px;margin-right:10px;">默认</span><?php }?><?=$area_str?> <?=$address['address']?></p>
						<img src="/static/img/wap/address_edit.png" style="width:20px;float:right;margin-right:20px;">
					</div>
				</div>
			</a>
		</div>
	<?php }?>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">

	
</script>