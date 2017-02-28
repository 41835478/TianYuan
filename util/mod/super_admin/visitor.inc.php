<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=20;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_debug_time`");
		$list=$db->getAll('select * from `web_debug_time` order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','visitor');
		break;
}