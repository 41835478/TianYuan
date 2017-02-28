<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=5;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_goods_cart` where userid='.$_userid.' and status=1');
		$list=$db->getAll('select * from `web_shop_goods_cart` where userid='.$_userid.' and status=1');
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('admin','buy_log');
		break;
}