function AddFavorite(sURL, sTitle){ try{ window.external.addFavorite(sURL, sTitle);}catch(e){try{ window.sidebar.addPanel(sTitle, sURL, "");}catch(e){alert("喜庆盒提醒您，请使用Ctrl+D收藏");}}};
function centerAndShow(e){
	var o = $('#'+e),m=$('#mask');
	m.css('opacity','0.3').css('height',$(document.body).height()+'px').css('width',$(document.body).width()+'px').show();
	m.unbind();
	m.click(function(){
	  hh(e);
	});
	o.css({
		position:'absolute',
		zIndex : 9999,
		left: ($(window).width() - o.outerWidth())/2,
		top: ($(window).height() - o.outerHeight())/2 + $(window).scrollTop()}).fadeIn(500);
}

function hh(o){
	$('#mask').removeAttr('onclick');
	$('#'+o).fadeOut();
	$('#mask').fadeOut();
}
function gotopc(url,i){
	window.location.href=url;
	$('.pc_detail_tab ul li.selected').removeClass('selected');
	$(i).addClass('selected');
}
var setAmount={}
setAmount.add=function(idstr,max_num){
	var e=$(idstr);
	var ev=parseInt(e.first().val(),10);
	if (ev==max_num){
		return false;
	}
	ev=Math.max(1,ev);
	ev+=1;
	e.val(ev);
};
setAmount.reduce=function(idstr){
	var e=$(idstr);
	if (e.length>1){
		var ev=parseInt(e.first().val(),10);
	}else{
		var ev=parseInt(e.val(),10);
	}
	ev-=1;
	ev=Math.max(1,ev);
	e.val(ev);
};
setAmount.modify=function(idstr){
	var e=$(idstr);
	var ev=parseInt(e.val(),10);
	if (typeof(ev)!='Number'){
		ev=1;
	}
	ev=Math.max(1,ev);
	e.val(ev);
};