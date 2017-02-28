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
.u_info{border:1px solid #eee;height:153px;min-height:0;overflow:hidden;}
.user{height:79px;padding-top:20px;border-bottom:1px solid #eee;background-color:#f8f8f8;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:10px;}
.name h2{font-size:16px;font-weight:bold;}
.edit{color:#009237;font-size:14px;text-decoration:underline;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">物流工具</div>
		<div id="trans">
			<table class="site-table">
				<thead>
					<tr>
						<th width="30px">#</th>
						<th>配送方式名称</th>
						<th>配送方式描述</th>
						<th width="150px">操作</th>
					</tr> 
				</thead>
				<tbody>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;">快递</td>
						<td style="text-align: center;">江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG</td>
						<td style="text-align: center;"><a href="/home/transport.html?c=kd" class="layui-btn layui-btn-small">设置</a></td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="text-align: center;">货到付款</td>
						<td style="text-align: center;">所购商品到达即付运费</td>
						<td style="text-align: center;"><a href="/home/transport.html?c=df" class="layui-btn layui-btn-small">设置</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php include T('seller_admin','footer');?>