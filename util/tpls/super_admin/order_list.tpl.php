<?php include T('super_admin','header');?>
<style type="text/css">
li{list-style: none}
.mt {
	display:inline-block;
	display:block;
	padding:10px 0;
	margin-left: 20px;
}
.mt .extra-l {
	padding:10px 0;
}
.mt .extra-l li {
	float:left;
	padding-left:20px;
}
.mt .extra-l li a.curr {
	padding-bottom:0;
	color:#009237;
	font-weight:500;
	font-size:15px;
	cursor:pointer;
	text-decoration:none;
}
.order-tb {
	width:900px;
	margin-left: 20px;
}
.order-tb .ordertime-cont {
	position:relative;
	float:left;
	z-index:10;
	width:138px;
	cursor:pointer;
}
.order-tb .ordertime-cont .time-txt {
	position:relative;
	height:30px;
	line-height:30px;
	text-align:left;
	padding-left:20px;
	padding-right:12px;
	border:1px solid #f5f5f5;
}
.order-tb thead th {
	height:32px;
	line-height:32px;
	text-align:center;
	background:#f5f5f5;
	color:#666;
	font-weight:400;
}
.order-tb .ordertime-cont .time-list {
	position:absolute;
	left:0;
	top:30px;
	z-index:2;
	display:none;
	width:136px;
	background:#fff;
	border:1px solid #f5f5f5;
	border-top:0;
}
.order-tb .deal-state-cont .state-txt {
	position:relative;
	height:30px;
	line-height:30px;
	text-align:left;
	padding-left:20px;
	padding-right:12px;
	border:1px solid #f5f5f5;
}
.order-tb .deal-state-cont .state-list {
	position:absolute;
	left:0;
	top:30px;
	z-index:2;
	display:none;
	width:96px;
	background:#fff;
	border:1px solid #f5f5f5;
	border-top:0;
}
.order-tb .order-detail-txt {
	display:inline-block;
	vertical-align:middle;
}
.order-tb .tr-th {
	background:#f5f5f5;
	height:31px;
	line-height:31px;
	color:#aaa;
	overflow:hidden;
}
table {
	border-collapse:collapse;
}
.order-tb .sep-row {
	height:20px;
}
.order-tb .tr-th .gap {
	width:14px;
}
.order-tb .tr-th span {
	float:left;
	height:18px;
	line-height:18px;
	padding:2px 0 0;
	_display:inline;
}
.order-tb .tr-th .dealtime {
	margin-right:30px;
	_margin-right:15px;
}
.order-tb .tr-th .number {
	padding-left:20px;
}
.order-tb .tr-th .tr-operate {
	width:620px;
}
.order-tb .tr-th .tr-operate {
	float:right;
	position:relative;
	margin-right:15px;
	width:100px;
	height:23px;
	overflow:hidden;
}
.order-tb .tr-bd {
	text-align:center;
	vertical-align:top;
}
.order-tb .tr-bd td {
	padding:14px 0;
}
.order-tb tbody td {
	border:1px solid #e5e5e5;
}
.order-tb .tr-bd td {
	padding:14px 0;
}
.order-tb .goods-item {
	display:inline-block;
	display:block;
	float:left;
	width:255px;
	margin-right:10px;
}
.order-tb .goods-item {
	width:330px;
	margin-right:10px;
	margin-bottom:10px;
}
.order-tb .goods-number {
	float:left;
	width:40px;
	text-align:left;
	color:#aaa;
	font-family:verdana;
}
.order-tb .goods-number {
	width:150px;
}
.order-tb .goods-repair {
	float:right;
	width:84px;
	text-align:center;
}
.order-tb .goods-repair {
	width:104px;
}
.order-tb .sep-row td {
	border:0;
}
.order-tb .tr-th {
	background:#f5f5f5;
	height:31px;
	line-height:31px;
	color:#aaa;
	overflow:hidden;
}
.order-tb .goods-item .p-img {
	float:left;
	width:60px;
	height:60px;
	border:1px solid #efefef;
	margin:0 14px;
	_display:inline;
}
.order-tb .goods-item .p-msg {
	width:240px;
	float:left;
}
.order-tb .goods-repair {
	width:104px;
	float:right;
	text-align:center;
}
.order-tb .tooltip {
	position:relative;
	width:100px;
	margin:0 auto;
	z-index:2;
	cursor:pointer;
}
.order-tb .consignee b {
	display:inline-block;
	width:14px;
	height:16px;
	background:url(/static/img/order-icon20150916.png) 0 -24px;
	vertical-align:middle;
	margin:0 0 0 5px;
}
.order-tb .amount strong {
	font-family:verdana;
	color:#333;
}
.ftx-13 {
	color:#aaa;
}
.order-tb .cellphone-icon {
	display:inline-block;
	width:56px;
	height:14px;
	overflow:hidden;
	background:url(/static/img/order-icon20150916.png) 0 0 no-repeat;
}
.order-tb .status {
	position:relative;
	z-index:5;
	color:#333;
	line-height:22px;
}
a.btn-again {
	display:inline-block;
	padding:2px 0 3px;
	background:#009237;
	border:1px solid #009237;
	color:#333;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
	width:85px;
	color:#fff;
	text-align:center;
}
.order-status {
	color:#ff6900
}
.order-tb .operate {
	line-height:22px;
}
a.btn-again b {
	display:inline-block;
	vertical-align:middle;
	width:12px;
	height:17px;
	margin-right:5px;
	background:url(/static/img/order-icon20150916.png) -22px -180px no-repeat;
}
.order-tb .tr-th .order-del {
	position:absolute;
	right:0;
	top:6px;
	width:13px;
	height:13px;
	font-size:0;
	overflow:hidden;
	vertical-align:middle;
	background:url(/static/img/order-icon20150916.png) -23px -132px no-repeat;
}
.p-name {
	text-align:left;
}
.order_list {
	margin-top:20px;
}
.order_list p span {
	margin-right:20px;
}
.order_list ul li {
	padding:10px;
	min-height:0;
	overflow:hidden;
	position:relative;
	border-bottom:1px solid #eee
}
.order_list ul li:last-child {
	border:none
}
.order_list ul li .goods_thumb {
	width:60px;
	height:60px;
	float:left;
	border:1px solid #eee
}
.order_list ul li .goods_dsp {
	position:absolute;
	left:80px;
	top:5px;
	font-size:12px;
	line-height:25px;
}
/*分页*/
.pages {
	width:960px;
	text-align:center;
	padding:50px 0;
}
.pages table {
	margin:0 auto;
}
.pages table td {
	font-size:14px;
	line-height:40px;
	color:#888;
	padding-right:20px;
}
.pages a {
	display:inline-block;
	padding:0 15px;
	border:1px solid #eee;
	font-size:14px;
	line-height:40px;
	color:#888;
}
.pages b.current {
	display:inline-block;
	background-color:#019237;
	color:#fff;
	padding:0 15px;
	border:1px solid #019237;
	margin-bottom:-1px;
}
.pages b {
	font-weight:normal;
	color:#888;
	padding:0 5px
}
.pages table td input {
	font-size:14px;
	line-height:40px;
	border:1px solid #eee;
	padding:0 10px;
	text-align:center;
	margin-left:10px;
	margin-right:10px;
}
</style>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">平台订单列表</strong> / <small>News</small></div>
			</div>
			<hr>
			<div class="am-g">
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
							
							<div style="clear:both"></div>
							<?php if($cart_info['dili_sta']==1){?><hr>
								<p>商品已发货 快递公司：<span style="color:green;margin-right:30px"><?=$ex_infos['exp_company']?></span>物流单号：<span style="color:green;margin-right:30px"><?=$ex_infos['exp_no']?></span></p><hr>
								<p>
									<a onclick="get_kd('<?=$ex_infos['exp_company']?>','<?=$ex_infos['exp_no']?>')" class="layui-btn layui-btn-small">快递查询</a>
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
<script type="text/javascript">
function check(id){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=news&c=check',
		data:{'id':id},
		success:function(r){
			if(r=='ok'){
				alert('审核成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}

function get_kd(com,nu){
	$.ajax({
		type:'post',
		url:'/home/order.html?c=kd',
		data:{'com':com,'nu':nu},
		success:function(r){
			art.dialog.alert(r);
		}
	});			
}
$('.order-del').click(function(){
	var id=$(this).attr('rel');
	$.ajax({
		type:'post',
		url:'/home/order.html?c=del',
		data:{'id':id},
		async:false,
		success:function(d){
			if(d=='ok'){
				alert('删除成功');
				setTimeout(function(){window.location.reload(true);},1000);
			}else{
				alert(d);
			}
		}
	});
});
</script>

<?php include T('super_admin','footer');?>