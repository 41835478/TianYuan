<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
switch($c) {
	case 'index':
		include T('seller_admin','password');
		break;
	case 'save':
		$newpass=$_POST['new_pass'];
		$chkpass=$_POST['chk_pass'];
		if(empty($newpass)||empty($chkpass)){
			showmessage('密码不能为空！','/?m=admin&a=newpass');
		}
		if($newpass!=$chkpass){
			showmessage('两次密码输入不一致！','/?m=admin&a=newpass');
		}
		$newpass=MD5($newpass);
        $db->query("update `ucenter` set pass='$newpass' where userid='$_userid'");
        showmessage('密码修改成功','/?m=admin&a=info');
		break;
}