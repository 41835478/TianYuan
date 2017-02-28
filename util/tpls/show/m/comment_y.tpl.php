<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size:100%;font-size: 18px;}
	.head{background-color: #fff;}
	.sc-list{float:left;width: 100%;height: 150px;margin-top:20px;background-color: #fff;font-size: 18px;}
	.sc-list img{float: left;width: 15%;padding: 10px;}
	.sc-pro-info{float: left;width: 75%;}
	.sc-pro-info p{margin-top: 20px;float: left;margin-left: 10px;}
	.price{color: #FE8F01;font-weight: bold;}
	.old-price{text-decoration:line-through;font-size: 16px;color: #cccccc;font-weight: bold;}
	.comment-type{color: #FE8F01;font-size: 14px;float: left;margin-right: 10px;}
	.comment-content{float: left;width: 90%;margin-left: 15px;}
	.comment-time{margin-top: 10px;color: #ccc;font-size: 14px;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">评价留言</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
	<?php foreach($cart_y as $k=>$v){?>
		<div class="sc-list">
			<img src="<?=$goods[$v['gid']]['thumb']?>">
			<div class="sc-pro-info">
				<p><span class="comment-type"><?=$star[$v['star']]?></span><?=$goods[$v['gid']]['title']?></p>
			</div>
			<div class="comment-content">
				<?=$v['content']?>
			</div>
			<div class="comment-content comment-time">
				购买时间：<?=date('Y-m-d',$v['time'])?>
			</div>
		</div>
	<?php }?>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	function unfa(id){
		layer.confirm('您确定要取消收藏此店铺吗？', {
	  		btn: ['确定','取消'] //按钮
		}, function(){
	  		$.ajax({
				type:'post',
				url:'/home/mark.html?org=unfav',
				data:{'id':id},
				success:function(r){
					if(r=='ok'){
						layer.alert('商品取消收藏成功！');
					}else{
						layer.alert(r);
					}
					setTimeout(function(){window.location.reload(true);},1200);
				}
			});
		});
	}

</script>