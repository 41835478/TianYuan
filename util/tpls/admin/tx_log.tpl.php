<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
th,td{text-align:center;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">分销提成流水</div>
		<table class="site-table">
			<tr>
				<th>编号</th>
				<th>提现金额</th>
				<th>提现方式</th>
				<th>提现账户</th>
				<th>联系人</th>
				<th>联系方式</th>
				<th>状态</th>
				<th>提现时间</th>
			</tr>
<?php if(empty($list)){
				$n=0;?>
			<tr>
				<td colspan="9" class="al">暂无！</td>
			</tr>
<?php }else{
$n=1;
foreach($list as $kv) {?>
			<tr>
				<td><?=$n++?></td>
				<td><?=$kv['cash']?></td>
				<td><?php if($kv['way']==1){echo '微信';}elseif($kv['way']==2){echo '支付宝';}else{echo '银行卡';}?></td>
				<td><?=$kv['account']?></td>
				<td><?=$kv['name']?></td>
				<td><?=$kv['tel']?></td>
				<td><?=$kv['status']==1?'<span style="color:green">已审核</span>':'<span style="color:red">待审核</span>';?></td>
				<td><?=date('Y-m-d H:i:s',$kv['time'])?></td>
			</tr>
<?php }}?>
		</table>
	</div>
</div>
<?php include T('seller_admin','footer');?>