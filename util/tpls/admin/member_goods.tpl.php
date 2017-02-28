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
		<div class="r_tit">分销商品列表</div>
			<table class="layui-table" lay-skin="line">
				<tr>
					<th>编号</th>
					<th>商品缩略图</th>
					<th>商品名称</th>
					<th>来自商家</th>
					<th>推广链接</th>
				<tr>
<?php $n=1;foreach($fxgoods as $k=>$v) {
$sjname=$db->findOne('select title from `web_shop` where userid='.$v['userid']);
?>
				<tr>
					<td><?=$n?></td>
					<td><img src="<?=$v['thumb']?>" width="80px"/></td>
					<td><?=$v['title']?></td>
					<td><?=$sjname?$sjname:'平台商品';?></td>
					<td><a href="http://www.kingmanor.cn/show/<?=$v['id']?>_<?=$_userid?>.html" target="_blank" title="复制此链接分享得佣金">http://www.kingmanor.cn/show/<?=$v['id']?>_<?=$_userid?>.html</a></td>
				</tr>
<?php $n++;}?>
			</table>
	</div>
</div>
<?php include T('seller_admin','footer');?>