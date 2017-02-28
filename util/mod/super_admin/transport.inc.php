<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'dele'=>1,'save'=>1,'kd'=>1,'df'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$transinfo=$db->get_One('select * from `web_transport` where userid='.$_userid);
switch($c) {
	case 'index':
		//$list=$db->getAll('select * from `web_shop_nav` where userid='.$_userid.' order by pos asc,addtime desc');
		include T('super_admin','transport_kd');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_nav` where id='.$id);
		exit('ok');
		break;
	case 'save':
		
		$infos=array();
		$infos['userid']=intval($_userid);
		$infos['distance']=trim($_POST['distance']);
		$infos['first']=trim($_POST['first']);
		$infos['plus']=trim($_POST['plus']);
		$infos['one']=trim($_POST['one']);
		$addtime=time();
		if(!empty($transinfo)){
			$db->update('web_transport',$infos,'userid='.$_userid);
		}else{
			$db->insert('web_transport',$infos);
		}
		exit('ok');
		break;
	case 'kd'://快递
		include T('super_admin','transport_kd');
		break;
	case 'df'://到付
		include T('super_admin','transport_df');
		break;
}