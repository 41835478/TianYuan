
		var touchEvents = {
			touchstart: "touchstart",
			touchmove: "touchmove",
			touchend: "touchend",
			/**
			 * @desc:判断是否pc设备，若是pc，需要更改touch事件为鼠标事件，否则默认触摸事件
			 */
			initTouchEvents: function () {
				if (isPC()) {
					this.touchstart = "mousedown";
					this.touchmove = "mousemove";
					this.touchend = "mouseup";
				}
			}
		};
		function isPC(){
			return !(navigator.userAgent.match(/(iPhone|iPod|Android|ios|SymbianOS)/i));
		}
		var animate_run=false;
		var mousedown=false;
		var move_sta='left';
		var move_e,top_e;
		function get_top_e(){
			return $('#pageonex ul li:first');
		}
		function get_btm_e(){
			return $('#pageonex ul li:last');
		}
		function move_start(event) {
			mousedown=false;
			if (!animate_run){
				return;
			}
			if (event.type == "touchstart") {
				var touch = event.targetTouches[0];
				start_top = touch.pageY
				start_left = touch.pageX
			}else{
				start_top =  event.y || event.pageY;
				start_left = event.x || event.pageX;
				mousedown = true;
			}
			top_e=get_top_e();
			//top_e.fadeTo(10,0.8);
		}
		function move_fun(event) {
			if (!animate_run){
				return;
			}
			event.preventDefault();
			event.stopPropagation();	
			if (event.type == "touchmove") {
				var touch = event.targetTouches[0];
				var left = parseFloat(touch.pageX - start_left);
			} else { 
				if(mousedown){
					moveP = event.x || event.pageX;
					var left=parseFloat(moveP-start_left);
				}else{
					var left=0;
					return;
				}
			}
			if (left<60&&left>-60){
				top_e.css('margin-left',left+'px');
			}
			if (left>0){
				move_e=get_btm_e();
				move_sta='left';
			}else if(left<0){
				move_e=get_top_e();
				move_sta='right';
			}
		}
		function move_end(event){
			if (!animate_run){
				return;
			}
			if (move_sta=='right'){
				$('#pageonex ul').attr('class','am_left');
				top_e.animate({'margin-left':'-60px'},'fast','swing',function(){
					move_e.remove().appendTo('#pageonex ul').css({'margin-left':'0'});
					top_e.css('margin-left','0');
					top_e.fadeTo(200,1);
				});
			}else{
				$('#pageonex ul').attr('class','am_right');
				top_e.animate({'margin-left':'60px'},'fast','swing',function(){
					move_e.remove().prependTo('#pageonex ul').css({'margin-left':'0'});
					top_e.css('margin-left','0');
					//top_e.fadeTo(200,1);
				});
			}
			mousedown=false;
			event&&event.stopPropagation();
		}
		function ad_banner(){
			top_e=get_top_e();
			move_e=get_top_e();
			move_sta='right';
			move_end();
		}