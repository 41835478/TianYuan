<style type="text/css">
#left_menu{width:208px;border:1px solid #e6e6e6;border-top:none;min-height:600px;overflow:hidden;float:left;}
.tit_l{background-color:#f8f8f8;border-bottom:1px solid #e6e6e6;border-top:1px solid #e6e6e6;font-size:16px;line-height:50px;padding:0 30px 0 15px}
.tit_l span{float:right;}
.item_l{min-height:0;overflow:hidden;padding-bottom:10px;}
.item_l a{width:104px;height:40px;float:left;font-size:14px;line-height:40px;text-indent:20px;}
</style>
<div id="left_menu">
	<div class="tit_l">宝贝管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/home/cate.html">类目管理</a>
		<a href="/home/goods.html?c=add">发布商品</a>
		<a href="/home/goods.html?c=list">在售商品</a>
		<a href="/home/goods.html?c=tjlist">商品推荐</a>
		<a href="/home/goods.html?c=unsale">库存商品</a>
	</div>
	<div class="tit_l">交易管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/home/order.html">已卖出的商品</a>
		<a href="/home/comment.html">买家留言</a>
	</div>
	<div class="tit_l">店铺管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/shop/<?=$_userid?>.html" target="_blank">查看我的店铺</a>
		<a href="/home/diy.html">店铺管理</a>
		<a href="/home/banner.html">幻灯片管理</a>
		<a href="/home/nav.html">店铺导航栏</a>
		<a href="/home/friend.html">友情链接</a>
	</div>
	<div class="tit_l">账户管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<!--<a href="/home/account.html">账户充值</a>-->
		<a href="/home/cash.html">账户提现</a>
		<!--<a href="/home/commision.html">佣金管理</a>-->
		<a href="/home/bond.html">保证金</a>
		<a href="/home/quan.html">优惠券</a>
	</div>
	<div class="tit_l">会员资料管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/home/shop.html">修改会员资料</a>
		<a href="/home/password.html">修改密码</a>
	</div>
	<div class="tit_l">物流管理<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/home/address.html">收货地址</a>
		<a href="/home/trans.html">运费设置</a>
		<!--<a href="/home/transport.html">物流工具</a>-->
	</div>
	<div class="tit_l">报表查询<span><i class="fa fa-angle-down"></i></span></div>
	<div class="item_l">
		<a href="/home/views.html">店铺统计</a>
		<!--<a href="/home/stats.html">销售查询</a>
		<a href="">微信推送</a>-->
	</div>
</div>