<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 店铺中心</p>
</div>
<style type="text/css">
.list_tit{font-size:16px;line-height:40px;background-color:#f8f8f8;border:1px solid #e6e6e6;margin-top:10px;}
.list_tit span{display:inline-block;text-align:center;}
.li_good{min-height:0;overflow:hidden;border-bottom:1px solid #eee;padding:10px 0}	
.li_good cite{font-style:normal;color:#78a001}
.s1{width:300px;height:50px;overflow:hidden;}
.s2{width:110px;height:45px;padding-top:5px;text-align:center;overflow:hidden;}
.s3{width:120px;height:45px;padding-top:5px;text-align:center;overflow:hidden;}
.s4{width:120px;height:45px;padding-top:5px;text-align:center;overflow:hidden;}
.s5{width:200px;height:45px;text-align:center;overflow:hidden;}
.s5 p a{color:#78a001;line-height:25px;cursor:pointer}
.chk{float:left;width:50px;text-align:center;margin-top:20px;}
.imgzon{width:50px;height:50px;float:left;}
.goods-des{width:180px;float:left;padding:5px 10px}
.goods-des p{width:180px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">未上架的商品</div>
		<p>共有未上架的商品 <span style="color:#78a001"><?=$nums['num']?></span> 个</p>
		<div class="goods_list">
			<div class="list_tit">
				<p>
					<span style="width:300px">宝贝详情</span>
					<span style="width:100px">库存数目</span>
					<span style="width:110px">浏览量</span>
					<span style="width:120px">宝贝详情</span>
					<span style="width:200px">操作</span>
				</p>
			</div>
<?php foreach($list as $k=>$v) {?>
			<div class="li_good">
				<div class="s1 fl">
					<input type="checkbox" class="chk" />
					<div class="imgzon"><img src="<?=$v['thumb']?>" width="50px"/></div>
					<div class="goods-des">
						<p><?=$v['title']?></p>
						<p class="sub">价格:<?=$v['price']?></p>
					</div>
				</div>
				<div class="s2 fl">
					<p>库存总数<br/><cite><?=$v['num']?></cite></p>
				</div>
				<div class="s3 fl">
					<p>已有 <cite><?=$v['view']?></cite> 人<br/>浏览该商品</p>
				</div>
				<div class="s4 fl">
					<p>已有 <cite><?=$v['fav']?></cite> 人<br/>收藏该商品</p>
				</div>
				<div class="s5 fl">
					<p><a onclick="upsale(<?=$v['id']?>)">上架</a></p>
				</div>
			</div>
<?php }?>
		</div>
	</div>
</div>
<script type="text/javascript">
function upsale(id){
	if(confirm("确定要上架该商品吗?")){ 
		$.ajax({
			type:'post',
			url:'/?m=admin&a=goods&c=upsale',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					alert('商品上架成功');
				}else{
					alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	};
}

</script>

<?php include T('seller_admin','footer');?>