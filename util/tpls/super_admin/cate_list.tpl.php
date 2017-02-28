<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=cate" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回商品分类 </a>
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">全站商品分类</strong> / <small>Cate</small></div>
			</div>
			<hr>
			<div class="am-g">
				<div class="am-u-sm-12">
				  <form class="am-form">
					<table class="am-table am-table-striped am-table-hover table-main">
						<thead>
							<tr>
								<th class="table-title" width="300px">上级</th>
								<th class="table-date am-hide-sm-only" width="200px">名称</th>
								<th class="table-date" width="80px">排序</th>
								<th class="table-date" width="100px">显示</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select name="parent" id="parent" class="parent">
										<option value="0">----</option>
									<?php foreach($cate as $k=>$v) {?>
										<option value="<?=$v['id']?>"><?=$v['name']?></option>
									<?php }?>
									</select>
								</td>
								<td><input type="text" name="name" id="name_new" class="name"></td>
								<td><input type="text" name="pos" id="pos_new" value="0" class="am-input-sm"></td>
								<td><input type="checkbox" id="check_new"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a onclick="add_o()" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-plus"></span> 添加新分类</a>
										</div>
									</div>
								</td>
							</tr>
<?php foreach($list as $k=>$v) {
$sub=$db->getAll('select * from `web_cate` where parent='.$v['id']);
?>
							<tr>
								<td>
									<select id="parent_<?=$v['id']?>">
										<option value="0">----</option>
									<?php foreach($cate as $s=>$c) {?>
										<option value="<?=$c['id']?>" <?php if($v['id']==$c['id']||$id==$c['id']){?>selected<?php }?>><?=$c['name']?></option>
									<?php }?>
									</select>
								</td>
								<td><input type="text" name="name" id="name_<?=$v['id']?>" value="<?=$v['name']?>"></td>
								<td><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="am-input-sm"></td>
								<td><input type="checkbox" <?php if($v['visible']==1){?> checked<?php }?> id="check_<?=$v['id']?>"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a href="/?m=admin&a=cate&id=<?=$v['id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-archive"></span> 查看下级</a>
											<a onclick="save(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-save"></span> 保存分类</a>
											<a onclick="dele(<?=$v['id']?>)" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-trash-o"></span> 删除分类</a>
										</div>
									</div>
								</td>
							</tr>
							<?php foreach($sub as $k=>$v) {
							$subs=$db->getAll('select * from `web_cate` where parent='.$v['id']);
							?>
							<tr>
								<td></td>
								<td><input type="text" name="name" id="name_<?=$v['id']?>" value="|____ <?=$v['name']?>"></td>
								<td><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="am-input-sm"></td>
								<td><input type="checkbox" <?php if($v['visible']==1){?> checked<?php }?> id="check_<?=$v['id']?>"></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a href="/?m=admin&a=cate&id=<?=$v['id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-archive"></span> 查看下级</a>
										</div>
									</div>
								</td>
							</tr>
							<?php foreach($subs as $k=>$v) {
							?>
							<tr>
								<td></td>
								<td><input type="text" name="name" id="name_<?=$v['id']?>" value="|____  ____ <?=$v['name']?>"></td>
								<td><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="am-input-sm"></td>
								<td><input type="checkbox" <?php if($v['visible']==1){?> checked<?php }?> id="check_<?=$v['id']?>"></td>
								<td></td>
							</tr>
							<?php }}?>
<?php }?>
						</tbody>
					</table>
					<div class="am-cf">
					
					  <div class="am-fr">
						
					  </div>
					</div>
					<hr>
					<p>注：当前最多可支持三级目录。</p>
				  </form>
				</div>
			</div>
</div>

<script type="text/javascript">
function add_o(){
	var pa=$('#parent').val();
	var name=$('#name_new').val();
	var pos=$('#pos_new').val();
	var checkbox = document.getElementById('check_new');
	if(checkbox.checked){
		var visible=1;
	}else{
		var visible=0;
	}
	$.ajax({
		type:'post',
		url:'/?m=admin&a=cate&c=save',
		data:{'parent':pa,'name':name,'pos':pos,'visible':visible},
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
	var pa=$('#parent_'+id).val();
	var name=$('#name_'+id).val();
	var pos=$('#pos_'+id).val();
	var checkbox = document.getElementById('check_'+id);
	if(checkbox.checked){
		var visible=1;
	}else{
		var visible=0;
	}
	$.ajax({
		type:'post',
		url:'/?m=admin&a=cate&c=saveall',
		data:{'parent':pa,'name':name,'pos':pos,'visible':visible,'id':id},
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
	if(confirm("确定要删除吗？同时下级分类及分类属性也会删除！")){
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