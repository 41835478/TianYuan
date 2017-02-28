<style type="text/css">
#left_menu2{width:188px;border:1px solid #e6e6e6;min-height:600px;overflow:hidden;float:left;padding-left:20px;}
#left_menu2 h3{font-size:15px;font-weight:bold;line-height:40px;}
#left_menu2 p a{font-size:14px;line-height:30px;}
#left_menu2 p span{display:inline-block;padding:2px 10px;background-color:#ff6900;color:#fff;text-align:center;border-radius:15px;-webkit-border-radius:15px;margin-left:10px;font-size:12px;}
.sel{color:#ff6900}
.ruzhu{background:url('/static/img/rz_bg.png') no-repeat center;display:block;width:171px;height:40px;font-size:16px;line-height:40px;text-align:center;margin-top:10px;color:#fff;}
a.ruzhu:hover{color:#fff}
</style>

<div id="left_menu2">
	<a class="ruzhu" href="/apply.html">我要入驻</a>
	<h3>交易信息</h3>
	<p><a href="/home/order.html" <?php if($a==order){?>class="sel"<?php }?>>我的订单</a> <span><?=$order_nums['num']?></span></p>
	<p><a href="/home/quan.html" <?php if($a==quan){?>class="sel"<?php }?>>我的优惠券</a></p>
	<p><a href="/home/score.html" <?php if($a==score){?>class="sel"<?php }?>>我的积分</a></p>
	<p><a href="/home/buy.html" <?php if($a==buy){?>class="sel"<?php }?>>购买过的商品</a></p>
	<p><a href="/home/mark.html" <?php if($a==mark){?>class="sel"<?php }?>>我的收藏</a></p>
	<p><a href="/home/comment.html" <?php if($a==comment){?>class="sel"<?php }?>>我的评价</a></p>
	<h3>帐号信息</h3>
	<p><a href="/home/intro.html"<?php if($a==intro){?>class="sel"<?php }?>>个人资料</a></p>
	<p><a href="/home/address.html?c=index"<?php if($a==address){?>class="sel"<?php }?>>收货地址管理</a></p>
	<!--<h3>我的消息</h3>
	<p><a href="/home/msg.html" <?php if($a==msg){?>class="sel"<?php }?>>系统消息</a> <?=$sys_msg>0?'<span>'.$sys_msg.'</span>':'';?></p>
	<p><a href="/home/msg.html?tp=sx" <?php if($a==msg&&$tp='sx'){?>class="sel"<?php }?>>私信</a> <?=$sx_msg>0?'<span>'.$sx_msg.'</span>':'';?></p>-->
	<h3>退款维权</h3>
	<p><a href="/home/return.html" <?php if($a=='return'){?>class="sel"<?php }?>>退款管理</a></p>
	<p><a href="/home/sales.html" <?php if($a=='sales'){?>class="sel"<?php }?>>售后管理</a></p>
	<p><a href="/home/feedback.html" <?php if($a==feedback){?>class="sel"<?php }?>>投诉建议</a></p>
	<h3>分销账户</h3>
	<p><a href="/home/member.html" <?php if($a==member){?>class="sel"<?php }?>>促销员</a></p>
</div>