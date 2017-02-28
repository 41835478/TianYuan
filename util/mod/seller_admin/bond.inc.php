<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'creat'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
		include T('seller_admin','bond');
		break;
	case 'creat':
		$old_bond_order=$db->get_One('select * from `web_order` where userid='.$_userid.' and is_bond=1');
		if(!empty($old_bond_order)){
			$oid=$old_bond_order['id'];
		}else{
			$no='MO'.date("ymdHis").mt_rand(100,999);
			$time=TIME;
			$order=array(
				'userid'=>$_userid,
				'no'=>$no,
				'status'=>1,
				'fee'=>'1000.00',
				'trans_fee'=>0,
				'discount'=>0,
				'quan'=>0,
				'quanid'=>0,
				'addtime'=>$time,
				'updatetime'=>$time,
				'is_bond'=>1
			);

			$oid=$db->insert('web_order',$order,1);
		}		
		echo $oid;
		break;
}