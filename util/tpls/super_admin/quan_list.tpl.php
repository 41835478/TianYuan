<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商城优惠券列表</strong> / <small>Coupons
</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <a class="am-btn am-btn-default" href="/?m=admin&a=quan&c=add"><span class="am-icon-plus"></span> 发布优惠券</a>
            </div>
          </div>
        </div>

        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th width="30px">#</th>
				<th width="150px">标题</th>
				<th width="150px">使用条件</th>
				<th width="250px">使用期限</th>
				<th width="100px">添加时间</th>
				<th width="120px">操作</th>
              </tr>
              </thead>
              <tbody>
			  <?php $n=1;foreach($list as $k=>$v) {?>
				<tr>
					<td style="text-align: center;"><?=$n?></td>
					<td style="text-align: center;"><?=$v['title']?></td>
					<td style="text-align: center;"><?=$v['beyond']>0?'满'.$v['beyond'].'元可以使用':'无限制';?></td>
					<td style="text-align: center;"><?=date('Y年m月d日',$v['stime'])?>到<?=date('Y年m月d日',$v['etime'])?></td>
					<td style="text-align: center;"><?=date('Y-m-d H:i',$v['time'])?></td>
					<td style="text-align: center;"><a href="/home/quan.html?c=edit&id=<?=$v['id']?>" class="layui-btn layui-btn-small">修改</a> <a onclick="dele(<?=$v['id']?>)" class="layui-btn layui-btn-danger layui-btn-small">删除</a></td>
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
		url:'/?m=admin&a=quan&c=check',
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
			url:'/?m=admin&a=quan&c=dele',
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