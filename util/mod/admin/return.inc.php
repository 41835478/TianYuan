<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'cancel'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=5;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_return` where userid='.$_userid);
		$list=$db->getAll('select * from `web_return` where userid='.$_userid.' order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);
		if ($ismobile) {
			include T('show/m','order_tk');
		} else {
			include T('admin','return');
		}
		break;
	case 'cancel':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_return` where id='.$id);
		exit('ok');
		break;
}