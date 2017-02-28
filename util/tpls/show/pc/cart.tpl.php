<?php include T('seller_admin','header');?>
<link rel="stylesheet" type="text/css" href="/static/css/cart.css">
<?php if($num>0){?>
<div id="lb" class="x_margin">
	<div id="lb_a"><h3>全部商品 <span class="num_bar"><?=$num?></span></h3></div>
	<div id="lb_b">
		<label for="s_a1" class="chk"><input class="select_all" id="s_a1" checked="checked" type="checkbox"><strong>全选</strong></label>
		<ul class="lb_c">
			<li>商品</li>
		</ul>
		<ul class="lb_d">
			<li>单价</li>
			<li>数量</li>
			<li>重量</li>
			<li>小计</li>
			<li>操作</li>
		</ul>
	</div>
	<form method="get" id="form_cart_id" action="/addorder.html">
<?php $total_fee=0;foreach($cart_info as $k=>$v) {
			$url_main='/'.$k.'/'; ?>
		<div class="lb_b_a">
			<label for="uid_<?=$k?>" class="chk">
				<input id="uid_<?=$k?>" type="checkbox" checked="checked" class="uid_check" >
				<strong>
					<a href="<?=$url_main?>" title="<?=$uidarr[$k]['sitename']?>" target="_blank"><?=$uidarr[$k]['sitename']?></a>
				</strong>
			</label>
		</div>
		<ul class="uid_item" id="ps_uid_<?=$k?>" rel="<?=$k?>">
<?php $n=0;foreach($v as $kk=>$kv) {
$this_total=$kv['good']['price']*$kv['num'];
$total_fee+=$this_total;
$extra=unserialize($kv['good']['extra']);
?>
			<li rel="<?=$kv['id']?>" gid="<?=$kv['gid']?>" id="gd_<?=$kv['gid']?>" class="item_select">
				<div class="gi_thumb">
					<a href="/show/<?=$kv['good']['id']?>.html" title="<?=$kv['good']['title']?>" target="_blank">
						<img src="<?=$kv['good']['thumb']?>" alt="<?=$kv['good']['title']?>" />
					</a>
				</div>
				<div class="gi_title">
					<a href="/show/<?=$kv['good']['id']?>.html" title="<?=$kv['good']['title']?>" target="_blank"><?=$kv['good']['title']?></a>
				</div>
				<div class="gi_extra">
					<p><?=$kv['good']['price']?></p>
				</div>
				<div class="gi_num_area">
					<div class="gi_num">
						<a title="-" class="jian"><span>-</span></a>
						<input class="good_num" type="text" gid="<?=$kv['good']['id']?>" max="<?=$kv['good']['num']?>" rel="<?=$kv['good']['price']?>" value="<?=$kv['num']?>" />
						<a title="+" class="jian_c"><span>+</span></a>
					</div>
					<p class="gi_kc_sta"><?=$kv['good']['num']>100?'有货':($kv['good']['num']>0?$kv['good']['num']:'无货');?></p>
				</div>
				
				<div class="gi_price"><?=$kv['good']['weight']?> kg</div>
				<div class="this_total"><?=str_replace(',','',number_format($this_total,2))?></div>
				<div class="gi_oper">
					<a onclick="dl(<?=$kv['gid']?>);" title="点击删除此商品">删除</a>
				</div>
				<div class="chk_area"><label for="checkbox<?=$n?>" class="chk"><input id="checkbox<?=$n?>" name="gid[]" value="<?=$kv['good']['id']?>" type="checkbox" checked="checked" class="checkb" /></label></div>
			</li>
<?php $n++;}?>
		</ul>
<?php }?>
	</form>
	<div id="quanxuan">
		<div id="quanxuan_left">
			<label for="s_a2" class="chk"><input class="select_all" id="s_a2" type="checkbox" checked="checked"><strong>全选</strong></label>
			<ul>
				<li><a onclick="del(<?=$kv['gid']?>)" title="点击删除选中的商品">删除选中的商品</a></li>
			</ul>
		</div>
	    <div id="quanxuan_right">
			<p><span>共选择 <strong id="tol" class="num_bar"><?=$num?></strong> 件商品</span><span>总价格：<strong id="total_fee_id">&yen;<?=str_replace(',','',number_format($total_fee,2))?></strong></span></p>
		 </div>
		<div id="qjs"><p onclick="sub_order()">去结算</p></div>
	</div>
</div>
<script type="text/javascript">
	function sub_order(){
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=ajax',
			data:{'a':'loginsta'},
			success:function(d){
				if (d=='200'){
					$('#form_cart_id').submit();
				}else if(d=='503'){
					window.location.href="/?m=wxsite&mod=login";
				}else{
					window.location.reload(true);
				}
			}
		});
	}
	function update_total(){
		var num=0;
		var total=0;
		$('.item_select').each(function(i,o){
			var e=$(this);
			var ci=e.find('input.good_num');
			var num_this=Math.max(1,parseInt(ci.val(),10));
			num+=num_this;
			var fee_this=parseFloat(ci.attr('rel'));
			var total_this=(fee_this*num_this);
			e.find('.this_total').html(total_this.toFixed(2));
			total+=total_this;
		});
		$('.num_bar').html(num);
		$('#total_fee_id').html('&yen;'+total.toFixed(2));
	}
	function up_gid_num(gid,num){
		$.ajax({
			type:'post',
			url:'/ajax.html',
			data:{'a':'setCart','id':gid,'num':num},
			success:function(d){
				if (d=='ok'){
				}else{
					window.location.reload(true);
				}
			}
		});
	}
	$(function(){
		$('input.checkb').click(function(){
			if(this.checked){
				$(this).parent().parent().parent().addClass('item_select');
			}else{
				$(this).parent().parent().parent().removeClass('item_select');
				var uid=$(this).parent().parent().parent().parent().attr('rel');
				$('input#uid_'+uid).attr('checked',false);
				$('input.select_all').attr('checked',false);
			}
			update_total();
		});
		$('input.select_all').click(function(){
			if(this.checked){
				$('input[type="checkbox"]').attr('checked',true);
				$('.uid_item li').addClass('item_select');
			}else{
				$('input[type="checkbox"]').attr('checked',false);
				$('.uid_item li').removeClass('item_select');
			}
			update_total();
		});

		$('input.uid_check').click(function(){
			var id=$(this).attr('id');
			if(this.checked){
				$('#ps_'+id).find('.checkb').each(function(){
					$(this).attr("checked","checked");
					$(this).parent().parent().parent().addClass('item_select');
				});
			}else{
				$('#ps_'+id).find('.checkb').each(function(){
					$(this).removeAttr("checked");
					$(this).parent().parent().parent().removeClass('item_select');
				});
			}
			update_total();
		});

		$('.jian_c').click(function(){
			var ipt=$(this).parent().find('.good_num');
			var n=parseInt(ipt.val());
			var max=ipt.attr("max");
			if (n<max){
				up_gid_num(ipt.attr('gid'),n+1);
				ipt.val(n+1);
			}else{
				layer.alert('超出商品数量');
				return;
			}
			update_total();
		});

		$('.jian').click(function(){
			var ipt=$(this).parent().find('.good_num');
			var n=parseInt(ipt.val());
			if (n<=1){
				//layer.alert('商品数量不能为空');
				return;
			}
			up_gid_num(ipt.attr('gid'),n-1);
			ipt.val(n-1);
			update_total();
		});

		$('.good_num').blur(function(){
			var ipt=$(this);
			var n=parseInt(ipt.val());
			if (n<=1){
				//layer.alert('商品数量不能为空');
				n=1;
			}
			up_gid_num(ipt.attr('gid'),n);
			ipt.val(n);
			update_total();
		});

	});
	
	function del(){
		var strs='';
		$('.uid_item li.item_select').each(function(i,o){
			strs+=$(o).attr("gid")+',';
		});
		if (strs.length<1){
			layer.alert('请选择一件商品');
			return false;
		}
		art.dialog.confirm('你确定要删除这条消息吗？', function (){
			$.ajax({
				type:'post',
				url:'/cart.html?c=del',
				data:{'strs':strs},
				success:function(d){
					if(d=='ok'){
						layer.alert('删除成功');
						setTimeout(function(){window.location.reload(true);},1000);
					}else{
						layer.alert(d,1);
					}
				}
			});
		},function(){});
	}
	function caredel(){
		var strs='';
		$('.uid_item li.item_select').each(function(i,o){
			strs+=$(o).attr("gid")+',';
		});
		if (strs.length<1){
			layer.alert('请选择一件商品');
			return false;
		}
		art.dialog.confirm('<b style="font-size:16px;line-height:22px;color:#ff6c00">移到关注</b><br/>移动后选中商品将不在购物车中显示。', function (){
			$.ajax({
				type:'post',
				url:'/cart.html?c=delcare',
				data:{'strs':strs},
				success:function(d){
					if(d=='ok'){
						layer.alert('移动成功');
						setTimeout(function(){window.location.reload(true);},1000);
					}else if(d=='503'){
						show_area('/login.html','登录通行证',470,1,310);
					}else{
						layer.alert(d,1);
					}
				}
			});
		},function(){});
	}
	function dl(n){
		layer.confirm('你确定要删除这个商品吗？', function (){
			$.ajax({
				type:'post',
				url:'/cart.html?c=dl',
				data:{'id':n},
				success:function(d){
					if(d=='ok'){
						layer.alert('删除成功');
						$('#gd_'+n).remove();
						update_total();
					}else{
						layer.alert(d,1);
					}
				}
			});
		},function(){});
	}
</script>
<?php }else{?>
	<div id="cart_empty" class="x_margin">
		<div id="cart_tips_area">
			<h3>购物车空空的哦~，去看看心仪的商品吧~</h3>
			<p><?php if(!$_userid){?><span><a href="/login.html" style="color:#fff">登录</a><?php }?></span><a href="/">去购物&gt;&gt;</a></p>
		</div>
	</div>
<?php }?>

<?php 
$ad_47=getads(47,2);
?>
	<div class="ad_bottom">
		<div class="w595 fl"><a href="<?=$ad_47[0]['link']?>"><img src="<?=$ad_47[0]['img']?>" width="100%" alt="<?=$ad_47[0]['title']?>" /></a></div>
		<div class="w595 fl"><a href="<?=$ad_47[1]['link']?>"><img src="<?=$ad_47[1]['img']?>" width="100%" alt="<?=$ad_47[1]['title']?>" /></a></div>
	</div>
</div>
<?php include T('seller_admin','footer');?>