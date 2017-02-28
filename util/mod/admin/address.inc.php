<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$c_title='收货地址管理';
switch($c) {
	case 'index':
		
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid);
		if ($ismobile) {
			include T('show/m','address_list');
		} else {
			include T('admin','addorder');
		}
		break;
}