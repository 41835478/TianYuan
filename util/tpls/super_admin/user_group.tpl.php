<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=user" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回用户列表</a>
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户组</strong> / <small>User Group</small></div>
			</div>
			<hr>
			<div class="am-g">
				<div class="am-u-sm-12">
				  <form class="am-form">
					<table class="am-table am-table-striped am-table-hover table-main">
						<thead>
							<tr>
								<th class="table-date am-hide-sm-only" width="80px">#</th>
								<th class="table-date am-hide-sm-only" width="200px">名称</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td><input type="text" name="title" id="title" class="title" placeholder="请填写分组名称"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="add_o()" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-plus"></span> 添加新分组</a>
										</div>
									</div>
								</td>
							</tr>
<?php $n=1;foreach($group as $k=>$v) {?>
							<tr>
								<td><?=$n?></td>
								<td><input type="text" name="title" id="title_<?=$v['id']?>" class="title" value="<?=$v['title']?>"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="save(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-save"></span> 保存分组</a>
											<a onclick="dele(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-trash-o"></span> 删除分组</a>
										</div>
									</div>
								</td>
							</tr>
<?php $n++;}?>
						</tbody>
					</table>
					<div class="am-cf">
					
					  <div class="am-fr">
						
					  </div>
					</div>
					<hr>
					<p>注：.....</p>
				  </form>
		</div>
	</div>
</div>
<script type="text/javascript">
function add_o(){
	var title=$('#title').val();
	$.ajax({
		type:'post',
		url:'/?m=admin&a=user&c=savegroup',
		data:{'title':title},
		success:function(r){
			if(r=='ok'){
				alert('发布成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
function save(id){
	var title=$('#title_'+id).val();
	$.ajax({
		type:'post',
		url:'/?m=admin&a=user&c=savegroup',
		data:{'title':title,'id':id},
		success:function(r){
			if(r=='ok'){
				alert('保存成功');
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
			url:'/?m=admin&a=user&c=delgroup',
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