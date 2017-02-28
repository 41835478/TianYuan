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
$cates=$db->getAll('select * from `web_news_cate`','id');
switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_fx_apply_info`");
		$list=$db->getAll('select * from `web_fx_apply_info` order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','member_list');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_fx_apply_info` set status=1 where userid='.$id);
		$db->query('update `ucenter` set fx=1 where userid='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_fx_apply_info` where userid='.$id);
		exit('ok');
		break;
}