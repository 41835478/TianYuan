<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.quan_log{min-height:0;overflow:hidden;}
.log_tit{border:1px solid #e6e6e6;background-color:#f8f8f8;height:42px;line-height:42px;font-size:15px;margin-top:28px;}
.log_tit span{display:inline-block;text-align:center;}
.quan_log ul{border:1px solid #e6e6e6;margin-top:14px;}
.quan_log ul li{border-bottom:1px solid #e6e6e6;min-height:0;overflow:hidden;padding-top:18px;height:80px;text-align:center;}
.quan_log ul li:last-child{border:none}
.quan_log ul li div{padding:10px}
th,td{text-align:center;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">退款管理</div>
		<form class="layui-form">
		<table class="site-table">
			<thead>
				<tr>
					<th>订单号</th>
					<th>金额</th>
					<th>申请退款时间</th>
					<th width="80px">退款方式</th>
					<th>账户</th>
					<th>电话</th>
					<th width="120px">备注</th>
					<th width="80px">状态</th>
					<th>操作</th>
				</tr> 
			</thead>
			<tbody>
	
<?php foreach($list as $k=>$v) {
$order_info=$db->get_One('select * from `web_order` where id='.$v['oid']);
?>
				<tr>
					<td>订单编号：<?=$order_info['no']?></td>
					<td>&yen;<?=$order_info['fee']?></td>
					<td><?=date('Y-m-d H:i',$v['time'])?></td>
					<td><?php if($v['way']==1){echo '微信';}elseif($v['way']==2){echo '支付宝';}else{echo '银行卡';}?></td>
					<td><?=$v['account']?></td>
					<td><?=$v['tel']?></td>
					<td><?=$v['extra']?></td>
					<td><?=$v['status']==1?'<span style="color:green">已审核</span>':'<span style="color:red">待审核</span>';?></td>
					<td>
						<?php if($v['status']==0){?>
						<a onclick="cancel(<?=$v['id']?>)"  class="layui-btn layui-btn-small" style="cursor: pointer;">撤销</a>
						<?php }?>
					</td>
				</tr>
<?php }?>			
			</tbody>
		</table>
		</form>
	</div>
</div>
<script type="text/javascript">
function cancel(id){
	$.ajax({
		type:'post',
		url:'/home/return.html?c=cancel',
		data:{'id':id},
		success:function(r){
			if(r=='ok'){
				layer.alert('撤销成功！');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
</script>
<?php include T('seller_admin','footer');?>