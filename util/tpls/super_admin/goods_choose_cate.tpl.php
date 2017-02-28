<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=goods" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回商品列表</a>
			<form class="am-form" method="post" action="/index.php" id="cate_a_from">
			<input type="hidden" name="id" value="<?=$id?>"/>
			  <fieldset>
				<legend>第一步 选择商品分类</legend>
					<div class="am-form-group">
						<select multiple id="select-1" style="width:300px;display:inline-block">
							<?=$op?>
						</select>
						<select multiple id="select-2" style="width:300px;display:inline-block">
							<option value="-1">无子分类</option>
						</select>
					</div>
					
					
					<p><a onclick="savenotice()" id="next_button" class="am-btn am-btn-primary am-radius">下一步</a></p>
				</fieldset>
			</form>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(document).on('change',"#select-1",function(){
		$.get('/?m=admin&a=cate&c=getsub',{parent:$(this).prop('value')}, function(data){
			$("#select-2").html(data);
		});
	});
});
function savenotice(){
	var cid=$("#select-2").val();
	if(cid==null){
		alert('还没有选择分类');
		return;
	}else{
		window.location.href='/?m=admin&a=goods&c=add&id=<?=$id?>&cateid='+cid;
	}
}  
</script>
<?php include T('super_admin','footer');?>