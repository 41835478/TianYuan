<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{width: 966px;min-height: 600px;overflow: hidden;float: right;}
.u_info{border:1px solid #eee;height:123px;min-height:0;overflow:hidden;background-color:#f8f8f8;}
.user{height:108px;padding-top:15px;width:400px;float:left;border-right:1px solid #eee;min-height:0;overflow:hidden;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:10px;}
.name h2{font-size:18px;line-height:40px;font-weight:bold;}
.name p{color:#009136;line-height:25px;}
.name p a{color:#999}
.name p a:hover{color:#009136}
.edit{color:#009237;font-size:14px;text-decoration:underline;}
.pop_tip{min-height:0;overflow:hidden;padding:10px;border:1px dashed #e6e6e6;background-color:#fafafa;margin-bottom:12px;}
.pop_tip p{font-size:14px;line-height:25px;}
.pop_tip a{color:#ff6702;text-decoration:underline;}
.ico{width:25px;height:25px;background:url('/static/img/pop1.jpg') no-repeat center;padding-right:10px;}
.rating{padding:15px;float:left;}
.rating h2{font-size:16px;line-height:40px;font-weight:bold;}
.tit_s{font-size:16px;line-height:50px;font-weight:bold;}
.box_index{border:1px solid #e6e6e6;min-height:0;overflow:hidden;}
.b_tt{font-size:16px;line-height:53px;border-bottom:1px solid #e6e6e6;padding-left:15px;font-weight:bold;}
.bbx{padding:15px;border-bottom:1px solid #e6e6e6;}
.bbx h3{font-size:15px;font-weight:bold;line-height:30px;}
.bbx p{font-size:14px;line-height:25px;color:#555}
.bbx p span {padding-right:20px;}
.bbx p span b{font-weight:normal;color:#ff6d08}
.bbx p .btn{padding:5px 10px;border:1px solid #eee;margin-left:16px;display:inline-block;}
.bbx p a{color:#555}
.bbx p a:hover{color:#009136}
.bbx .intro{color:#b5b5b5}
.ma_col_l{width:548px;} 
.ma_col_r{width:402px;margin-left:16px;}
.ss_btn{color:#009136;text-decoration:underline;}
.ma_col_m{min-height:0;overflow:hidden;margin-top:20px;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<!--<div class="pop_tip">
			<div class="ico fl"></div><p>重要提醒：您有新的订单，请及时处理！<a href="">点击查看</a> </p>
		</div>-->
		<div class="u_info">
			<div class="user">
				<div class="avator"><img src="<?=$shop_info['logo']?>" width="100%"/></div>
				<div class="name">
					<h2>您好，<?=$username?> <a class="edit" href="/home/shop.html">修改</a></h2>
					<p><span>店铺管理</span> <a href="/shop/<?=$_userid?>.html">查看我的店铺</a></p>
					<?php if($shop_info['bond_sta']==1){?><p>消保服务：已缴纳保证金1000元</p><?php }?>
				</div>
			</div>
			<!--<div class="rating">
				<h2>店铺动态评分</h2>
			</div>-->
		</div>
		<div class="ma_col_l fl">
			<p class="tit_s">店铺管理</p>
			<div class="box_index">
				<p class="b_tt">日常办理事项</p>
				<div class="bbx">
					<h3>宝贝管理</h3>
					<p><span>商品推荐: <b><?=$tj?></b></span><span>等待上架的商品: <b><?=$dsj?></b></span><span>在售商品: <b><?=$onsale?></b></span></p>
				</div>
				<div class="bbx">
					<h3>订单提醒</h3>
					<p><span>待付款订单: <b><?=$unpay?></b></span></p>
				</div>
				<div class="bbx">
					<h3>交易管理</h3>
					<p><span>待评价商品: <b><?=$dpj?></b></span><span>待回复留言: <b><?=$msg?></b></span><span>宝贝评价: <b><?=$allmsg?></b></span></p>
				</div>
				<div class="bbx" style="border:none">
					<h3>账户管理</h3>
					<p><span>账户余额: <b><?=$cash[0]['cash']?></b><a href="/home/cash.html?c=log" class="btn">查看资金流水</a></p>
				</div>
				
			</div>
		</div>
		<div class="ma_col_r fl">
			<p class="tit_s">店铺数据</p>
			<div class="box_index">
				<p class="b_tt">报表管理</p>
				<div class="bbx">
					<h3>今日数据</h3>
					<p>根据商城后台真实数据显示，了解更多请 <a href="/home/views.html" class="ss_btn">点击查看</a></p>
				</div>
				<div class="bbx" style="border:none">
					<p>店铺商品总浏览量：<span><?=$goods_total_num?></span></p>
					<p>店铺总浏览量：<span><?=$shop_info['view']?></span></p>
					<p>店铺总成交量：<span><?=$deal_total_num?></span> 笔</p>
				</div>
				
			</div>
		</div>
		<div style="clear:both"></div>
		<div class="ma_col_m">
			<div class="box_index">
				<p class="b_tt">商城公告</p>
				<div class="bbx">
					<h3>今日必读</h3>
<?php foreach ($notice as $k => $v) {?>
					<p><b><a href=""><?=$v['title']?></a></b><span class="fr"><?=date('Y/m/d',$v['time'])?></span></p>
					<p class="intro"><?=$v['content']?></p>
<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>