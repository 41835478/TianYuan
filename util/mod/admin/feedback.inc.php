<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		include T('admin','feedback');
		break;
	case 'save':
		$infos=array();
		$infos['title']=trim($_POST['title']);
		$infos['content']=trim($_POST['content']);
		$infos['userid']=$_userid;
		$infos['time']=time();
		$db->insert('web_feedback',$infos);
		exit('ok');
		break;
}