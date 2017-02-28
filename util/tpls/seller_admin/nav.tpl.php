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
		<div class="r_tit">店铺导航栏管理</div>
		<form class="layui-form">
		<table class="site-table">
			<thead>
				<tr>
					<th>#</th>
					<th>导航名</th>
					<th>链接</th>
					<th>排序</th>
					<th>显示</th>
					<th>操作</th>
				</tr> 
			</thead>
			<tbody>
				<tr>
					<td>#</td>
					<td style="text-align: center;"><input type="text" name="title"  id="title" class="layui-input"></td>
					<td style="text-align: center;"><input type="text" name="url" id="url" class="layui-input"></td>
					<td style="text-align: center;"><input type="text" name="pos" id="pos_new" value="0"  class="layui-input" style="width:60px"></td>
					<td><input type="checkbox" id="check_new" lay-skin="switch" lay-filter="switchTest" title="开关"></td>
					<td style="text-align: center;"><a onclick="add_o()" class="layui-btn">添加新导航</a></td>
				</tr>
				<tr>
				</tr>
<?php $n=1;foreach($list as $k=>$v) {?>
				<tr>
					<td><?=$n?></td>
					<td style="text-align: center;"><input type="text" name="title"  id="title_<?=$v['id']?>" value="<?=$v['title']?>" class="layui-input"></td>
					<td style="text-align: center;"><input type="text" name="url" id="link_<?=$v['id']?>" value="<?=$v['url']?>" class="layui-input"></td>
					<td style="text-align: center;"><input type="text" name="pos" id="pos_<?=$v['id']?>" value="<?=$v['pos']?>" class="layui-input" style="width:60px"></td>
					<td><input type="checkbox" <?php if($v['visible']==1){?> checked<?php }?> id="check_<?=$v['id']?>" lay-skin="switch" lay-filter="switchTest" title="开关"></td>
					<td style="text-align: center;"><a onclick="save(<?=$v['id']?>)" class="layui-btn layui-btn-small">保存</a> <a  onclick="dele(<?=$v['id']?>)" class="layui-btn layui-btn-danger layui-btn-small">删除</a></td>
				</tr>
<?php $n++;}?>
			</tbody>
		</table>
		</form>
	</div>
</div>
<script>
layui.use('form', function(){
  var form = layui.form();
});
</script>
<script type="text/javascript">

function add_o(){
	var title=$('#title').val();
	var url=$('#url').val();
	var pos=$('#pos_new').val();
	var checkbox = document.getElementById('check_new');
	if(checkbox.checked){
		var visible=1;
	}else{
		var visible=0;
	}
	$.ajax({
		type:'post',
		url:'/home/nav.html?c=save',
		data:{'title':title,'url':url,'pos':pos,'visible':visible},
		success:function(r){
			if(r=='ok'){
				layer.alert('发布成功');
			}else{
				layer.alert(r);
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
		url:'/home/nav.html?c=save',
		data:{'title':title,'url':url,'pos':pos,'visible':visible,'id':id},
		success:function(r){
			if(r=='ok'){
				layer.alert('保存成功');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
function dele(id){
	if(confirm("确定要删除吗")){
		$.ajax({
			type:'post',
			url:'/home/nav.html?c=dele',
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
	}
}
</script>

<?php include T('seller_admin','footer');?>