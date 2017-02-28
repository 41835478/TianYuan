<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.list_tit{font-size:16px;line-height:40px;background-color:#f8f8f8;border:1px solid #e6e6e6;margin-top:10px;}
.list_tit span{display:inline-block;text-align:center;}
.form_info{padding:10px 20px;min-height:0;overflow:hidden;font-size:14px;line-height:25px;}
.form_info input,select,textarea{border:1px solid #ccc;padding:5px}
.form_info p{margin-bottom:10px;}
.tj_btn{width:200px;height:46px;text-align:center;background-color:#dd2726;line-height:46px;font-size:16px;display:block;color:#fff;margin-top:30px;margin-left:70px;}
a.tj_btn:hover{color:#fff}
.good_area{height:119px;overflow:hidden;border:1px solid #e6e6e6;border-top:none;font-size:14px;line-height:25px;}
.gd_info{min-height:0;overflow:hidden;}
.gd_img{width:62px;height:62px;margin-right:10px;}
.gd_a{height:119px;padding:16px 10px 0;width:222px;border-right:1px solid #e6e6e6}
.gd_b{height:119px;text-align:center;padding-top:40px;width:90px;border-right:1px solid #e6e6e6}
.gd_c{height:119px;width:70px;padding:35px 50px 0;font-size:12px;text-align:center;border-right:1px solid #e6e6e6}
.gd_d{height:119px;width:100px;text-align:center;padding:40px 50px 0;font-size:12px;}
#sales_from{min-height:0;overflow:hidden;margin-top:30px;}
#sales_from p span{color:red}
.qsa{min-height:0;overflow:hidden;margin-top:30px;padding:20px}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">售后管理</div>
		<form class="layui-form">
		<table class="site-table">
			<thead>
				<tr>
					<th>商品详情</th>
					<th>金额</th>
					<th>购买数量</th>
					<th>类型</th>
					<th>说明</th>
					<th>时间</th>
				</tr> 
			</thead>
			<tbody>
<?php foreach($list as $k=>$v) {
$order=$db->get_One('select * from `web_order` where id='.$v['oid']);
$cart_info=$db->get_One('select * from `web_shop_goods_cart` where userid='.$v['userid'].' and gid='.$v['gid'].' and oid='.$v['oid']);
$good=$db->get_One('select * from `web_shop_goods` where id='.$v['gid']);
?>
				<tr>
					<td>
						<p style="color:#666;line-height:30px">订单编号：<?=$order['no']?></p>
						<div class="gd_info">
							<div class="gd_img fl"><img src="<?=$good['thumb']?>" width="100%"/></div>
							<div class="gd_ins">
								<p><?=$good['title']?></p>
							</div>
						</div>
					</td>
					<td>&yen; <?=$good['price']?></td>
					<td>X<?=$cart_info['num']?></td>
					<td><?=$v['type']==0?'维修':'售后服务';?></td>
					<td><?=$v['extra']?></td>
					<td><?=date('Y-m-d H:i',$good['addtime'])?></td>
				</tr>
<?php }?>
			</tbody>
		</table>
		</form>

	</div>
</div>



<?php include T('seller_admin','footer');?>