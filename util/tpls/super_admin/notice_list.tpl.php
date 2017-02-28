<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">公告列表</strong> / <small>Notice</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <a class="am-btn am-btn-default" href="/?m=admin&a=notice&c=add"><span class="am-icon-plus"></span> 发布公告</a>
            </div>
          </div>
        </div>

        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-id">ID</th>
				<th class="table-title">标题</th>
				<th class="table-date am-hide-sm-only">日期</th>
				<th class="table-date">状态</th>
				<th class="table-date">操作</th>
              </tr>
              </thead>
              <tbody>
			  <?php $n=1;
			  foreach($list as $k=>$v) {?>
              <tr>
                <td><?=$n?></td>
                <td><a href="#"><?=$v['title']?></a></td>
                <td class="am-hide-sm-only"><?=date('Y年m月d日 H:i:s',$v['time'])?></td>
				<td><a href="#"><?=$v['status']==1?'已审核':'待审核';?></a></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="/?m=admin&a=notice&c=edit&id=<?=$v['id']?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
					<?php if($v['status']==0){?>
					  <a class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="check(<?=$v['id']?>)"><span class="am-icon-flag"></span> 审核</a>
					<?php }?>
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
		url:'/?m=admin&a=notice&c=check',
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
			url:'/?m=admin&a=notice&c=dele',
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