<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">买家退款申请列表</strong> / <small>Refond Apply</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
				<thead>
					<tr>
						<th>用户名</th>
						<th>订单号</th>
						<th>金额</th>
						<th>申请退款时间</th>
						<th width="80px">退款方式</th>
						<th>账户</th>
						<th>电话</th>
						<th>退款说明</th>
						<th width="60px">状态</th>
						<th>操作</th>
					</tr> 
				</thead>
              <tbody>
<?php foreach($list as $k=>$v) {
$order_info=$db->get_One('select * from `web_order` where id='.$v['oid']);
$sjname=$db->findOne('select username from `ucenter` where userid='.$v['userid']);
?>
				<tr>
					<td><?=$sjname?></td>
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
						<a onclick="comfirm(<?=$v['id']?>)"  class="layui-btn layui-btn-small" style="cursor: pointer;">审核</a>
						<?php }?>
					</td>
				</tr>
<?php }?>
            </tbody>
            </table>
            <div class="am-cf">
				<div class="am-fl">
					<?=$pagestr?>
				</div>
            </div>
            <hr>
            <p>注：.....</p>
          </form>
		</div>
	</div>
</div>
<script type="text/javascript">
function comfirm(id){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=balance&c=cfrefond',
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

</script>

<?php include T('super_admin','footer');?>