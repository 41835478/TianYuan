<?php
$cart = unserialize(Cookie::get('cart'));
$cart_tmp=array();
foreach($cart as $k=>$v) {
	if($k>0){
		$cart_tmp[$k]=array('gid'=>intval($k),'num'=>intval($v));
	}
}
$cart =$cart_tmp;
if($_userid){
	if(!empty($cart_tmp)){
		$all_gidstr=implode(',',array_keys($cart_tmp));
		$all_goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$all_gidstr.')','id');
		if(!empty($all_goods)){
			$cart_gidstr=implode(',',array_keys($all_goods));
			$cart_tmps=$db->get_one('select * from `web_shop_goods_cart` where `oid`=0 and `userid`='.$_userid.' and `gid` in ('.$cart_gidstr.')','gid');
			foreach($all_goods as $k=>$v) {
				$num=max(1,intval($cart_tmp[$k]['num']));
				if(isset($cart_tmps[$k])){
					$db->query('update `web_shop_goods_cart` set `num`=`num`+'.$num.' where `id`='.$cart_tmps[$k]['id']);
				}else{				
					$db->insert('wm_shop_goods_cart',array(
						'oid'=>0,
						'userid'=>$_userid,
						'gid'=>$k,
						'fee'=>$v['price'],
						'num'=>$num,
						'time'=>TIME
					));
				}
			}
		}
		Cookie::delete('cart');
	}
	$cart=$db->getAll('select * from `web_shop_goods_cart` where `oid`=0 and `userid`='.$_userid.' and status=0 order by id desc','gid');
}

$cartCount = 0;
foreach ($cart as $val) {
	$cartCount = $cartCount + $val['num'];
}

$acts=array('goods'=>true,'shop'=>true,'unfav'=>true);
$c=isset($_REQUEST['org'])?trim($_REQUEST['org']):'goods';
if(!isset($acts[$c])){
	$c='goods';
}

switch($c){
	case 'goods':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=20;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_care` where userid='.$_userid.' and type=1');
		$favgoods=$db->getAll('select * from `web_shop_care` where userid='.$_userid.' and type=1 order by addtime desc limit '.$start.','.$offset);
		$pagestr=pages_z($nums['num'], $page, $offset);
		if($ismobile||$_GET['t']==11){
			include T('show/m/','mark');
		}else{
			include T('admin','mark');
		}
		break;
	case 'shop':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=20;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_care` where userid='.$_userid.' and type=2');
		$favshop=$db->getAll('select * from `web_shop_care` where userid='.$_userid.' and type=2 order by addtime desc limit '.$start.','.$offset);
		$pagestr=pages_z($nums['num'], $page, $offset);
		if($ismobile||$_GET['t']==11){
			include T('show/m/','mark_shop');
		}else{
			include T('admin','mark_shop');
		}
		break;
	case 'unfav':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_care` where id='.$id);
		exit('ok');
		break;
}