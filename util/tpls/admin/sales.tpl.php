<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">
.list_tit{font-size:16px;line-height:40px;background-color:#f8f8f8;border:1px solid #e6e6e6;margin-top:10px;}
.list_tit span{display:inline-block;text-align:center;}
.form_info{padding:10px 20px;min-height:0;overflow:hidden;font-size:14px;line-height:25px;}
.form_info input,select,textarea{border:1px solid #ccc;padding:5px}
.form_info p{margin-bottom:10px;}
.tj_btn{width:200px;height:46px;text-align:center;background-color:#dd2726;line-height:46px;font-size:16px;display:block;color:#fff;margin-top:30px;margin-left:70px;}
a.tj_btn:hover{color:#fff}
.good_area{height:119px;overflow:hidden;border:1px solid #e6e6e6;border-top:none;font-size:14px;line-height:25px;}
.gd_info{min-height:0;overflow:hidden;}
.gd_img{width:62px;height:62px;margin-right:10px;}
.gd_a{height:119px;padding:16px 19px 0;width:295px;border-right:1px solid #e6e6e6}
.gd_b{height:119px;text-align:center;padding-top:40px;width:190px;border-right:1px solid #e6e6e6}
.gd_c{height:119px;width:70px;padding:35px 50px 0;font-size:12px;text-align:center;border-right:1px solid #e6e6e6}
.gd_d{height:119px;width:100px;text-align:center;padding:40px 50px 0;font-size:12px;}
#sales_from{min-height:0;overflow:hidden;margin-top:30px;}
#sales_from p span{color:red}
.qsa{min-height:0;overflow:hidden;margin-top:30px;padding:20px}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">售后管理</div>
		<div class="list_tit">
			<p>
				<span style="width:335px">商品详情</span>
				<span style="width:190px">金额</span>
				<span style="width:160px">下单时间</span>
				<span style="width:200px">购买数量</span>
			</p>
		</div>
		<div class="good_area">
			<div class="gd_a fl">
				<p style="color:#666;line-height:30px">订单编号：<?=$order['no']?></p>
				<div class="gd_info">
					<div class="gd_img fl"><img src="<?=$good['thumb']?>" width="100%"/></div>
					<div class="gd_ins">
						<p><?=$good['title']?></p>
					</div>
				</div>
			</div>
			<div class="gd_b fl">
				<p style="color:#999;">&yen; <?=$good['price']?></p>
			</div>
			<div class="gd_c fl">
				<p style="color:#999;font-size:12px"><?=date('Y-m-d H:i',$good['addtime'])?></p>
			</div>
			<div class="gd_d fl">
				<p style="color:#999;font-size:12px">X1</p>
			</div>
		</div>
		<div id="sales_from">
			<p><span>* 温馨提示：</span>本次售后服务将由第三方卖家 <span><?=$shop['title']?></span> 提供。</p>
			<form id="return_form">
			<input type="hidden" name="gid" value="<?=$gid?>"/>
			<input type="hidden" name="oid" value="<?=$oid?>"/>
			<div class="form_info">
				<p>服务类型：<select name="type">
					<option value="0">维修</option>
					<option value="1">售后服务</option>
				</select></p>
				<p>问题描述：<textarea name="extra" rows="3" cols="" style="width:300px"></textarea></p>
				<a onclick="sub_form()" class="tj_btn">提交</a>
			</div>
			</form>
			<div class="qsa">
				<p style="font-size:15px;line-height:30px;"><b>返修/退换货常见问题</b></p>
				<p> 1. “申请”按钮若为灰色，可能是因为订单尚未完成或该商品正在退货/退款中。</p>
				<p> 2. 查看<a href="" style="color:green">售后政策</a>。</p>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript">
function sub_form(){
	var data=$('#return_form').serialize();
	$.ajax({
		type:'post',
		url:'/home/active.html?c=savesales',
		data:data,
		success:function(r){
			if(r=='ok'){
				layer.alert('售后服务申请成功');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.href="/home/sales.html";},1200);
		}
	});
}
</script>

<?php include T('seller_admin','footer');?>