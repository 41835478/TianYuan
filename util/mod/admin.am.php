<?php

//后台管理入口
/*
admin-->个人会员			/个人会员 123456
seller-admin-->商铺会员		/商铺测试 123456
super-admin-->超级管理员	/admin 123456
*/
/*
*white_mod为action（$_REQUEST['a']）的白名单
*数组中对应的数值为限定级别
*	比如当没有填写企业资料，那么>=2的都不能使用
*	当没有设定微信平台接口，那么>=3的都不能使用
*/
$_userid=$_SESSION['userid'];
if(empty($_userid)){
	showmessage('您还没有登录,请登录','/login.html');
}

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



$user=$db->get_one('select * from `ucenter` where `userid`='.$_userid);//用户信息
$ismobile=$chk_mobile;
$a=isset($_REQUEST['a']) ? trim($_REQUEST['a']) : 'index';
if($a!='kejson'&&$a!='video'){
	if(!$_userid){
		if($ismobile||$_GET['t']==11){
			echo "<script>window.location.href='/login.html'</script>";
		}else{
			showmessage('您还没有登录,请登录','/');
		}
	}
}
if($ismobile||$_GET['t']==11){
	$shop_sta=false;
}
$super_admin=false;	
if($user['type']==1){//type==1超级管理员
	$super_admin=true;	
}

if($super_admin){
	$white_mod = array(
		'index'=>1,	
		'intro'=>2,
		'upfile'=>1,
		'notice'=>1,
		'user'=>1,
		'cate'=>1,
		'shop'=>1,
		'ad'=>1,
		'ads'=>1,
		'news'=>1,
		'newscate'=>1,
		'friend'=>1,
		'rate'=>1,
		'order'=>1,
		'comment'=>1,
		'balance'=>1,
		'goods'=>1,
		'feedback'=>1,
		'ajax'=>1,
		'transport'=>1,
		'quan'=>1,
		'backup'=>1,
		'kejson'=>1,
		'visitor'=>1,
		'trans'=>1,
		'orders'=>1,
		'member'=>1
	);
	$m_c='super_'.$m;
}else{

	if($user['type']==2){//type==2商铺管理员
		$shop_sta=true;
	}
	if($shop_sta){//商铺会员
		$white_mod = array(
			'index'=>1,	//商铺后台首页	
			'haspass'=>1,
			'cate'=>2,//类目管理
			'goods'=>2,//商品管理
			'password'=>2,//修改密码
			'shop'=>2,//基本信息	
			'map'=>2,//地图
			'friend'=>2,//友情链接
			'address'=>2,//地址
			'transport'=>2,//物流
			'upfile'=>1,
			'ajax'=>1,
			'ajaxshop'=>1,
			'comment'=>2,//买家留言
			'banner'=>2,//幻灯片
			'nav'=>2,//店铺导航
			'stats'=>2,//店铺统计
			'account'=>2,//账户首页
			'cash'=>2,//提现管理
			'commision'=>2,//佣金管理
			'bond'=>2,//保证金	
			'quan'=>2,
			'diy'=>2,//店铺管理
			'order'=>2,
			'views'=>2,
			'trans'=>2,
		);
		
		if($shop_config['etime']<TIME){
			//$a='haspass';
			if(isset($white_mod[$a])){
				include M('seller_admin', $a);
			}else{
				showmessage('您没有权限访问登录,请返回','/');
			}
		}
		$m_c='shop_'.$m;
	}else{//普通个人会员
		$white_mod = array(
			'index'=>1,//首页
			'intro'=>2,//基础资料
			'address'=>2,//收货地址
			'ajax'=>2,//ajax
			'mark'=>2,//我的收藏、关注
			'order'=>2,//订单交易记录
			'comment'=>2,//评价管理
			'upfile'=>2,//上传管理
			'quan'=>2,//我的优惠券
			'score'=>2,//我的积分
			'msg'=>2,//系统信息 私信
			'buy'=>2,//我的购买记录
			'feedback'=>2,//反馈
			'active'=>2,
			'return'=>1,
			'sales'=>1,
			'member'=>1,
		);
		$m_c=$m;
		$order_nums=$db->get_one('select count(*) as num from `web_order` where userid='.$_userid.'  and status>0');//订单总数
		$sys_msg=$db->findOne('select count(*) from `web_msg` where userid='.$_userid.' and type=0 and sta!=2');//系统消息的数目
		$sx_msg=$db->findOne('select count(*) from `web_msg` where userid='.$_userid.' and type=1  and sta!=2');//私信消息的数目
		

		$shop_account=$db->get_One('select * from `web_shop_accout` where userid='.$_userid);
	}
}

$all_area=$db->getAll('select `areaid`,`arrparentid`,`name` FROM `web_shop_area` WHERE 1','areaid');





if(isset($white_mod[$a])){
	include M($m_c, $a);
}else{
	showmessage('没有权限访问该页面！','/');
}

