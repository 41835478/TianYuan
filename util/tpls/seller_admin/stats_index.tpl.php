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
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺销售统计</div>
		<div class="stat">
			<table class="site-table">
				<thead>
					<tr>
						<th width="30px">#</th>
						<th width="150px">商品名称</th>
						<th width="150px">销售价</th>
						<th width="100px">下单时间</th>
						<th width="100px">状态</th>
					</tr> 
				</thead>
				<tbody>
<?php $n=1;foreach($orders as $k=>$v) {?>
					<tr>
						<td style="text-align: center;"><?=$n?></td>
						<td style="text-align: center;"><?=$v['goods_name']?></td>
						<td style="text-align: center;"><?=$v['fee']?></td>
						<td style="text-align: center;"><?=date('Y-m-d H:i',$v['time'])?></td>
						<td style="text-align: center;"><?php if($v['status']==1||$v['status']==2){echo "订单未支付";}elseif($v['status']==3){echo '已支付';}?></td>
					</tr>
<?php $n++;}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>