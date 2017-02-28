<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="/home/index.html">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 买家中心</p>
</div>
<style type="text/css">

</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">投诉建议</div>
<style type="text/css">
.ui-radio {display: none;}
.ui-radio-label{ float:left; cursor:pointer;}
:root .select-checkbox, :root .ui-checkbox,:root .ui-grey-checkbox,:root .ui-radio{ display:none;}
:root .select-checkbox+label, :root .ui-checkbox+label{ padding-left:20px; background:url(images/checkbox-icon.png) no-repeat;}
:root .select-checkbox:checked+label,:root .ui-checkbox:checked+label{ padding-left:20px; background:url(/static/img/radio-icon.png) no-repeat;}
:root .ui-grey-checkbox+label{ padding-left:20px; background:url(images/checkbox-grey-icon.png) no-repeat;}
:root .ui-grey-checkbox:checked+label{ padding-left:20px; background:url(images/checked-grey-icon.png) no-repeat;}
:root .ui-radio+label{ padding-left:50px; background:url(/static/img/radio-icon.png) no-repeat;}
:root .ui-radio:checked+label{ padding-left:50px; background:url(images/radioed-icon.png) no-repeat;}

.data-content{ float:left; width:570px;}
.data-content .item{ display:block; height:30px; line-height:30px; margin-bottom:10px;}
.data-content .item .label{ width:135px; float:left; color:#727171; text-align:right; padding-right:5px;}
.data-content .item .value{ padding-left:140px;}
.data-content .item .value .text{ outline:0; height:28px; line-height:28px; border:1px solid #d2d2d2; padding:0 0 0 10px;color:#333;*float:left;}
.data-content .item .value select{ height:30px;padding:0 10px; border:1px solid #d2d2d2; outline:0; margin-right:10px; padding:0\9; height:auto\9; width:70px\9;}
.data-content .item .value .zphone{ border:0; background-color:transparent; color:#3a78bf; outline:0; cursor:pointer;  margin-left: 16px;}
.data-content .item .value .ts{ margin-left:18px;}
.item .value-checkbox .value-item{ float:left; border:1px solid #d2d2d2; margin-right:20px; height:28px;}
.item .value-checkbox .value-item .ui-radio-label{ padding:0 15px 0 30px; background-position:10px 7px; background-position:10px 6px\9;}
.item .value-checkbox .selected{ border-color:#ec5051;}
.item .value-checkbox .selected .ui-radio-label{ background: url(/static/img/radioed-icon.png) 10px 7px no-repeat;}
.data-content .item .value a{ color:#3a78bf; margin-left:18px; display:inline-block; *float:left;}
.data-content .item.mobile_code{ display:none;}
.item .value .t-text{ width:304px;}
.item .value .t-text2{ width:154px;}
.item .value .sub{ border:0; height:25px; line-height:25px; padding:0 8px; background:#f68a00; border-radius:4px; color:#fff; margin-top:15px; cursor:pointer;}
.item .value .sub:hover{background:#e79205;}
.change-form{ margin-top:65px;}
.user-message-board{ width:902px; height:420px; margin-top:48px; padding-top:80px;font-size:12px;font-family:'宋体';background:url(/static/img/user_message_bg.jpg) no-repeat;}
.message-board-content{ width:600px; height:245px; padding:57px 108px 18px 295px; margin:0; border:0;}
.message-board-content .item{ line-height:30px; margin-bottom:12px;}
.message-board-content .item .label{ width:75px;}
.message-board-content .item .value{ padding-left:80px;}
.message-board-content .item .value .value-item{ margin-right:15px;}
.message-board-content .item .value .value-item.last{ margin-right:0;}
.message-board-content .item .value .text,.message-board-content .item .value textarea{ width:408px;}
.message-board-content .item .value .txt{ border:0; padding-left:0; width:340px; position:relative; }
.message-board-content .item .value .file{ left:80px; cursor:pointer; z-index:9999;}
.message-board-content .item .value .remind{ margin-top:5px;}
.message-board-content .item .value .submit{ float:right; margin-top:20px; cursor:pointer;}
.user-message-list{ width:600px;float:right;margin-right:40px;border:1px solid #d2d2d2; padding:10px 30px 10px 10px; margin-top:5px; overflow:hidden;}
.user-message-list .item{ width:100%; display:block; float:left; margin-bottom:10px;}
.user-message-list .item .label{ width:90px; text-align:right; float:left; height:30px; line-height:30px;}
.user-message-list .item .value{ padding-left:90px; position:relative;}
.user-message-list .item .value span{ height:30px; line-height:30px; display:inline-block;}
.user-message-list .item .value .text{ width:463px; height:22px; border:1px solid #d2d2d2; outline:0; padding:3px 0 3px 5px;}
.user-message-list .item .value textarea{ width:463px; height:90px; border:1px solid #d2d2d2; outline:0; resize:none; padding:3px 0 3px 5px; display:block;}
.user-message-list .item .value .messageBtn { background-color: #FFF;border: 1px solid #d2d2d2;height: 30px;width: 64px; margin-right:8px; position:relative; z-index:1;}
.user-message-list .item .value .txt { height: 28px;border: 1px solid #d2d2d2;width: 93px; padding-left:12px;}
.user-message-list .item .value .file { position: absolute;top: 0;left: 90px;height: 30px;filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);opacity: 0;width: 63px;}
.user-message-list .item .value .remind{ display:block;}
.user-message-list .item .value .submit{ height:30px; line-height:30px; padding:0 15px; background:#ec5051; border-radius:4px; color:#fff; border:0; outline:0; margin-left:2px;}
	
</style>
		<div class="user-message-board">
			<div class="message-board-content user-message-list">
				<form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onsubmit="return submitMsg()">
						<div class="item">
						<div class="label">留言类型：</div>
						<div class="value value-checkbox">
							<div class="value-item selected">
								<input type="radio" checked="checked" id="checkbox-message" value="0" name="msg_type" class="ui-radio">
								<label for="checkbox-message" class="ui-radio-label">留言</label>
							</div>
							<div class="value-item">
								<input type="radio" id="checkbox-complaint" name="msg_type" value="1" class="ui-radio">
								<label for="checkbox-complaint" class="ui-radio-label">投诉</label>
							</div>
							<div class="value-item">
								<input type="radio" id="checkbox-ask" name="msg_type" value="2" class="ui-radio">
								<label for="checkbox-ask" class="ui-radio-label">询问</label>
							</div>
							<div class="value-item">
								<input type="radio" id="checkbox-customer" name="msg_type" value="3" class="ui-radio">
								<label for="checkbox-customer" class="ui-radio-label">售后</label>
							</div>
							<div class="value-item last">
								<input type="radio" id="checkbox-buy" name="msg_type" value="4" class="ui-radio">
								<label for="checkbox-buy" class="ui-radio-label">求购</label>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="label">留言主题：</div>
						<div class="value"><input type="text" id="title" class="text"></div>
					</div>
					<div class="item">
						<div class="label">留言内容：</div>
						<div class="value"><textarea rows="5" cols="" id="content"></textarea></div>
					</div>
					<div class="item">
						<div class="value">
							<input type="hidden" name="act" value="act_add_message">
							<a onclick="sub_feed()" class="submit">提交</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$("div.value-item").click(function(){
	$(this).addClass("selected").siblings().removeClass("selected");
});
function sub_feed(){
	var tp=$(".selected input[name='msg_type']").val();
	var title=$('#title').val();
	if(title.length<1){
		layer.alert('请填写主题');
		return;
	}
	var content=$('#content').val();
	if(content.length<1){
		layer.alert('请填写详细描述');
		return;
	}
	$.ajax({
		type:'post',
		url:'/home/feedback.html?c=save',
		data:{'type':tp,'title':title,'content':content},
		success:function(r){
			if(r=='ok'){
				layer.alert('提交成功！');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
</script>

<?php include T('seller_admin','footer');?>