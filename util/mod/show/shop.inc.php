<?php

$acts=array('index'=>true);
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'index';
if(!isset($acts[$a])){
	$a='index';
}
$id=intval($_REQUEST['id']);
$shop_config=$db->get_One('select * from `web_shop` where userid='.$id);
switch($a){
	case 'index':
		$shop_menus=$db->getAll('select * from `web_shop_nav` where userid='.$id);
		$db->query('update `web_shop` set view=view+1 where userid='.$id);
		$banners=$db->getAll('select * from `web_shop_banner` where userid='.$id);
		$links=$db->getAll('select * from `web_links` where userid='.$id);
		$diy_info=$db->get_One('select * from `web_shop_diy` where userid='.$id);
		$shop_cate=$db->getAll('select * from `web_cate_shop` where userid='.$id.' and parent=0');
		foreach ($shop_cate as $k => $v) {
			$shop_cate[$k]['sub']=$db->getAll('select * from `web_cate_shop` where userid='.$id.' and parent='.$v['id']);
		}
		$care=$db->get_One('select * from `web_shop_care` where type=2 and dataid='.$id.' and userid='.$_userid);
		if($ismobile||$_GET['t']==11){
			include T('wxsite/m/','shop_index');
		}else{
			include T('show/pc/','shop_index');
		}
		
		break;
	case 'list':
		$list=$db->getAll('select * from `web_shop_goods` where userid='.$id.' and shop_cate='.$catid);
		break;
}


