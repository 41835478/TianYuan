<?php

//微网展示入口
$mod_arr=array(
	'index'=>1,//商城首页
	'list'=>1,//商品列表
	'show'=>1,//商品详情
	'shop'=>1,//商铺首页
	'cart'=>1,//购物车
	'logout'=>1,//退出
	'enter'=>1,
	'ajax'=>1,
	'url'=>1,//跳转
	'login'=>1,
	'register'=>1,
	'reg'=>1,
	'address'=>1,
	'maddress'=>1,
	'addorder'=>1,
	'order'=>1,
	'search'=>1,
	'join'=>1,
	'list_show'=>1,//手机列表详细
	'newslist'=>1,//新闻帮助
	'news'=>1,//新闻帮助详细页
	'apply'=>1,//申请入驻
	'cate'=>1,//商家商品列表
	'allcate'=>1,
	'mallpay'=>1,//商家商品列表
	'wxpay'=>1
);//模块白名单

$this_mod=isset($_REQUEST['mod'])?trim($_REQUEST['mod']):'index';

if(!isset($mod_arr[$this_mod])){
	$this_mod='index';
}


if($_userid){//登录用户的
	$all_cart_num=$db->get_one('select sum(`num`) as ao from `web_shop_goods_cart` where `userid`='.$_userid.' and `oid`=0 and `status`=0');	
	$all_cart_num=intval($all_cart_num['ao']);
	$cartnum=min(99,max(0,$all_cart_num));
	$user=$db->get_one('select * from `ucenter` where `userid`='.$_userid);//用户信息
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

$links=$db->getAll('select * from `web_links` where userid=0 order by pos asc');
$ismobile=$chk_mobile;

include M('show',$this_mod);