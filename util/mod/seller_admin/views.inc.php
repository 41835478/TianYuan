<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
		$goods_total_num=$db->findOne('select sum(view) from `web_shop_goods` where userid='.$_userid);
		$goods=$db->getAll("select * from web_shop_goods where userid='$_userid' and status=1","id");
		$ids=implode(',',array_keys($goods));
		if(!empty($ids)){
			$deal_total_num=$db->findOne("select count(*) as num from web_shop_goods_cart where gid in($ids) and status=1");
		}
		include T('seller_admin','shop_views');
		break;
}