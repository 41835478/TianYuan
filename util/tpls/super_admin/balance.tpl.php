<?php include T('super_admin','header');?>
<div class="am-cf admin-main">
	<?php include T('super_admin','left');?>
	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf">
					<strong class="am-text-primary am-text-lg">我的账户</strong> /
					<small>Account</small>
				</div>
			</div>
			<hr>
			<div class="am-tabs am-margin" data-am-tabs>
				<ul class="am-tabs-nav am-nav am-nav-tabs">
					<li class="am-active"><a>账户信息</a></li>
				</ul>
				<div class="am-tabs-bd">
					<div class="am-tab-panel am-fade am-in am-active">
						<div class="am-margin">
							<h3><i class="fa fa-credit-card"></i> 账户交易总额：<span style="font-size:40px;color:#fa7d3c"><?=$total_cash?></span></h3>
						</div>
						<hr>
						<div class="am-margin">
							<a href="/?m=admin&a=balance&c=recharge" class="am-btn am-btn-success am-round">商家保证金充值记录</a>
							<a href="/?m=admin&a=balance&c=tixian" class="am-btn am-btn-success am-round">商家提现申请</a>
							<a href="/?m=admin&a=balance&c=refund" class="am-btn am-btn-success am-round">买家申请退款记录</a>
						
					</div>
				</div>
			</div>
</div></div>
<script type="text/javascript">

</script>
<?php include T('super_admin','footer');?>