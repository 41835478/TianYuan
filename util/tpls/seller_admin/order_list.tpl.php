<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}
.m_drand_kj01,.m_drand_kj02,.m_drand_kj03{margin:0 20px;}
.m_drand_kj01 tr{text-align:center;}
.m_drand_kj01 th{background-color:#f1f1f1;height:40px;}
.m_drand_kj01 tr:nth-child(odd) td{background-color:#fdfbfc;}
.m_drand_kj01 tr:nth-child(even) td{background-color:#fafafa;}
.m_drand_kj01 tr td input{width:35px;height:25px;border-radius:5px;-webkit-border-radius:5px;border:1px solid #c6c6c6;text-align:center;}
.m_drand_kj01 .cr_btn{width:80px;height:35px;float:right;display:block;background-color:#5093e1;border-radius:5px;-webkit-border-radius:5px;font-size:15px;color:#fff;line-height:35px;text-align:center;margin:20px 5px;}
.operate_outer{width:82px;margin:0 auto;position:relative}
.operate_list{width:80px;min-height:0;overflow:hidden;background-color:#eee;position:absolute;top:24px;left:0;border:1px solid #7AADE2;border-top:none;display:none;}
.operate_name{width:80px;height:24px;overflow:hidden;border:1px solid #fff;border-bottom:none}
.show_list .operate_name{border-color:#7AADE2;background-color:#eee}
.show_list .operate_list{display:block}
.operate_list li{width:100%;height:24px;text-align:center;line-height:24px;}
.operate_list li a{color:#666;}
.operate_list li:hover{background-color:#ddd}
.operate_list li:hover a{color:#36f;}
.operate_list li a:hover{text-decoration:none;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">店铺订单管理</div>
		<div class="m_drand_kj01">
			<form method="post" id="sort_form">
				<input type="hidden" name="c" value="sort">
				<table class="site-table">
					<tr>
						<th>商品名称</th>
						<th width="70px">商品图片</th>
						<th width="70px">商品价格</th>
						<th width="140px">订单号</th>
						<th width="80px">下单时间</th>
						<th width="60px">支付状态</th>
						<th width="60px">订单状态</th>
						<th width="100px">操作管理</th>
					</tr>
	<?php $i=1;foreach($carts as $k=>$v) {$con_arr=unserialize($v['demo']);?>
					<tr>
						<td <?php if(!empty($con_arr)){?> onclick="showex(this)" class="has_memo"<?php }?>><?=$goods[$v['gid']]['title']?>
	<?php if(empty($con_arr)){?>
	                    <div class="extra_con">
	                        <ul class="extra_ul">
								<li><p style="padding:10px;line-height:20px">暂时没有相关备注...</p></li>
	                        </ul>
	                    </div>
	<?php }else{?>
	                    <div class="extra_con">
	                        <ul class="extra_ul">
	<?php foreach($con_arr as $s){?>
	                            <li><p style="padding:10px;line-height:20px"><?=$s['content']?></p><p style="text-align:right"><?=date('Y-m-d H:i:s',$s['time'])?></p></li>
	<?php }?>
	                        </ul>
	                    </div>
						<div class="mark_icon"></div>
	<?php }?>
						</td>
						<td><img src="<?=$goods[$v['gid']]['thumb']?>" alt="<?=$goods[$v['gid']]['title']?>"></td>
						<td><?=$goods[$v['gid']]['price']?>元</td>
						<td><?=$orders[$v['oid']]['no']?></td>
						<td><?=date('Y-m-d H:i:s',$orders[$v['oid']]['addtime'])?></td>
						<td><?=$orders[$v['oid']]['status']>1?'<span style="color:green">已支付</span>':'<span style="color:red">未支付</span>'?></td>
						<td><?=$v['dili_sta']==1?'<span style="color:green">已发货</span>':'<span style="color:red">未发货</span>'?></td>
						<td>
						<?php if($orders[$v['oid']]['status']>1){?>
							<a href="/?m=admin&a=order&c=fahuo&oid=<?=$v['oid']?>&gid=<?=$v['gid']?>" title="发货" class="layui-btn layui-btn-small">发货设置</a>
						<?php }?>
						</td>
					</tr>
				<?php }?>
					<tr>
						<td colspan="8"><div class="page"><?=$pagestr?></div></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$('.operate_outer').hover(function(){
		$(this).addClass('show_list').css('zIndex',99);
	},function(){
		$(this).removeClass('show_list').css('zIndex',0);
	});
});
function dele(id){
	layer.confirm('确定要删除吗', {
		btn: ['确定','取消']
	}, function(){
		$.ajax({
			type:'post',
			url:'/home/quan.html?c=dele',
			data:{'id':id},
			success:function(r){
				if(r=='ok'){
					layer.alert('删除成功');
				}else{
					layer.alert(r);
				}
				setTimeout(function(){window.location.reload(true);},1200);
			}
		});
	});
}
</script>

<?php include T('seller_admin','footer');?>