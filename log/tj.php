<?php
/**
 *	[QYIT!] (C)2001-2099 Comsenz Inc.
 *	Author	:	Zero.K
 *	Time		:	2015/10/26
 */
include('../util/origin.inc.php');
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'list';
switch($a) {
	case 'del':
		$id=intval($_POST['id']);
		$db->query("delete from wm_shop_recommend where id='$id'");
		echo 'ok';
		break;
	case 'list':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=20;
		$start=($page-1)*$offset;

		$catid=intval($_GET['cat']);
		$where='';
		if(!empty($catid)){
			$where=" and catid=$catid";
		}

		$nums=$db->get_one("select count(*) as num from wm_shop_recommend where 1 $where order by sort asc");
		$tjlist=$db->getAll("select * from wm_shop_recommend where 1 $where order by sort asc limit $start,$offset","gid");
		$gids=implode(',',array_keys($tjlist));
		if(!empty($gids)){
			$list=$db->getAll("select * from `wm_shop_goods` where id in($gids)",'id');
		}		
		
		if(!empty($list)){
			$uids=$bids=array();
			foreach($list as $k=>$v) {
				$uids[$v['userid']]=1;
				$bids[$v['bid']]=1;
			}
			$uidstr=implode(',',array_keys($uids));
			$uid_arr=$db->getAll('select * from `wm_shop_extra` where `userid` in ('.$uidstr.')','userid');
			$bidstr=implode(',',array_keys($bids));
			$bid_arr=$db->getAll('select * from `wm_brand` where `id` in ('.$bidstr.')','id');
		}
		$cates=$db->getAll("select * from wm_cate","id");
		$cates=c_tree($cates,'pid');
		if($_GET['t']==1){
			//print_r($cates);
			
		}
		$pagestr=pages_z($nums['num'], $page, $offset);
		include T('func','tj_list');
		break;
	case 'sort':
		$sort=$_POST['sort'];
		foreach($sort as $k=>$v) {
			$db->query("update wm_shop_recommend set sort=$v where id=$k");
		}
		showmessage('排序成功','goback');
		break;
}