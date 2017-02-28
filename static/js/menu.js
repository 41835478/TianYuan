    function switch_menu(item, sty) {
    	var ele = $(item);
    	var rel = ele.attr('rel');
    	if (rel == 1) { //展开
    		switch (sty) {
    			case 1:
    				var size = ele.find('ul li').length - 1;
    				var reg = 90;
    				var r = 120;
    				ele.find('ul li').each(function(i, e) {
    					var nr = (90 - reg * (size - i) / size) * (2 * Math.PI / 360);
    					var sin = Math.sin(nr);
    					var cos = Math.cos(nr);
    					var x = r * sin;
    					var y = r * cos;
    					$(e).animate({
    						'left': x + 'px',
    						'bottom': y + 'px'
    					}, 300, 'swing');
    				});
    				ele.find('b').rotate({
    					duration: 400,
    					angle: 0,
    					animateTo: 45
    				});
    				break;
    			case 2:
    				var size = ele.find('ul li').length - 1;
    				var reg = 90;
    				var r = 120;
    				ele.find('ul li').each(function(i, e) {
    					var nr = (90 - reg * (size - i) / size) * (2 * Math.PI / 360);
    					var sin = Math.sin(nr);
    					var cos = Math.cos(nr);
    					var x = r * sin;
    					var y = r * cos;
    					$(e).animate({
    						'right': x + 'px',
    						'bottom': y + 'px'
    					}, 300, 'swing');
    				});
    				ele.find('b').rotate({
    					duration: 400,
    					angle: 0,
    					animateTo: -45
    				});
    				break;
    			case 3:
    				var size = ele.find('ul li').length;
    				var reg = 30;
    				var r = 400;
    				ele.find('ul li').each(function(i, e) {
    					var nr = (90 - reg * (size - i) / size) * (2 * Math.PI / 360);
    					var sin = Math.sin(nr);
    					var cos = Math.cos(nr);
    					var x = r * (1 - sin);
    					var y = r * cos;
    					$(e).animate({
    						'left': x + 'px',
    						'bottom': y + 'px'
    					}, 300, 'swing');
    				});
    				break;
    			case 4:
    				var size = ele.find('ul li').length;
    				var reg = 30;
    				var r = 400;
    				ele.find('ul li').each(function(i, e) {
    					var nr = (90 - reg * (size - i) / size) * (2 * Math.PI / 360);
    					var sin = Math.sin(nr);
    					var cos = Math.cos(nr);
    					var x = r * (1 - sin);
    					var y = r * cos;
    					$(e).animate({
    						'right': x + 'px',
    						'bottom': y + 'px'
    					}, 300, 'swing');
    				});
    				break;
    		}
    		ele.attr('rel', 2);
    		ele.find('ul').addClass('show_menu_text');
    	} else { //收起
    		switch (sty) {
    			case 1:
    				ele.find('ul li').animate({
    					'left': '0',
    					'bottom': '0'
    				}, 300, 'swing');
    				ele.find('b').rotate({
    					duration: 400,
    					angle: 45,
    					animateTo: 0
    				});
    				break;
    			case 2:
    				ele.find('ul li').animate({
    					'right': '0',
    					'bottom': '0'
    				}, 300, 'swing');
    				ele.find('b').rotate({
    					duration: 400,
    					angle: -45,
    					animateTo: 0
    				});
    				break;
    			case 3:
    				ele.find('ul li').animate({
    					'left': '0',
    					'bottom': '0'
    				}, 300, 'swing');
    				break;
    			case 4:
    				ele.find('ul li').animate({
    					'right': '0',
    					'bottom': '0'
    				}, 300, 'swing');
    				break;
    		}
    		ele.attr('rel', 1);
    		ele.find('ul').removeClass('show_menu_text');
    	}
    }