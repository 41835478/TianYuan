<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$sta_arr=array(
	1=>'待支付',
	2=>'已支付',
	3=>'已发货',
	4=>'已签收',
	5=>'退款中',
);
switch($c) {
	case 'index':
		$num_dfk=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status=1');//待付款
		$num_dfh=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status=2');//待发货
		$num_dsh=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status=3');//已发货
		$num_dpj=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status=4');//已签收待评价
		$num_tkz=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status=5');//退款
		$order=$db->getAll('select * from `web_order` where userid='.$_userid.' and status>0 order by updatetime desc,addtime desc limit 1',"id");
		$str=implode(',',array_keys($order));
		if(!empty($str)){
			$cart=$db->getAll("select * from web_shop_goods_cart where oid in ($str) and status!=-1 order by time desc",'gid');
			$carts=$db->getAll("select * from web_shop_goods_cart where oid in ($str) and status!=-1 order by time desc");
			if(!empty($carts)){
				foreach($carts as $k=>$v) {
					$_carts[$v['oid']][]=$v;
				}
			}
		}
		$_str=implode(',',array_keys($cart));
		if(!empty($_str)){
			$goods=$db->getAll("select * from web_shop_goods where id in($_str)","id");
		}
		
		$ord_sta=array(1=>'待支付',2=>'已支付');
		if(!empty($str)){
			$order_extra=$db->getAll("select * from web_order_extra where id in($str)","id");
		}
		$recommend=$db->getAll('select title,thumb,price,id,buy from `web_shop_goods` order by rand() limit 5');
		$myquan=$db->findOne('select count(*) from `web_user_quan` where userid='.$_userid);
		if($ismobile||$_GET['t']==11){
			include T('admin/m/','index');
		}else{
			include T('admin','index');
		}		
		break;
}