<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'restore'=>1,
	'dele'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}
switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_backup_log` order by time desc');
		include T('super_admin','backup');
		break;
	case 'add':
		$db->query('insert into `web_backup_log` (time) values ("'.time().'")');
		require(PHPCMS_ROOT.APP_DIR.'/util/core/DbManage.class.php');
		//------1. 数据库备份（导出）------------------------------------------------------------
		//分别是主机，用户名，密码，数据库名，数据库编码
		$db = new DBManage ( '61.133.41.22', 'op', '111111', 'web_mall', 'utf8' );
		// 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
		$db->backup ();
		
		//$db->restore ( PHPCMS_ROOT.APP_DIR.'/backup/'.date('YmdHis').'.sql');还原
		showmessage('数据库备份成功！','/?m=admin&a=backup');
		break;
	case 'restore':
		$id=intval($_REQUEST['id']);
		$log=$db->get_One('select * from `web_backup_log` where id='.$id);
		require(PHPCMS_ROOT.APP_DIR.'/util/core/DbManage.class.php');
		//------1. 数据库备份（导出）------------------------------------------------------------
		//分别是主机，用户名，密码，数据库名，数据库编码
		$db = new DBManage ( '61.133.41.22', 'op', '111111', 'web_mall', 'utf8' );
		// 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
		print_r(date('YmdHis',$log['time']));
		exit;
		$db->restore ( PHPCMS_ROOT.APP_DIR.'/backup/'.date('YmdHis',$log['time']).'_all_v1.sql');
		showmessage('数据库恢复成功！','/?m=admin&a=backup');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_backup_log` where id='.$id);
		showmessage('备份删除成功！','/?m=admin&a=backup');
		break;
}