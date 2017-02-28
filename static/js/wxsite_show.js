function nl2br (str, is_xhtml) {
 var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
 return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}

function level(n){
	window.lev=n;
	$.ajax({
		type:'post',
		url:Show_main+Gid+'.html?c=level',
		data:{'ty':n},
		async:false,
		success:function(d){
			$('.com-table-main').remove();
			$('.com-table-footer').remove();
			$('.comments-table').append(d);
			return;
		}
	});
}

$(function(){
	$('.btn-comment').click(function(){
		var urll='/'+UID+'/'+Gid+'.html?c=com_check';
		$.ajax({
		    type:'post',
		    url:urll,
		    data:{'uid':USERID},
		    async:false,
		    success:function(d){
				if(d=='ok'){
				    window.location.href='/?m=admin&a=comment';
				}else{
				    art.dialog.tips(d,3);
				}
		    }
		});
	});
	$('.add_cart_btn').hover(function(){
		$(this).addClass('add_cart_active');
	},function(){
		$(this).removeClass('add_cart_active');
	}).click(function(){
		var ef=$('input.buy-num:first');		
		var num=ef.val();
		if (num>0){
			$.ajax({
				type:'post',
				url:'/ajax.html',
				data:{'a':'addCart','id':Gid,'num':num},
				success:function(d){
					if (d=='ok'){
						centerAndShow('cart_tips');
						setTimeout(function(){
							$('#cart_tips b i').css('left','0').animate({'left':'50px'},'slow','swing');
						},400);
					}else if(d=='mok'){
						art.dialog.tips('已成功添加到购物车');
					}else{
						window.location.reload(true);
					}
				}
			});
		}else{
			art.dialog.alert('请设置一个购买数量');
		}
	});
	$('.reply-submit').click(function(){
		var val=$.trim($(this).parent().siblings('.reply-input').val());
		if (val.length<1){
			art.dialog.tips('留言内容不能为空~');
			return;
		}
		var rel=$(this).attr('rel');
		var arr=rel.split('_');
		var pid=arr[0];
		var spid=arr[1];
		$.ajax({
			type:'post',
			url:Show_main+Gid+'.html?c=com',
			data:{'pid':pid,'spid':spid,'content':val,'ud':UID},
			async:false,
			success:function(d){
				if(d=='ok'){
					art.dialog.tips('评论成功！');
					setTimeout(function(){window.location.reload(true);},1000);
				}else{
					art.dialog.tips(d,1);
				}
			}
		});
	});

	$('.ui-switchable-item').click(function(){
		$(this).siblings().removeClass('curr');
		$(this).addClass('curr');
	});

	$('.J-reply-trigger').click(function(){
		replay_func(this);
	});

	var mt = $('#good_list').offset().top;
	$(window).scroll(function(){
		var wt = $(window).scrollTop();
		if(wt>mt){
			$('#pc_fix_tab').addClass('pc_fix_tab_clc');
		}else{
			$('#pc_fix_tab').removeClass('pc_fix_tab_clc');
		}
	});
	$('#showArea ul li img').hover(function(){
		var e=$(this);
		var imgSrc=e.attr('rel');
		var imgSrcThumb=imgSrc.replace('_real','_350_350');
		$('#main_img').attr('src',imgSrcThumb).attr('rel',imgSrc);
		$('#showBigImageInner').css('background','url("'+imgSrc+'") no-repeat');
		$('#showArea ul li.hover').removeClass('hover');
		e.parent().addClass('hover');
	});
	function setBarImg(e,url){
		var x=e.offsetX-88;
		var y=e.offsetY-88;
		x=Math.min(Math.max(x,0),175);
		y=Math.min(Math.max(y,0),175);
		var bx=parseInt(x*80/35,10);
		var by=parseInt(y*80/35,10);
		$('#showAreaBar').css({'top':y+'px','left':x+'px'});
		$('#showBigImageInner').css({'top':-by+'px','left':-bx+'px'});
	}
	var mx=my=0;
	$('#main_img_area').mouseover(function(event){
		mx=event.offsetX;
		my=event.offsetY;
		$('#showAreaBar').show();
		$('#showBigImage').show();
	}).mouseout(function(event){
		$('#showAreaBar').hide();
		$('#showBigImage').hide();
	}).mousemove(function(event){
		tmpx=event.offsetX;
		tmpy=event.offsetY;
		if (Math.abs(tmpx-mx)>1||Math.abs(tmpy-my)){
			mx=tmpx;
			my=tmpy;
			setBarImg(event);
		}
	});
	$('.bar_list li.eitem').hover(function(){
		var e=$(this);
		e.addClass('hover');				
	},function(){
		var e=$(this);
		e.removeClass('hover');
	}).click(function(){
		var e=$(this);
		id=e.parent().find('li.selected').attr('rel');;
		e.parent().find('li.selected').removeClass('selected');
		e.addClass('selected');
		var relid=e.attr('rel');
		/*$.ajax({
			type:'post',
			url:Show_main+Gid+'.html?c=ajax',
			data:{'id':id,relid:relid},
			success:function(d){
				if (d=='ok'){
					window.location.href=Show_main+relid+'.html';
				}else{
					var obj=eval('('+decodeURI(d)+')'); 
					var price=obj.price;
					var dsp=obj.dsp;
					var note=obj.note;
					var num=obj.num;
					var buy=obj.buy;
					var pj=obj.pj;
					var ht=obj.ht;
					if (price){
						$('#pcc_price').html(price);
					};
					if(dsp){
						$('#pc_dsp').html(dsp);
					};
					if(note){
						$('#pc_note').html(note);
					}; 
					if(num){
						$('#pc_num').html(num);
					}; 
					if(buy){
						$('#pc_buy').html(buy);
					};
					if(pj){
						$('#pc_pj').html(pj);
					};
					if(ht){
						
						$('#pc_html').html(ht);
					};
					
				}
			}
		});*/

		if (relid>0){
			window.location.href=Show_main+relid+'.html';
		}
	});
});
document.getElementById('share_area_2015').innerHTML='<div class="bdsharebuttonbox"><span style="float:left">分享到：</span><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>';
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];