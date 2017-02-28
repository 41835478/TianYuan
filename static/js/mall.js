function fav_shop(id) {
	$.ajax({
		type: 'post',
		url: '/ajax.html?a=fav',
		data: {
			'dataid': id,
			'type': 2
		},
		success: function(r) {
			alert(r);
			setTimeout(function() {
				window.location.reload(true);
			}, 1200);
		}
	});
}

function fav(id) {
	$.ajax({
		type: 'post',
		url: '/ajax.html?a=fav',
		data: {
			'dataid': id,
			'type': 1
		},
		success: function(r) {
			alert(r);
			setTimeout(function() {
				window.location.reload(true);
			}, 1200);
		}
	});
}
var setAmount = {}
setAmount.add = function(idstr, max_num) {
	var e = $(idstr);
	var ev = parseInt(e.first().val(), 10);
	if (ev == max_num) {
		return false;
	}
	ev = Math.max(1, ev);
	ev += 1;
	e.val(ev);
};
setAmount.reduce = function(idstr) {
	var e = $(idstr);
	if (e.length > 1) {
		var ev = parseInt(e.first().val(), 10);
	} else {
		var ev = parseInt(e.val(), 10);
	}
	ev -= 1;
	ev = Math.max(1, ev);
	e.val(ev);
};
setAmount.modify = function(idstr) {
	var e = $(idstr);
	var ev = parseInt(e.val(), 10);
	if (typeof(ev) != 'Number') {
		ev = 1;
	}
	ev = Math.max(1, ev);
	e.val(ev);
};
$(function() {
	$('#showArea ul li img').hover(function() {
		var e = $(this);
		var imgSrc = e.attr('rel');
		var imgSrcThumb = imgSrc.replace('_real', '_350_350');
		$('#main_img').attr('src', imgSrcThumb).attr('rel', imgSrc);
		$('#showBigImageInner').css('background', 'url("' + imgSrc + '") no-repeat');
		$('#showArea ul li.hover').removeClass('hover');
		e.parent().addClass('hover');
	});
});

function setBarImg(e, url) {
	var x = e.offsetX - 88;
	var y = e.offsetY - 88;
	x = Math.min(Math.max(x, 0), 175);
	y = Math.min(Math.max(y, 0), 175);
	var bx = parseInt(x * 80 / 35, 10);
	var by = parseInt(y * 80 / 35, 10);
	$('#showAreaBar').css({
		'top': y + 'px',
		'left': x + 'px'
	});
	$('#showBigImageInner').css({
		'top': -by + 'px',
		'left': -bx + 'px'
	});
}
var mx = my = 0;
$('#main_img_area').mouseover(function(event) {
	mx = event.offsetX;
	my = event.offsetY;
	$('#showAreaBar').show();
	$('#showBigImage').show();
}).mouseout(function(event) {
	$('#showAreaBar').hide();
	$('#showBigImage').hide();
}).mousemove(function(event) {
	tmpx = event.offsetX;
	tmpy = event.offsetY;
	if (Math.abs(tmpx - mx) > 1 || Math.abs(tmpy - my)) {
		mx = tmpx;
		my = tmpy;
		setBarImg(event);
	}
});

function centerAndShow(e) {
	var o = $('#' + e),
		m = $('#mask');
	m.css('opacity', '0.3').css('height', $(document.body).height() + 'px').css('width', $(document.body).width() + 'px').show();
	m.unbind();
	m.click(function() {
		hh(e);
	});
	o.css({
		position: 'absolute',
		zIndex: 9999,
		left: ($(window).width() - o.outerWidth()) / 2,
		top: ($(window).height() - o.outerHeight()) / 2 + $(window).scrollTop()
	}).fadeIn(500);
}

function hh(o) {
	$('#mask').removeAttr('onclick');
	$('#' + o).fadeOut();
	$('#mask').fadeOut();
}

function level(n) {
	window.lev = n;
	$.ajax({
		type: 'post',
		url: '/show/' + Gid + '.html?c=level',
		data: {
			'ty': n
		},
		async: false,
		success: function(d) {
			$('.com-table-main').remove();
			$('.com-table-footer').remove();
			$('.comments-table').append(d);
			return;
		}
	});
}