<?php
if(empty($_userid)){
	showmessage('您还没有登录,请登录','/?m=wxsite&mod=login');
}
$acts=array(
	'index'=>1,
	'agree'=>1,
	'company'=>1,
	'shop'=>1,
);
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'index';
if(!isset($acts[$a])){
	$a='index';
}
$step=$db->findOne('select step from `web_step` where userid='.$_userid);
if(empty($step)){
	$step=1;
}
$cate=$db->getAll('select * from `web_cate` where parent=0');
$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
switch($a) {
	case 'index':
		if($ismobile||$_GET['t']==11){
			include T('wxsite/m/','apply');
		}else{
			include T('show/pc/','apply');
		}
		break;
	case 'agree':
		$stepinfo=$db->get_One('select * from `web_step` where userid='.$_userid);
		$db->query("insert into `web_step` (userid,step) values ('$_userid',2)");
		exit('ok');
		break;
	case 'company':
		$infos=array();
		$infos['userid']=intval($_userid);
		$infos['contactName']=trim($_POST['contactName']);
		if(empty($infos['contactName'])){
			showmessage('联系人姓名不能为空！','goback');
		}
		$infos['contactPhone']=trim($_POST['contactPhone']);
		if(empty($infos['contactPhone'])){
			showmessage('联系人电话不能为空！','goback');
		}
		$infos['companyName']=trim($_POST['companyName']);
		if(empty($infos['companyName'])){
			showmessage('公司名称不能为空！','goback');
		}
		$infos['legal_person_img']=trim($_POST['legal_person_img']);
		$infos['personalNo']=trim($_POST['personalNo']);
		if(empty($infos['personalNo'])){
			showmessage('法人身份证号不能为空！','goback');
		}
		$infos['license_fileImg']=trim($_POST['license_fileImg']);
		if(empty($infos['license_fileImg'])){
			showmessage('法人身份证照片不能为空！','goback');
		}
		$infos['legal_person']=trim($_POST['legal_person']);
		$infos['license_id']=trim($_POST['license_id']);
		$infos['company_adress']=trim($_POST['company_adress']);
		if(empty($infos['company_adress'])){
			showmessage('请填写公司地址！','goback');
		}
		$infos['company_contactTel']=trim($_POST['company_contactTel']);
		if(empty($infos['company_contactTel'])){
			showmessage('请填写公司联系电话！','goback');
		}
		$infos['organization_code']=trim($_POST['organization_code']);
		$infos['organization_img']=trim($_POST['organization_img']);
		$db->insert('web_apply_info',$infos);
		$db->query('update `web_step` set step=3 where userid='.$_userid);
		showmessage('资料提交成功！','/apply.html');
		break;
	case 'shop':
		$infos=array();
		$infos['title']=trim($_POST['shopname']);
		if(empty($infos['title'])){
			showmessage('店铺名称不能为空！','goback');
		}
		$infos['des']=trim($_POST['shopintro']);
		if(empty($infos['des'])){
			showmessage('店铺介绍不能为空！','goback');
		}
		$infos['userid']=$_userid;
		$infos['status']=0;
		$infos['addtime']=time();
		$oldinfo=$db->get_One('select * from `web_shop` where userid='.$_userid);
		if(!empty($oldinfo)){
			exit('您已经申请过了，不要重复申请！');
		}else{
			$db->insert('web_shop',$infos);
			$db->query('update `web_step` set step=4 where userid='.$_userid);
		}
		exit('ok');
		break;
}
