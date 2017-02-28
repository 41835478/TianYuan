<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{cursor:pointer;text-decoration:none;}
	div,p,a,table,textarea,form,input,img,ul,li,dl,dt,dd,h1,h2,h3,h4{margin:0;padding:0;font-size: 18px;}
	.head{background-color: #fff;}
	.addorder-base{float: left;width: 94%;margin-left: 3%;border-radius: 5px;background-color: #ffffff;min-height: 100px;margin-top: 15px;}
	.address-info{float:left;margin:10px 10px 10px 10px;width: 80%;}
	.address-info p{color: #6A6A6A;margin-bottom: 10px;margin-top: 10px;}
	.can-edit{float:left;height: 35px;width: 10%;text-align: right;margin-top: 10px;}
	.can-edit {color: #ABD13E;}
	.yh-info-title{float: left;color: #ABD13E;margin-left: 10px;}
	.yh-info-content{float: left;}
	.yh-info{border-bottom: 1px solid #E6E6E6;height: 60px;line-height: 60px;width: 94%;margin-left: 3%;}
	.yh-info img{width: 50px;float: right;margin-top: 15px;margin-right: 10px;}
	.score{color: #FF8F02;}
	.border-bottom{border-bottom:1px solid #E6E6E6;width: 94%;}
	.title{color: #333333;}
	.yh-list-info{float:left;min-height: 50px;line-height:50px;width: 90%;background-color: #F5F5F5;padding-left: 10%;display: none;}
	.yh-list-info input{width: 70px;border: none;text-align: center;}
	.quan-list{float: left;width: 100%;height: 50px;line-height: 50px;}
	.submit{width: 100%;height: 50px;background-color: #FF9000;text-align: center;line-height: 50px;color: #ffffff;position: fixed;bottom: 0;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">确认订单</div>
			<div class="cart-edit" style="float:right;margin-right:15px;font-size:18px;"></div>
		</div>
		<div class="addorder-base">
<?php 
$addressid=0;
if(!empty($my_address)){
$k=1;

if (count($my_address > 1)) {
	$tmp_address[0] = array_shift($my_address);
	$my_address = $tmp_address;
}
foreach($my_address as $kv) {
$address=unserialize($kv['address']);
$area_str=getFullAddress($all_area,$address['areaid'],' ');
if($k<2){
$addressid=$kv['id'];

}?>
	<form method="post" id="create_order_fid" action="/addorder.html">
			<input type="hidden" name="a" value="create_order" />
			<div class="address-info">
				<h4>收货地址</h4>
				<p><?=$address['linkman']?> <span><?=$address['phone']?></span></p>
				<p><?=$area_str?></p>
				<p><?=$address['address']?></p>
			</div>
			<div class="can-edit">
				<a href="address.html?c=list">></a>
			</div>
			<input type="hidden" name="addressid" id="addressid" value="<?=$addressid?>" />
<?php } }?>
		</div>
		<div class="addorder-base">
			<div class="address-info yh-info">
				<h4 class="yh-info-title">使用积分</h4>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">(可用<span class="score canuse-score"><?=$user['score']?></span>分)</p>
				<img class="syyh syjf" src='/static/img/wap/un-choice.png'>
			</div>
			<div class="yh-list-info">
				使用<input type="text" name="my_score" value="">分
			</div>
			<div class="address-info yh-info">
				<h4 class="yh-info-title">使用优惠券</h4>
				<?php $myquan=$db->getAll('select * from `web_user_quan` where userid='.$_userid);?>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">(可用<span class="score"><?php echo count($myquan); ?></span>张)</p>
				<img class="syyh syyhq" src='/static/img/wap/un-choice.png'>
			</div>
			<div class="yh-list-info">
			<?php 
			foreach ($myquan as $q => $s) {
			$quan=$db->get_One('select * from `web_quan` where id='.$s['quanid']);
			?>
				<div class="quan-list">
					<input type="checkbox" name="quanid" value="<?=$s['quanid']?>" rel="<?=$quan['fee']?>">满<?=$quan['beyond']?>减<span style="color:red;"><?=$quan['fee']?></span>元
				</div>
			<?php }?>
			</div>
		</div>
		<!--<div class="addorder-base">
			<div class="address-info yh-info">
				<h4 class="">支付方式</h4>
			</div>
			<div class="address-info yh-info">
				<h4 class="yh-info-title"><img src="/static/img/wap/zfb_logo.png" style="margin-top:0px;"></h4>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">支付宝支付</p>
				<img class="zf-type zf-checked" style="width:25px;" src='/static/img/wap/checked.png'>
				<input type="checkbox" name="zf-type" value="zfb" checked style="display:none;">
			</div>
			<div class="address-info yh-info">
				<h4 class="yh-info-title"><img src="/static/img/wap/wx_logo.png" style="margin-top:0px;"></h4>
				<p class="yh-info-content" style="margin:0;margin-left:20px;">微信支付</p>
				<img class="zf-type" style="width:25px;" src='/static/img/wap/zf-un-checked.png'>
				<input type="checkbox" name="zf-type" value="wx" style="display:none;">
			</div>
		</div>-->
		<div class="addorder-base">
			<div class="address-info">
				<h4 class="">商品清单</h4>
			</div>
		<?php $total_fee=0;$num=0;foreach($cart_info as $k=>$v) {$url_main='/'.$k.'/';?>
		<?php $n=0;$this_weight=$this_zc=0.0;
	foreach($v as $kk=>$kv) {
$num+=$kv['num'];
$this_total=$kv['good']['price']*$kv['num'];
$url_this=$url_main.$kv['good']['id'].'.html';
$total_fee+=$this_total;
$this_weight+=$kv['good']['weight']*$kv['num'];
$this_zc+=$kv['good']['zc']*$kv['num'];
$extra=unserialize($kv['good']['extra']);?>
			<div class="address-info border-bottom">
				<p class="title goods_lists">
					<span class="yf" style="margin-left:2%;margin-right:30%;" rel="<?=$k?>">共<?=$num?>件商品</span>
					<span style="margin-right:2%;">商品金额 &yen;<?=str_replace(',','',number_format($total_fee,2))?></span>
					<input type="hidden" name="gid[]" value="<?=$kv['good']['id']?>" w="<?=($kv['good']['weight']*$kv['num'])?>" t="<?=($kv['good']['ms']*$kv['num'])?>" n="<?=$kv['num']?>" fid="<?=$kv['good']['flvid']?>">
				</p>
				<p>
					<?=$kv['good']['title']?> <?=$kv['good']['tag_name']?><?php if(!empty($all_extra_rel)){foreach($all_extra_rel[$kv['good']['spid']] as $ke=>$ve) {if(isset($extra[$ve['id']])){echo ' '.implode('',$extra[$ve['id']]);}}}?>
				</p>
			</div>
			<?php $n++;}?>
		<?php }?>
		</div>
		<div class="addorder-base">
			<div class="address-info">
				<h4 class="">发票</h4>
			</div>
			<div class="address-info border-bottom">
				<p class="title">
					<span style="float:left;margin-left:10px;">电子发票</span>
				</p>
				<div class="can-edit" style="float:right;">
					<a>></a>
				</div>
			</div>
		</div>
		<div class="addorder-base">
			<div class="address-info">
				<h4 class="">应付金额</h4>
			</div>
			<div class="address-info border-bottom">
				<p class="title">
					<span style="float:left;margin-left:10px;">优惠金额</span>
					<span style="float:right;margin-right:10px;">&yen;<span class="discount">0.00</span></span>
				</p>
			</div>
			<div class="address-info border-bottom">
				<p class="title">
					<span style="float:left;margin-left:10px;">快递金额</span>
					<span style="float:right;margin-right:10px;" id="my_wu_fee" rel="">&yen;<?=$total_trans_fee?></span>
				</p>
			</div>
			<div class="address-info border-bottom">
				<p class="title">
					<span style="float:left;margin-left:10px;">商品金额</span>
					<span style="float:right;margin-right:10px;">&yen;<span class="total"><?=str_replace(',','',number_format(($total_fee+$total_trans_fee),2))?></span></span>
				</p>
			</div>
		</div>
	</form>
		<div style="height:50px;float:left;width:50px;"></div>
		<div class="submit" onclick="create_order()">提交订单</div>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	ini_address_func();
	countYF();

	var total_trans_fee = $('#my_wu_fee').attr('rel');
	var totals = <?=$total_fee?>;
	var total = totals + total_trans_fee;
	var canuse_score = <?=$user['score']?>;

	$("input[name='my_score']").bind("keyup",function() {

		if ($(this).val() > canuse_score) {
			$(this).val(canuse_score);
		}
		getTotal();
	});

	function getTotal() {

		var quan = 0;
		var score = 0;
		var total_fee = total;

		if ($('.syjf').hasClass('checked')) {
			score = $("input[name='my_score']").val() / 100;
		}

		if ($('.syyhq').hasClass('checked')) {

			$('.quan-list input').each(function() {
				if ($(this).prop('checked')) {
					quan = parseInt($(this).attr('rel'));
				}
			});
		}

		var discount = (quan + score).toFixed(2);
		var total_fee = (total_fee - discount).toFixed(2);

		$('.discount').text(discount);
		$('.total').text(total_fee);

	}

	$('.quan-list input').click(function() {
		$(this).parents('.quan-list').siblings('.quan-list').each(function() {
			if ($(this).find('input').prop('checked')) {
				$(this).find('input').prop('checked', false);
			}
		})

		getTotal();
	});

	$('.syyh').click(function() {
		if ($(this).hasClass('checked')) {
			$(this).attr('src', '/static/img/wap/un-choice.png');
			$(this).removeClass('checked');
			$(this).parents('.yh-info').next().hide();

			if ($(this).hasClass('syyhq')) {
				$("input[name='quanid']").each(function() {
					$(this).prop('checked', false);
					getTotal();
				});
			}
		} else {
			$(this).attr('src', '/static/img/wap/choice.png');
			$(this).addClass('checked');
			$(this).parents('.yh-info').next().show();
		}
	});

	$('.zf-type').click(function() {

		$('.zf-type').removeClass('zf-checked').attr('src', '/static/img/wap/zf-un-checked.png').next().prop('checked', false);

		if ($(this).hasClass('zf-checked')) {
			$(this).attr('src', '/static/img/wap/zf-un-checked.png');
			$(this).removeClass('zf-checked');
			$(this).next().prop('checked', false);
		} else {
			$(this).attr('src', '/static/img/wap/checked.png');
			$(this).addClass('zf-checked');
			$(this).next().prop('checked', true);
		}
	});

	function create_order(){
		//校验 todo
		var aid=$('#addressid').val();
		var zf_type = '';
		/*$('input[name="zf-type"]').each(function() {
			if ($(this).prop('checked')) {
				zf_type = $(this).val();
			}
		});

		if (!zf_type) {
			layer.msg('请选择支付方式');
			return false;
		}*/

		if (aid>0){
			$('#create_order_fid').submit();
		}else{
			layer.alert('请设置一个收货地址');
			add_address();
		}
	}

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
		var goods=$('.goods_lists .yf').each(function(i,o){
			var e=$(o);
			var wu_item={};
			console.info(e.html());
			var ps=e.parent().find('input').each(function(a,b){
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
		console.info(wu);
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
									layer.msg('有商品在当前地区无货，请重新设置收货地址！');
									yf_sta=false;
									$('#yf_sta_'+uw).show();
								}else{
									$('#yf_sta_'+uw).hide();
									$('#yf_'+uw).html('0.00');
								}
							}

							order_create_sta=yf_sta;console.info(order_create_sta);
							$('#my_wu_fee').html('&yen;'+fee_wu.toFixed(2));
							$('#my_wu_fee').attr('rel', fee_wu.toFixed(2));
							getTotal();
							break;
						default:
							layer.msg('请设置正确的地址');
							break;
					}
				}else{
					window.location.reload(true);
				}
			}
		});
	}
}

</script>