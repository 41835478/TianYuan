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

switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_notice`");
		$list=$db->getAll('select * from `web_notice` order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','notice_list');
		break;
	case 'add':
		include T('super_admin','notice_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_notice` where id='.$id);
		include T('super_admin','notice_add');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_notice` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_notice` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$content=trim($_POST['content']);
		$time=time();
		if($id>0){
			$db->query("update `web_notice` set title='$title',content='$content' where id='$id'");
		}else{
			$db->query("insert into `web_notice` (title,content,time) values ('$title','$content','$time')");
		}
		exit('ok');
		break;
}