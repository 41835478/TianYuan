<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.curr {padding-bottom: 0;color: #e4393c;border-bottom: 2px solid #e4393c;font-weight: 700;cursor: pointer;text-decoration: none;}
.tit{font-size:14px;line-height:35px;}
#order_list_a{border:1px solid #eee;margin-top:20px;}
#order_list_a p span{margin-right:20px;}
#order_list_a ul li{padding:10px;min-height:0;overflow:hidden;position:relative;border-bottom:1px solid #eee}
#order_list_a ul li:last-child{border:none}
#order_list_a ul li .goods_thumb{width:60px;height:60px;float:left;border:1px solid #eee}
#order_list_a ul li .goods_dsp{position:absolute;left:80px;top:15px;font-size:12px;line-height:25px;}
#order_list_a ul li .goods_dsp p{width:600px;overflow:hidden;height:25px;}
.btn-9{  background-color: #F7F7F7;background-image: -moz-linear-gradient(top,#F7F7F7,#F3F2F2);background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#F7F7F7),color-stop(1,#F3F2F2));
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F7F7F7', endColorstr='#F3F2F2', GradientType='0');
-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F7F7F7', endColorstr='#F3F2F2');background-image: linear-gradient(to bottom,#F7F7F7 0,#F3F2F2 100%);-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;display: inline-block;height: 18px;line-height: 18px;border: 1px solid #ddd;padding: 2px 14px 3px;color: #323333;position:absolute;top:30px;right:150px}
.comt-head {height: 30px;line-height: 30px;background: #f5f5f5;color: #999;border-bottom: 1px solid #eee;}
/*comment_y*/
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<p><span><a href="/home/comment.html" title="待评价商品" class="curr">待评价商品</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="/home/comment.html?c=ylist" title="已评价商品">已评价商品</a></span></p>
		<div id="order_list_a">
		<div class="comt-head"><p><span style="padding-left:270px">商品信息</span><span style="padding-left:450px">评价状态</span></p></div>
			<ul>
<?php foreach($order_u as $ka=>$vb){ ?>
				<li>
					<div class="goods_thumb"><a href="/show/<?=$vb['gid']?>.html" title="<?=$goods[$vb['gid']]['title']?>" target="_blank"><img src="<?=$goods[$vb['gid']]['thumb']?>" width="100%" /></a></div>
					<div class="goods_dsp">
						<p><a href="/show/<?=$vb['gid']?>.html" title="<?=$goods[$vb['gid']]['title']?>" target="_blank"><?=$goods[$vb['gid']]['title']?></a></p>
						<p>购买时间：<?=date('Y-m-d',$vb['time'])?></p>
					</div>
					<a href="/home/comment.html?c=fbpl&oid=<?=$vb['oid']?>" class="btn-9">点击评价</a>
				</li>
<?php }?>
			</ul>
		</div>	
		<div class="pages"><?=$pagestr?></div>
	</div>
</div>
<?php include T('seller_admin','footer');?>