<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
$c_arr=array('list'=>1,'del'=>1,'mark'=>1,'ucsta'=>1,'ucsave'=>1,'fahuo'=>1,'fhsave'=>1);
if(!isset($c_arr[$c])){
	$c='list';
}

switch($c){
	case 'fahuo':
		$oid=intval($_REQUEST['oid']); 
		$gid=intval($_REQUEST['gid']);
		$ginfo=$db->get_One('select title from `web_shop_goods` where id='.$gid);
		$order=$db->get_One('select * from `web_order` where id='.$oid);
		$info=$db->get_One('select * from `web_express_info` where oid='.$oid);
		$order_extra=$db->get_One('select * from `web_order_extra` where id='.$oid);
		$extra=unserialize($order_extra['extra']);
		$address=unserialize($extra['address']['address']);
		include T('seller_admin','order_fahuo');
		break;
	case 'fhsave':
		$infos=array();
		$infos['oid']=intval($_REQUEST['oid']);
		$infos['gid']=intval($_REQUEST['gid']);
		$oldinfo=$db->get_One('select * from `web_express_info` where oid='.$infos['oid'].' and gid='.$infos['gid']);
		$infos['userid']=intval($_userid);
		$infos['exp_no']=trim($_REQUEST['exp_no']);
		$infos['exp_company']=trim($_REQUEST['exp_company']);
		$infos['time']=time();
		if (empty($oldinfo)) {
			$db->insert('web_express_info',$infos);
		}else{
			$db->update('web_express_info',$infos,'oid='.$infos['oid'].' and gid='.$infos['gid']);
		} 
		$db->query('update `web_shop_goods_cart` set dili_sta=1 where gid ='.$gid.' and oid='.$infos['oid']);//把商品属于该商户的订单设为已发货状态
		showmessage('快递信息保存成功！','/home/order.html');
		break;
	case 'list':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$goods=$db->getAll("select * from web_shop_goods where userid='$_userid' and status=1","id");
		$ids=implode(',',array_keys($goods));
		if(!empty($ids)){
			$nums=$db->get_one("select count(*) as num from web_shop_goods_cart where gid in($ids) and status=1");
			$carts=$db->getAll("select * from web_shop_goods_cart where gid in($ids) and status=1 limit $start,$offset");
		}
		foreach($carts as $k=>$v) {
			$oid[$v['oid']]=1;
		}
		$oids=implode(',',array_keys($oid));
		if(!empty($oids)){
			$orders=$db->getAll("select * from web_order where id in ($oids)","id");
		}
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('seller_admin','order_list');
		break;
	case 'del':
		$id=intval($_REQUEST['id']);
		$db->query("update web_shop_goods_cart set status=-1 where id=$id");
		showmessage('删除成功','/?m=admin&a=order&c=list');
		break;
	case 'mark':
		$id=$_POST['id'];
        $content=trim($_POST['content']);
        $time=TIME;
        $con_arr=$db->get_one('select `demo` from web_shop_goods_cart where `id`='.$id);
        if(isset($con_arr['demo'])){
            $con_arr=unserialize($con_arr['demo']);
        }else{
			$con_arr=array();
		}
        $con_arr=empty($con_arr)?array(0=>array('content'=>$content,'time'=>$time)):array_merge(array(0=>array('content'=>$content,'time'=>$time)),$con_arr);
        $con_arr=serialize($con_arr);
        $db->query('update web_shop_goods_cart set `demo`=\''.$con_arr.'\' where `id`='.$id);
        die('ok');
		break;
	case 'ucsta':
		$oid=intval($_REQUEST['oid']);
		$id=intval($_REQUEST['id']);
		$order=$db->get_one("select * from web_order where id='$oid'");
		$order_extra=$db->get_one("select * from web_order_extra where id='$oid'");
		$cart=$db->get_one("select * from web_shop_goods_cart where id='$id'");
		$extra=unserialize($order_extra['extra']);
		$info=unserialize($extra['address']['address']);
		$deli_arr=array(0=>'未发货',1=>'已发货');
		include T('admin','uc_sta');
		break;
	case 'ucsave':
		$sta=intval($_POST['sta']);
		$id=intval($_POST['id']);
		$db->query("update web_shop_goods_cart set dili_sta=$sta where id='$id'");
		echo 'ok';
		break;
}