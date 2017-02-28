<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'sx'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$tp=trim($_REQUEST['tp']);
		if(empty($tp)){//系统消息
			$list=$db->getAll('select * from `web_msg` where userid='.$_userid.' and type=0 order by time desc');
		}else{
			$list=$db->getAll('select * from `web_msg` where userid='.$_userid.' and type=1 order by time desc');
		}
		include T('admin','msg');
		break;
}