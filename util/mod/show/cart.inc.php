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
					$db->insert('`web_shop_goods_cart`',array(
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
$acts=array('index'=>true,'del'=>true,'dl'=>true,'dlcare'=>true,'delcare'=>1,'dlcares'=>1,);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}
switch($c){

	case 'index':
		$cart_info=array();
		$num=0;
		if(!empty($cart)){
			$gidstr=implode(',',array_keys($cart));
			$goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$gidstr.')','id');
			$all_pids=array();
			foreach($cart as $k=>$v) {
				if(isset($goods[$k])){
					$num+=intval($v['num']);
					$v['good']=$goods[$k];
					$all_pids[$v['good']['spid']]=1;
					$cart_info[$v['good']['userid']][]=$v;
				}
			}
			if(!empty($all_pids)){
				$all_pidstr=implode(',',array_keys($all_pids));
				//$all_extra_rel=$db->getAll('select * from `wm_shop_goods_rel` where `gid` in ('.$all_pidstr.')  order by `sort` asc,`id` asc','gid',true);	
				
			}
			if(!empty($cart_info)){
				$uidstr=implode(',',array_keys($cart_info));
				$uidarr=$db->getAll('select * from `web_shop_extra` where `userid` in ('.$uidstr.')','userid');
			}
		}
		if($ismobile){
			include T('show/m/','cart');
		}else{
			include T('show/pc/','cart');
		}
		
		break;
	case 'del':
		$strs=strip_tags($_REQUEST['strs']);
		//$strs = rtrim($strs, ',');
		echo $strs;
		$arr=explode(',',$strs);
		array_pop($arr);
		var_dump($arr);
		if($_userid){
			foreach($arr as $k=>$v) {
				$v=intval($v);
				$db->query("update `web_shop_goods_cart` set `status`=-1 where `gid`=$v and `userid`={$_userid} and `oid`=0");
			}
		}else{
			$cart = unserialize(Cookie::get('cart'));
			foreach($arr as $k=>$v) {
				$v=intval($v);
				if(isset($cart[$v])){
					unset($cart[$v]);
				}
			}
			$cartstr=serialize($cart);
			Cookie::set('cart',$cartstr,864000);
		}
		echo 'ok';
		break;
	case 'dl':
		$id=intval($_POST['id']);
		if($_userid){
			$goods=$db->get_one('select * from `web_shop_goods_cart` where `gid`='.$id.' and `userid`='.$_userid.' and `oid`=0');
			if(empty($goods)){
				exit('404');
			}
			$db->query("update `web_shop_goods_cart` set `status`=-1 where `gid`={$id} and `userid`={$_userid} and `oid`=0");
			exit('ok');
		}else{
			$cart = unserialize(Cookie::get('cart'));
			if(isset($cart[$id])){
				unset($cart[$id]);
			}
			$cartstr=serialize($cart);
			Cookie::set('cart',$cartstr,864000);
		}
		exit('ok');
		break;
	case 'dlcare':
		$id=intval($_POST['id']);
		if($_userid){
			$goods=$db->get_one('select * from `web_shop_goods_cart`  where `gid`='.$id.' and `userid`='.$_userid.' and `oid`=0');
			if(empty($goods)){
				exit('404');
			}
			$db->query("update `web_shop_goods_cart` set `status`=-1 where `gid`={$id} and `userid`={$_userid} and `oid`=0");
			$db->insert('wm_shop_care',array(
				'dataid'=>$id,
				'userid'=>$_userid,
				'type'=>1,
				'addtime'=>TIME
			),0,0,1);
			exit('ok');
		}else{
			exit('503');
		}
		break;
	/*自己添加用于手机购物车点击关注 不会移走开始*/
	case 'dlcares':
		$id=intval($_POST['id']);
		if($_userid){
			$goods=$db->get_one('select * from `web_shop_goods_cart`  where `gid`='.$id.' and `userid`='.$_userid.' and `oid`=0');
			if(empty($goods)){
				exit('404');
			}
			
			$db->insert('wm_shop_care',array(
				'dataid'=>$id,
				'userid'=>$_userid,
				'type'=>1,
				'addtime'=>TIME
			),0,0,1);
			exit('ok');
		}else{
			exit('503');
		}
		break;
	/*自己添加用于手机购物车点击关注 不会移走结束*/	
	
	case 'delcare':
		$strs=strip_tags($_REQUEST['strs']);
		$arr=explode(',',$strs);
		if($_userid){
			$gids=array();
			foreach($arr as $k=>$v) {
				$v=intval($v);
				if($v){
					$gids[$v]=1;
				}
			}
			if(!empty($gids)){
				$gidstr=implode(',',array_keys($gids));
				$all_gids=$db->getAll('select * from `web_shop_goods_cart` where `gid` in ('.$gidstr.') and `userid`='.$_userid.' and `oid`=0','gid');
				if(!empty($all_gids)){
					foreach($all_gids as $k=>$v) {
						$db->insert('wm_shop_care',array(
							'dataid'=>$k,
							'userid'=>$_userid,
							'type'=>1,
							'addtime'=>TIME
						),0,0,1);
					}
					$db->query("update wm_shop_goods_cart set `status`=-1 where `gid` in ({$gidstr}) and `userid`={$_userid} and `oid`=0");
				}
			}
			exit('ok');
		}else{
			exit('503');
		}
		break;
}