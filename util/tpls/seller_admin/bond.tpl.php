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

</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
<?php if($shop_info['bond_sta']==0){?>
		<blockquote class="layui-elem-quote">您还没有缴纳保证金</blockquote>
		<blockquote class="layui-elem-quote layui-quote-nm">保证金金额：&yen; 1000.00</blockquote>
		<a onclick="ali_pay()" class="layui-btn layui-btn-big layui-btn-normal">点击支付</a>
<?php }else{?>
		<blockquote class="layui-elem-quote">您已经缴纳&yen; 1000.00保证金</blockquote>
<?php }?>
	</div>
</div>
<script type="text/javascript">
function ali_pay(){
	$.ajax({
		type:'post',
		url:'/home/bond.html?c=creat',
		success:function(r){
			setTimeout(function(){window.location.href='/order/'+r+'.html';},1200);
		}
	});
}
</script>
 
<?php include T('seller_admin','footer');?>