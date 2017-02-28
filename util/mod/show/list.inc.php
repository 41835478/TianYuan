<?php
$acts=array(
	'index'=>true,
);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}
$uid=intval($_REQUEST['uid']);
$cateid=intval($_REQUEST['cateid']);
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
		$catenav=catnav($cateid);
		$cateinfo=$db->get_One('select * from `web_cate` where id='.$cateid);
		if($cateinfo['parent']==0){//一级分类
			$cate_arr=$db->getAll('select id from `web_cate` where parent='.$cateid,'id');
			if(!empty($cate_arr)){
				$cate_str=implode(',',array_keys($cate_arr));
				$sub_arr=$db->getAll('select id from `web_cate` where parent in ('.$cate_str.')','id');
				$sub_str=implode(',',array_keys($sub_arr));
				if(!empty($sub_arr)){
					$all_arr=$cate_str.','.$sub_str;
				}else{
					$all_arr=$cate_str;
				}
				$nums=$db->get_one('select count(*) as num from `web_shop_goods` where catid in ('.$all_arr.') and status=1 and isdel=0');
				$list=$db->getAll('select * from `web_shop_goods` where catid in ('.$all_arr.') and status=1 and isdel=0 order by '.$where.' limit '.$start.','.$offset);
			}else{
				$nums['num']=0;
				$list=array();
			}
			
			$tj_arr=$db->getAll('select * from `web_cate` where parent='.$cateid,'id');//查询该商品的同级分类
			$tj_str=implode(',',array_keys($tj_arr)); 
			if (!empty($tj_arr)) {
				$sub_arr=$db->getAll('select * from `web_cate` where parent in ('.$tj_str.')','id');
				$sub_str=implode(',',array_keys($sub_arr)); 
				if (!empty($sub_str)) {
					$tj_item=$db->getAll('select id,title,thumb,price from `web_shop_goods` where catid in ('.$sub_str.') and status=1 order by view limit 10');
				}else{
					$tj_item=array();
				}
			}
			
			
		}else{
			$cate_arr=$db->getAll('select id from `web_cate` where parent='.$cateid,'id');
			if(!empty($cate_arr)){//二级
				$cate_str=implode(',',array_keys($cate_arr));
				$nums=$db->get_one('select count(*) as num from `web_shop_goods` where catid in ('.$cate_str.') and status=1 and isdel=0');
				$list=$db->getAll('select * from `web_shop_goods` where catid in ('.$cate_str.') and status=1 and isdel=0 order by '.$where.' limit '.$start.','.$offset);

				$tj_arr=$db->getAll('select * from `web_cate` where parent='.$cateid,'id');//查询该商品的同级分类
				$tj_str=implode(',',array_keys($tj_arr)); 
				$tj_item=$db->getAll('select id,title,thumb,price from `web_shop_goods` where catid in ('.$tj_str.') and status=1 order by view limit 10');
			}else{//三级
				$nums=$db->get_one('select count(*) as num from `web_shop_goods`  where catid='.$cateid.' and status=1 and isdel=0 ');
				$list=$db->getAll('select * from `web_shop_goods` where catid='.$cateid.' and status=1 and isdel=0 order by '.$where.' limit '.$start.','.$offset);
				$tj_arr=$db->getAll('select * from `web_cate` where parent='.$cateinfo['parent'],'id');//查询该商品的同级分类
				$tj_str=implode(',',array_keys($tj_arr)); 
				$tj_item=$db->getAll('select id,title,thumb,price from `web_shop_goods` where catid in ('.$tj_str.') and status=1 order by view limit 10');
			}

			
		}

		$pagestr=pages_mz($nums['num'], $page, $offset,'/list/'.$cateid.'.html?page={$page}');

		if($ismobile||$_GET['t']==11){
			include T('show/m/','list');
		}else{
			include T('show/pc/','list');
		}
		
		break;
}