<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
th,td{text-align:center;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">分销详情</div>
		<?php if($user['fx']==1){?>
			<blockquote class="layui-elem-quote">您已成为促销员，赶快推广产品赚佣金吧。</blockquote>
			<blockquote class="layui-elem-quote layui-quote-nm">
				您的账户余额：<span style="font-size:30px;color:red"><?=$yu?></span><hr>
				<a href="/home/member.html?c=tx" class="layui-btn layui-btn-normal">申请提现</a>
				<a href="/home/member.html?c=txlog" class="layui-btn layui-btn-normal">查看提现记录</a>
				<a href="/home/member.html?c=log" class="layui-btn layui-btn-normal">查看佣金流水</a>
			</blockquote>
			<blockquote class="layui-elem-quote layui-quote-nm">
				<a href="/home/member.html?c=goods" class="layui-btn">查看可分销商品</a>
			</blockquote>
		<?php }else{if(!empty($apply_info)){?>
			<blockquote class="layui-elem-quote">您的申请正在审核中。。。</blockquote>
			<a href="/home/member.html?c=apply" class="layui-btn layui-btn-big">查看申请信息</a>
			<?php }else{?>
			<blockquote class="layui-elem-quote">您还不是促销员 请先申请成为促销员</blockquote>
			<a href="/home/member.html?c=apply" class="layui-btn layui-btn-big">申请成为促销员</a>
		<?php }}?>
	</div>
</div>
<?php include T('seller_admin','footer');?>