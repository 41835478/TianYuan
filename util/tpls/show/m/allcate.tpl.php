<?php include T('show/m','header');?>
<div id="top_bar" style="margin-bottom: 10px">
	<div class="location fl">潍坊</div>
	<div class="search fl"><input type="text" placeholder="水果蔬菜"><a class="s_btn"></a></div>
</div>
<style type="text/css">
#cates{min-height: 0;overflow: hidden;padding: 30px 0;background-color: #fff}
#cates ul li h3{height: 70px;text-indent: 70px;font-size: 24px;line-height: 70px;color:#333;}
#cates ul li h3 a{color:#333;}
.c1{background: url('/static/img/c-1.jpg') no-repeat center left 20px;background-size: 40px auto}
.sub{width:600px;margin: 0 auto;border-top:1px solid #f1f1f1;border-left:1px solid #f1f1f1;min-height: 0;overflow: hidden;}
.sub a{display: block;width:149px;height:49px;text-align: center;font-size: 24px;line-height: 50px;color:#666;border-right:1px solid #f1f1f1;border-bottom:1px solid #f1f1f1;float: left;}
</style>
<div id="cates">
	<ul>
<?php foreach ($allcate as $k => $v) {?>
		<li>
			<h3 class="c1"><a href="/list/<?=$v['id']?>.html"><?=$v['name']?></a></h3>
			<div class="sub">
<?php foreach ($v['sub'] as $s => $r) {?>
				<a href="/list/<?=$v['id']?>.html"><?=$r['name']?></a>
<?php }?>
			</div>
		</li>
<?php }?>
	</ul>
</div>

<div id="fix_menu">
	<ul>
		<li>
			<a href="/">
				<span class="ico"><img src="/static/img/ico-0.jpg" height="100%"></span>
				<p>首页</p>
			</a>
		</li>
		<li class="sel">
			<a href="/allcate.html">
				<span class="ico"><img src="/static/img/ico-22.jpg" height="100%"></span>
				<p>分类</p>
			</a>
		</li>
		<li>
			<a href="/cart.html">
				<span class="ico"><img src="/static/img/ico-3.jpg" height="100%"></span>
				<p>购物车</p>
			</a>
		</li>
		<li>
			<a href="/?m=admin">
				<span class="ico"><img src="/static/img/ico-4.jpg" height="100%"></span>
				<p>个人中心</p>
			</a>
		</li>
	</ul>
</div>
<?php include T('show/m','footer');?>