<?php include T('show/m/common','header');?>
<link rel="stylesheet" href="/static/css/web/login.css">
	<div class="main">
		<div class="head">
			<div class="go_back"><</div>
			<div class="head_title">使用账号登录a</div>
			<a class="go_reg">去注册</a>
		</div>
		<div class="content">
			<div class="form-group no-border">
			</div>
			<div class="form-group">
				<div class="user"><img src="/static/img/wap/user.png"></div>
				<input type="text" class="form-input" placeholder="手机号/邮箱/用户名">
			</div>
			<div class="form-group">
				<div class="user"><img src="/static/img/wap/pass.png"></div>
				<input type="password" class="form-input" placeholder="密码">
			</div>
			<div class="form-group no-border">
				<a href="javascript:void(0);" class="a-no-content">登　录</a>
			</div>
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