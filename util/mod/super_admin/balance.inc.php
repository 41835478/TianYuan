<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'tixian'=>1,
	'edit'=>1,
	'paylog'=>1,
	'check'=>1,
	'recharge'=>1,
	'refund'=>1,
	'cfrefond'=>1,
	'okcash'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}
switch($c) {
	case 'refund':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_return`");
		$list=$db->getAll('select * from `web_return` order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','refund');
		break;
	case 'cfrefond':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_return` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'index':
		$total_cash=$db->findOne('select sum(fee) from `web_order` where status>1');
		include T('super_admin','balance');
		break;
	case 'tixian':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_cash`");
		$list=$db->getAll('select * from `web_cash` order by time desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','tixian');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_cash` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$content=trim($_POST['content']);
		$cateid=intval($_POST['cateid']);
		$time=time();
		if($id>0){
			$db->query("update `web_news` set cateid='$cateid',title='$title',content='$content' where id='$id'");
			$msg='更新成功';
		}else{
			$db->query("insert into `web_news` (cateid,title,content,addtime) values ('$cateid','$title','$content','$time')");
			$msg='发布成功';
		}
		showmessage($msg,'/?m=admin&a=news');
		break;
	case 'recharge':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_order` where is_bond=1");
		$list=$db->getAll('select * from `web_order` where is_bond=1 order by addtime desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','charge_list');
		break;
	case 'okcash'://确认提现
		$id=intval($_REQUEST['id']);
		$db->query('update `web_cash` set status=1 where id='.$id);
		exit('ok');
		break;
}