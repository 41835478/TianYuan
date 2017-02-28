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
.s5{width:200px;height:50px;text-align:center;overflow:hidden;}
.chk{float:left;width:50px;text-align:center;margin-top:20px;}
.imgzon{width:50px;height:50px;float:left;}
.goods-des{width:180px;float:left;padding:5px 10px}
.goods-des p{width:180px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;}
.no{width:50px;text-align:center;line-height:45px;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">在售商品</div>
		<p>共有出售中的商品 <span style="color:#78a001"><?=$nums['num']?></span> 个</p>
		<div class="goods_list">
			<div class="list_tit">
				<p>
					<span style="width:50px">编号</span>
					<span style="width:250px">宝贝详情</span>
					<span style="width:100px">库存数目</span>
					<span style="width:110px">浏览量</span>
					<span style="width:120px">宝贝详情</span>
					<span style="width:200px">操作</span>
				</p>
			</div>
<?php $n=1;foreach($list as $k=>$v) {
$care=$db->findOne('select count(*) from `web_shop_care` where dataid='.$v['id'].' and type=1');
?>
			<div class="li_good">
				<div class="s1 fl">
					<div class="no fl"><?=$n?></div>
					<div class="imgzon"><img src="<?=$v['thumb']?>" width="50px"/></div>
					<div class="goods-des">
						<p><a href="/show/<?=$v['id']?>.html" target="_blank"><?=$v['title']?></a></p>
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
					<p>已有 <cite><?=$care?></cite> 人<br/>收藏该商品</p>
				</div>
				<div class="s5 fl">
					<p><a href="/?m=admin&a=goods&c=edit&id=<?=$v['id']?>" class="layui-btn layui-btn-mini">编辑商品</a><?php if($v['tj']==1){?><a  class="layui-btn layui-btn-mini">已推荐</a><?php }else{?><a onclick="tj(<?=$v['id']?>)" class="layui-btn layui-btn-mini">推荐</a><?php }?> 
						<a onclick="drop(<?=$v['id']?>)" class="layui-btn layui-btn-mini">下架</a> 
						<a onclick="del(<?=$v['id']?>)" class="layui-btn layui-btn-danger layui-btn-mini">删除</a></p>
				</div>
			</div>
<?php $n++;}?>
		</div>
	</div>
</div>
<script type="text/javascript">
function del(id){
	if(confirm("确定要删除该商品吗?")){ 
		$.ajax({
			type:'post',
			url:'/?m=admin&a=goods&c=del',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					alert('删除成功');
				}else{
					alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	};
}
function tj(id){
	if(confirm("确定要推荐该商品吗?")){ 
		$.ajax({
			type:'post',
			url:'/?m=admin&a=goods&c=tj',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					alert('商品推荐成功');
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