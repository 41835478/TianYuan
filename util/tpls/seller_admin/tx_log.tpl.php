<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
th,td{text-align:center;}
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
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">账户提现记录</div>
		<div id="trans">
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
</div>


<?php include T('seller_admin','footer');?>