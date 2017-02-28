<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	.head{background-color: #fff;}
	.can-user-score{float: left;width: 100%;height:150px;font-size: 18px;}
	.can-user-score p{margin-left: 20px;color: #9D9D9D;}
	.can-use{width: 90%;border: 1px dashed #CCCCCC; height: 80px;margin: 0 auto;border-radius: 5px;line-height: 80px;text-align: center;}
	.can-use span{color: #009239;font-weight: bold;}
	.score-info{float: left;width: 100%;margin-top:20px;}
	.score-table{float:left;width: 90%;margin-left:5%;background-color: #ffffff;border: 1px solid #cccccc;height: 300px;}
	.score-title{width: 90%;height: 40px;line-height: 40px;float: left;margin-left: 5%;margin-bottom: 10px;}
	.score-info ul{margin: 0;padding: 0px;width: 100%;float: left;}
	.score-info li{float: left;width: 25%;height: 40px;line-height: 40px;text-align: center;font-size: 14px;list-style: none;}
	.score-table li{font-size: 12px;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;" ><</div>
			<div class="head_title">我的积分</div>
		</div>
		<div class="can-user-score">
			<p>注：订单积分会在确认收货后48小时内到账</p>
			<div class="can-use">
				当前可用积分 <span><?=$user['score']?></span>
			</div>
		</div>
		<div class="score-info">
			<div class="score-title">
				<ul style="border: 1px solid #ccc;">
					<li>交易记录</li>
					<li style="width:10%;">积分变化</li>
					<li style="width:35%;">日期</li>
					<li>备注</li>
				</ul>
			</div>
			<div class="score-table">
			<?php foreach ($log as $k=>$v) {?>
				<ul style="border-bottom: 1px solid #ccc;">
					<li><?=$tp_arr[$v['type']]?></li>
					<li style="width:10%;"><?=$v['way']==1?'+':'-';?><?=$v['score']?></li>
					<li style="width:35%;"><?=date('Y-m-d ',$v['time'])?></li>
					<li><?=$v['extra']?></li>
				</ul>
			<?php }?>
			</div>
		</div>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">

	
</script>