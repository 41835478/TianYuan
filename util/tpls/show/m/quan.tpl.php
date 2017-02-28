<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size:100%;}
	.head{background-color: #fff;}
	.quan-list{float:left;width: 90%;height: 150px;border: 1px solid #ccc;margin-top:20px;margin-left: 5%;border-radius: 5px;border-top: 5px solid #ABD13E;background-color: #fff;}
	.quan-info{height: 100px; width: 100%;border-bottom: 1px solid #ccc;}
	.quan-mz{float: left;width: 40%;height: 100px;padding-left: 10px;}
	.mz{font-size: 20px;color:#ABD13E;font-weight: bold;}
	.dead-time{float: left;width:55%;height: 50px;font-size: 16px;line-height: 50px;font-weight: bold;color: #424242;}
	.quan-time{height: 50px;line-height: 50px;text-align: right;font-size: 12px;padding-right: 10px;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">优惠券</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
	<?php foreach ($myquan as $k => $v) {
	$quan=$db->get_One('select * from `web_quan` where id='.$v['quanid']);
	?>
		<div class="quan-list">
			<div class="quan-info">
				<div class="quan-mz">
					<p class="mz">&yen; <span style="font-size:40px;"><?=$quan['fee']?></span></p>
					<p style="font-size:12px;margin-top:10px;"><?=$quan['beyond']>0?'满'.$quan['beyond'].'元可以使用':'无限制';?></p>
				</div>
				<div class="dead-time">
					<p><?=$quan['title']?></p>
				</div>
			</div>
			<div class="quan-time">
				<?=date('Y年m月d日',$quan['stime'])?>到<?=date('Y年m月d日',$quan['etime'])?>
			</div>
		</div>
	<?php }?>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">

	
</script>