<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$orders=$db->getAll('select * from `web_shop_goods_cart` where userid='.$_userid);
		foreach ($orders as $k => $v) {
			$orders[$k]['goods_name']=$db->findOne('select `title` from `web_shop_goods` where id='.$v['gid']);
		}
		include T('seller_admin','stats_index');
		break;
}