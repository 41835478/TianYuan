<?php include T('super_admin','header');?>


<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商户运费模板</strong> / <small>Coupons
</small></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <a class="am-btn am-btn-default" onclick="add_shop_fee(<?=$id?>)"><span class="am-icon-plus"></span> 添加运费标准</a>
            </div>
          </div>
        </div>

        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <tr>
					<th>编号</th>
					<th>名称</th>
					<th>首重重量</th>
					<th>首重价格</th>
					<th>续重价格</th>
					<th>地区</th>
					<th>添加时间</th>
					<th>操作管理</th>
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
						<a href="/?m=admin&a=trans&c=feeedit&id=<?=$kv['id']?>" title="设置地区" class="am-btn am-btn-default am-btn-xs">设置地区</a>
						<a onclick="del_fee(<?=$kv['id']?>)" title="删除分区" class="am-btn am-btn-default am-btn-xs">删除分区</a>
					</td>
				</tr>
<?php }?>
				<tr>
					<td colspan="8">地区不会重复，未设置的地区将不能邮寄！</td>
				</tr>

<?php }?>
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

<?php include T('super_admin','footer');?>