<?php include T('member','header');?>
<script type="text/javascript">
var url_local=window.location.href;
var url_top=window.top.location.href;
if (url_local!=url_top){
	window.top.location.href=url_local;
}
</script>
<style type="text/css">
.cont_div{width:1000px;min-height:0;overflow:hidden;margin:0 auto;}
#banner{width:100%;height:475px;overflow:hidden;margin:0 auto;position:relative;}
#banner_area{width:1900px;height:475px;overflow:hidden;position:absolute;left:50%;margin-left:-950px;}
#banner ul{width:200%;height:100%;overflow:hidden;}
#banner ul li{width:50%;height:100%;overflow:hidden;float:left;}
#token_area{width:400px;height:320px;overflow:hidden;position:absolute;left:50%;margin-left:-500px;top:65px}
#login_area{width:346px;height:370px;overflow:hidden;position:absolute;left:50%;margin-left:100px;top:65px;background-color:#fff}
#login_area table{width:90%;margin-left:8%;margin-top:30px;}
#login_area table th{line-height:46px;font-weight:bold;text-align:left;color:#666;}
#login_area table td .use_inp{width:90%;height:30px;line-height:30px;margin:10px 0;border:1px solid #eee;text-indent:40px;}
.ipt_outer{width:100%;height:100%;overflow:hidden;position:relative;}
.ipt_outer span{display:inline-block;position:absolute;right:40px;top:12px;height:40px;line-height:40px;color:#36f;font-weight:bold;}
#login_area table th input.log_btn{width:285px;height:40px;cursor:pointer;margin-top:10px;background-color:#ff6900;color:#fff;font-size:16px;line-height:40px;border:none;border-radius:3px;-webkit-border-radius:3px;}
#log_bottom{width:100%;height:30px;border-top:1px solid #E3E3E3;position:absolute;bottom:0;left:0;text-align:center;padding:20px 0}
#log_bottom a{font-size:14px;line-height:26px;margin:0 20px;color:#224994;}
#log_tab{width:100%;height:35px;overflow:hidden;line-height:35px;}
#log_tab h2{width:173px;height:35px;overflow:hidden;float:left;text-align:center;font-size:15px;line-height:35px;color:#fff;background-color:#8ab800;cursor:pointer}
#log_tab h3{width:173px;height:35px;float:right;background-color:#e3f3b2;text-align:center;color:#8ab800;font-size:15px;line-height:35px;cursor:pointer}
#my_wxsite{width:330px;height:260px;overflow:hidden;margin:0 auto;margin-top:40px;font:100 14px/34px '微软雅黑',Arial}
#my_wxsite p{min-height:0;overflow:hidden;padding:20px 0 20px 50px;color:#000;}
#my_wxsite p span{color:#0088ff;font-size:20px;}
#my_wxsite p a{color:#000}
#my_wxsite a.big_btn{display:block;width:285px;height:40px;cursor:pointer;margin-top:10px;background-color:#ff6900;color:#fff;font-size:16px;line-height:40px;border:none;border-radius:3px;-webkit-border-radius:3px;margin:0 auto;text-align:center;}
#container{width:100%;min-height:0;overflow:hidden;background-color:#fff}
#func_list{width:100%;min-height:0;overflow:hidden;padding-bottom:20px}
#func_list li{width:498px;height:150px;overflow:hidden;float:left;margin-top:20px;margin-right:1px}
.icon_area{width:100px;height:100px;overflow:hidden;background:url('/static/wxsite/wx_site_icon.gif') no-repeat;}
#func_list li table{width:100%;height:100%}
#func_list li table tr th{width:120px}
#func_list li table tr td h3{height:34px;font:bolder 20px/34px '微软雅黑',Arial}
#func_list li table tr td p{height:80px;font:100 14px/26px '微软雅黑',Arial;color:#333;}
.qrcode{width:200px;margin:0 auto;text-align:center;}
#c_form{display:none}
.phone{background:url('/static/img/phone.jpg') no-repeat center left 10px;}
.pass{background:url('/static/img/pass.jpg') no-repeat center left 10px;}
#agreement{padding:20px;display:none}
</style>
</head>
<body>
<script type="text/javascript">
$(function(){
	$('#log_tab h3').click(function(){
		$(this).css({'background':'#8ab800','color':'#fff'});
		$('#log_tab h2').css({'background':'#e3f3b2','color':'#8ab800'});
		$('#c_form').css({'display':'block'});
		$('#b_form').css({'display':'none'});
		$('#log_bottom').css({'display':'none'});
	});
	$('#log_tab h2').click(function(){
		$(this).css({'background':'#8ab800','color':'#fff'});
		$('#log_tab h3').css({'background':'#e3f3b2','color':'#8ab800'});
        $('#c_form').css({'display':'none'});
        $('#b_form').css({'display':'block'});
        $('#log_bottom').css({'display':'block'});
    });
});
</script>
	<div id="banner">
		<div id="banner_area">
		<ul id="banner_ul">
			<li style="background:url('/static/img/banner_01.jpg') no-repeat top #6DBB6F"></li>
		</ul>
		</div>
		<script type="text/javascript">
			function ad_banner(){
				$('#banner_ul li:first').animate({'marginLeft':'-100%'},'slow','swing',function(){
					$(this).hide().remove().appendTo('#banner_ul').show().css('marginLeft','0');
				});
			}
			window.onload=function(){
				var num=$('#banner_ul li').length;
				if (num>1){
					var int=self.setInterval("ad_banner()",5000);
				}
			};
		</script>

		<div id="login_area">
<?php if($_userid){?>
			<div id="log_tab"><h2>用户面版</h2><h3></h3></div>
			<div id="my_wxsite">
			<p>您好：<?=$_username?><br /><span>您已成功登陆</span>，<a href="/?m=wxsite&mod=logout" title="退出登录">退出登录</a>！ </p>
			<a href="/?m=admin" title="Crm管理面板" class="big_btn">进入会员中心</a>	
			</div>
<?php }else{?>
			<div id="log_tab"><h2>用户登录</h2><h3>注册</h3></div>
			<form action="#" method="post"  id="b_form">
			<table>
				<tr>
					<td><input id="un" class="use_inp phone" type="text" name="username" placeholder="请输入手机号码"></td>
				</tr>
				<tr>
					<td><input id="pwd" class="use_inp pass" type="password" name="password" placeholder="请输入您的密码"></td>
				</tr>
				<tr>
					<td><p><a href="" style="text-align:right;padding-right:20px">忘记密码？</a></p></td>
				</tr>
				<!--<tr>
					<td style="padding:10px 0">
						<p>其他方式：</p>
						<p>
							<a class=""><i class="fa fa-qq" aria-hidden="true"></i> QQ登陆</a>
							<a class=""><i class="fa fa-weibo" aria-hidden="true"></i> 微博登陆</a>
							<a class=""><i class="fa fa-weixin" aria-hidden="true"></i> 微信登陆</a>
						</p>
					</td>
				</tr>-->
				<tr>
					<th><input class="log_btn" type="button" name="dosubmit" onclick="login()" value="立 即 登 录"></th>
				</tr>
			</table>
			</form>
			<form action="#" method="post"  id="c_form">
			<table>
				<tr>
					<td><input id="uname_id" class="use_inp phone" type="text" name="username" placeholder="请输入手机号码"></td>
				</tr>
				<tr>
					<td><input id="pwd_a_id" class="use_inp pass" type="password" name="password" placeholder="请输入您的密码"></td>
				</tr>
				<tr>
					<td><input id="pwd_an_id" class="use_inp pass" type="password" name="password" placeholder="再输入一次密码"></td>
				</tr>
				<tr>
					<td><p><input type="checkbox" checked /> <a onclick="show_reg()">我已经阅读并接受注册协议</a></p></td>
				</tr>
				<tr>
					<th><input class="log_btn" type="button" name="dosubmit" onclick="add_uc()" value="立 即 注 册"></th>
				</tr>
			</table>
			</form>
<?php }?>
		</div>
	</div>

<div id="agreement"><?=htmlspecialchars_decode($uc_config['agreement'])?></div>
<script type="text/javascript">	
function show_reg(){
	layer.open({
		type: 1,
		area: ['600px', '600px'],
		shade: false,
		title: '商城注册协议',
		content: $('#agreement')
	});
}
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
function add_uc(){
	var uname=$('#uname_id').val();
	var pwd=$('#pwd_a_id').val();
	var pwd_n=$('#pwd_an_id').val();
	if (uname.length<2){
		layer.alert('请填写手机号码');
		return false;
	}
	if (pwd.length<6){
		layer.alert('密码至少6位');
		return false;
	}else if (pwd!=pwd_n){
		console.log(pwd,pwd_n);
		layer.alert('两次密码不一致');
		return false;
	}else{
		$.ajax({
			type:'post',
			url:'/?m=wxsite&mod=login&c=reg',
			data:{'uname':uname,'pwd':pwd},
			success:function(d){
				if (d=='ok'){
					layer.alert('注册成功');
					setTimeout(function(){
						window.location.reload(true);
					},1000);
				}else if(d=='hasuc'){
					layer.alert('已有用户');
					setTimeout(function(){
						window.location.reload(true);
					},1000);
				}else if(d=='nopwd'){
					layer.alert('密码不能少于6位');
				}
			}
		});
	}
}
</script>
<?php include T('seller_admin','footer');?>