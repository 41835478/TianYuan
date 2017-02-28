<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
<style>
	.can-submit{background-color: #ABD13E;}
</style>
	<div class="main">
		<div class="head">
			<div class="go_back"><</div>
			<div class="head_title">使用账号登录</div>
			<a class="go_reg" href="/">去注册</a>
		</div>
		<div class="content">
			<div class="form-group no-border">
			</div>
			<form action="#" method="post"  id="b_form">
				<div class="form-group">
					<div class="user"><img src="/static/img/wap/user.png"></div>
					<input type="text" name="username" class="form-input" placeholder="请输入手机号码">
				</div>
				<div class="form-group">
					<div class="user"><img src="/static/img/wap/pass.png"></div>
					<input type="password" name="password" class="form-input" placeholder="请输入您的密码">
				</div>
				<div class="form-group no-border">
					<a href="javascript:void(0);" class="a-no-content submit">登　录</a>
				</div>
			</form>
			<div class="form-group no-border">
				<a href="javascript:void(0);" class="a-no-password">忘记密码</a>
			</div>
			<div class="form-group no-border" style="border-bottom:1px solid #ccc;margin-top:80px;">
				<div class="other-login">第三方账号登录</div>
			</div>
			<div class="form-group no-border">
				<div class="other-logo-div"><img src="/static/img/wap/wx_logo.png" class="other-logo-png"></div>
				<div class="other-logo-div"><img src="/static/img/wap/qq_logo.png" class="other-logo-png"></div>
			</div>
		</div>
	</div>
<?php include T('show/m/common','footer');?>
<script type="text/javascript">
	$(document).keydown(function(event){

		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();

		if (username && password) {
			$('.submit').addClass('can-submit');
		} else {
			$('.submit').removeClass('can-submit');;
		}

	});

	$('.submit').click(function() {
		if ($(this).hasClass('can-submit')) {
			login();
		} else {
			layer.msg('请填写登录信息，谢谢');
		}
	})
	function login(){
		var info=$('#b_form').serialize();
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=login&c=login',
			data:info,
			success:function(d){
				if (d=='error'){
					layer.alert('密码或者账户错误，登录失败！');
				}else{
					window.location.href='/home/index.html';
					return;
				}
			}
		});
	}
</script>