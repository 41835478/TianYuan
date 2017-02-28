// JavaScript Document
//滚动图片插件
$(function() {
    var component_slider_timer = null;

    function component_slider_play() {
        component_slider_timer = window.setInterval(function() {
            var slider_index = $('.component-index-slider .mt-slider-trigger-container li.mt-slider-current-trigger').index();
            if (slider_index == $('.component-index-slider .mt-slider-trigger-container li').size() - 1) {
                slider_index = 0;
            } else {
                slider_index++;
            }
            $('.component-index-slider .content li').eq(slider_index).css({
                'opacity': '0',
                'display': 'block'
            }).animate({
                opacity: 1
            }, 600).siblings().hide();
            $('.component-index-slider .mt-slider-trigger-container li').eq(slider_index).addClass('mt-slider-current-trigger').siblings().removeClass('mt-slider-current-trigger');
            /*
                        var slider_index = $('.component-index-slider .mt-slider-trigger-container li.mt-slider-current-trigger').index();
                        if (slider_index == $('.component-index-slider .mt-slider-trigger-container li').size() - 1) {
                            slider_index = 0;
                        } else {
                            slider_index++;
                        }
            			
                        $('.component-index-slider .content li').eq(slider_index).css({
                            'opacity': '0',
                            'display': 'block'
                        }).animate({
                            opacity: 1
                        }, 600).siblings().hide();
                        $('.component-index-slider .mt-slider-trigger-container li').eq(slider_index).addClass('mt-slider-current-trigger').siblings().removeClass('mt-slider-current-trigger');
            */
        }, 3400);
    }
    component_slider_play();
    $('.component-index-slider').hover(function() {
        window.clearInterval(component_slider_timer);
        $('.banner_content_main .component-index-slider .mt-slider-previous,.banner_content_main  .component-index-slider .mt-slider-next').css({
            'opacity': '0.4'
        }).show();
    }, function() {
        window.clearInterval(component_slider_timer);
        component_slider_play();
        $('.banner_content_main .component-index-slider .mt-slider-previous,.banner_content_main  .component-index-slider .mt-slider-next').css({
            'opacity': '0'
        }).hide();
    });
    $('.banner_content_main .component-index-slider .mt-slider-previous,.banner_content_main .component-index-slider .mt-slider-next').hover(function() {
        $(this).css({
            'opacity': '0.7'
        });
    });
    $('.component-index-slider .mt-slider-trigger-container li').click(function() {
        if ($(this).hasClass('mt-slider-current-trigger')) {
            return false;
        }
        var slider_index = $(this).index();
        $('.component-index-slider .content li').eq(slider_index).show().siblings().hide();
        $(this).addClass('mt-slider-current-trigger').siblings().removeClass('mt-slider-current-trigger');
    });
    $('.component-index-slider .mt-slider-previous').click(function() {
        var slider_index = $('.component-index-slider .mt-slider-trigger-container li.mt-slider-current-trigger').index() - 1;
        if (slider_index < 0) {
            slider_index = $('.component-index-slider .mt-slider-trigger-container li').size() - 1;
        }
        $('.component-index-slider .content li').eq(slider_index).show().siblings().hide();
        $('.component-index-slider .mt-slider-trigger-container li').eq(slider_index).addClass('mt-slider-current-trigger').siblings().removeClass('mt-slider-current-trigger');
    });
    $('.component-index-slider .mt-slider-next').click(function() {
        var slider_index = $('.component-index-slider .mt-slider-trigger-container li.mt-slider-current-trigger').index() + 1;
        if (slider_index == $('.component-index-slider .mt-slider-trigger-container li').size()) {
            slider_index = 0;
        }
        $('.component-index-slider .content li').eq(slider_index).show().siblings().hide();
        $('.component-index-slider .mt-slider-trigger-container li').eq(slider_index).addClass('mt-slider-current-trigger').siblings().removeClass('mt-slider-current-trigger');
    });
});