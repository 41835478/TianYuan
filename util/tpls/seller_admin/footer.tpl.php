<div class="main-im">
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$uc_config['qq']?>&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="/static/img/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		<div class="im-tel">
			<div>售前咨询热线</div>
			<div class="tel-num"><?=$uc_config['tel']?></div>
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					<div class="weixing-txt">微信扫一扫<br>访问手机版</div>
					<img class="weixing-ma" src="/static/img/weixing-ma.png">
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
<script>
$(function(){
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').show();
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
});
</script>

<?=$uc_config['kf']?>

<?=$uc_config['tongji']?>


<!--底部 开始-->
    <div class="blank25"></div>
<div class="foot15" id="footers">
          <div class="bar">
            <div class="explain">
                  <dl>
                        <dt class="ico01"></dt>
                        <dd><span>8小时低温</span>全程冷链配送</dd>
                  </dl>
                  <dl>
                        <dt class="ico02"></dt>
                        <dd><span>0时差基地直供</span>农田到餐桌</dd>
                  </dl>
                  <dl>
                        <dt class="ico03"></dt>
                        <dd><span>43项检测</span>安全无农残</dd>
                  </dl>
                  <dl>
                        <dt class="ico04"></dt>
                        <dd><span>7*24小时营业</span>全年无休</dd>
                  </dl>
                  <dl class="m0">
                        <dt class="ico05"></dt>
                      <dd><span>满99免运费</span>今日下单次日送达</dd>
                  </dl>
            </div>
      </div>
      <div class="footert">
            <dl>
                  <dt class="xs">新手指南</dt>
<?php $nws=getnews(5,5);
foreach($nws as $k=>$v) {?>
                  <dd><a href="/news_<?=$v['id']?>.html" title="<?=$v['title']?>" target="_blank"><?=$v['title']?></a></dd>
<?php }?>
            </dl>
            <dl>
                  <dt class="ps">配送方式</dt>
<?php $nws=getnews(7,5);
foreach($nws as $k=>$v) {?>
                  <dd><a href="/news_<?=$v['id']?>.html" title="<?=$v['title']?>" target="_blank"><?=$v['title']?></a></dd>
<?php }?>
            </dl>
            <dl>
                  <dt class="zf">支付方式</dt>
<?php $nws=getnews(4,5);
foreach($nws as $k=>$v) {?>
                  <dd><a href="/news_<?=$v['id']?>.html" title="<?=$v['title']?>" target="_blank"><?=$v['title']?></a></dd>
<?php }?>
            </dl>
            <dl>
                  <dt class="sh">售后服务</dt>
<?php $nws=getnews(6,5);
foreach($nws as $k=>$v) {?>
                  <dd><a href="/news_<?=$v['id']?>.html" title="<?=$v['title']?>" target="_blank"><?=$v['title']?></a></dd>
<?php }?>
            </dl>    
     </div>
     <div class="info">
           <dl>
                 <dt><img src="//image.benlailife.com/webStatic/images/tel_f3c65362.gif" width="17" height="13"/>客服热线：<?=$uc_config['tel']?>（周一至周日 8:00-20:00）</dt>
                 <dd>
                       <em><a href="/">加入我们</a></em>
                       <em><a href="/">联系我们</a></em>
                       <em><a href="/">关于我们</a></em>
                       <em><a href="/">友情链接</a></em>
                       <em><a href="/">品牌食材</a></em>
                       <em><a href="/">食品流通许可证</a></em>
                       <em class="b0"><a href="/">营业执照</a></em>
                 </dd>
                 <dd>
                       <em><a ><img src="//image.benlailife.com/webStatic/images/foot/beian_d0289dc0.png" /><?=$uc_config['police']?></a></em>
                       <em class="b0"><a href="http://www.miitbeian.gov.cn/" target="_blank"><?=$uc_config['icp']?></a></em>
                       
                 </dd>
                 <dd class="copy">&copy; 2012-2016 kingmanor.cn. All Rights Reserved. <?=$uc_config['sitename']?></dd>
                 <dd><a style="display: inline-block; position: relative; width: 102px; height: 37px;" id="urlknet" rel="nofollow"><img src="//image1.benlailife.com/Content/images/verifyseal.jpg?v=8.2.70" alt="可信网站" name="CNNIC_seal" style="left: -13px; position: absolute; border: none; width:102px;height:37px" oncontextmenu="return false;" onclick="CNNIC_change('urlknet')" ;=""></a></dd>
           </dl>
     </div>

</body>
</html>