<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'del'=>1,
	'save'=>1,
	'kd'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}
$cates=$db->getAll('select * from `web_news_cate`','id');
switch($c) {
	case 'del':
		$id=intval($_POST['id']);
		$db->query("update web_shop_goods_cart set status=-1 where oid=$id");
		$db->query("update `web_order` set status=-1 where id=$id");
		exit('ok');
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=5;
		$start=($page-1)*$offset;
		$total=$db->get_one('select count(*) as num from `web_order` where status>0');
		$num_dfk=$db->get_one('select count(*) as num from `web_order` where status=1');//待付款
		$num_dfh=$db->get_one('select count(*) as num from `web_order` where status=2');//待发货
		$num_dsh=$db->get_one('select count(*) as num from `web_order` where status=3');//已发货
		$num_dpj=$db->get_one('select count(*) as num from `web_order` where status=4');//已签收待评价
		$num_tkz=$db->get_one('select count(*) as num from `web_order` where status=5');//退款
		if($_GET['org']=='dfk'){//待付款
			$nums=$db->get_one('select count(*) as num from `web_order` where status=1');
			$order=$db->getAll('select * from `web_order` where status=1 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
            
			foreach( $order as $k=>$v) {
				$allpay+=$v['fee'];	
			}

		}elseif($_GET['org']=='dfh'){
			$nums=$db->get_one('select count(*) as num from `web_order` where status=2');
			$order=$db->getAll('select * from `web_order` where status=2 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
		}elseif($_GET['org']=='yfh'){
			$nums=$db->get_one('select count(*) as num from `web_order` where status=3');
			$order=$db->getAll('select *from `web_order` where status=3 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
		}elseif($_GET['org']=='ysh'){//已签收待评价
			$nums=$db->get_one('select count(*) as num from `web_order` where status=4');
			$order=$db->getAll('select *from `web_order` where status=4 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
		}elseif($_GET['org']=='ytk'){//退款
			$nums=$db->get_one('select count(*) as num from `web_order` where status=5');
			$order=$db->getAll('select *from `web_order` where status=5 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
		}else{
			$nums=$db->get_one('select count(*) as num from `web_order` where status>0');
			$order=$db->getAll('select * from `web_order` where status>0 order by updatetime desc,addtime desc limit '.$start.','.$offset,"id");
		}
		$str=implode(',',array_keys($order));
		if(!empty($str)){
			$cart=$db->getAll("select * from web_shop_goods_cart where oid in ($str) and status!=-1 order by time desc",'gid');
			$carts=$db->getAll("select * from web_shop_goods_cart where oid in ($str) and status!=-1 order by time desc");
			if(!empty($carts)){
				foreach($carts as $k=>$v) {
					$_carts[$v['oid']][]=$v;
				}
			}
			$_str=implode(',',array_keys($cart));
			if(!empty($_str)){
				$goods=$db->getAll("select * from web_shop_goods where id in($_str)","id");
			}		
		}
		$ord_sta=array(1=>'待支付',2=>'已支付');
		if(!empty($str)){
			$order_extra=$db->getAll("select * from web_order_extra where id in($str)","id");
		}
		$comments=$db->getAll("select * from web_shop_comments where userid=$_userid and pid=0","cid");
		$cids=array_keys($comments);
		$pagestr=pages_y($nums['num'], $page, $offset);
		include T('super_admin','order_list');
		break;
	case 'kd':
		$kd_arr=array(
			'顺丰速运'=>'shunfeng',
			'百世汇通'=>'huitongkuaidi',
			'德邦物流'=>'debangwuliu',
			'EMS'=>'ems',
			'国通快递'=>'guotongkuaidi',
			'汇通快运'=>'huitongkuaidi',
			'申通快递'=>'shentong',
			'如风达快递'=>'rufengda',
			'天天快递'=>'tiantian',
			'圆通快递'=>'yuantong',
			'韵达快递'=>'yunda',
			'中通快递'=>'zhongtong'
		);
		$typeCom =$kd_arr[$_REQUEST["com"]];//快递公司
		$typeNu = $_REQUEST["nu"];  //快递单号

		$AppKey='62f73b6dd85191d8';//请将XXXXXX替换成您在http://kuaidi100.com/app/reg.html申请到的KEY
		$url ='http://api.kuaidi100.com/api?id='.$AppKey.'&com='.$typeCom.'&nu='.$typeNu.'&show=2&muti=1&order=asc';

		//请勿删除变量$powered 的信息，否者本站将不再为你提供快递接口服务。
		$powered = '手动查询请复制单号然后 <a href="http://kuaidi100.com" target="_blank">点击此处</a> 查询 ';


		//优先使用curl模式发送数据
		if (function_exists('curl_init') == 1){
		  $curl = curl_init();
		  curl_setopt ($curl, CURLOPT_URL, $url);
		  curl_setopt ($curl, CURLOPT_HEADER,0);
		  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
		  curl_setopt ($curl, CURLOPT_TIMEOUT,5);
		  $get_content = curl_exec($curl);
		  curl_close ($curl);
		}else{
		  include(PHPCMS_ROOT.'/util/core/snoopy.php');
		  $snoopy = new snoopy();
		  $snoopy->referer = 'http://www.google.com/';//伪装来源
		  $snoopy->fetch($url);
		  $get_content = $snoopy->results;
		}
		print_r($get_content . '<br/>' . $powered);
		exit;
		break;
}