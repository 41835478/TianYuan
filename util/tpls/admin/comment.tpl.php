<?php include T('seller_admin','header');?>
<script src="/static/js/jquery.raty.js"></script>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
<?php foreach($cart as $k=>$v) {
$goods_info=$db->get_One('select * from web_shop_goods where id='.$v['gid']);
?>
		<div class="order_list">
			<ul>
				<li>
					<div class="goods_thumb"><a href="/show/<?=$goods_info['id']?>.html" id="goto" title="<?=$goods_info['title']?>"><img src="<?=$goods_info['thumb']?>" width="100%" /></a></div>
					<div class="goods_dsp">
						<p><?=$goods_info['title']?></p>
						<p>购买时间：<?=date('Y-m-d H:i',$v['time'])?></p>
						<?php if($v['com_sta']==1){?><p>已评价 <a href="/home/comment.html?c=ylist" style="color: #009237">点击查看</a></p><?php }?>
					</div>
				</li>
			</ul>
		</div>	
<?php if($v['com_sta']==0){?>
<form method="post" id="cate_form_<?=$v['id']?>">
		<div class="comt-box">
			<div class="form">
				<div class="item">
					<span class="label">
						<em>*</em>评分：
					</span>
					<div class="fl">
						<div id="raty_<?=$v['id']?>"></div>
					</div>
				</div>
				<div class="item">
					<span class="label">
						<em>*</em>心得：
					</span>
					<div class="fl">
						<div class="summary-cont">
							<div class="sumy-area">
								<textarea name="content" class="area" cols="30" rows="10" placeholder="商品是否给力？快分享你的购买心得吧~"></textarea>
								<div class="area-count">1-500字</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="item imgEl imgupEl" id="imgContainer_10302863747_10062260" style="position: relative;">
					<span class="label">
						晒单：
					</span>
					<div class="fl">
						<div class="upload-img-box">
							<a href="#none" class="add-img-btn hide"><b></b></a>
							<div class="img-lists">
								<ul class="img-list-ul">
									<li class="upload-btn">
										<iframe src="/home/upfile.html?tb=5&gid=<?=$v['gid']?>" border="0" frameborder="0" style="vertical-align:top;" scrolling="no" width="60" height="60"></iframe>
									</li>
								</ul>
							</div>
							<div class="clear"></div>
							<div class="img-bigbox hide"><img title="" src="" class="" width="350"><span class="img-del hide" ind="img1">删除图片</span></div>
						</div>
					</div>
				</div>
				<div class="item">
					<span class="label">&nbsp;</span>
					<div class="fl">
						<a onclick="post_cmt(<?=$v['id']?>)" class="btn-5">发表评价</a>
						<input type="checkbox" name="mm" class="jdcheckbox">
						<label>匿名评价</label>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="cartid" value="<?=$v['id']?>" />
		</form>
<script type="text/javascript">
$('#raty_<?=$v['id']?>').raty();	
</script>

<?php }}?>
	</div>
</div>
<script type="text/javascript">
function post_cmt(id){
	$.ajax({
	    type:'post',
	    url:'/?m=admin&a=comment&c=save',
	    data:$('#cate_form_'+id).serialize(),
	    async:false,
	    success:function(d){
			if(d=='ok'){
			    layer.alert('提交成功！');
			    setTimeout(function(){window.location.reload(true);},1000);
			}else{
			    layer.alert(d,1);
			}
	    }
	});
}
$('.click_img').live('click',function(){
	var src=$(this).find('img').attr('src');
	var ind=$(this).attr('id');
	$('.img-bigbox img').attr('src',src.replace('_60_60','_real',src));
	$('.img-del').attr('ind',ind);
	if ($('.img-bigbox').hasClass('hide')){
		$('.img-bigbox').removeClass('hide');
	}
});
$('.img-del').click(function(){
	var ind=$(this).attr('ind');
	$(this).parent().addClass('hide');
	$('#'+ind).remove();
});
function setImg(f,id){
	var f60=f.replace('_real','_60_60',f);
	var ind=$(".img-list-ul li").size();
	$(".img-list-ul").prepend('<li id="img'+ind+'" class="click_img"><img width="60px" height="60px" alt="" src="'+f60+'" _id="1"><input type="hidden" name="img[]" value="'+f+'"></li>');
	if (ind==1){
		$('.img-bigbox img').attr('src',f);
	}
	if ($('.img-bigbox').hasClass('hide')){
		$('.img-bigbox').removeClass('hide');
	}
}
</script>
<?php include T('seller_admin','footer');?>