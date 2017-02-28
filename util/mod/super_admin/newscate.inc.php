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
		$list=$db->getAll('select * from `web_news_cate`');
		include T('super_admin','news_cate_list');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_news_cate` where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_news_cate` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		if($id>0){
			$db->query("update `web_news_cate` set title='$title' where id='$id'");
		}else{
			$db->query("insert into `web_news_cate` (title) values ('$title')");
		}
		exit('ok');
		break;
}