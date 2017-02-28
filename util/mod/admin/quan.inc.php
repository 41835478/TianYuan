<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'dele'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$myquan=$db->getAll('select * from `web_user_quan` where userid='.$_userid);
		
		if($ismobile){
			include T('show/m/','quan');
		}else{
			include T('admin','quan');
		}
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_user_quan` where id='.$id);
		exit('ok');
		break;
}