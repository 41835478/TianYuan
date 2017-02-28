<?php
$head['title']='账户登录';
if(!empty($_SESSION['userid'])){
    show_mb_msg('您已经登录成功', '/');
    exit;
}
define('NOBANNER',true);
$head_pos_str='<span>&gt;</span><a href="#">账户登录</a>';
$forward = empty($_REQUEST['forward']) ? getRefer() : urlSafe($_REQUEST['forward']);
if(preg_match('/reg\.html/',$forward)){
    $forward = '/';
}
if(!empty($_POST)){
	$username = iconv('UTF-8', 'GBK', htmlspecialchars(trim($_POST['username'])));
	$password = iconv('UTF-8', 'GBK', $_POST['password']);
	$db->query('SET NAMES \'gbk\'');
	$r = $db->get_one('SELECT `uid`,`salt`,`password` FROM `ucenter`.`uc_members` WHERE `username`=\''.$username.'\'');
	$db->query('SET NAMES \'utf8\'');
	if(empty($r)){
		$msg = '账号错误';
	}else{
		$np = md5(md5($password).$r['salt']);
		if($np==$r['password']){
			$_SESSION['userid'] = intval($r['uid']);
			$_SESSION['username'] = $username;
			$auth = Auth::encode($_SESSION['userid']."\t".$r['password']);
			Cookie::set('Uin', $_SESSION['userid']);
			Cookie::set('Uas', $auth);
			show_mb_msg('登录成功', $forward);
		}else{
			$msg = '密码错误';
		}
	}
}
include T('passport','login_m');//T('passport','login');