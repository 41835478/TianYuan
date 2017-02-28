<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right"></i> 买家中心</p>
</div>
<div id="main" class="cont">
	<?php include T('admin','left');?>
		<div id="right">
			<div class="mod-main mod-comm lefta-box" > 
			<div class="mt">
				<ul class="extra-l">
					<li class="fore1"><a href="/home/order.html" class="txt <?php if(empty($_GET['org'])){echo 'curr';}?>">我的订单</a><em><?=$total['num']?></em></li>
					<li><a href="/home/order.html?org=dfk" class="txt <?php if($_GET['org']=='dfk'){echo 'curr';}?>">待付款</a><em><?=$num_dfk['num']?></em></li>
					<!--<li><a href="/home/order.html?org=dfh" class="txt <?php if($_GET['org']=='dfh'){echo 'curr';}?>">待发货</a><em><?=$num_dfh['num']?></em></li>
					<li><a href="/home/order.html?org=yfh" class="txt <?php if($_GET['org']=='yfh'){echo 'curr';}?>">待收货</a><em><?=$num_dsh['num']?></em></li>
					<li><a href="/home/order.html?org=ysh" class="txt <?php if($_GET['org']=='ysh'){echo 'curr';}?>" >待评价</a><a><em><?=$num_dpj['num']?></em></a></li>-->
					<li><a href="/home/order.html?org=dfh" class="txt <?php if($_GET['org']=='dfh'){echo 'curr';}?>">已支付</a><em><?=$num_dfh['num']?></em></li>
					<li><a href="/home/order.html?org=ytk" class="txt <?php if($_GET['org']=='ytk'){echo 'curr';}?>" >退款中</a><a><em><?=$num_tkz['num']?></em></a></li>
				</ul>
			</div>
			<div class="mc">
				<table class="td-void order-tb">
				<thead>
					<tr>
						<th>
							<div class="ordertime-cont">
								<div class="time-txt">订单详情<b></b><span class="blank"></span></div>
							</div>
							<div class="order-detail-txt ac"></div>
						</th>
						<th>收货人</th>
						<th>总计</th>
						<th>
							<div class="deal-state-cont" id="orderState">
								<div class="state-txt">订单状态<b></b><span class="blank"></span></div>
							</div>
						</th>
						<th>操作</th>
					</tr>
				</thead>
				<?php foreach($order as $k=>$v){
				?>
				<tbody>
					<tr class="sep-row"><td colspan="5"></td></tr>
					<tr class="tr-th">
						<td colspan="5">
							<span class="gap"></span>
							<span class="dealtime"><?=date('Y-m-d H:i:s',$v['addtime'])?></span>
							<input type="hidden">
							<span class="number">订单号：<a  target="_blank" href="/order/<?=$v['id']?>.html"><?=$v['no']?></a></span>
							
							<div class="tr-operate">
								<a href="#none" class="order-del" title="删除" rel="<?=$v['id']?>"></a>
							</div>
						</td>
					</tr>
					<tr class="tr-bd">
						<td>
<?php foreach($_carts[$k] as $kk=>$vv){
$cart_info=$db->get_One('select * from `web_shop_goods_cart` where oid='.$v['id'].' and gid='.$vv['gid'].' and userid='.$v['userid']);
if($cart_info['dili_sta']==1){
	$ex_infos=$db->get_One('select * from `web_express_info` where oid='.$vv['oid'].' and gid='.$vv['gid']);
}
$shopid=$db->findOne('select userid from `web_shop_goods` where id='.$vv['gid']);
$shopname=$db->findOne('select title from `web_shop` where userid='.$shopid);
?>
							<div class="goods-item p-1217499">
								<div class="p-img">
									<a href="/show/<?=$vv['gid']?>.html" target="_blank">
										<img class="" src="<?=$goods[$vv['gid']]['thumb']?>" width="60" height="60">
									</a>

								</div>
								<div class="p-msg">
									<div class="p-name"><a href="/show/<?=$vv['gid']?>.html" class="a-link" target="_blank" title="<?=$goods[$vv['gid']]['title']?>"><?=$goods[$vv['gid']]['title']?></a>
									<br/>
									<?php if($v['status']>1){?>
									<a href="/home/active.html?c=sales&oid=<?=$v['id']?>&gid=<?=$vv['gid']?>" style="color:red" target="_blank">申请售后</a>
									<?php }?>
									</div>
								</div>

							
							</div>
							<div class="goods-number">
								¥<?=$vv['fee']?>&nbsp;&nbsp;&nbsp;&nbsp;x<?=$vv['num']?><br/>商铺：<?=$shopname?$shopname:'平台自营';?>
							</div>
							
							<div class="clr"></div>
							<?php if($cart_info['dili_sta']==1){?><hr>
								<p>商品已发货 快递公司：<span style="color:green;margin-right:30px"><?=$ex_infos['exp_company']?></span>物流单号：<span style="color:green;margin-right:30px"><?=$ex_infos['exp_no']?></span></p><hr>
								<p>
									<a onclick="get_kd('<?=$ex_infos['exp_company']?>','<?=$ex_infos['exp_no']?>')" class="layui-btn layui-btn-small">快递查询</a>
									<?php if($cart_info['recieve']==0){?>
									<a onclick="recive(<?=$vv['gid']?>,<?=$v['id']?>)" class="layui-btn layui-btn-small">确认收货</a>
									<?php }else{?>
									<a href="/home/comment.html?c=fbpl&oid=<?=$v['id']?>" class="layui-btn layui-btn-small">点击评价</a>
									<?php }?>
								</p><hr>
							<?php }?>
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
								<span class="order-status ftx-03"><?php if($v['status']==1){echo '待支付';}else{echo '已支付';}?></span>
							 </div>
						</td>
						<td rowspan="2">
							<div class="operate">
							<?php if($v['status']==1){?>
							<a href="/order/<?=$v['id']?>.html" class="btn-again" target="_blank" style="color:#fff">立即支付</a>
							<?php }?>
							<?php if($v['status']==3){?>
								<a onclick="recive(<?=$v['id']?>)" class="btn-again" target="_blank" style="color:#fff;">确认收货</a> 
							<?php }?>
							<?php if($v['status']==4&&$v['rate']==0){?>
								<a href="/home/comment.html?c=fbpl&oid=<?=$v['id']?>" class="btn-again" target="_blank" style="color:#fff">评价晒单</a> 
							<?php }?><br/>
							<?php if($v['status']>1&&$v['status']!=5){?>
							<a href="/home/active.html?oid=<?=$v['id']?>" style="color:red" target="_blank">申请退款</a>
							<?php }?>
							</div>
						</td>
					</tr>
					
				</tbody>
				<?php }?>
				</table>
				<div class="pages"><?=$pagestr?></div>
			</div>
		</div>
		</div>		
	</div>
</div>
<script type="text/javascript">
function get_kd(com,nu){
	$.ajax({
		type:'post',
		url:'/home/order.html?c=kd',
		data:{'com':com,'nu':nu},
		success:function(r){
			layer.open({title:'查询结果',content:r});
		}
	});			
}
function recive(gid,oid){
	layer.confirm('您确认已收到货并且货品完好？', {
		btn: ['我确认','取消']
	}, function(){
		$.ajax({
			type:'post',
			url:'/home/active.html?c=recive',
			data:{'gid':gid,'oid':oid},
			success:function(r){
				if(r=='ok'){
					layer.alert('确认收货成功！');
				}else{
					layer.alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		})
	})
}
$('.order-del').click(function(){
	var id=$(this).attr('rel');
	$.ajax({
		type:'post',
		url:'/?m=admin&a=order&c=del',
		data:{'id':id},
		async:false,
		success:function(d){
			if(d=='ok'){
				art.dialog.tips('删除成功');
				setTimeout(function(){window.location.reload(true);},1000);
			}else{
				art.dialog.tips(d,1);
			}
		}
	});
});
</script>
<?php include T('seller_admin','footer');?>