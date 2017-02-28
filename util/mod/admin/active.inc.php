<?php
//售后服务
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'savereturn'=>1,
	'save'=>1,
	'sales'=>1,
	'savesales'=>1,
	'recive'=>1
);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'recive':
		$gid=intval($_REQUEST['gid']);
		$oid=intval($_REQUEST['oid']);
		$db->query('update `web_shop_goods_cart` set recieve=1 where oid='.$oid.' and gid='.$gid.' and userid='.$_userid);
		$db->query('update `web_order` set status=4 where id='.$oid.' and userid='.$_userid);
		exit('ok');
		break;
	case 'index'://申请退款
		$oid=intval($_REQUEST['oid']);
		$order=$db->get_One('select * from `web_order` where id='.$oid);
		include T('admin','refund');
		break;
	case 'savereturn':
		$infos=array();
		$infos['userid']=$_userid;
		$infos['oid']=intval($_POST['oid']);
		$infos['type']=intval($_POST['type']);
		$infos['reason']=intval($_POST['reason']);
		$infos['way']=intval($_POST['way']);
		$infos['account']=trim($_POST['account']);
		$infos['extra']=trim($_POST['extra']);
		$infos['tel']=trim($_POST['tel']);
		$infos['time']=time();
		$old_info=$db->get_One('select * from `web_return` where oid='.$infos['oid']);
		if(empty($old_info)){
			$db->insert('web_return',$infos);
			exit('ok');
		}else{
			exit('该订单您已经申请过了');
		}
		break;
	case 'sales':
		$oid=intval($_REQUEST['oid']);
		$order=$db->get_One('select * from `web_order` where id='.$oid);
		$gid=intval($_REQUEST['gid']);
		$good=$db->get_One('select * from `web_shop_goods` where id='.$gid);
		$shop=$db->get_One('select * from `web_shop` where userid='.$good['userid']);
		include T('admin','sales');
		break;
	case 'savesales':
		$infos=array();
		$infos['userid']=$_userid;
		$infos['gid']=intval($_POST['gid']);
		$infos['oid']=intval($_POST['oid']);
		$infos['type']=intval($_POST['type']);
		$infos['extra']=trim($_POST['extra']);
		$infos['time']=time();
		$old_info=$db->get_One('select * from `web_sales` where gid='.$infos['gid'].' and userid='.$_userid.' and oid='.$infos['oid']);
		if(empty($old_info)){
			$db->insert('web_sales',$infos);
			exit('ok');
		}else{
			exit('您已经申请过了');
		}
		break;
}