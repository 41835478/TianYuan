<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商家申请提现列表</strong> / <small>Cash Apply</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th>编号</th>
				<th>商家用户名</th>
				<th>提现金额</th>
				<th>提现方式</th>
				<th>提现账户</th>
				<th>联系人</th>
				<th>联系方式</th>
				<th>状态</th>
				<th>提现时间</th>
              </tr>
              </thead>
              <tbody>
<?php $n=1;
foreach($list as $kv) {
$sjname=$db->findOne('select username from `ucenter` where userid='.$kv['userid']);
?>
              <tr>
                <td><?=$n++?></td>
					<td><?=$sjname?></td>
					<td><?=$kv['cash']?></td>
					<td><?php if($kv['way']==1){echo '微信';}elseif($kv['way']==2){echo '支付宝';}else{echo '银行卡';}?></td>
					<td><?=$kv['account']?></td>
					<td><?=$kv['name']?></td>
					<td><?=$kv['tel']?></td>
					<td><?=$kv['status']==1?'<span style="color:green">已审核</span>':'<span style="color:red">待审核</span>';?></td>
					<td><?=date('Y-m-d H:i:s',$kv['time'])?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
					<?php if($kv['status']==0){?>
					  <a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="check(<?=$kv['id']?>)"><span class="am-icon-flag"></span> 审核通过</a>
					<?php }?>
                    </div>
                  </div>
                </td>
              </tr>
			 <?php $n++;}?>
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
function check(id){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=balance&c=okcash',
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