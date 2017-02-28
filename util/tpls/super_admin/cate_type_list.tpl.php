<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=cate" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回分类列表</a>
			<div class="am-g">
				<div class="am-u-sm-12">
				  <form class="am-form">
					<table class="am-table am-table-striped am-table-hover table-main">
						<thead>
							<tr>
								<th class="table-date am-hide-sm-only" width="200px">名称</th>
								<th class="table-date am-hide-sm-only" width="200px">选项值（多项用/分隔）</th>
								<th class="table-date" width="80px">排序</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" id="title_new" class="name"></td>
								<td><input type="text" id="opt_new" class="name"></td>
								<td><input type="text" id="pos_new" value="0" class="am-input-sm"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="add_o()" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-plus"></span> 添加新属性</a>
										</div>
									</div>
								</td>
							</tr>
<?php foreach($list as $k=>$v) {?>
							<tr>
								<td><input type="text" name="title" id="title_<?=$v['id']?>" value="<?=$v['title']?>"></td>
								<td><input type="text" name="opt" id="opt_<?=$v['id']?>" value="<?=$v['opt']?>"></td>
								<td><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="am-input-sm"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="save(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-check"></span> 保存</a>
											<a onclick="dele(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-trash-o"></span> 删除</a>
										</div>
									</div>
								</td>
							</tr>
<?php }?>
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
	var title=$('#title_new').val();
	var opt=$('#opt_new').val();
	var pos=$('#pos_new').val();
	$.ajax({
		type:'post',
		url:'/?m=admin&a=cate&c=savetype',
		data:{'title':title,'opt':opt,'pos':pos,'cateid':<?=$id?>},
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
	var opt=$('#opt_'+id).val();
	var pos=$('#pos_'+id).val();
	$.ajax({
		type:'post',
		url:'/?m=admin&a=cate&c=savetype',
		data:{'title':title,'opt':opt,'pos':pos,'id':id,'cateid':<?=$id?>},
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
			url:'/?m=admin&a=cate&c=dele',
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