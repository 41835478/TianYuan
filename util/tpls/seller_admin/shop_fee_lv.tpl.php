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
		<div class="r_tit">物流工具 <a class="fr layui-btn layui-btn-small" onclick="add_shop_flv(<?=$uid?>)"><span class="am-icon-plus"></span> 添加运费模板</a></div>
		<div id="trans">
			<table class="site-table">
				<thead>
					<tr>
						<th>编号</th>
						<th>名称</th>
						<th>类型</th>
						<th>分区</th>
						<th>操作管理</th>
					</tr>
				</thead>
				<tbody>
<?php $n=1;foreach($list as $k=>$v) {?>
				<tr>
					<td><?=$n++?></td>
					<td><?=$v['title']?></td>
					<td><?=$fee_tp[$v['type']]['tit']?></td>
					<td><?=isset($all_num[$v['id']])?intval($all_num[$v['id']]['num']):0?></td>
					<td>
						<a onclick="edit_flv(<?=$v['id']?>)" title="设置费率" class="layui-btn layui-btn-small">编辑模板</a>
						<a href="/?m=admin&a=trans&c=showfee&id=<?=$v['id']?>" title="设置费率" class="layui-btn layui-btn-small">设置分区</a>
						<a onclick="del_flv(<?=$v['id']?>)" title="删除模板" class="layui-btn layui-btn-small">删除模板</a>
					</td>
				</tr>
<?php $n++;}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	function art_confirm(msg,url){
		art.dialog.confirm(msg,function(){
			window.location.href=url;
		},function(){
			return;
		});
	}
	function del_flv(id){
		art.dialog.confirm('确定要删除当前模板么？',function(){
			$.ajax({
				type:'post',
				url:'/',
				data:{'m':'admin','a':'trans','c':'delflv','id':id},
				success:function(d){
					if (d=='ok'){
						window.location.reload(true);
					}else{
						art.dialog.alert(d);
					}
				}
			});
		},function(){
			return;
		});
	}
	function edit_flv(id){
		art.dialog.open('/?m=admin&a=trans&c=editflv&id='+id,{
			'id':'ini_set_id',
			'title':'编辑运费模板'
		});
	}
	function add_shop_flv(uid){
		art.dialog.open('/?m=admin&a=trans&c=addflv&userid='+uid,{
			'id':'ini_set_id',
			'title':'添加运费模板'
		});
	}
	function sort_items(){
		$('#sort_form').submit();
	}
	function set_status(id){
		art.dialog.confirm('更新信息状态么？',function(){
			$.ajax({
				type:'post',
				url:'/',
				data:{'m':'admin','a':'apply','c':'status','id':id},
				success:function(d){
					window.location.reload(true);
				}
			});
		},function(){});
	}

	$(function(){
		$('.operate_outer').hover(function(){
			$(this).addClass('show_list').css('zIndex',99);
		},function(){
			$(this).removeClass('show_list').css('zIndex',0);
		});
	});

</script>

<?php include T('seller_admin','footer');?>