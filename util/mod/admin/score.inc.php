<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$tp_arr = array(
	1 => '用户注册',
	2 => '购物消费',
	3 => '推荐好友'

);
switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=20;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_score_log` where userid='.$_userid);
		$log=$db->getAll('select * from `web_score_log` where userid='.$_userid.' order by time desc limit '.$start.','.$offset);
		$pagestr=pages_z($nums['num'], $page, $offset);
		if($ismobile){
			include T('show/m/','score');
		}else{
			include T('admin','score');
		}
		
		break;
}