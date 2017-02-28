<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">友情链接</strong> / <small>Friend Links</small></div>
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
								<th class="table-date am-hide-sm-only" width="300px">链接</th>
								<th class="table-date" width="50px">排序</th>
								<th class="table-date" width="100px">显示</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td><input type="text" name="title" id="title" class="title" placeholder="请填写链接名称"></td>
								<td><input type="text" name="linkurl" id="linkurl" class="title" placeholder="请填写链接网址"></td>
								<td><input type="text" name="pos" id="pos_new" value="0" class="am-input-sm"></td>
								<td><input type="checkbox" id="check_new"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="add_o()" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-plus"></span> 添加新链接</a>
										</div>
									</div>
								</td>
							</tr>
<?php $n=1;foreach($list as $k=>$v) {?>
							<tr>
								<td><?=$n?></td>
								<td><input type="text" name="title" id="title_<?=$v['id']?>" class="title" value="<?=$v['title']?>"></td>
								<td><input type="text" name="linkurl" id="link_<?=$v['id']?>" class="title" value="<?=$v['linkurl']?>"></td>
								<td><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="am-input-sm"></td>
								<td><input type="checkbox" <?php if($v['visible']==1){?> checked<?php }?> id="check_<?=$v['id']?>"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="save(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-save"></span> 保存链接</a>
											<a onclick="dele(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-trash-o"></span> 删除链接</a>
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
	var url=$('#linkurl').val();
	var pos=$('#pos_new').val();
	var checkbox = document.getElementById('check_new');
	if(checkbox.checked){
		var visible=1;
	}else{
		var visible=0;
	}
	$.ajax({
		type:'post',
		url:'/?m=admin&a=friend&c=save',
		data:{'title':title,'linkurl':url,'pos':pos,'visible':visible},
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
	var url=$('#link_'+id).val();
	var pos=$('#pos_'+id).val();
	var checkbox = document.getElementById('check_'+id);
	if(checkbox.checked){
		var visible=1;
	}else{
		var visible=0;
	}
	$.ajax({
		type:'post',
		url:'/?m=admin&a=friend&c=save',
		data:{'title':title,'linkurl':url,'pos':pos,'visible':visible,'id':id},
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
			url:'/?m=admin&a=friend&c=dele',
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
