<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<a href="/?m=admin&a=feedback" class="am-btn am-btn-secondary"><i class="fa fa-chevron-left"></i> 返回反馈建议列表</a>
			<hr/>
			<div class="am-g">
				<div class="am-u-sm-12 am-u-sm-centered">
				  <h2><?=$info['title']?></h2>
				  <p><?=$info['content']?></p>
				</div>		
			</div>
		</div>
	</div>
</div>


<?php include T('super_admin','footer');?>