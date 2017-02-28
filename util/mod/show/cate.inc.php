<?php
$acts=array(
	'index'=>true,
);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}
$uid=intval($_REQUEST['uid']);
$catid=intval($_REQUEST['cid']);
$shop_config=$db->get_One('select * from `web_shop` where userid='.$uid);
$shop_menus=$db->getAll('select * from `web_shop_nav` where userid='.$uid);
$banners=$db->getAll('select * from `web_shop_banner` where userid='.$uid);
$links=$db->getAll('select * from `web_links` where userid='.$uid);
$diy_info=$db->get_One('select * from `web_shop_diy` where userid='.$uid);
$shop_cate=$db->getAll('select * from `web_cate_shop` where userid='.$uid.' and parent=0');
foreach ($shop_cate as $k => $v) {
	$shop_cate[$k]['sub']=$db->getAll('select * from `web_cate_shop` where userid='.$uid.' and parent='.$v['id']);
}
$og=trim($_REQUEST['og']);

$where='addtime desc';
if($og=='price'){
	$tp=intval($_REQUEST['tp']);
	if($tp==1){//价格由高到底
		$where='price desc,'.$where;
	}else{
		$where='price asc,'.$where;
	}
}elseif($og=='sale'){//按销量
	$where='buy desc,'.$where;
}elseif($og=='env'){//按环保等级
	$where='env desc,'.$where;
}
switch($c){
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=28;
		$start=($page-1)*$offset;
		$cateinfo=$db->get_One('select * from `web_cate_shop` where id='.$catid);
		if($cateinfo['parent']==0){
			$cate_arr=$db->getAll('select id from `web_cate_shop` where parent='.$catid,'id');
			if(!empty($cate_arr)){
				$cate_str=implode(',',array_keys($cate_arr));
				$sub_arr=$db->getAll('select id from `web_cate_shop` where parent in ('.$cate_str.')','id');
				$sub_str=implode(',',array_keys($sub_arr));
				if(!empty($sub_arr)){
					$all_arr=$cate_str.','.$sub_str;
				}else{
					$all_arr=$cate_str;
				}
				if (!empty($all_arr)) {
					$nums=$db->get_one('select count(*) as num from `web_shop_goods` where shop_catid in ('.$all_arr.') and status=1 and isdel=0');
					$list=$db->getAll('select * from `web_shop_goods` where shop_catid in ('.$all_arr.') and status=1 and isdel=0 order by '.$where.' limit '.$start.','.$offset);
				}
				
			}else{
				$nums['num']=0;
				$list=array();
			}
		}else{
			$nums=$db->get_one('select count(*) as num from `web_shop_goods` where shop_catid='.$catid.' and status=1 and isdel=0');
			$list=$db->getAll('select * from `web_shop_goods` where shop_catid='.$catid.' and status=1 and isdel=0 order by '.$where.' limit '.$start.','.$offset);
			$tj_arr=$db->getAll('select * from `web_cate_shop` where parent='.$catid,'id');//查询该商品的同级分类
			$tj_str=implode(',',array_keys($tj_arr)); 
			if (!empty($tj_str)) {
				$tj_item=$db->getAll('select id,title,thumb,price from `web_shop_goods` where shop_catid in ('.$tj_str.') and status=1 order by view limit 10');
			}
			
		}		

		$pagestr=pages_mz($nums['num'], $page, $offset,'/'.$uid.'/cate/'.$catid.'.html?page={$page}');


		include T('show/pc/','shop_cate');
		break;
}