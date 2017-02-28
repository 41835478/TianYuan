<?php include T('show/m','header');?>
<style type="text/css">
#u-top{width:640px;height:360px;background-color: #aed13f;min-height: 0;overflow: hidden;position: relative;}
.u-map{position: absolute;top:20px;left:20px;width:100px;height:40px;background: url('/static/img/u-map.jpg') no-repeat center left;background-size: auto 40px;text-indent: 40px;font-size: 24px;color:#fff;line-height: 40px;}
.setting{position: absolute;top: 20px;right:100px;height:40px;width:80px;font-size:20px;color:#fff;line-height: 40px;text-align: center;background-color: rgba(0,0,0,.2);border-radius: 25px}
.avator{width:120px;height: 120px;margin: 0 auto;margin-top: 80px;border-radius: 50%;border:3px solid #fff;background:url('<?=$shop_account?$shop_account['img']:'';?>') no-repeat center;background-size:cover}
.nickname{display: block;margin:0 auto;width:180px;height:40px;font-size:20px;line-height: 40px;margin-top: 10px;text-align: center;border:2px solid #fff;border-radius: 40px;color:#fff;}
.u-nav{height:60px;padding:10px 0;background: url('/static/img/u-2.jpg') no-repeat center;background-size: auto 50px;}
.u-nav li{width:320px;float:left;text-align:center;}
.u-nav li a{color:#fff;font-size:24px;line-height:30px;display:block;}
h2{font-size:24px;line-height:30px;margin-top:10px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;padding:20px;color:#666;background-color:#fff;}
h2 a{color:#666}
.op_zone{width:640px;height:120px;background:url('/static/img/m/op1.jpg') no-repeat center top 10px #fff;background-size:100% auto;border-bottom:1px solid #ccc;}
.op_zone a{display:block;width:160px;height:50px;padding-top:70px;float:left;color:#555;text-align:center;font-size:24px;}
.ent{width:640px;height:480px;background-color:#fff;padding-bottom:100px;background-size:100% auto;border-top:1px solid #ccc;margin-top:10px;}
.ent ul li{width:159px;height:159px;float:left;border-bottom:1px solid #ccc;border-right:1px solid #ccc}
.ent ul li a{display:block;width:159px;padding-top:40px;text-align:center;font-size:24px;height:50px;color:#555}
.icon{width:50px;height:50px;margin:0 auto;margin-bottom:10px;}
</style>
<div id="u-top">
	<div class="u-map">潍坊</div>
	<a href="/home/intro.html" class="setting">设置</a>
	<div class="avator"></div>
	<span class="nickname"><?=$_username?></span>
	<div class="u-nav">
		<ul>
			<li>
				<a href="/home/score.html">
					<?=$user['score']?><br/>
					可用积分
				</a>
			</li>
			<li>
				<a href="/home/quan.html">
					<?=$myquan?><br/>
					优惠券
				</a>
			</li>
		</ul>
	</div>
</div>
<h2 >我的订单<a href="/home/order.html" class="fr">查看全部订单 <i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
<div class="op_zone">
	<a href="/home/order.html?org=dfk">待支付</a>
	<a href="/home/order.html?org=dfh">配送中</a>
	<a href="/home/comment.html?c=ylist">查看卖家留言</a>
	<a href="/home/return.html">退换货</a>
</div>
<div class="ent">
	<ul>
		<li><a href="/home/intro.html"><div class="icon"><img src="/static/img/m/1.png" width="100%"/></div><p>我的会员</p></a></li>
		<li><a href="/home/mark.html"><div class="icon"><img src="/static/img/m/2.png" width="100%"/></div><p>我的收藏</p></a></li>
		<li><a href="/home/intro.html"><div class="icon"><img src="/static/img/m/3.png" width="100%"/></div><p>账户管理</p></a></li>
		<li><a href="/home/score.html"><div class="icon"><img src="/static/img/m/4.png" width="100%"/></div><p>我的积分</p></a></li>
		<li><a href="/home/quan.html"><div class="icon"><img src="/static/img/m/5.png" width="100%"/></div><p>我的优惠</p></a></li>
		<li><a href="/home/return.html"><div class="icon"><img src="/static/img/m/6.png" width="100%"/></div><p>退款维权</p></a></li>
		<!--<li><a href=""><div class="icon"><img src="/static/img/m/7.png" width="100%"/></div><p>促销员</p></a></li>-->
		<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?=$uc_config['qq']?>&amp;site=qq&amp;Menu=yes"><div class="icon"><img src="/static/img/m/9.png" width="100%"/></div><p>在线客服</p></a></li>
		<li><a href="tel:<?=$uc_config['tel']?>"><div class="icon"><img src="/static/img/m/8.png" width="100%"/></div><p>电话客服</p></a></li>
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
		<li>
			<a href="/allcate.html">
				<span class="ico"><img src="/static/img/ico-2.jpg" height="100%"></span>
				<p>分类</p>
			</a>
		</li>
		<li>
			<a href="/cart.html">
				<span class="ico"><img src="/static/img/ico-3.jpg" height="100%"></span>
				<p>购物车</p>
			</a>
		</li>
		<li class="sel">
			<a href="/?m=admin">
				<span class="ico"><img src="/static/img/ico-44.jpg" height="100%"></span>
				<p>个人中心</p>
			</a>
		</li>
	</ul>
</div>
<?php include T('show/m','footer');?>