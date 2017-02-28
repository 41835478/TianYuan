<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="/home/index.html">买家中心</a></p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}
.mc{width:900px;margin:0 auto;}
.u_info{border:1px solid #eee;height:153px;min-height:0;overflow:hidden;}
.user{height:79px;padding-top:20px;border-bottom:1px solid #eee;background-color:#f8f8f8;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:20px;font-size:14px;line-height:30px;color:#666}
.name h2{font-size:15px;font-weight:bold;color:#333}
.edit{color:#009237;font-size:14px;text-decoration:underline;font-weight:normal;}
.op_zone{width:620px;min-height:0;overflow:hidden;float:right;}
.op_zone a{width:200px;font-size:16px;line-height:60px;text-align:center;display:inline-block;}
.sta_index{background:url('/static/img/admin/ssdf.jpg') no-repeat center;height:53px}
.sta_index ul{width:980px}
.sta_index li{width:190px;font-size:14px;line-height:53px;text-align:center;display:inline-block;}
.sta_index ul li a span{color:#ff6900}
.index_zone{border:1px solid #eee;min-height:0;overflow:hidden;margin-top:25px;padding-bottom: 20px}
.index_zone h2{font-size:15px;font-weight:bold;line-height:53px;background-color:#f8f8f8;border-bottom:1px solid #eee;padding:0 30px}
.index_zone h2 a{font-weight:normal;}
.o_list{min-height:0;overflow:hidden;padding:10px 25px;}
.o_list ul li{padding:10px 0;border-bottom:1px solid #f8f8f8;min-height:0;overflow:hidden;}
.c_a{width:65px;height:65px;float:left;margin-right:100px;}
.c_b{line-height:50px;margin-right:100px;}
.c_c{line-height:30px;margin-right:100px;}
.c_d{line-height:50px;margin-right:100px;}
.c_e{color:#ff6800;line-height:50px;margin-right:100px;}
.c_f{line-height:50px;}
.ulike{min-height:0;overflow:hidden;padding:20px 25px;}
.ulike ul{width:980px}
.ulike ul li{width:156px;float:left;margin-right:30px;font-size:14px;line-height:25px;margin-bottom:20px;}
.ulike ul li .thumb{width:156px;height:156px;}
.ulike ul li h3{color:#ff6800;font-size:15px;}
.ulike ul li p span{color:#999}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right_index">
		<div class="u_info">
			<div class="user">
				<div class="avator"><img src="<?=$shop_account?$shop_account['img']:'';?>" width="100%"/></div>
				<div class="name">
					<h2>您好！<?=$_username?> <a class="edit" href="/home/intro.html">修改</a></h2>
					<p>积分：<a class="edit"><?=$user['score']?></a></p>
				</div>
				<div class="op_zone">
					<a href="/home/address.html?c=index">我的收货地址 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<a href="/home/quan.html">我的优惠券 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<a href="/home/score.html">我的积分 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="sta_index">
				<ul>
					<li><a href="/home/order.html?org=dfk">待付款 <span><?=$num_dfk['num']?></span></a></li>
					<li><a href="/home/order.html?org=dfh">已支付 <span><?=$num_dfh['num']?></span></a></li>
					<li><a href="/home/order.html?org=ysh">待评价 <span><?=$num_dpj['num']?></span></a></li>
					<li><a href="/home/order.html?org=ytk">退款中<span><?=$num_tkz['num']?></span></a></li>
				</ul>
			</div>
		</div>
		<div class="index_zone">
			<h2>我的近期订单<a href="/home/order.html" class="edit fr">查看全部订单</a></h2>
			
			<div class="mc">
				<table class="td-void order-tb">
				<?php foreach($order as $k=>$v){?>
				<tbody>
					<tr class="sep-row"><td colspan="5"></td></tr>
					<tr class="tr-th">
						<td colspan="5">
							<span class="gap"></span>
							<span class="dealtime"><?=date('Y-m-d H:i:s',$v['addtime'])?></span>
							<input type="hidden">
							<span class="number">订单号：<a  target="_blank" href="/order/<?=$v['id']?>.html"><?=$v['no']?></a></span>
							<!--<div class="tr-operate">
								<a href="#none" class="order-del" title="删除" rel="<?=$v['id']?>"></a>
							</div>-->
						</td>
					</tr>
					<tr class="tr-bd">
						<td>
<?php foreach($_carts[$k] as $kk=>$vv){
$shopid=$db->findOne('select userid from `web_shop_goods` where id='.$vv['gid']);
$shopname=$db->findOne('select title from `web_shop` where userid='.$shopid);
?>
							<div class="goods-item p-1217499">
								<div class="p-img">
									<a href="/show/<?=$goods[$vv['gid']]['id']?>.html" target="_blank">
										<img class="" src="<?=$goods[$vv['gid']]['thumb']?>" width="60" height="60">
									</a>
								</div>
								<div class="p-msg">
									<div class="p-name"><a href="/show/<?=$goods[$vv['gid']]['id']?>.html" class="a-link" target="_blank" title="<?=$goods[$vv['gid']]['title']?>"><?=$goods[$vv['gid']]['title']?></a></div>
								</div>
							</div>
							<div class="goods-number">
								¥<?=$vv['fee']?>&nbsp;&nbsp;&nbsp;&nbsp;x<?=$vv['num']?><br/>商铺：<?=$shopname?$shopname:'平台自营';?>
							</div>
							
							<div class="clr"></div>
						<?php }?>
						</td>
						<td rowspan="2">
							<div class="consignee tooltip">
								<span class="txt"><?php $ex=unserialize($order_extra[$k]['extra']); $arr=unserialize($ex['address']['address']);
								echo $arr['linkman'];
								;?></span><b></b>
								 <div class="p-arrow p-arrow-left"></div>
							</div>
						</td>
						<td rowspan="2">
							<div class="amount">
								<strong>¥<?=$v['fee']?></strong> <br>
								<span class="ftx-13">在线支付</span><br>
							</div>
						</td>
						<td rowspan="2">
							<div class="status">
								<span class="order-status ftx-03"><?=$sta_arr[$v['status']]?></span>
							 </div>
						</td>
						<td rowspan="2">
							<div class="operate">
							<?php if($v['status']==1){?>
							<a href="/order/<?=$v['id']?>.html" class="btn-again" target="_blank" style="color: #fff">立即支付</a>
							<?php }else{?>
								<a href="/home/order.html" class="btn-again" style="color: #fff">查看订单</a> 
							<?php }?>
							</div>
						</td>
					</tr>
					
				</tbody>
				<?php }?>
				</table>
			</div>
		</div>
		<div class="index_zone">
			<h2>猜你喜欢</h2>
			<div class="ulike">
				<ul>
<?php foreach ($recommend as $k=>$v){?>
					<li>
						<div class="thumb"><a href="/show/<?=$v['id']?>.html" target="_blank"><img src="<?=$v['thumb']?>" width="100%"/></a></div>
						<p><?=$v['title']?></p>
						<h3>&yen <?=$v['price']?>元</h3>
						<p><span>(已有<?=$v['buy']?>人购买)</span></p>
					</li>
<?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>