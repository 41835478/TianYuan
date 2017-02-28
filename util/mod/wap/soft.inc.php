<?php
/**
 *	[QYIT!] (C)2001-2099 Comsenz Inc.
 *	Author	:	Zero.K
 *	Time		:	2015/9/18	
 */
$cid=isset($_REQUEST['cid'])?intval($_REQUEST['cid']):0;

define('NOBANNER',true);
if(isset($soft_list[$cid])){
	if(!isset($my_soft[$cid])){
		$cid=0;
	}else{
		$all_allow_mod=$db->getAll('select * from `web_mod_model_rel` where `cid`=12 and `lv`=1 order by `sort` asc','mid');
		$diy_soft=$db->get_one('select * from `web_soft_diy` where `userid`='.$_userid.' and `gid`='.$cid);
		$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$diy_soft['tpl_list'];
		$active_sta=false;
		if(isset($diy_soft['icon'])&&!empty($diy_soft['icon'])){
			$active_sta=true;
		}else{
			//$cid='-1';//edit by zero 2015/9/20
		}
		if($style_id<1||!isset($all_allow_mod[$style_id])){
			$allow_mod_ids=array_pop($all_allow_mod);
			$style_id=$allow_mod_ids['mid'];
		}
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
	}
	$foot_wx_js=true;
	switch($cid) {
		case '-1':
			//未激活
			echo '未激活';
			break;
		case 0:
			//未开通的提示页面
			exit;
			break;
		case 1:
			$uc_info=$db->get_one('select * from `web_data`.`web_jizan_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitename'].',欢迎您的光临';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_data`.`web_jizan_info` where `userid`='.$userid.' and `type`=1');
			$list_infos=$db->getAll('select * from `web_data`.`web_jizan_info` where `userid`='.$userid.' and `type`=1 order by `time` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://wxdata.7192.com/jizan/'.$v['id'].'.html';
					$list_infos[$k]['showthumb']=$v['shareimg'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 2:
			$uc_info=$db->get_one('select * from `web_data`.`web_jizan_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitename'].',欢迎您的光临';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_data`.`web_jizan_info` where `userid`='.$userid.' and `type`=2');
			$list_infos=$db->getAll('select * from `web_data`.`web_jizan_info` where `userid`='.$userid.' and `type`=2 order by `time` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://zk-'.$userid.'.7192.cn/gold/'.$v['id'].'_0.html';
					$list_infos[$k]['showthumb']=$v['shareimg'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 3:
			$uc_info=$db->get_one('select * from `web_vote`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitedsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_vote`.`web_data_main`  where `userid`='.$userid.' and `catid`=1');
			$list_infos=$db->getAll('select * from `web_vote`.`web_data_main`  where `userid`='.$userid.' and `catid`=1 order by `sort` desc,`id` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://vote.7192.com/vote/'.$v['id'].'.html';
					$list_infos[$k]['thumb']=strpos($v['thumb'],'http://')!==false?$v['thumb']:'http://vote.7192.com'.$v['thumb'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 4:
			$uc_info=$db->get_one('select * from `web_data`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitedsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_data`.`web_card_wx` where `userid`='.$userid.' and `jobid`=1');
			$list_infos=$db->getAll('select * from `web_data`.`web_card_wx` where `userid`='.$userid.' and `jobid`=1 order by `id` desc limit '.$start.','.$offset,'id');
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				$wxid_str=implode(',',array_keys($list_infos));
				$user_info=$db->getAll('select * from `web_data`.`web_card_info` where `wxid` in ('.$wxid_str.')','wxid');
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://wxdata.7192.com/card/'.$v['id'].'.html';
					$list_infos[$k]['title']=$user_info[$v['id']]['nickname'];
					$list_infos[$k]['showthumb']=strpos($user_info[$v['id']]['face'],'http://')!==false?$user_info[$v['id']]['face']:'http://wxdata.7192.com'.$user_info[$v['id']]['face'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 5://todo
			
			break;
		case 6:
			$uc_info=$db->get_one('select * from `web_cj`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitedsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_cj`.`web_mod_data` where `userid`='.$userid);
			$list_infos=$db->getAll('select * from `web_cj`.`web_mod_data` where `userid`='.$userid.' order by `sort` desc,`id` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://cj.7192.com/prize/'.$v['id'].'.html';
					$list_infos[$k]['thumb']=strpos($v['thumb'],'http://')!==false?$v['thumb']:'http://cj.7192.com'.$v['thumb'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 7:
			$url="http://jf.7192.com/".USERID."/index.html";
			header_302($url,'');
			break;
		case 8:
			$uc_info=$db->get_one('select * from `web_data`.`web_kj_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitename'].'欢迎您的光临';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_data`.`web_kj_info` where `userid`='.$userid.' and `type`=2');
			$list_infos=$db->getAll('select * from `web_data`.`web_kj_info` where `userid`='.$userid.' and `type`=2 order by `time` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://zk-'.$userid.'.7192.cn/kj/'.$v['id'].'_0.html';
					$list_infos[$k]['showthumb']=strpos($v['shareimg'],'http://')!==false?$v['shareimg']:'http://kj.7192.com'.$v['shareimg'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 9:
			$uc_info=$db->get_one('select * from `web_yiye`.`web_jizan_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitename'].'欢迎您的光临';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_yiye`.`web_jizan_info` where `userid`='.$userid);
			$list_infos=$db->getAll('select * from `web_yiye`.`web_jizan_info` where `userid`='.$userid.' order by `time` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://zk-'.$userid.'.7192.cn/yiye/'.$v['id'].'_0.html';
					$list_infos[$k]['showthumb']=strpos($v['shareimg'],'http://')!==false?$v['shareimg']:'http://yiye.7192.com'.$v['shareimg'];
				}
			}
			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		case 10:
			$uc_info=$db->get_one('select * from `web_quan`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitename'].'欢迎您的光临';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_quan`.`web_data_info` where `userid`='.$userid);
			$list_infos=$db->getAll('select * from `web_quan`.`web_data_info` where `userid`='.$userid.' order by `addtime` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['showurl']='http://quan.7192.com/show/'.$v['id'].'_0.html';
					$list_infos[$k]['showthumb']=strpos($v['wx_thumb'],'http://')!==false?$v['wx_thumb']:'http://quan.7192.com'.$v['wx_thumb'];
				}
			}
			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();	
			break;
		case 11:
			$uc_info=$db->get_one('select * from `web_partner`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitetit'];
			$head['dsp']=$uc_info['sitedsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_partner`.`web_relations` where `status`=1 and `isjob`=1 and `userid`='.$userid);
			$list_infos=$db->getAll('select * from `web_partner`.`web_relations` where `status`=1 and `isjob`=1 and `userid`='.$userid.' order by `id` desc limit '.$start.','.$offset,'wxid');
			if($list_infos){
				$p_str=implode(',',array_keys($list_infos));
				$partner_info=$db->getAll('select * from `web_partner`.`web_partner_apply` where `userid`='.$userid.' and `wxid` in ('.$p_str.')','wxid');
				$user_info=$db->getAll('select * from `web_data`.`web_card_info` where `wxid` in ('.$p_str.')','wxid');
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['title']='发展合伙人 - '.$partner_info[$v['wxid']]['name'];
					$list_infos[$k]['showurl']='http://partner.7192.com/invite_'.USERID.'/'.$v['wxid'].'.html';
					$list_infos[$k]['showthumb']=strpos($user_info[$v['wxid']]['face'],'http://')!==false?$user_info[$v['wxid']]['face']:'http://wxdata.7192.com'.$user_info[$v['wxid']]['face'];
				}
			}
			$page_str=pages_m($all_num['num'], $page, $offset);

			$foot_wx_img=$uc_info['sitethumb'];
			$banner_image_arr=array();
			break;
		case 12:
			$uc_info=$db->get_one('select * from `web_gh`.`web_data_uc` where `userid`='.$userid);
			$head['title']=$uc_info['sitename'];
			$head['dsp']=$uc_info['sitedsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';

			$all_num=$db->get_one('select count(*) as num from `web_gh`.`web_data_main` where `catid`=1 and `userid`='.$_userid);
			$list_infos=$db->getAll('select * from `web_gh`.`web_data_main` where `catid`=1 and `userid`='.$_userid.' order by `sort` desc,`id` desc limit '.$start.','.$offset);
			$page_str=pages_m($all_num['num'], $page, $offset);
			if($list_infos){
				foreach($list_infos as $k=>$v){
					$list_infos[$k]['title']=$v['tit'];
					$list_infos[$k]['showurl']='http://gh.7192.com/'.USERID.'/game_'.$v['id'].'.html';
					$list_infos[$k]['showthumb']=strpos($v['shareimg'],'http://')!==false?$v['shareimg']:'http://gh.7192.com'.$v['shareimg'];
				}
			}

			$foot_wx_img='http://uc.7192.com/avatar.php?uid='.$userid.'&amp;size=big';
			$banner_image_arr=array();
			break;
		default:
			$banner_image_arr=array(array(
				'url'=>$all_cates[$cid]['icon'],
				'link'=>'#',
				'name'=>$all_cates[$cid]['catname'],
			));
			break;
	}
	//edit by zero 2015/9/20	 start
	if($active_sta){
		$head['title']=$diy_soft['catname'];
		$head['dsp']=$diy_soft['dsp'];
		$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';
		$foot_wx_img='http://'.$sdomain.str_replace('_real','_200_200',$diy_soft['icon']);
		$banner_image_arr=array(array(
			'url'=>$diy_soft['icon'],
			'link'=>'#',
			'name'=>$diy_soft['catname'],
		));
	}
	//edit by zero 2015/9/20 end
	include T('wap',$all_mod_info[$style_id]['html']);
}else{
	sta_404(1);
}