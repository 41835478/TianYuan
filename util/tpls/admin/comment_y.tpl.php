<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<p><span><a href="/home/comment.html" title="待评价商品">待评价商品</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="/home/comment.html?c=ylist" title="已评价商品" class="curr">已评价商品</a></span></p>
		<div id="order_list_a">
		<div class="comt-head"><p><span style="padding-left:270px">商品信息</span><span style="padding-left:450px">评价状态</span></p></div>
			<ul>
				<?php foreach($cart_y as $k=>$v){?>
				<li>
					<div class="goods_thumb"><a href="/show/<?=$v['gid']?>.html" title="<?=$goods[$v['gid']]['title']?>" target="_blank"><img src="<?=$goods[$v['gid']]['thumb']?>" width="100%" /></a></div>
					<div class="goods_dsp">
						<p><a href="/show/<?=$v['gid']?>.html" title="<?=$goods[$v['gid']]['title']?>" target="_blank"><?=$goods[$v['gid']]['title']?></a></p>
						<p>购买时间：<?=date('Y-m-d',$v['time'])?></p>
					</div>
					<span class="btn-9" oid="<?=$v['oid']?>" gid="<?=$v['gid']?>">查看评价</span>
				</li>
				<div class="comt-box prompt03 hide"></div>
				<?php }?>
			</ul>
		</div>	
		<div class="pages"><?=$pagestr?></div>
	</div>
	<script type="text/javascript">
		$(function(){
			$('.btn-9').click(function(){
				var e=$(this);
				if (e.parent().next().find('.hasf').html()==null){
					var oid=e.attr('oid');
					var gid=e.attr('gid');
					$.ajax({
						type:'post',
						url:'/?m=admin&a=comment&c=ajaxcom',
						data:{'oid':oid,'gid':gid},
						async:false,
						success:function(d){
							e.parent().next('.comt-box').removeClass('hide');
							e.parent().next().append(d);
						}
					});
				}else{
					e.parent().next().toggle();
				}
			});
		});
	</script>
</div>
<?php include T('seller_admin','footer');?>