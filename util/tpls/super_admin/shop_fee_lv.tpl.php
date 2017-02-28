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
              <a class="am-btn am-btn-default" onclick="add_shop_flv(<?=$uid?>)"><span class="am-icon-plus"></span> 添加运费模板</a>
            </div>
          </div>
        </div>

        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
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
						<a onclick="edit_flv(<?=$v['id']?>)" title="设置费率" class="am-btn am-btn-default am-btn-xs">编辑模板</a>
						<a href="/?m=admin&a=trans&c=showfee&id=<?=$v['id']?>" title="设置费率"class="am-btn am-btn-default am-btn-xs">设置分区</a>
						<a onclick="del_flv(<?=$v['id']?>)" title="删除模板" class="am-btn am-btn-default am-btn-xs">删除模板</a>
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

<?php include T('super_admin','footer');?>