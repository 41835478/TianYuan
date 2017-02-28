<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
$c_arr=array(
	'list'=>1,
	'save'=>1,
	'add'=>1,
	'lv'=>1,
	'ps'=>1,
	'edit'=>1,
	'fee'=>1,
	'showfee'=>1,
	'delfee'=>1,
	'addflv'=>1,
	'saveflv'=>1,
	'delflv'=>1,
	'editflv'=>1,
	'getflv'=>1,
	'saved'=>1,
	'feeadd'=>1,
	'feeedit'=>1,
	'savefee'=>1,
);
if(!isset($c_arr[$c])){
	$c='list';
}
switch($c) {
	case 'ps':
		$_userid=isset($_REQUEST['uid'])?intval($_REQUEST['uid']):0;
		if(!empty($_userid)){
			$shop=$db->get_one('select * from `web_shop` where `userid`='.$_userid);
			if(empty($shop)){
				exit('请选择一个商户');
			}else{
				$ps=$shop['ps'];
				if(isset($ps_lv[$ps])){
					unset($ps_lv[$ps]);
					$new_lv=0;
					foreach($ps_lv as $k=>$v) {
						if($k>$ps){
							$new_lv=$k;
							break;
						}
					}
					if($new_lv>0){
						$ps=$new_lv;
					}else{
						$ps=array_keys($ps_lv);
						$ps=array_shift($ps);
					}
				}else{
					$ps=array_keys($ps_lv);
					$ps=array_shift($ps);
				}
				$db->query('update `web_shop` set `ps`='.$ps.' where `userid`='.$_userid);
			}
		}
		exit('ok');
		
		break;
	case 'lv':
		$_userid=isset($_REQUEST['uid'])?intval($_REQUEST['uid']):0;
		if(!empty($_userid)){
			$shop=$db->get_one('select * from `web_shop` where `userid`='.$_userid);
			if(empty($shop)){
				exit('请选择一个商户');
			}else{
				$lv=$shop['lv'];
				if(isset($sp_lv[$lv])){
					unset($sp_lv[$lv]);
					$new_lv=0;
					foreach($sp_lv as $k=>$v) {
						if($k>$lv){
							$new_lv=$k;
							break;
						}
					}
					if($new_lv>0){
						$lv=$new_lv;
					}else{
						$lv=array_keys($sp_lv);
						$lv=array_shift($lv);
					}
					$db->query('update `web_shop` set `lv`='.$lv.' where `userid`='.$_userid);
				}
			}
		}
		exit('ok');
		
		break;
	case 'savefee':
		$flvid=isset($_REQUEST['flvid'])?intval($_REQUEST['flvid']):0;
		if(empty($flvid)){
			showmessage('请选择一个运费模板','goback');
		}else{
			$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$flvid);
			if(!empty($flv)){
				$_userid=$flv['uid'];
			}else{
				showmessage('请选择一个运费模板','goback');
			}
			$shop=$db->get_one('select * from `web_shop` where `userid`='.$_userid);
			if(empty($shop)){
				showmessage('请选择一个商户','goback');
			}
			$title=htmlspecialchars(trim($_POST['title']));
			if(empty($title)){
				showmessage('请填写一个名称','goback');
			}
			$fw=floatVal($_POST['fw']);
			$fw=$fw>0?round($fw, 2):0;
			$fee=floatVal($_POST['fee']);
			$fee=$fee>0?round($fee, 2):0;
			$ew=floatVal($_POST['ew']);
			$ew=$ew>0?round($ew, 2):1;
			$efee=floatVal($_POST['efee']);
			$efee=$efee>0?round($efee, 2):0;
			$id=isset($_POST['id'])?intval($_POST['id']):0;
			if($id>0){
				$feeInfo=$db->get_one('select * from `web_shop_fee` where `id`='.$id);
				if(!empty($feeInfo)&&$feeInfo['userid']==$_userid){
					
				}else{
					$id=0;
				}
			}else{
				$id=0;
			}
			$fee_arr=array(
				'userid'=>$_userid,
				'flvid'=>$flvid,
				'title'=>htmlspecialchars(trim($_POST['title'])),
				'fw'=>$fw,
				'fee'=>$fee,
				'ew'=>$ew,
				'efee'=>$efee,
				'addtime'=>TIME
			);
			if($id>0){
				$db->update('web_shop_fee',$fee_arr,' `id`='.$id);
			}else{
				$id=$db->insert('web_shop_fee',$fee_arr,1);
			}
			$all_fees=$db->getAll('select * from `web_shop_fee` where `flvid`='.$flvid,'id');
			$del_fee=$db->query('delete from `web_shop_fee_rel` where `fid`='.$id.' and `areaid`>0');
			$areaids=$_POST['areaids'];
			if(!empty($areaids)){
				$rel_data=array();
				$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
				foreach($areaids as $k=>$v) {
					$v=intval($v);
					if($v>0&&isset($all_areas[$v])){
						$rel_data[$v]=array(
							'fid'=>$id,
							'areaid'=>$v,
							'updatetime'=>TIME
						);
					}
				}
				if(!empty($rel_data)){
					$rel_aids=array_keys($rel_data);
					if(!empty($all_fees)){
						$all_fee_ids=array_keys($all_fees);
						$all_my_str=implode(',',$all_fee_ids);
						$rel_aidstr=implode(',',$rel_aids);
						$db->query('delete from `web_shop_fee_rel` where `fid` in ('.$all_my_str.') and `areaid` in ('.$rel_aidstr.')');
					}
					$rel_data=array_values($rel_data);
					$db->insert('web_shop_fee_rel',$rel_data);
				}
			}
			showmessage('保存成功','/?m=admin&a=trans&c=showfee&id='.$flvid);
		}
		break;
	case 'saveflv':
		$_userid=isset($_REQUEST['uid'])?intval($_REQUEST['uid']):0;
		if(empty($_userid)){
			exit('请选择一个商户');
		}else{
			$title=htmlspecialchars(trim($_POST['title']));
			if(empty($title)){
				exit('请填写一个模板标题');
			}
			$type=intval($_POST['type']);
			$id=isset($_POST['id'])?intval($_POST['id']):0;
			$updateSta=false;
			if($id){
				$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$id);
				if(empty($flv)||$flv['uid']!=$_userid){
					$flv=array();
				}else{
					$updateSta=true;
				}
			}
			$flv['uid']=$_userid;
			$flv['title']=$title;
			$flv['type']=$type;
			if($updateSta){
				$db->update('web_shop_flv',$flv,'`id`='.$id);
			}else{
				$db->insert('web_shop_flv',$flv);
			}
			exit('ok');
		}
		break;
	case 'showfee':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if(!empty($id)){
			$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$id);
			if(!empty($flv)){
				$_userid=$flv['uid'];
			}else{
				showmessage('请选择一个运费模板','goback');
			}
			$list=$db->getAll('select * from `web_shop_fee` where `flvid`='.$id.' order by `sort` asc,`id` asc','id');
			$all_area_rel=array();
			$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
			if(!empty($list)){
				$all_fee_ids=array_keys($list);
				$all_my_str=implode(',',$all_fee_ids);
				$all_area_rel=$db->getAll('select * from `web_shop_fee_rel` where `fid` in ('.$all_my_str.') and `areaid`>0','fid',true);
			}
			include T('super_admin','shop_fee');
		}else{
			showmessage('请选择一个模板','goback');
		}
		break;
	case 'delflv':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if($id){
			$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$id);
			if(!empty($flv)){
				$goods=$db->get_one('select count(*) as num from `web_shop_goods` where `userid`>0 and `flvid`='.$id);
				if(!empty($goods)&&$goods['num']>0){
					exit('有产品使用了当前运费模板，不可删除');
				}else{
					$db->query('update `web_shop_flv` set `uid`=-'.$flv['uid'].' where `id`='.$id);
				}
				exit('ok');
			}else{
				exit('运费模板不存在');
			}
		}else{
			exit('运费模板不存在');
		}
		break;
	case 'editflv':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if($id){
			$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$id);
			if(!empty($flv)){
				$id=$flv['id'];
				$_userid=$flv['uid'];
				include T('super_admin','shop_fee_flv');
			}else{
				exit('运费模板不存在');
			}
		}else{
			exit('运费模板不存在');
		}
		break;
	case 'addflv':
		$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
		$all_my_fee=$db->getAll('select * from `web_shop_fee` where `userid`='.$_userid,'id');
		$all_area_rel=array();
		if(!empty($all_my_fee)){
			$all_fee_ids=array_keys($all_my_fee);
			$all_my_str=implode(',',$all_fee_ids);
			$all_area_rel=$db->getAll('select * from `web_shop_fee_rel` where `fid` in ('.$all_my_str.') and `areaid`>0','areaid');
		}
		include T('super_admin','shop_fee_flv');
		break;
	case 'getflv':
		$_userid=isset($_REQUEST['uid'])?intval($_REQUEST['uid']):0;
		$data=array();
		if(!empty($_userid)){
			$data=$db->getAll('select * from `web_shop_flv` where `uid`='.$_userid.' order by `id` asc');
		}
		echo json_encode($data);
		exit;
		break;
	case 'list':		
		$list=$db->getAll('select * from `web_shop_flv` where `uid`='.$_userid.' order by `id` asc','id');
		if(!empty($list)){
			$listids=array_keys($list);
			$listidstr=implode(',',$listids);
			$all_num=$db->getAll('select count(*) as num,`flvid` from `web_shop_fee` where `flvid` in ('.$listidstr.') group by `flvid`','flvid');
		}
		$all_area_rel=array();
		$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
		include T('super_admin','shop_fee_lv');		
		break;
	case 'delfee':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if($id){
			$fee=$db->get_one('select * from `web_shop_fee` where `id`='.$id);
			if(!empty($fee)){
				$flvid=$fee['flvid'];
				$db->query('update `web_shop_fee` set `flvid`=-'.$flvid.' where `id`='.$id);
				exit('ok');
			}else{
				exit('请选择一个商户');
			}
		}else{
			exit('请选择一个商户');
		}
		break;
	case 'feeedit':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if($id){
			$fee=$db->get_one('select * from `web_shop_fee` where `id`='.$id);
			if(!empty($fee)){
				$flvid=$fee['flvid'];
				$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$flvid);
				$now_fid=$id;
				$_userid=$flv['uid'];
				$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
				$all_my_fee=$db->getAll('select * from `web_shop_fee` where `userid`='.$_userid,'id');
				$all_area_rel=array();
				if(!empty($all_my_fee)){
					$all_fee_ids=array_keys($all_my_fee);
					$all_my_str=implode(',',$all_fee_ids);
					$all_area_rel=$db->getAll('select * from `web_shop_fee_rel` where `fid` in ('.$all_my_str.') and `areaid`>0','areaid');
				}
				include T('super_admin','shop_fee_add');
			}else{
				showmessage('请选择一个商户','goback');
			}
		}else{
			showmessage('请选择一个商户','goback');
		}
		break;
	case 'feeadd':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		if(empty($id)){
			showmessage('请选择一个运费模板','goback');
		}else{
			$flv=$db->get_one('select * from `web_shop_flv` where `id`='.$id);
			if(empty($flv)){
				showmessage('请选择一个运费模板','goback');
			}else{
				$_userid=$flv['uid'];
			}
			$flvid=$id;
		}
		$all_areas=$db->getAll('select * from `web_area` where `parentid`=0 order by `areaid` asc','areaid');
		$all_my_fee=$db->getAll('select * from `web_shop_fee` where `flvid`='.$id,'id');
		$all_area_rel=array();
		if(!empty($all_my_fee)){
			$all_fee_ids=array_keys($all_my_fee);
			$all_my_str=implode(',',$all_fee_ids);
			$all_area_rel=$db->getAll('select * from `web_shop_fee_rel` where `fid` in ('.$all_my_str.') and `areaid`>0','areaid');
		}
		include T('super_admin','shop_fee_add');
		break;
}