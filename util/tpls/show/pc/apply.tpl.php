<?php include T('seller_admin','header');?>
<style type="text/css">
.panel{min-height:0;overflow:hidden;margin-top:30px;}
.panel .panel-nav{ width:100%; float:left; background:#dcdcdc;}
.panel .panel-nav .progress-item{ position:relative; display:block; text-align:center; float:left; font-size:16px; height:40px; line-height:40px; width:300px;}
.panel .panel-nav .progress-item .number{ position:absolute; width:24px; height:24px; line-height:24px; border-radius:50%; background:#fff; color:#dcdcdc;font-size: 14px;font-weight:bold;font-family: Arial; top:8px; left:100px;}
.panel .panel-nav .progress-item .progress-desc{ position:absolute; color:#fff; font-size:16px; left:130px;}
.panel .panel-nav .progress-item .arrow-background,.panel .panel-nav .progress-item .arrow-foreground{ position: absolute;top: 0;right: -15px;width: 0;height: 0;border-width: 20px 0 20px 15px;border-style: dashed dashed dashed solid;border-color: transparent transparent transparent #dcdcdc;font-size: 0;line-height: 0;z-index: 1;}
.panel .panel-nav .progress-item .arrow-background{ right: -17px;top: -2px;border-left-color: #FFF;border-width: 22px 0 22px 17px;}
.panel .panel-nav .ongoing{ background:#ec5051;}
.panel .panel-nav .ongoing .number{ color:#ec5051;}
.panel .panel-nav .ongoing .arrow-foreground{ border-left-color:#ec5051;}
.panel .panel-nav .passed { background:#f5a7a8;}
.panel .panel-nav .passed .number{ color:#f5a7a8;}
.panel .panel-nav .passed .arrow-foreground{ border-left-color: #f5a7a8;}
.panel .panel-content{ float:left; margin-top:20px; width:1200px;}
.panel .panel-content .bg-top{ width:100%; height:50px; background:url(/static/img/item_stpes-top.png) no-repeat;}
.panel .panel-content .bg-warp{ height:auto; padding:20px 40px 35px 45px; background:url(/static/img/item_stpes-warp.png) repeat-y;}
.panel .panel-content .bg-bottom{ width:100%; height:10px; background:url(/static/img/item_stpes-bottom.png) no-repeat;}
.panel .panel-content .title{ font-size:20px; font-weight:bold; color:#000; height:25px; line-height:25px; padding-bottom:10px; border-bottom:1px solid #eeeeee; margin-bottom:20px;}
.panel .panel-content .textareay{ font-size:14px;}
.panel .panel-content .agreement{ overflow-y:auto; height:auto; max-height:423px;}
.panel .panel-content .agreement .item{ margin-bottom:30px;}
.panel .panel-content .agreement .item h2{ font-size:16px; color:#333; line-height:30px;}
.panel .panel-content .agreement .item p{ line-height:28px; font-size:14px;}
.panel .panel-content .pannel_end{ padding-bottom:20px; overflow:hidden;}
.pannel_end .settled-state{ width:100%; height:40px; line-height:40px; text-align:center; border-bottom:1px solid #eeeeee; padding-bottom:10px;}
.pannel_end .settled-state span{ font-size:24px; color:#ec5051;}
.pannel_end h3.ordertitle{ font-size:14px; font-weight:bold; color:#666; margin:25px 0 15px;}
.pannel_end .item{ width:100%; float:left; margin-bottom:8px;}
.pannel_end .item .label{ float:left; width:182px; text-align:right;}
.pannel_end .item strong{ float:left; width:930px; letter-spacing:0.5px;}

.pannel_end .setted-footer{ text-align:center; padding-top:30px; float:left; width:100%; border-top:1px solid #eeeeee; margin-top:15px;}
.pannel_end .setted-footer a{ color:#197de4; margin-right:10px;}
.pannel_end .setted-footer a:hover{ color:#ec5051;}
.btn-group { margin-top: 70px;overflow:hidden;}
.btn-group .btn{ border:0; padding:0 15px; height:34px; line-height:32px;*line-height:30px; cursor:pointer; border:1px solid #ec5051; outline:0;filter:chroma(color=#000000);
}
.btn-group .btn-w{ background:#fff; color:#ec5051; margin-right:20px;}
.btns{ border:0; height:30px; line-height:30px; padding:0 15px; background:#f68a00; width:auto; color:#fff; border-radius:4px; cursor:pointer;}
.error{ color:#999;}
.yel-tip{ margin:10px 0; line-height:25px;}
.yel-tip a,.link-blue{ color:#3a78bf;}
.btn-add{ height:30px; line-height:30px; padding:0 14px; background:#f68a00; border-radius:4px; display:block; float:left; color:#fff;}
.orange {color: #f7a750;}
.orange2{ color:#f68a00;}
.item .value-checkbox .value-item .ui-radio-label{ background-position: 10px 6px;}
.verify{ float:left; margin-left:10px; color:#ec5051;}
.btn{ font-family: "microsoft yahei"; float:right; font-size:14px; color:#fff; background:#ec5151; padding:5px 12px; border-radius:5px;}
.btn:hover{ color:#fff;}
.panel .panel-body{ margin-bottom:25px;}
.panel-body .cue{ color:#ec5051; width:100%; margin-top:10px;}
.panel-body .panel-tit{ font-size:14px; font-weight:bold; color:#666; margin:0px 0 0 0;}
.panel-body .list{ margin-top:20px;}
.merSteps .panel:after,.panel .panel-body:after,.panel-body .list:after{ content: '';display: block;clear: both;height: 0;overflow: hidden;visibility: hidden;}
.panel-body .item{ float:left; width:100%; margin-bottom:10px;}
.panel-body .item .label{ float:left; width:180px; text-align:right; height:30px; line-height:30px;}
.panel-body .item .label em,.value .value_warp .value_label em{ color:#ec5051;}
.panel-body .item .value{ line-height:30px; float:left; margin-left:10px;}
.panel-body .item .value font{ margin-left:10px;}
.panel-body .item .value .value-item{ line-height:28px;}
.panel-body .item .value .text{ width: 330px;height: 22px;border: 1px solid #d2d2d2;outline: 0;padding: 3px 0 3px 5px; float:left;}
.panel-body .item .value .text-2{ width:151px; cursor:pointer; float:none;}
.panel-body .item .value .text-3{ width:151px; padding-top:0; padding-bottom:0;}
.panel-body .item .value .chakan{ color:#ec5051;}
.panel-body .item .value .chakan:hover{ text-decoration:underline;}
.panel-body .item .value select{ height:30px; line-height:30px; margin-right:16px; border: 1px solid #d2d2d2; width: 102px; float:left;}
.panel-body .item .value select.select2{ width:130px;}
.panel-body .item .value select.select3{ width:180px;}
.panel-body .item .value textarea{ width:331px; height:144px; resize:none; border: 1px solid #d2d2d2;}
.panel-body .item .value .org{ display:inline-block; *display:inline; *zoom:1;}
.panel-body .item .value .org font{ color:#f18b07; margin-left:10px;}
.panel-body .item .value .org span{ color:#999; margin-left:10px;}
.panel-body .item .value .tit{ color:#999;}
.item .value-checkbox .value-item{ float:left; border:1px solid #d2d2d2; margin-right:20px; height:28px;}
.item .value-checkbox .value-item .ui-radio-label{ padding:0 15px 0 30px; background-position:10px 7px; background-position:10px 6px\9;}
.item .value-checkbox .selected{ border-color:#ec5051;}
:root .select-checkbox, :root .ui-checkbox,:root .ui-grey-checkbox,:root .ui-radio{ display:none;}
:root .select-checkbox+label, :root .ui-checkbox+label{ padding-left:20px; background:url(/static/img/checkbox-icon.png) no-repeat;}
:root .select-checkbox:checked+label,:root .ui-checkbox:checked+label{ padding-left:20px; background:url(/static/img/checked-icon.png) no-repeat;}
:root .ui-grey-checkbox+label{ padding-left:20px; background:url(/static/img/checkbox-grey-icon.png) no-repeat;}
:root .ui-grey-checkbox:checked+label{ padding-left:20px; background:url(/static/img/checked-grey-icon.png) no-repeat;}
:root .ui-radio+label{ padding-left:50px; background:url(/static/img/radio-icon.png) no-repeat;}
:root .ui-radio:checked+label{ padding-left:50px; background:url(/static/img/radioed-icon.png) no-repeat;}
.ui-radio-label{ float:left; cursor:pointer;}
.table{ width:915px; margin:15px 0;}
.table tbody { border: 1px solid #e5e5e5;}
.table tbody th,.table tbody td { padding: 10px;border-top: 1px solid #cfcfcf;}
.table thead th { height:38px; line-height:38px;font-weight: normal;background: #f2f2f2;color: #808080;font-family: "Verdana" "Simsun";border: 1px solid #e5e5e5; text-align:center}
.table tbody td{ border: 1px solid #e5e5e5; text-align:center;}
.table tbody tr:hover { background: #f7f7f7; cursor:pointer;}
.table .cart-checkbox label{ margin-left:10px;}
.brank_list .table,.zizhiTable{ width:1115px;}
.zizhiTable .text{ width: 250px;height: 22px;border: 1px solid #d2d2d2;outline: 0;padding: 3px 0 3px 5px;}
.zizhiTable .text-2{ width:180px; margin-left:30px;}
</style>
<div class="panel cont_div">
	<div class="panel-nav">
		<div class="progress-item <?php if($step==1){ echo 'ongoing';}elseif($step>1){echo 'passed';}?>">
			<div class="number">1</div>
			<div class="progress-desc">入驻须知</div>
			<div class="arrow-background"></div>
			<div class="arrow-foreground"></div>
		</div>
		<div class="progress-item <?php if($step==2){ echo 'ongoing';}elseif($step>2){echo 'passed';}else{echo 'tobe';}?>">
			<div class="number">2</div>
			<div class="progress-desc">公司信息认证</div>
			<div class="arrow-background"></div>
			<div class="arrow-foreground"></div>
		</div>
		<div class="progress-item <?php if($step==3){ echo 'ongoing';}elseif($step>3){echo 'passed';}else{echo 'tobe';}?>">
			<div class="number">3</div>
			<div class="progress-desc">店铺信息认证</div>
			<div class="arrow-background"></div>
			<div class="arrow-foreground"></div>
		</div>
		<div class="progress-item <?php if($step==4){ echo 'ongoing';}else{echo 'tobe';}?>">
			<div class="number">4</div>
			<div class="progress-desc">等待审核</div>
		</div>
	</div>

	<div class="panel-content">
		<div class="bg-top"></div>


<?php if($step==1){?>

		<div class="bg-warp">
                <div class="title">协议确定</div>
                <div class="textareay">
                    <div class="agreement">
                        <div class="item"><h2>1.本协议的订立</h2><p class="cont">在本网站（<a target="_blank" href="http://www.ecmoban.com/" class="link">www.ecmoban.com</a>）依据《商创商城网站用户注册协议》登记注册，且符合本网站

商家入驻标准(详见链接：<a target="_blank" href="http://www.ecmoban.com/contact/joinin.aspx" class="link">http://www.ecmoban.com/contact/joinin.aspx</a>）的用户（以下简称"商

家"），在同意本协议全部条款后，方有资格使用"商创商城商家在线入驻系统"（以

下简称"入驻系统"）申请入驻。一经商家点击"同意以上协议，下一步"按键，

即意味着商家同意与本网站签订本协议并同意受本协议约束。</p></div><div class="item"><h2>2.入驻系统使用说明</h2><p class="cont">2.1 商家通过入驻系统提出入驻申请，并按照要求填写商家信息、提供商家资质资料后，由

本网站审核并与有合作意向的商家联系协商合作相关事宜，经双方协商一致线下签订书面《开放平台

供应商合作运营协议》（以下简称"运营协议"），且商家按照"运营协议"约定

支付相应平台使用费及保证金等必要费用后，商家正式入驻本网站。本网站将为入驻商家开通商家后

台系统，商家可通过商家后台系统在本网站运营

自己的入驻店铺。</p><p class="cont">2.2 商家以及本网站通过入驻系统做出的申请、资料提交及确认等各类沟通，仅为双方合作

的意向以及本网站对商家资格审核的必备程序，除遵守本协议各项约定外，对双方不产生法律约束力

。双方间最终合作事宜及运营规则均以"运营协议"的约定及商家后台系统公示的各项规则

为准。</p></div><div class="item"><h2>3.商家权利义务</h2><p>用户使用"商创商城商家在线入驻系统"前请认真阅读并理解本协议内容，本协议

内容中以加粗方式显著标识的条款，请用户着重阅读、慎重考虑。</p></div><div class="item"><h2>1.本协议的订立</h2><p class="cont">在本网站（<a target="_blank" href="http://www.ecmoban.com" class="link">www.ecmoban.com</a>）依据《商创商城网站用户注册协议》登记注册，且符合本网站

商家入驻标准(详见链接：<a target="_blank" href="http://www.ecmoban.com/contact/joinin.aspx" class="link">http://www.ecmoban.com/contact/joinin.aspx</a>）的用户（以下简称"商

家"），在同意本协议全部条款后，方有资格使用"商创商城商家在线入驻系统"（以

下简称"入驻系统"） 申请入驻。一经商家点击"同意以上协议，下一步"按键

，即意味着商家同意与本网站签订本协议并同意受本协议约束。</p></div><div class="item"><h2>2.入驻系统使用说明</h2><p class="cont">2.1 商家通过入驻系统提出入驻申请，并按照要求填写商家信息、提供商家资质资料后，由

本网站审核并与有合作意向的商家联系协商合作相关事宜，经双方协商一致线下签订书面《开放平台

供应商合作运营协议》（以下简称"运营协议"），且商家按照"运营协议"约定

支付相应平台使用费及保证金等必要费用后，商家正式入驻本网站。本网站将为入驻商家开通商家后

台系统，商家可通过商家后台系统在本网站运营

自己的入驻店铺。</p><p class="cont">2.2 商家以及本网站通过入驻系统做出的申请、资料提交及确认等各类沟通，仅为双方合作

的意向以及本网站对商家资格审核的必备程序，除遵守本协议各项约定外，对双方不产生法律约束力

。双方间最终合作事宜及运营规则均以"运营协议"的约定及商家后台系统公示的各项规则

为准。</p></div><div class="item"><h2>3.商家权利义务</h2><p class="cont">用户使用"商创商城商家在线入驻系统"前请认真阅读并理解本协议内容，本协议

内容中以加粗方式显著标识的条款，请用户着重阅读、慎重考虑。</p></div>                    </div>
                </div>
                <div class="btn-group">
                    <a onclick="agree()" class="btn">同意以上协议，下一步</a>
                </div>
            </div>

<script type="text/javascript">
function agree(){
	$.ajax({
		type:'post',
		url:'/apply.html?a=agree',
		success:function(r){
			if(r=='ok'){
				setTimeout(function(){window.location.href="/apply.html";},1200);
			}
		}
	});
}
</script>


<?php }elseif($step==2){?>

	<div class="bg-warp">
		<div class="title">
			<span>联系方式</span>
		</div>
		<form method="post" id="form_apply" action="/apply.html?a=company">
		<div class="panel-body">
			<div class="panel-tit"><span>卖家入驻联系人信息</span></div>
			<div class="cue">用于入驻过程中接收商城反馈的入驻通知，请务必正确填写。</div>
			<div class="list">
				<div class="item">
					<div class="label">
						<em>*</em>
						<span>联系人姓名：</span>
					</div>
					<div class="value">
                        <input class="text" type="text" value="" size="20" name="contactName" id="contactName">
					</div>
				</div>
				<div class="item">
					<div class="label">
						<em>*</em>
						<span>联系人手机：</span>
					</div>
					<div class="value">
                        <input class="text" type="text" value="" size="20" name="contactPhone" id="contactPhone">
					</div>
				</div>
			</div>
		</div>                                                                                            
		<div class="title">
			<span>公司信息提交</span>
		</div>
        <div class="btn-group mt0">以下所需要上传电子版资质仅支持JPG、GIF、PNG格式的图片，大小不超过1M，且必须加盖企业彩色公章。</div>
		<div class="panel-body">
		<div class="panel-tit"><span>营业执照信息</span></div>
		<div class="cue"></div>
		<div class="list">
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>公司名称：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="companyName" id="companyName">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>营业执照注册号：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="license_id" id="">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>法定代表人姓名：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="legal_person" id="">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em></em>
					<span>身份证号：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="personalNo" id="personalNo">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em></em>
					<span>法人身份证电子版：</span>
				</div>
				<div class="value">
					<iframe src="/?m=admin&a=upfile&tb=6" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
                    <input type="hidden" name="legal_person_img" id="legal_person_img">
					<div id="legal_person_preview"></div>
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em></em>
					<span>营业执照详细地址：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="license_adress" id="">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>营业执照电子版：</span>
				</div>
				<div class="value">
                    <iframe src="/?m=admin&a=upfile&tb=8" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
                    <input type="hidden" name="license_fileImg" id="license_fileImg">
					<div id="license_fileImg_preview"></div>
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>公司详细地址：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="company_adress" id="">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>公司电话：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="company_contactTel" id="">
				</div>
			</div>
		</div>
   
	</div>                                                                                                       <div class="panel-body">
		<div class="panel-tit"><span>组织机构代码证</span></div>
		<div class="cue"></div>
		<div class="list">
            <div class="item">
				<div class="label">
					<em></em>
					<span>组织机构代码：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="organization_code" id="">
				</div>
			</div>
            <div class="item">
				<div class="label">
					<em></em>
					<span>组织机构代码证电子版：</span>
				</div>
				<div class="value">
                    <iframe src="/?m=admin&a=upfile&tb=9" border="0" frameborder="0" scrolling="no" width="260" height="30"></iframe>
                    <input type="hidden" name="organization_img" id="organization_fileImg">
					<div id="organization_fileImg_preview"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="btn-group mt0" style="text-align:center;">
		<a class="btn" onclick="submit()">下一步，店铺类型及类目信息</a>
	</div>
	</form>
</div>
<script type="text/javascript">
function setImg(file){
	$('#legal_person_img').val(file);
	$('#legal_person_preview').html('<img src="'+file+'" width="100px"/>');
}
function setImgs(file){
	$('#license_fileImg').val(file);
	$('#license_fileImg_preview').html('<img src="'+file+'" width="100px"/>');
}
function setImgss(file){
	$('#organization_fileImg').val(file);
	$('#organization_fileImg_preview').html('<img src="'+file+'" width="100px"/>');
}
function submit(){
	var contactName=$('#contactName').val();
	if(contactName.length<1){
		layer.alert('联系人姓名不能为空！');
		return false;
	}
	var contactPhone=$('#contactPhone').val();
	if(contactPhone.length<1){
		layer.alert('联系人电话不能为空！');
		return false;
	}
	
	var companyName=$('#companyName').val();
	if(companyName.length<1){
		layer.alert('公司名称不能为空！');
		return false;
	}
	var legal_person_img=$('#legal_person_img').val();
	if(legal_person_img.length<1){
		layer.alert('请上传法人身份证照片！');
		return false;
	}
	var personalNo=$('#personalNo').val();
	if(personalNo.length<1){
		layer.alert('法人身份证号不能为空！');
		return false;
	}
	var license_fileImg=$('#license_fileImg').val();
	if(license_fileImg.length<1){
		layer.alert('法人身份证号不能为空！');
		return false;
	}
	$('#form_apply').submit();	
}
</script>


<?php }elseif($step==3){?>


	<div class="bg-warp">
		<div class="title">
			<span>注册店铺信息</span>
		</div>
		<div class="panel-body">
			<div class="panel-tit"><span>填写店铺信息</span></div>
			<div class="cue"></div>
			<div class="list">
            <div class="item">
				<div class="label">
					<em>*</em>
					<span>店铺名称：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="20" name="shopname" id="shopname">
				</div>
			</div>
			<div class="item">
				<div class="label">
					<em>*</em>
					<span>店铺介绍：</span>
				</div>
				<div class="value">
                    <input class="text" type="text" value="" size="40" name="shopintro" id="shopintro">
				</div>
			</div>
		</div>
		<div class="btn-group mt0" style="text-align:center;">
			<a id="nextStepBtn" class="btn" onclick="sub_shop()">保存进入下一步</a>
		</div>
	</div>
<script type="text/javascript">
function sub_shop(){
	var shopname=$('#shopname').val();
	if(shopname.length<1){
		layer.alert('请填写店铺名称');
		return false;
	}
	var shopintro=$('#shopintro').val();
	if(shopintro.length<1){
		layer.alert('请填写店铺介绍');
		return false;
	}
	$.ajax({
		type:'post',
		url:'/apply.html?a=shop',
		data:{'shopname':shopname,'shopintro':shopintro},
		success:function(r){
			if(r=='ok'){
				layer.alert('店铺信息提交成功');
			}else{
				layer.alert(r);
			}
			setTimeout(function(){window.location.reload(true);},1200);
		}
	});
}
</script>
 

<?php }else{?>
		<div class="bg-warp pannel_end">
			<div class="settled-state">
				<span><?=$shop_info['status']==1?'已审核通过':'正在审核中...';?></span>
			</div>
			<h3 class="ordertitle">感谢您在本店申请商家入驻！</h3>
			<div class="item">
				<div class="label">期望店铺名称：</div>
				<strong class="orange2"><?=$shop_info['title']?></strong>
			</div>
			<div class="item"><div class="label">店铺描述：</div><strong class="orange2"><?=$shop_info['des']?></strong></div>
			<div class="setted-footer">
				<a href="/">返回首页</a><a href="/home/index.html">用户中心</a>
			</div>
		</div>
<?php }?>
		<div class="bg-bottom"></div>
	</div>
</div>
<?php include T('seller_admin','footer');?>