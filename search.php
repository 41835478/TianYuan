<?php
define ( 'Q_DIR', dirname(__FILE__));
include(Q_DIR.'/util/origin.inc.php');
if($_userid){//登录用户的
	$all_cart_num=$db->get_one('select sum(`num`) as ao from `web_shop_goods_cart` where `userid`='.$_userid.' and `oid`=0 and `status`=0');	
	$all_cart_num=intval($all_cart_num['ao']);
	$cartnum=min(99,max(0,$all_cart_num));
}else{//未登录
	$cart = unserialize(Cookie::get('cart'));
	$cart_tmp=array();
	if(!empty($cart)){
		foreach($cart as $k=>$v) {
			if($k>0){
				$cart_tmp[$k]=array('gid'=>intval($k),'num'=>intval($v));
			}
		}
	}
	$cartnum=0;
	if(!empty($cart_tmp)){
		$all_gidstr=implode(',',array_keys($cart_tmp));
		$all_goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$all_gidstr.')','id');
		if(!empty($all_goods)){
			foreach($all_goods as $k=>$v) {
				$cartnum+=max(1,$cart_tmp[$k]['num']);
			}
		}
		$cartnum=min(99,max(0,$cartnum));
	}
}

$key=trim($_REQUEST['key']);
$page=isset($_GET['page'])?intval($_GET['page']):1;
$page=max(1,$page);
$offset=28;
$start=($page-1)*$offset;
$nums=$db->get_one("select count(*) as num from `web_shop_goods` where title like '%$key%'");
$list=$db->getAll("select * from `web_shop_goods` where title like '%$key%' limit $start,$offset");
$pagestr=pages_mz($nums['num'], $page, $offset,'/list/'.$cateid.'.html?page={$page}');

static $mobilebrowser_list =array('iphone', 'android', 'phone', 'mobile', 'wap', 'netfront', 'java', 'opera mobi', 'opera mini',
				'ucweb', 'windows ce', 'symbian', 'series', 'webos', 'sony', 'blackberry', 'dopod', 'nokia', 'samsung','lenovo',
				'palmsource', 'xda', 'pieplus', 'meizu', 'midp', 'cldc', 'motorola', 'foma', 'docomo', 'up.browser',
				'up.link', 'blazer', 'helio', 'hosin', 'huawei', 'novarra', 'coolpad', 'webos', 'techfaith', 'palmsource',
				'alcatel', 'amoi', 'ktouch', 'nexian', 'ericsson', 'philips', 'sagem', 'wellcom', 'bunjalloo', 'maui', 'smartphone',
				'iemobile', 'spice', 'bird', 'zte-', 'longcos', 'pantech', 'gionee', 'portalmmm', 'jig browser', 'hiptop',
				'benq', 'haier', '^lct', '320x320', '240x320', '176x220');
$pad_list = array('pad', 'gt-p1000');
$useragent = strtolower(isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'');
//$useragent=str_ireplace('coolpad','',$useragent);
if(dstrpos($useragent, $pad_list)) {
	$ismobile = true;
} else {
	$ismobile = false;
}
if(dstrpos($useragent, $mobilebrowser_list)) {
	$ismobile = true;
} else {
	$ismobile = false;
}

if ($ismobile) {
	include T('show/m/','list');
} else {
	include T('show/pc/','list');
}

