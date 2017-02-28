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
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}
.m_drand_kj01,.m_drand_kj02,.m_drand_kj03{margin:0 20px;}
.m_drand_kj01 tr{text-align:center;}
.m_drand_kj01 th{background-color:#f1f1f1;height:40px;}
.m_drand_kj01 tr:nth-child(odd) td{background-color:#fdfbfc;}
.m_drand_kj01 tr:nth-child(even) td{background-color:#fafafa;}
.m_drand_kj01 tr td input{width:35px;height:25px;border-radius:5px;-webkit-border-radius:5px;border:1px solid #c6c6c6;text-align:center;}
.m_drand_kj01 .cr_btn{width:80px;height:35px;float:right;display:block;background-color:#5093e1;border-radius:5px;-webkit-border-radius:5px;font-size:15px;color:#fff;line-height:35px;text-align:center;margin:20px 5px;}
.operate_outer{width:82px;margin:0 auto;position:relative}
.operate_list{width:80px;min-height:0;overflow:hidden;background-color:#eee;position:absolute;top:24px;left:0;border:1px solid #7AADE2;border-top:none;display:none;}
.operate_name{width:80px;height:24px;overflow:hidden;border:1px solid #fff;border-bottom:none}
.show_list .operate_name{border-color:#7AADE2;background-color:#eee}
.show_list .operate_list{display:block}
.operate_list li{width:100%;height:24px;text-align:center;line-height:24px;}
.operate_list li a{color:#666;}
.operate_list li:hover{background-color:#ddd}
.operate_list li:hover a{color:#36f;}
.operate_list li a:hover{text-decoration:none;}
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
				<div class="m_drand_kj01">
			<form method="post" id="sort_form">
				<input type="hidden" name="c" value="sort">
				<table class="site-table">
					<tr>
						<th>商品名称</th>
						<th width="70px">商品图片</th>
						<th width="70px">商品价格</th>
						<th width="140px">订单号</th>
						<th width="100px">下单时间</th>
						<th width="100px">支付状态</th>
						<th width="100px">订单状态</th>
						<th width="100px">操作管理</th>
					</tr>
	<?php $i=1;foreach($carts as $k=>$v) {$con_arr=unserialize($v['demo']);?>
					<tr>
						<td <?php if(!empty($con_arr)){?> onclick="showex(this)" class="has_memo"<?php }?>><a href="/show/<?=$v['gid']?>.html" target="_blank"><?=$goods[$v['gid']]['title']?></a>
	<?php if(empty($con_arr)){?>
	                    <div class="extra_con">
	                        <ul class="extra_ul">
								<li><p style="padding:10px;line-height:20px;color:#999">暂时没有相关备注...</p></li>
	                        </ul>
	                    </div>
	<?php }else{?>
	                    <div class="extra_con">
	                        <ul class="extra_ul">
	<?php foreach($con_arr as $s){?>
	                            <li><p style="padding:10px;line-height:20px"><?=$s['content']?></p><p style="text-align:right"><?=date('Y-m-d H:i:s',$s['time'])?></p></li>
	<?php }?>
	                        </ul>
	                    </div>
						<div class="mark_icon"></div>
	<?php }?>
						</td>
						<td><img src="<?=$goods[$v['gid']]['thumb']?>" alt="<?=$goods[$v['gid']]['title']?>" width="50px"></td>
						<td><?=$goods[$v['gid']]['price']?>元</td>
						<td><?=$orders[$v['oid']]['no']?></td>
						<td><?=date('Y-m-d H:i:s',$orders[$v['oid']]['addtime'])?></td>
						<td><?=$orders[$v['oid']]['status']>1?'<span style="color:green">已支付</span>':'<span style="color:red">未支付</span>'?></td>
						<td><?=$v['dili_sta']==1?'<span style="color:green">已发货</span>':'<span style="color:red">未发货</span>'?></td>
						<td>
						<?php if($orders[$v['oid']]['status']>1){?>
							<a href="/?m=admin&a=orders&c=fahuo&oid=<?=$v['oid']?>&gid=<?=$v['gid']?>" title="发货" class="layui-btn layui-btn-small">发货设置</a>
						<?php }?>
						</td>
					</tr>
				<?php }?>
					<tr>
						<td colspan="8"><div class="page"><?=$pagestr?></div></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div></div>
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