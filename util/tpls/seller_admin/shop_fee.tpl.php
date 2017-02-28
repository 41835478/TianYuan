<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
th,td{text-align:center;}
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
		<div class="r_tit">物流工具<a class="fr layui-btn layui-btn-small" onclick="add_shop_fee(<?=$id?>)"><span class="am-icon-plus"></span> 添加运费标准</a></div>
		<div id="trans">
			<table class="site-table">
				<tr>
					<th>编号</th>
					<th>名称</th>
					<th>首重重量</th>
					<th>首重价格</th>
					<th>续重价格</th>
					<th width="200px">地区</th>
					<th width="100px">添加时间</th>
					<th width="150px">操作管理</th>
				</tr>
<?php if(empty($list)){
					$n=0;?>
				<tr>
					<td colspan="9" class="al">暂无！</td>
				</tr>
<?php }else{
$n=1;
			foreach($list as $kv) {?>
				<tr>
					<td><?=$n++?></td>
					<td><?=$kv['title']?></td>
					<td><?=$kv['fw']?></td>
					<td><?=$kv['fee']?></td>
					<td><?=$kv['efee']?></td>
					<td><p><?php if(isset($all_area_rel[$kv['id']])){
						foreach($all_area_rel[$kv['id']] as $fa) {
							echo $all_areas[$fa['areaid']]['name']," &nbsp; ";
						}
					}else{echo '未设置';}?></p></td>
					<td><?=date('Y-m-d H:i:s',$kv['addtime'])?></td>
					<td>
						<a href="/?m=admin&a=trans&c=feeedit&id=<?=$kv['id']?>" title="设置地区" class="layui-btn layui-btn-small">设置地区</a>
						<a onclick="del_fee(<?=$kv['id']?>)" title="删除分区" class="layui-btn layui-btn-small">删除分区</a>
					</td>
				</tr>
<?php }?>
				<tr>
					<td colspan="8">地区不会重复，未设置的地区将不能邮寄！</td>
				</tr>

<?php }?>
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
	function del_fee(id){
		art.dialog.confirm('确定要删除当前分区么？',function(){
			$.ajax({
				type:'post',
				url:'/',
				data:{'m':'admin','a':'trans','c':'delfee','id':id},
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
	function add_shop_fee(id){
		window.location.href='/?m=admin&a=trans&c=feeadd&id='+id;
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