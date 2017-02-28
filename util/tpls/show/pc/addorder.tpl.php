<?php $_cache_sta='no-cache';include T('seller_admin','header');?>
<link href="/static/css/wxsite/addorder.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.step-cont b{color: #e4393c;font:bolder 14px/20px 'verdana'}
	.p_thumb a img{width:100%;}
}
</style>
<div id="lb" class="cont_div">
	<div id="lb_a"><h3>填写并核对订单信息</h3></div>
	<div id="add_order">
	<script type="text/javascript">
		function create_order(){
			//校验 todo
			var aid=$('#addressid').val();
			if (aid>0){
				$('#create_order_fid').submit();
			}else{
				layer.alert('请设置一个收货地址');
				add_address();
			}
		}
	</script>
<script type="text/javascript">
function add_address(){
	layer.open({
		type: 2,
		title: '新增收货人信息',
		shadeClose: true,
		shade: 0.8,
		area: ['600px', '400px'],
		id:'add_address_log',
		content: '/address.html'
	});
}
function edit_df(key){
	layer.open({
		type: 2,
		title: '新增收货人信息',
		shadeClose: true,
		shade: 0.8,
		area: ['600px', '400px'],
		id:'add_address_log',
		content: '/address.html?key='+key
	});
}
function del_df(key){
	$.ajax({
		type:'post',
		url:'/ajax.html',
		data:{'a':'deladdress','key':key},
		success:function(d){
			if (d=='ok'){
				flush_address();
				window.location.reload(true);
			}else{
				window.location.reload(true);
			}
		}
	});
}
function set_df(key){
	$.ajax({
		type:'post',
		url:'/ajax.html',
		data:{'a':'dfaddress','key':key},
		success:function(d){
			if (d=='ok'){
				flush_address();
			}else{
				window.location.reload(true);
			}
		}
	});
}
function show_ConsigneeAll(){
	$('#consignee-list').toggleClass('consignee-off');
	$('#consigneeItemAllClick').toggleClass('switch-off');
}
function ini_address_func(){
	$('#consignee-list li').hover(function(){
		$(this).addClass('li-hover');
	},function(){
		$(this).removeClass('li-hover');
	}).find('.consignee-item').click(function(){
		var ei=$(this).parent().attr('rel');
		if (ei>0){
			$('#consignee-list li .item-selected').removeClass('item-selected');
			$(this).addClass('item-selected');
			$('#addressid').val(ei);
		}else{
			add_address();
		}
	});
}

function flush_address(){
	$.ajax({
		type:'post',
		url:'/?m=wxsite&mod=ajax',
		data:{'a':'myaddress'},
		success:function(d){
			$('#consignee_outer_id').html(d);
			ini_address_func();
		}
	});
}
</script>
		<form method="post" id="create_order_fid" action="/addorder.html">
			
			<input type="hidden" name="a" value="create_order" />
			<h3>收货人信息<a onclick="add_address()" class="return-edit">新增收货地址</a></h3>
			<div class="step-cont consignee-cont" id="consignee_outer_id">
				<ul id="consignee-list" class="consignee-off">
<?php 
$addressid=0;
if(!empty($my_address)){
$k=1;
foreach($my_address as $kv) {
$address=unserialize($kv['address']);
$area_str=getFullAddress($all_area,$address['areaid'],' ');
if($k<2){
$addressid=$kv['id'];

}?>
					<li id="add_<?=$kv['id']?>" rel="<?=$kv['id']?>" class="<?=$k<2?'item-selected':''?>">
						<div class="consignee-item"><span title="<?=$address['linkman']?>"><?=$kv['sort']==1?'默认地址':$address['linkman']?></span><b></b></div>
						<div class="addr-detail">
							<span class="addr-name" title="<?=$address['linkman']?>"><?=$address['linkman']?></span>
							<span class="addr-info" title="<?=$area_str?> <?=$address['address']?>"><?=$area_str?> <?=$address['address']?></span>
							<span class="addr-tel"><?=$address['phone']?></span>
						</div>
						<div class="op-btns">
<?php if($kv['sort']!=1){?>
							<a onclick="set_df('<?=$kv['id']?>')" class="ftx-05 setdefault-consignee">设为默认地址</a>
<?php }?>
							<a onclick="edit_df('<?=$kv['id']?>')" class="ftx-05 edit-consignee">编辑</a>
							<a onclick="del_df('<?=$kv['id']?>')" class="ftx-05 del-consignee">删除</a>
						</div>
					</li>
<?php $k++;
}}else{?>
					<li rel="0">
						<div class="consignee-item" onclick="add_address()"><span title="添加收货人信息">添加收货人信息</span><b></b></div>
					</li>
<?php }?>
				</ul>
				<div class="addr-switch"<?php if(count($my_address)<2){?> style="display:none"<?php }?> id="consigneeItemAllClick" onclick="show_ConsigneeAll()"><span>更多地址</span><b></b></div>
				
			</div>
			<input type="hidden" name="addressid" id="addressid" value="<?=$addressid?>" />
			<h3>支付方式</h3>
			<div class="step-cont">
				<ul id="payment-list">
					<li>
						<div class="payment-item item-selected online-payment">在线支付<b></b></div>			
					</li>
				</ul>
			</div>
			<h3>货品清单<a href="/cart.html" class="return-edit">返回修改购物车</a></h3>
			<div class="step-cont">
				<div id="order_goods_list">
<?php $total_fee=$total_zc=0;$num=0;foreach($cart_info as $k=>$v) {$url_main='/show/';?>
					<div class="goods_infos">
						<div class="goods_demo">
							<h4>添加相关商品备注</h4>
							<textarea name="memo[<?=$k?>]" placeholder="限45个字（如有特殊要求，请将购买需求在备注中做详细说明）" ></textarea>
						</div>
						<div class="goods_lists">			
							<ul>
<?php $n=0;$this_weight=$this_zc=0.0;
	foreach($v as $kk=>$kv) {
$num+=$kv['num'];
$this_total=$kv['good']['price']*$kv['num'];
$url_this=$url_main.$kv['good']['id'].'.html';
$total_fee+=$this_total;
$this_weight+=$kv['good']['weight']*$kv['num'];
$this_zc+=$kv['good']['zc']*$kv['num'];
$extra=unserialize($kv['good']['extra']);?>
								<li w="<?=($kv['good']['weight']*$kv['num'])?>" t="<?=($kv['good']['ms']*$kv['num'])?>" n="<?=$kv['num']?>" fid="<?=$kv['good']['flvid']?>">
									<input type="hidden" name="gid[]" value="<?=$kv['good']['id']?>" />
									<div class="p_thumb">
										<a href="<?=$url_this?>" target="_blank"	title="<?=$kv['good']['title']?>">
											<img src="<?=$kv['good']['thumb']?>" alt="<?=$kv['good']['title']?>" />
										</a>
									</div>
									<div class="p_name">
										<a href="<?=$url_this?>" target="_blank" title="<?=$kv['good']['title']?>"><?=$kv['good']['title']?> <?=$kv['good']['tag_name']?><?php if(!empty($all_extra_rel)){foreach($all_extra_rel[$kv['good']['spid']] as $ke=>$ve) {if(isset($extra[$ve['id']])){echo ' '.implode('',$extra[$ve['id']]);}}}?></a>
									</div>
									<div class="p_price">&yen;<?=str_replace(',','',number_format($kv['good']['price'],2))?></div>
									<div class="p_num">x<?=$kv['num']?></div>
									<div class="p_sta"><?=$kv['good']['num']>100?'有货':($kv['good']['num']>0?$kv['good']['num']:'无货');?></div>
								</li>
<?php $n++;}
$total_zc+=$this_zc;
?>
							</ul>
							<h4 rel="<?=$k?>">运费：<b id="yf_<?=$k?>">0.00</b>元</h4>
							<div class="c_yf_sta" id="yf_sta_<?=$k?>"><p>当前地区无货</p></div>
						</div>
					</div>
<?php }?>
				</div>
			</div>
		<h3>使用积分</h3>
		<div class="step-cont">
			<input type="checkbox" id="my_score" name="discount" value="<?=number_format($user['score']/100,2)?>" <?php if($user['score']<1){?>disabled<?php }?>/> 目前共有积分 <b><?=$user['score']?></b> 分 可抵现金 <b><?=number_format($user['score']/100,2)?></b> 元<br>
			<p>注：<b>100</b>积分可抵现金<b>1</b>元。</p>
		</div>
		<h3>使用优惠券</h3>
		<div class="step-cont">
<?php 
$time = time();
$myquan = $db->getAll('SELECT q.* FROM web_user_quan uq LEFT JOIN web_quan q ON uq.quanid = q.id WHERE uq.status = 0 AND uq.userid = '.$_userid.'  AND q.beyond <= '.$total_fee.' AND q.stime <= '.$time.' AND q.etime >= '.$time);

foreach ($myquan as $q => $quan) {
?>
			<p>
			<input type="radio" name="quanid" class="my_quan" value="<?=$quan['id']?>" rel="<?=$quan['fee']?>"/> 满<?=$quan['beyond']?>减 <b><?=$quan['fee']?></b> 元</p>
<?php }?>
		</div>
		<h3>发票信息</h3>
		<div class="step-cont">
			<div id="part-inv" class="invoice-cont"><span class="mr10">不开发票</span><a onclick="set_bill()" class="ftx-05 invoice-edit">修改</a></div>
			<input type="hidden" name="bill_1" id="bills_1" value="-1" />
			<input type="hidden" name="bill_2" id="bills_2" value="-1" />
			<input type="hidden" name="bill_3" id="bills_3" value="1" />
			<div id="bill_area" class="tab_add" style="display:none;border-top:1px dotted #eee">
				<table cellspacing="1" cellpadding="3">
					<tr>
						<th width="90px">发票类型：</th>
						<td>
							<div class="invoice-list">
								<ul>
									<li class="invoice-item invoice-item-selected" rel="1" name="bill_3">普通发票<b></b></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<th valign="top">发票抬头：</th>
						<td>
							<div class="invoice-list invoice-tit-list" id="invoice-tit-list">
								<div class="invoice-item invoice-item-selected" name="bill_2" rel="-1">
									<div class="invoice-1">
										<span class="fore2"><input type="text" class="itxt" value="个人" readonly="readonly"><b></b></span>
									</div>
								</div>
<?php foreach($my_bills as $k=>$v) {?>
								<div rel="<?=$v['id']?>" id="iv_<?=$v['id']?>" name="bill_2" class="invoice-item">
									<div class="invoice-1">
										<span class="fore2"><input type="text" class="itxt" value="<?=$v['title']?>" readonly="readonly"><b></b></span>
									</div>
									<div class="btns">
										<a class="ftx-05 ml10 del-tit" onclick="delete_Invoice('<?=$v['id']?>')">删除</a>
									</div>								
								</div>
<?php }?>
								<div id="save-invoice" class="invoice-item" style="display: none;">
									<div class="add-invoice-tit">
										<input type="text" id="new_bill_tit" class="itxt itxt04" placeholder="新增单位发票抬头">
										<div class="btns"><a onclick="save_new_bill()" class="ftx-05 save-tit">保存</a></div>
									</div>
								</div>
							</div>
							<div id="add-invoice" class="add-invoice" style="display: block;"><a class="ftx-05 add-invoice-btn" onclick="add_bill_save()">新增单位发票</a></div>
						</td>
					</tr>
					<tr>
						<th>发票内容：</th>
						<td>
							<div class="invoice-list">
								<ul id="electro_book_content_radio">
									<li class="invoice-item invoice-item-selected" name="bill_1" rel="-1">不开发票<b></b></li>
									<li class="invoice-item" name="bill_1" rel="1">明细<b></b></li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button type="button" onclick="save_bill_ini()">保存发票信息</button></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="step-cont">
			<ul id="order-summary">
				<li><span><b><?=$num?></b> 件商品，总商品金额：</span><em>&yen;<?=str_replace(',','',number_format($total_fee,2))?></em></li>
				<!--<li><span>返现：</span><em>-&yen;0.00</em></li>-->
				<!--<li><span>运费：</span><em>&yen;<?=$total_trans_fee?></em></li>-->
				<li><span>运费：</span><em id="my_wu_fee">&yen;0.00</em></li>
				<li><span>商品总额：</span><em>&yen;<?=str_replace(',','',number_format($total_fee,2))?></em></li>
			</ul>
		</div>
		</div>
		</form>
		<div class="order_btn_areas" style="background:#f4f4f4">
			<p>
				<span class="total">应付总额：<strong id="payPriceId" class="need_pay_fee">&yen;0.00</strong></span>	
			</p>
			<p id="comfirm_address_show">请设置一个收货地址</p>
		</div>
		<div id="order_btn_area" class="order_btn_areas">
			<p>		
				<b onclick="create_order()"></b></p>
		</div>
	</div>
</div>
<script type="text/javascript">
var fee_a=<?=str_replace(',','',number_format($total_fee,2))?>;
var fee_b=<?=str_replace(',','',number_format($total_zc,2))?>;
var fee_c=<?=str_replace(',','',number_format($my_account['score'],2))?>;
var order_create_sta=false;
function create_order(){
	//校验 todo
	var aid=$('#addressid').val();
	if (aid>0){
		countYF();
		if (order_create_sta){
			$('#create_order_fid').submit();
		}
	}else{
		art.dialog.tips('请设置一个收货地址');
		add_address();
	}
}

$(function(){
	ini_address_func();
	countYF();
});

function show_ConsigneeAll(){
	$('#consignee-list').toggleClass('consignee-off');
	$('#consigneeItemAllClick').toggleClass('switch-off');
}
function ini_address_func(){
	if ($('#consignee-list li').length==1){
		var ei=$('#consignee-list li:first').attr('rel');
		if (ei>0){
			$('#addressid').val(ei);
			countYF();
		}
	}
	$('#consignee-list li').hover(function(){
		$(this).addClass('li-hover');
	},function(){
		$(this).removeClass('li-hover');
	}).find('.consignee-item').click(function(){
		var ei=$(this).parent().attr('rel');
		if (ei>0){
			$('#addressid').val(ei);
			countYF();
		}else{
			add_address();
		}
	});
}



function countYF(){
	var aid=$('#addressid').val();
	$('#comfirm_address_show').html('请设置一个收货地址');
	if (aid>0){
		$('#consignee-list li.item-selected').removeClass('item-selected');
		var now_address=$('#add_'+aid);
		now_address.addClass('item-selected');
		var add_str='寄送至：'+now_address.find('.addr-info').html();
		add_str+='<cite>收货人：</cite>';
		add_str+=now_address.find('.addr-name').html();
		add_str+=' ';
		add_str+=now_address.find('.addr-tel').html();
		$('#comfirm_address_show').html(add_str);
		var wu={};
		var goods=$('#order_goods_list .goods_lists h4').each(function(i,o){
			var e=$(o);
			var wu_item={};
			var ps=e.parent().find('ul li').each(function(a,b){
				var gooditem=$(b);
				var w=parseFloat(gooditem.attr('w'));
				var t=parseFloat(gooditem.attr('t'));
				var n=parseInt(gooditem.attr('n'),10);
				var fid=gooditem.attr('fid');
				if (fid>0){
					if (typeof(wu_item[fid])!='undefined'){
						wu_item[fid].w=parseFloat(wu_item[fid].w)+w;
						wu_item[fid].t=parseFloat(wu_item[fid].t)+t;
						wu_item[fid].n=parseInt(wu_item[fid].n,10)+n;
					}else{
						wu_item[fid]={'w':w,'t':t,'n':n};
					}
				}
			});
			var uid=e.attr('rel');
				uid=(!isNaN(uid))?parseInt(uid,10):0;
				if (uid>0){
					wu[uid]=wu_item;
				}
		});
		for (var wui in wu){
			for (var iix in wu[wui]){
				wu[wui][iix].w=parseFloat(wu[wui][iix].w).toFixed(2);
			}
		}
		wu=JSON.stringify(wu);
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'yf','aid':aid,'wu':wu},
			dataType:'json',
			success:function(d){
				if (d.msg){
					switch (d.msg){
						case '200':
							var fee_wu=0;
							var yf_sta=true;
							for (var uw in d.data){
								if (d.data[uw].total>0){
									$('#yf_sta_'+uw).hide();
									fee_wu+=d.data[uw].total;
									$('#yf_'+uw).html(d.data[uw].total.toFixed(2));
								}else if(d.data[uw].total<0){
									art.dialog.tips('有商品在当前地区无货，请重新设置收货地址！');
									yf_sta=false;
									$('#yf_sta_'+uw).show();
								}else{
									$('#yf_sta_'+uw).hide();
									$('#yf_'+uw).html('0.00');
								}
							}
							order_create_sta=yf_sta;
							$('#my_wu_fee').html('&yen;'+fee_wu.toFixed(2));
							need_pay_fee=fee_a;
							need_pay_fee+=fee_wu;
							if (fee_b>fee_c){
								need_pay_fee-=0;
							}else{
								need_pay_fee-=fee_b;
							}
							$('.need_pay_fee').html('&yen;'+need_pay_fee.toFixed(2));
							break;
						default:
							art.dialog.tips('请设置正确的地址');
							break;
					}
				}else{
					window.location.reload(true);
				}
			}
		});
	}
}





	function set_bill(){
		$('#bill_area').show();
	}
	$(function(){
		ini_bill_func();
	});
	var htmlstr='<a onclick="set_bill()" class="ftx-05 invoice-edit">修改</a>';
	function save_bill_ini(){
		var htmls='';
		$('#bill_area .invoice-item-selected').each(function(i,o){
			var e=$(o);
			var evn=e.attr('name');
			var len=e.attr('name').length;
		
			console.log(evn);
			if (len>3){
				var rel=e.attr('rel');
				var idstr=evn.replace('bill_','bills_');
				switch (evn){
					case 'bill_3':
						htmls+='<span class="mr10"> 普通发票（纸质）   </span>';
						break;
					case 'bill_2':
						htmls+='<span class="mr10">'+e.find('.itxt').val()+'</span>';
						break;
					case 'bill_1':
						if (rel==1){
							htmls+='<span class="mr10">明细</span>';
						}else{
							htmls='<span class="mr10">不开发票</span>';
						}
						break;
				}
				$('#'+idstr).val(rel);
			}
		});
		$('#part-inv').html(htmls+'<a onclick="set_bill()" class="ftx-05 invoice-edit">修改</a>');
		$('#bill_area').hide();
	}
	function delete_Invoice(id){
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'delbill','id':id},
			success:function(d){
				if (d=='ok'){
					get_bills();
				}else{
					window.location.reload(true);
				}
			}
		});
	}
	function ini_bill_func(){
		$('.invoice-item').click(function(){
			var e=$(this);
			e.parent().find('.invoice-item-selected').removeClass('invoice-item-selected');
			e.addClass('invoice-item-selected');
		});
	}
	function save_new_bill(){
		var new_bill_tit=$('#new_bill_tit').val();
		if ($.trim(new_bill_tit).length<1){
			layer.alert('发票抬头不能为空');
			return;
		}
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'addbill','tit':new_bill_tit},
			success:function(d){
				if(d=='title'){
					layer.alert('发票抬头不能为空');
					return;
				}else if(d.indexOf('k|')>0){
					get_bills();
				}else{
					window.location.reload(true);
				}
			}
		});
	}
	function get_bills(){
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'mybill'},
			success:function(d){
				if (d=='503'){
					window.location.reload(true);
				}else{
					$('#invoice-tit-list').html(d);
					ini_bill_func();
				}
			}
		});
	}
	function add_bill_save(){
		$('#save-invoice').show().click();
	}

	function get_quan() {

		var quan_mun = 0;
		$('.my_quan').each(function() {
			if ($(this).prop('checked')) {
				quan_mun += $(this).attr('rel');
			}
		})

		return quan_mun;
	}
</script>
<?php include T('seller_admin','footer');?>