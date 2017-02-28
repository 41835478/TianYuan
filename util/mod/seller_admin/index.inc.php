<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
		$tj=$db->findOne('select count(*) from `web_shop_goods` where userid='.$_userid.' and `tj`=1 and `isdel`=0');//商品推荐
		$dsj=$db->findOne('select count(*) from `web_shop_goods` where userid='.$_userid.' and `status`=0 and `isdel`=0');//等待上架的商品
		$onsale=$db->findOne('select count(*) from `web_shop_goods` where userid='.$_userid.' and `isdel`=0');//在售商品
		$unpay=$db->findOne('select count(*) from `web_order` where userid='.$_userid.' and `status`=1');//待支付订单
		$notice=$db->getAll('select * from `web_notice` where status=1 order by time desc');//系统公告

		$allgoods=$db->getAll("select id from `web_shop_goods` where userid='$_userid' and status=1 and isdel=0","id");
		$gid_str=implode(',',array_keys($allgoods)); 

		$dpj=$db->findOne('select count(*) from `web_shop_goods_cart` where gid in ('.$gid_str.') and com_sta=1');//待评价商品
		$msg=$db->findOne('select count(*) from `web_shop_comments` where uid='.$_userid.' and reply =0');//待回复留言
		$allmsg=$db->findOne('select count(*) from `web_shop_comments` where uid='.$_userid);
		$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
		$goods_total_num=$db->findOne('select sum(view) from `web_shop_goods` where userid='.$_userid);
		$goods=$db->getAll("select * from web_shop_goods where userid='$_userid' and status=1","id");
		$ids=implode(',',array_keys($goods));
		if(!empty($ids)){
			$deal_total_num=$db->findOne("select count(*) as num from web_shop_goods_cart where gid in($ids) and status=1");
		}
		$cash=$db->getAll('select sum(fee+trans_fee) as cash from `web_trade_log` where status=1 and userid='.$_userid);
		include T('seller_admin','index');
		break;
}