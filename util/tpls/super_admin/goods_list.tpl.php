<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品列表</strong> / <small>Goods</small></div>
			</div>
			<hr>
			<div class="am-g">
				<div class="am-u-sm-12 am-u-md-6">
				  <div class="am-btn-toolbar">
					<div class="am-btn-group am-btn-group-xs">
						<a class="am-btn am-btn-default" href="/?m=admin&a=goods&c=add"><span class="am-icon-plus"></span> 发布新商品</a>
					</div>
				  </div>
				</div>
				<div class="am-u-sm-12">
				  <form class="am-form">
					<table class="am-table am-table-striped am-table-hover table-main">
						<thead>
							<tr>
								<th class="table-date am-hide-sm-only" width="80px">#</th>
								<th class="table-date" width="100px">商品缩略图</th>
								<th class="table-date am-hide-sm-only" width="200px">商品名称</th>
								<th class="table-date" width="100px">商品分类</th>
								<th class="table-date" width="100px">所属店铺</th>
								<th class="table-date" width="100px">销量</th>
								<th class="table-date" width="100px">浏览量</th>
								<th class="table-date am-hide-sm-only">日期</th>
								<th class="table-date" width="100px">状态</th>
								<th class="table-date">操作</th>
							</tr>
						</thead>
						<tbody>
<?php $n=1;foreach($list as $k=>$v) {
$shop=$db->get_One('select * from `web_shop` where userid='.$v['userid']);
$cate=catenav($v['catid']);
?>
							<tr>
								<td><?=$n?></td>
								<td><img src="<?=$v['thumb']?>" width="50px"/></td>
								<td><a href="/show/<?=$v['id']?>.html" target="_blank"><?=$v['title']?></a></td>
								<td><?=$cate?></td>
								<td><?=$shop['title']?$shop['title']:'平台自营';?></td>
								<td><?=$v['buy']?></td>
								<td><?=$v['view']?></a></td>
								<td class="am-hide-sm-only"><?=date('Y年m月d日 H:i:s',$v['addtime'])?></td>
								<td><?=$sta_arr[$v['status']]?></td>
								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<?php if($v['tj']==0){?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="tj(<?=$v['id']?>,1)"><span class="am-icon-flag"></span> 推荐</a>
											<?php }else{?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="tj(<?=$v['id']?>,0)"><span class="am-icon-flag"></span> 取消推荐</a>
											<?php }?>
											<?php if($v['hot']==0){?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="hot(<?=$v['id']?>,1)"><span class="am-icon-flag"></span> 设为热卖</a>
											<?php }else{?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="hot(<?=$v['id']?>,0)"><span class="am-icon-flag"></span> 取消热卖</a>
											<?php }?>
											<?php if($v['status']==0){?>
											<a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="check(<?=$v['id']?>)"><span class="am-icon-flag"></span> 审核</a>
											<?php }?>
											<?php if($_userid==$v['userid']){?>
											<a href="/?m=admin&a=goods&c=edit&id=<?=$v['id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
											<?php }?>
											<?php if($v['status']!=4){?><a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="drop(<?=$v['id']?>)"><span class="am-icon-trash-o"></span> 下架</a><?php }?>
											<a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="dele(<?=$v['id']?>)"><span class="am-icon-trash-o"></span> 删除</a>
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
		url:'/?m=admin&a=goods&c=check',
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
function tj(id,sta){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=goods&c=tj',
		data:{'id':id,'sta':sta},
		success:function(r){
			if(r=='ok'){
				alert('设置成功');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
function hot(id,sta){
	$.ajax({
		type:'post',
		url:'/?m=admin&a=goods&c=hot',
		data:{'id':id,'sta':sta},
		success:function(r){
			if(r=='ok'){
				alert('设置成功');
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
			url:'/?m=admin&a=goods&c=dele',
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
function drop(id){
	if(confirm("确定要下架该商品吗")){
		$.ajax({
			type:'post',
			url:'/?m=admin&a=goods&c=drop',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					alert('下架成功');
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