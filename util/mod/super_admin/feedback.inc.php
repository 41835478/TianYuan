<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'view'=>1,
	'dele'=>1,
	'reply'=>1,
	'save'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_feedback`");
		$list=$db->getAll('select * from `web_feedback` order by time desc limit '.$start.','.$offset,'userid');
		$pagestr=pages_y($nums['num'], $page, $offset);	
		$listids=array_keys($list);
		$listidstr=implode(',',$listids);
		$ucs=$db->getAll('select `username`,`userid` from `ucenter` where `userid` in ('.$listidstr.')','userid');
		include T('super_admin','feedback');
		break;
	case 'view':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_feedback` set status=1 where id='.$id);
		$info=$db->get_One('select * from `web_feedback` where id='.$id);
		include T('super_admin','feedback_view');
		break;
	case 'reply':
		$id=intval($_REQUEST['id']);
		include T('super_admin','feedback_reply');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_feedback` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=intval($_REQUEST['id']);
		$reply=trim($_POST['reply']);
		$time=time();
		$db->query("update `web_feedback` set reply='$reply',replytime='$time' where id=$id");
		showmessage('回复成功','goback');
		break;
}