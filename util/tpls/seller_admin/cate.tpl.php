<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{width: 966px;min-height: 600px;overflow: hidden;float: right;}
.cate_list{min-height:0;overflow:hidden;width:300px}
.cate_list ul li{min-height:0;overflow:hidden;font-size:14px;line-height:35px;border-bottom:1px dashed #eee}
.cate_list ul li>p{border-bottom:1px solid #eee}
.cate_list ul li ul{padding-left:30px;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right">
		<div class="r_tit">店铺商品分类<a href="/home/cate.html?c=add" class="fr layui-btn layui-btn-small layui-btn-normal">添加分类</a></div>
		<div class="cate_list">
			<ul>
<?php foreach($shop_cate_top as $k=>$v) {?>
				<li>
					<p><i class="fa fa-list-ul" aria-hidden="true"></i> <?=$v['name']?> <span class="fr"><a href="/home/cate.html?c=edit&id=<?=$v['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a></span></p>
					<ul>
<?php $sub_cate=$db->getAll('select * from `web_cate_shop` where parent='.$v['id']);
foreach($sub_cate as $s=>$q) {?>
						<li><i class="fa fa-caret-right" aria-hidden="true"></i> <?=$q['name']?> <span class="fr"><a href="/home/cate.html?c=edit&id=<?=$q['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 编辑</a></span></li>
<?php }?>
					</ul>
				</li>
<?php }?>
			</ul>

		</div>
	</div>
</div>
<?php include T('seller_admin','footer');?>