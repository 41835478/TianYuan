<style type="text/css">
#admin-offcanvas li:hover{background-color:#f1f1f1;}
#admin-offcanvas li.sel{background-color:#0e90d2;}	
#admin-offcanvas li.sel a{color:#fff}
</style>
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
	<div class="am-offcanvas-bar admin-offcanvas-bar">
		<ul class="am-list admin-sidebar-list">
			<li><a href="/"><span class="am-icon-home"></span> 首页</a></li>
			<li class="admin-parent">
				<a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><i class="fa fa-bars"></i> 商城管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
				<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
					<li <?=$a=='intro'?'class="sel"':'';?>><a href="/?m=admin&a=intro"><i class="fa fa-cog"></i> 系统设置</a></li>
					<li <?=$a=='user'?'class="sel"':'';?>><a href="/?m=admin&a=user"><i class="fa fa-user"></i> 会员管理</a></li>
					<li <?=$a=='notice'?'class="sel"':'';?>><a href="/?m=admin&a=notice"><i class="fa fa-bullhorn"></i> 公告管理</a></li>
					<li <?=$a=='cate'?'class="sel"':'';?>><a href="/?m=admin&a=cate"><i class="fa fa-book"></i> 分类管理</a></li>
					<li <?=$a=='ad'?'class="sel"':'';?>><a href="/?m=admin&a=ad"><i class="fa fa-picture-o"></i> 广告管理</a></li>
					<li <?=$a=='news'?'class="sel"':'';?>><a href="/?m=admin&a=news"><i class="fa fa-newspaper-o"></i> 商城资讯</a></li>
					<li <?=$a=='friend'?'class="sel"':'';?>><a href="/?m=admin&a=friend"><i class="fa fa-link"></i> 友情链接</a></li>
					<li <?=$a=='trans'?'class="sel"':'';?>><a href="/?m=admin&a=trans"><i class="fa fa-truck"></i> 运费设置</a></li>
					<!--<li <?=$a=='transport'?'class="sel"':'';?>><a href="/?m=admin&a=transport"><i class="fa fa-link"></i> 物流工具</a></li>-->
					<li <?=$a=='rate'?'class="sel"':'';?>><a href="/?m=admin&a=rate"><i class="fa fa-database"></i> 积分管理</a></li>
				</ul>
			</li>
			<li class="admin-parent">
				<a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><i class="fa fa-bars"></i> 交易管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
				<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav2">
					<li <?=$a=='goods'?'class="sel"':'';?>><a href="/?m=admin&a=goods"><i class="fa fa-shopping-cart"></i> 商品列表</a></li>
					<li <?=$a=='order'?'class="sel"':'';?>><a href="/?m=admin&a=order"><i class="fa fa-shopping-bag"></i> 订单列表</a></li>
					<li <?=$a=='orders'?'class="sel"':'';?>><a href="/?m=admin&a=orders"><i class="fa fa-truck"></i> 平台订单</a></li>
					<li <?=$a=='quan'?'class="sel"':'';?>><a href="/?m=admin&a=quan"><i class="fa fa-money"></i> 优惠券管理</a></li>
					<li <?=$a=='balance'?'class="sel"':'';?>><a href="/?m=admin&a=balance"><i class="fa fa-money"></i> 提现管理</a></li>
				</ul>
			</li>
			<li class="admin-parent">
				<a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><i class="fa fa-bars"></i> 商铺管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
				<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav3">
					<li <?=$a=='shop'?'class="sel"':'';?>><a href="/?m=admin&a=shop"><i class="fa fa-suitcase"></i> 商铺列表</a></li>
					<li <?=$a=='shop'?'class="sel"':'';?>><a href="/?m=admin&a=member"><i class="fa fa-users"></i> 促销员申请</a></li>
				</ul>
			</li>
			<li class="admin-parent">
				<a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><i class="fa fa-bars"></i> 其他 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
				<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav3">
					<li <?=$a=='feedback'?'class="sel"':'';?>><a href="/?m=admin&a=feedback"><i class="fa fa-info-circle"></i> 反馈建议</a></li>
					<li <?=$a=='backup'?'class="sel"':'';?>><a href="/?m=admin&a=backup"><i class="fa fa-database"></i> 数据备份</a></li>
					<li <?=$a=='visitor'?'class="sel"':'';?>><a href="/?m=admin&a=visitor"><i class="fa fa-area-chart"></i> 访客记录</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>