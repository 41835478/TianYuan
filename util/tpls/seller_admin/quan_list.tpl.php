<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}

</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺优惠券管理<a href="/home/quan.html?c=add" class="fr layui-btn layui-btn-small">添加优惠券</a> </div>
		<table class="site-table">
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
	</div>
</div>
<script type="text/javascript">

function dele(id){
	layer.confirm('确定要删除吗', {
		btn: ['确定','取消']
	}, function(){
		$.ajax({
			type:'post',
			url:'/home/quan.html?c=dele',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					layer.alert('删除成功');
				}else{
					layer.alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	});
}
</script>

<?php include T('seller_admin','footer');?>