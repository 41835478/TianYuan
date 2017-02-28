<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
				<div class="am-cf am-padding am-padding-bottom-0">
					<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商城用户列表</strong> / <small>User</small></div>
				</div>
				<hr>
				<div class="am-g">
					<div class="am-u-sm-12 am-u-md-6">
					  <div class="am-btn-toolbar">
						<div class="am-btn-group am-btn-group-xs">
							<!--<a class="am-btn am-btn-default" href="/?m=admin&a=user&c=group"><span class="am-icon-bars"></span> 管理用户组</a>-->
							<a class="am-btn am-btn-default" href="/?m=admin&a=user&type=1"><span class="am-icon-bars"></span> 超级管理员用户列表</a>
							<a class="am-btn am-btn-default" href="/?m=admin&a=user&type=2"><span class="am-icon-bars"></span> 卖家用户列表</a>
						</div>
					  </div>
					</div>
					<div class="am-u-sm-12 am-u-md-3">
					  <div class="am-input-group am-input-group-sm">
						<input type="text" class="am-form-field" id="name" placeholder="请输入用户名">
					  <span class="am-input-group-btn">
						<button class="am-btn am-btn-default" type="button" onclick="lookup()">搜索用户</button>
					  </span>
					  </div>
					</div>
					<div class="am-u-sm-12">
					  <form class="am-form">
						<table class="am-table am-table-striped am-table-hover table-main">
							<thead>
								<tr>
									<th class="table-date am-hide-sm-only" width="80px">#</th>
									<th class="table-date am-hide-sm-only" width="200px">用户名</th>
									<th class="table-date" width="100px">用户组</th>
									<th class="table-date am-hide-sm-only">最后登陆IP</th>
									<th class="table-date am-hide-sm-only">最后登陆日期</th>
									<th class="table-date">操作</th>
								</tr>
							</thead>
							<tbody>
<?php $n=1;foreach($list as $k=>$v) {?>
								<tr>
									<td><?=$n?></td>
									<td><a href=""><?=$v['username']?></a></td>
									<td><?=$group[$v['type']]?></td>
									<td><?=$v['lastloginip']?></td>
									<td class="am-hide-sm-only"><?=date('Y年m月d日 H:i:s',$v['lastlogintime'])?></td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<a href="/?m=admin&a=user&c=edit&id=<?=$v['userid']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑用户组</a>
												<a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="resetpass(<?=$v['id']?>)"><span class="am-icon-key"></span> 重置密码</a>
												<a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="dele(<?=$v['id']?>)"><span class="am-icon-trash-o"></span> 删除用户</a>
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
						<p>注：密码将会重置为123456</p>
					  </form>
					
		</div>
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
function dele(id){
	if(confirm("确定要删除吗")){
		$.ajax({
			type:'post',
			url:'/?m=admin&a=news&c=dele',
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
function resetpass(id){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=user&c=resetpass',
		data:{'id':id},
		success:function(r){
			if(r=='ok'){
				alert('密码已成功重置为123456');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
function lookup(){
	var name=$('#name').val();
	window.location.href="/?m=admin&a=user&name="+name;
}
</script>

<?php include T('super_admin','footer');?>