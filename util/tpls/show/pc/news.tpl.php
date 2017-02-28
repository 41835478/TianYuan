<?php include T('seller_admin','header');?>
<style type="text/css">
.wrapper {
    width: 1200px;
    margin: auto;
}
.right {
    float: right !important;
}
.left {
    float: left !important;
}
.nch-breadcrumb-layout { text-align: center;}
.nch-breadcrumb { font-size: 0; *word-spacing:-1px/*IE6ã€7*/; text-align: left; height: 20px; padding: 15px 0; margin: 0 auto;}
.nch-breadcrumb span { font-size: 12px; line-height: 20px; color: #999; letter-spacing: normal; word-spacing: normal; display: inline-block;*display: inline/* IE6,7*/; height: 20px; zoom: 1;}
.nch-breadcrumb i { font-size: 14px; color: #AAA; margin-right: 4px;}
.nch-breadcrumb span.arrow { font-family: "å®‹ä½“"; line-height: 20px; color: #AAA; margin: 0 6px;}
.nch-breadcrumb a { color: #777; display: block; }
.nch-breadcrumb a:hover { color: #ec5151;}
.nch-container{ overflow:hidden;}
.nch-container .left{ width:230px;}
.nch-module{ margin-bottom:15px;}
.nch-module .title{ height:36px; width:100%; line-height:36px; color:#fff; background-color:#f08c24; font-size:18px;font-family: "microsoft yahei";}
.nch-module .title h3{ padding-left:33px;font-size:18px;font-family: "microsoft yahei";color:#fff}
.nch-module .content{ background-color:#fff;}
.nch-module .content li{ margin-top:1px;}
.nch-module .content li .nch_art_tit{ display:block; padding-left:35px; font-size:14px;font-family: "microsoft yahei"; position:relative; background:#efefef; height:36px; line-height:36px; cursor:pointer; width:195px; overflow:hidden;white-space: nowrap;text-overflow: ellipsis;}
.nch-module .content li .nch_art_tit i{ width:10px; height:10px; position:absolute; background-position: -585px -268px; right:30px; top:12px;}
.nch-module .content li dd{ height:36px; line-height:36px; background-color:#f7f8f8; margin-top:1px; display:none;}
.nch-module .content li dd a{ display:block; font-size:14px; padding-left:50px;}
.nch-module .content li dd.curr a{ color:#ec5051;}
.nch-module .content li.hover dd{ display:block;}
.nch-module .content li .sel{background-color:#009237;}
.nch-module .content li:hover{background-color:#009237;}
.nch-module .content li  a .sel{color:#fff}
.nch-container .right{ width:924px;}
.nch-article-con{ overflow:hidden; margin-bottom:20px;}
.nch-article-con .title{ background:#f7f8f8; text-align:center; padding:36px 0;}
.nch-article-con .title h1{ font-size:24px;font-family: "microsoft yahei"; color:#333; font-weight:normal;height: 30px;line-height: 30px;}
.nch-article-con .title h2{ line-height:25px; color:#999;}
.nch-article-con .default{ min-height:300px; margin-bottom:20px; overflow:hidden;}
.nch-article-con .default img,.nch-article-con img{ float:none;}
.nch-article-con .more_article{ float:right; text-align:left;}

.nch-article-con .title-bar{ margin-bottom:20px;}
.nch-article-con .title-bar h3{ font-size:18px; color:#009237;}
.nch-article-list li{ height:38px; line-height:38px; border-bottom:1px dashed #dcdcdc;}
.nch-article-list li i{font-size:14px;}
.nch-article-list li a{ line-height:38px; font-size:14px; color:#333;}
.nch-article-list li .time{ float:right; color:#999;}
</style>
<div class="nch-breadcrumb-layout">
	<div class="nch-breadcrumb wrapper" id="ur_here">
    	<span><a href=".">首页</a></span>
		<span class="arrow">&gt;</span>
		<span><a href="/newslist_<?=$id?>.html"><?=$allcate[$id]['title']?></a></span>
	</div>
</div>
<div class="nch-container wrapper">
	<div class="left">
		<div class="nch-module nch-module-style01">
			<div class="content">
				<ul class="nch-sidebar-article-class">
<?php foreach($allcate as $k=>$v) {?>
					<li>
						<dl>
							<a href="/newslist_<?=$v['id']?>.html"><dt class="nch_art_tit <?php if($info['cateid']==$v['id']){echo 'sel';}?>"><?=$v['title']?><i class="icon"></i></dt></a>
						</dl>
					</li>
<?php }?>
				</ul>
			</div>
		</div>
<script type="text/javascript">
	$(".nch_art_tit").click(function(){
		if($(this).parents("li").hasClass("hover")){
			$(this).parents("li").removeClass("hover");
		}else{
			$(this).parents("li").addClass("hover").siblings().removeClass("hover");
		}
	})
</script>
    </div>
    <div class="right">
    	<div class="nch-article-con">
        	<div class="title-bar">
				<h3><?=$info['title']?></h3>
			</div>
            <?=$info['content']?>
        </div>
        
    </div>
</div>
<?php include T('seller_admin','footer');?>