<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1,
	'group'=>1,
	'savegroup'=>1,
	'delgroup'=>1,
	'resetpass'=>1,
	);
if(!isset($c_arr[$c])){
	$c='index';
}
$group=array(
	0=>'个人会员',
	1=>'超级管理员',
	2=>'商铺管理员'
);
switch($c) {
	case 'resetpass':
		$id=intval($_REQUEST['id']);
		$db->query('update `ucenter` set password="e10adc3949ba59abbe56e057f20f883e" where userid='.$id);//密码重置为123456
		exit('ok');
		break;
	case 'group':
		include T('super_admin','user_group');
		break;
	case 'savegroup':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		if($id>0){
			$db->query("update `user_group` set title='$title' where id='$id'");
		}else{
			$db->query("insert into `user_group` (title) values ('$title')");
		}
		exit('ok');
		break;
	case 'delgroup':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `user_group` where id='.$id);
		exit('ok');
		break;
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$name=trim($_REQUEST['name']);
		$type=intval($_REQUEST['type']);
		if(isset($type)){
			$where='where 1 and `type`='.$type;
		}else{
			$where='where 1';
		}
		if(!empty($name)){
			$nums=$db->get_one("select count(*) as num from `ucenter` $where and username like '%$name%'");
			$list=$db->getAll('select * from `ucenter`  '.$where.' and username like "%'.$name.'%" limit '.$start.','.$offset);
		}else{
			$nums=$db->get_one("select count(*) as num from `ucenter` $where");
			$list=$db->getAll('select * from `ucenter` '.$where.' limit '.$start.','.$offset);
		}
		
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','user_list');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `ucenter` where userid='.$id);
		foreach($group as $k=>$v) {
			if($v['id']==$info['type']){
				$sel='selected';
			}else{
				$sel='';
			}
            $op.='<option value="'.$v['id'].'" '.$sel.' >'.$v['title'].'</option>';
        }
		include T('super_admin','user_add');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `ucenter` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$type=intval($_POST['type']);
		$db->query('update `ucenter`  set type='.$type.' where userid='.$id);
		showmessage('设置成功','/?m=admin&a=user');
		break;
}