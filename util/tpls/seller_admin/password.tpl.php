<?php include T('seller_admin','header');?>
<div id="bread" class="cont">
	<p><a href="">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i> 卖家中心</p>
</div>
<style type="text/css">
#right_index{
    width: 966px;
    min-height: 600px;
    overflow: hidden;
    float: right;
}
.u_info{border:1px solid #eee;height:153px;min-height:0;overflow:hidden;}
.user{height:79px;padding-top:20px;border-bottom:1px solid #eee;background-color:#f8f8f8;}
.avator{width:70px;height:70px;margin-bottom:10px;float:left;margin-left:30px;}
.avator img{border-radius:50%;-webkit-border-radius:50%;}
.name{min-height:0;overflow:hidden;float:left;margin-left:10px;}
.name h2{font-size:16px;font-weight:bold;}
.edit{color:#009237;font-size:14px;text-decoration:underline;}
</style>
<div id="main" class="cont">
	<?php include T('seller_admin','left');?>
	<div id="right_index">
		<div class="r_tit">修改密码</div>
		<div class="pass">
			<div class="layui-form-item">
				<label class="layui-form-label">用户名</label>
				<div class="layui-input-block">
					<input value="<?=$user['username']?>" disabled class="layui-input"/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">旧密码</label>
				<div class="layui-input-block">
					<input type="password" name="oldpass" id="oldpass" class="layui-input" placeholder="请填写旧密码"/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">新密码</label>
				<div class="layui-input-block">
					<input type="password" name="newpass" id="newpass" class="layui-input" placeholder="请填写新密码"/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">确认新密码</label>
				<div class="layui-input-block">
					<input type="password" name="chkpass" id="chkpass" class="layui-input" placeholder="请填写新密码"/>
				</div>
			</div>
			<input type="submit" class="layui-btn layui-btn-big layui-btn-primary layui-btn-radius" value="修改密码" onclick="sub_form()">
		</div>
	</div>
</div>
<script type="text/javascript">
function sub_form(){
	var oldps=$('#oldpass').val();
	if(oldps.length<1){
		layer.alert('旧密码不能为空！');
		return;
	}
	var newps=$('#newpass').val();
	if(newps.length<1){
		layer.alert('新密码不能为空！');
		return;
	}
	var chkps=$('#chkpass').val();
	if(chkps.length<1){
		layer.alert('新密码不能为空！');
		return;
	}
	$.ajax({
		type:'post',
		url:'/home/password.html?c=save',
		data:{'oldpass':oldps,'newpass':newps,'chkpass':chkps},
		success:function(r){
			if(r=='ok'){
				alert('密码修改成功！');
			}else{
				alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
</script>

<?php include T('seller_admin','footer');?>