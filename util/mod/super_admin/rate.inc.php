<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$info=$db->get_One('select * from `web_score_config` where userid='.$_userid);
		include T('super_admin','rate');
		break;
	case 'save':
		$oldinfo=$db->get_One('select * from `web_score_config` where userid='.$_userid);
		$infos=array();
		$infos['userid']=$_userid;
		$infos['yuan']=trim($_POST['yuan']);
		$infos['fan']=trim($_POST['fan']);
		$infos['login']=trim($_POST['login']);
		$infos['invite']=trim($_POST['invite']);
		if(!empty($oldinfo)){
			$db->update('web_score_config',$infos,'userid='.$_userid);
		}else{
			$db->insert('web_score_config',$infos);
		}
		exit('ok');
		break;
}