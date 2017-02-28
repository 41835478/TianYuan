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
.stats p{font-size:15px;line-height:50px;}
.stats p span{color:red;font-size:20px;font-weight:bold;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺访问统计</div>
		<div class="stats">
			<!--<p>今天店铺浏览量：<span>334</span></p>-->
			<p>店铺商品总浏览量：<span><?=$goods_total_num?></span></p>
			<p>店铺总浏览量：<span><?=$shop_info['view']?></span></p>
			<p>店铺总成交量：<span><?=$deal_total_num?></span> 笔</p>
		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>