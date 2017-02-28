<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">促销员申请列表</strong> / <small>Members</small></div>
			</div>
			<hr>
			<div class="am-g">
				<div class="am-u-sm-12">
				  <form class="am-form">
					<table class="am-table am-table-striped am-table-hover table-main">
						<thead>
							<tr>
								<th class="table-date am-hide-sm-only" width="80px">#</th>
								<th class="table-date am-hide-sm-only">用户名</th>
								<th class="table-date" width="100px">姓名</th>
								<th class="table-date" width="100px">电话</th>
								<th class="table-date am-hide-sm-only">身份证号</th>
								<th class="table-date">身份证照片</th>
								<th class="table-date">申请时间</th>
								<th class="table-date">状态</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
<?php $n=1;foreach($list as $k=>$v) {
$sjname=$db->findOne('select username from `ucenter` where userid='.$v['userid']);?>
							<tr>
								<td><?=$n?></td>
								<td><?=$sjname?></td>
								<td><?=$v['name']?></td>
								<td><?=$v['tel']?></td>
								<td><?=$v['id_no']?></td>
								<td><img src="<?=$v['id_pic']?>" width="100px"/></td>
								<td class="am-hide-sm-only"><?=date('Y年m月d日 H:i:s',$v['time'])?></td>
								<td><?=$v['status']==1?'已审核':'待审核';?></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<?php if($v['status']==0){?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="check(<?=$v['userid']?>)"><span class="am-icon-flag"></span> 审核</a>
											<?php }?>
											<a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="dele(<?=$v['userid']?>)"><span class="am-icon-trash-o"></span> 删除</a>
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
		url:'/?m=admin&a=member&c=check',
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
function dele(id){
	if(confirm("确定要删除吗")){
		$.ajax({
			type:'post',
			url:'/?m=admin&a=member&c=dele',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					alert('删除成功');
				}else{
					alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	}
}
</script>

<?php include T('super_admin','footer');?>