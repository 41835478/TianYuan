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
			<table class="layui-table" lay-skin="line">
				<tr>
					<th>编号</th>
					<th>商品缩略图</th>
					<th>商品名称</th>
					<th>买家</th>
					<th>来自商家</th>
					<th>佣金金额</th>
					<th>时间</th>
				<tr>
<?php $n=1;foreach($log as $k=>$v) {
$good=$db->get_One('select title,thumb,id from `web_shop_goods` where id='.$v['gid']);
$sjname=$db->findOne('select title from `web_shop` where userid='.$v['shopid']);
$buyername=$db->findOne('select username from `ucenter` where userid='.$v['buyerid']);
?>
				<tr>
					<td><?=$n?></td>
					<td><img src="<?=$good['thumb']?>" width="80px"/></td>
					<td><?=$good['title']?></td>
					<td><?=$buyername?></td>
					<td><?=$sjname?$sjname:'平台商品';?></td>
					<td><?=$v['cash']?></td>
					<td><?=date('Y-m-d H:i:s',$v['time'])?></td>
				</tr>
<?php $n++;}?>
			</table>
	</div>
</div>
<?php include T('seller_admin','footer');?>