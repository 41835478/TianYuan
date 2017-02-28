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
.u_info{border:1px solid #eee;height:153px;min-height:0;overflow:hidden;}
.user{height:79px;padding-top:20px;border-bottom:1px solid #eee;background-color:#f8f8f8;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:10px;}
.name h2{font-size:16px;font-weight:bold;}
.edit{color:#009237;font-size:14px;text-decoration:underline;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺留言管理</div>
		<table class="site-table">
			<thead>
				<tr>
					<th>#</th>
					<th>用户</th>
					<th>留言内容</th>
					<th>所在商品</th>
					<th>留言时间</th>
					<th>操作</th>
				</tr> 
			</thead>
			<tbody>
<?php $n=1;foreach($list as $k=>$v) {
$reply=$db->getAll('select * from `web_shop_comment_reply` where userid='.$_userid.' and cid='.$v['id']);
?>
				<tr>
					<td><?=$n?></td>
					<td style="text-align: center;"><?=$v['nickname']?></td>
					<td style="text-align: center;">
					<p><?=$v['content']?></p>
<?php foreach($reply as $kk=>$kv) {?>
					<p style="color:red">您的回复：<?=$kv['reply']?> <a onclick="del_reply(<?=$kv['id']?>)" style="cursor:pointer" title="删除此留言"><i class="fa fa-trash-o" aria-hidden="true"></i></a></p>
<?php }?>
					</td>
					<td style="text-align: center;"><a href="/show/<?=$v['gid']?>.html" target="_blank">点击查看</a></td>
					<td style="text-align: center;"><?=date('Y-m-d H:i',$v['addtime'])?></td>
					<td style="text-align: center;"><a onclick="reply(<?=$v['id']?>)" class="layui-btn layui-btn-small">回复</a> <a  onclick="dele(<?=$v['id']?>)" class="layui-btn layui-btn-danger layui-btn-small">删除</a></td>
				</tr>
<?php $n++;}?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
function reply(id){
	layer.prompt({
		title: '输入要回复的内容 50字左右',
		formType: 0 
	}, function(txt){
		$.ajax({
			type:'post',
			url:'/home/comment.html?c=reply',
			data:{'cid':id,'reply':txt},
			success:function(r){
				if(r=='ok'){
					layer.alert('回复成功');
				}else{
					layer.alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	});
}

function dele(id){
	layer.confirm('确定要删除吗', {
		btn: ['确定','取消']
	}, function(){
		$.ajax({
			type:'post',
			url:'/home/comment.html?c=dele',
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

function del_reply(id){
	layer.confirm('确定要删除吗', {
		btn: ['确定','取消']
	}, function(){
		$.ajax({
			type:'post',
			url:'/home/comment.html?c=delreply',
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