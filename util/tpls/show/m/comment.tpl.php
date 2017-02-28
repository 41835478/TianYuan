<?php include T('show/m/common','header');?>

<link rel="stylesheet" href="/static/css/web/login.css">
<style type="text/css">
	body{background-color: #F5F5F5;margin:0;padding: 0;}
	a{color: #000000;cursor:pointer;text-decoration:none;}
	.comment-list{float:left;width: 100%;height: 300px;background-color: #fff;margin-bottom: 10px;}
	.good_info{float: left;width: 100%;margin-top: 20px;}
	.good_img{float:left;margin-left: 20px;width: 40%;}
	.good_img img{width: 140px;}
	.comment_content{float: left;width: 50%;}
	.comment_content textarea{border: none;margin-top: 20px;resize:none;outline:none}
	.upload_img{float: left;height: 50px;width: 100%;border-bottom: 1px solid #D6D6D6;}
	.comment_score{float: left;line-height: 100%;border-bottom: 1px solid #D6D6D6;width: 100%;}
	.comment_score span{float: left;font-size: 18px;margin-left: 15px;}
	.comment_score .fl{float: left;}
	.comment_score .raty_{float: left;}
	.comment_score img{margin-bottom: 6px;}
	.comment_footer{width: 100%;height: 50px;position: fixed;bottom: 0;border-top: 1px solid #ADD03E;z-index: 999;background-color: #fff;font-size: 18px;}
	.fbpj{float: right;height: 100%;width: 100px;background-color: #FF9000;color: #fff;text-align: center;line-height: 50px;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back" style="margin-left:10px;"><</div>
			<div class="head_title">发表评价</div>
		</div>
	<?php foreach($cart as $k=>$v) {
	$goods_info=$db->get_One('select * from web_shop_goods where id='.$v['gid']);
	?>
	<?php if($v['com_sta']==0){?>
		<div class="comment-list">
			<input type="checkbox" name="comment-list-checkbox" value="<?=$v['id']?>" style="float: left;position: relative;top: 10px;left: 10px;">
			<div class="good_info">
				<div class="good_img"><img src="<?=$goods_info['thumb']?>" /></div>
				<div class="comment_content">
					<textarea name="content" class="area" cols="30" rows="5" placeholder="商品是否给力？快分享你的购买心得吧~"></textarea>
				</div>
			</div>
			<div class="upload_img">
				
			</div>
			<div class="comment_score">
				<span class="label">
					评分：
				</span>
				<div class="fl">
					<div class="raty_"></div>
				</div>
			</div>
		</div>
	<?php } }?>
		<div style="float:left;height:80px;width:100%;"></div>
		<div class="comment_footer">
			<div style="float:left;line-height:50px;margin-left:10px;"><input type="checkbox" name="niming" value="">匿名评价</div>
			<a class="fbpj">发表评价</a>
		</div>
	</div>
<?php include T('show/m/common','footer');?>
<script src="/static/js/jquery.raty.js"></script>
<script type="text/javascript">
	$('.fbpj').click(function() {
		var info = new Object();
		var i = 0;
		var nm = $('input[name="niming"]').prop('checked');
		var cartid = '<?php echo $_GET["oid"]?>';
		$('input[name="comment-list-checkbox"]').each(function() {
			if ($(this).prop('checked')) {
				var obj = $(this).parents('.comment-list');
				var tmp = new Object();
				tmp.content = obj.find('textarea').val();
				tmp.score = obj.find('input[name="score"]').val();
				tmp.id = $(this).val();

				info[i] = tmp;

				i++;
			}
		});

		if (i == 0) {
			layer.msg('请选择要评价的商品');
			return false;
		}

		$.post('/?m=admin&a=comment&c=save', {info:info, type:'m', nm:nm, cartid:cartid}, function(data) {
			if (data.success) {
				layer.msg(data.content);
			} else {
				layer.msg(data.content);
			}
		}, 'json');
	});
	$('.raty_').raty();
	$('.click_img').live('click',function(){
		var src=$(this).find('img').attr('src');
		var ind=$(this).attr('id');
		$('.img-bigbox img').attr('src',src.replace('_60_60','_real',src));
		$('.img-del').attr('ind',ind);
		if ($('.img-bigbox').hasClass('hide')){
			$('.img-bigbox').removeClass('hide');
		}
	});
	$('.img-del').click(function(){
		var ind=$(this).attr('ind');
		$(this).parent().addClass('hide');
		$('#'+ind).remove();
	});
	function setImg(f,id){
		var f60=f.replace('_real','_60_60',f);
		var ind=$(".img-list-ul li").size();
		$(".img-list-ul").prepend('<li id="img'+ind+'" class="click_img"><img width="60px" height="60px" alt="" src="'+f60+'" _id="1"><input type="hidden" name="img[]" value="'+f+'"></li>');
		if (ind==1){
			$('.img-bigbox img').attr('src',f);
		}
		if ($('.img-bigbox').hasClass('hide')){
			$('.img-bigbox').removeClass('hide');
		}
	}
</script>