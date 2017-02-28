<?php
//微网站的详细页相关
$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
$detail_info=$db->get_one('select * from `web_mod_data` where `id`='.$id);
$banner_sta=true;
if(isset($detail_info['userid'])&&$detail_info['userid']==$userid){
	if($userid!=$_userid&&$detail_info['level']>0){//检测访问权限
		$qa_info=$db->get_one('select * from `web_mod_data_qa` where `id`='.$id);//获取权限问题信息
		$md5=$qa_info['md5'];
		$qa_val = Cookie::get($md5);
		$sid = session_id();
		if($qa_val!=$sid){//进入问答页面
			$qa_main=unserialize($qa_info['qa']);
			$head['title']='问题验证';
			define('NOBANNER',$banner_sta);
			include T('wap','qa_index');
			exit;
		}
	}
	$cid=$detail_info['catid'];
	$par_id=$orign_cates[$cid]['pid']>0?$orign_cates[$cid]['pid']:$cid;
	$detail_extra=$db->get_one('select * from `web_mod_data_extra` where `id`='.$id);
	$extra_rel=$db->getAll('select * from `web_mod_data_rel` where `catid`='.$cid.' and `userid`='.$userid.' order by `sort` asc,`id` asc');
	$show_pn=$show_ct=$plugins_sta=$show_video=false;
	$data_type=$all_cates[$cid]['type'];
	$all_allow_mod=$db->getAll('select * from `web_mod_model_rel` where `cid`='.$orign_cates[$par_id]['type'].' and `lv`=2 order by `sort` asc','mid');
	$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$orign_cates[$par_id]['tpl_show'];
	if($style_id<1||!isset($all_allow_mod[$style_id])){
		$allow_mod_ids=array_pop($all_allow_mod);
		$style_id=$allow_mod_ids['mid'];
	}
	$tpl_agv=$all_mod_info[$style_id]['html'];
	
	switch($data_type) {
		case 1://单页信息
			$show_ct=true;
			break;
		case 2://多页信息
			$prev=$db->get_one('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' and `id`<'.$id.' and `sort`='.$detail_info['sort'].' order by `sort` desc,`id` desc');
			if(empty($prev)){
				$prev=$db->get_one('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' and `sort`<'.$detail_info['sort'].' order by `sort` desc,`id` desc');
			}
			$next=$db->get_one('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' and `id`>'.$id.' and `sort`='.$detail_info['sort'].' order by `sort` asc,`id` asc');
			if(empty($next)){
				$next=$db->get_one('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' and `sort`>'.$detail_info['sort'].' order by `sort` asc,`id` asc');
			}
			if(!empty($prev)||!empty($next)){
				$show_pn=true;
			}
			break;
		case 3://团购
			//查询已订购数量		edit by zero 2014/6/13
			$tuan_order=$db->get_one('select count(*) as num from `web_mod_tuan_order` where `dataid`='.$id.' and `siteuserid`='.$userid);
			$tuan_order_num=$tuan_order['num'];
			$main_extra=unserialize($detail_info['extra']);
			break;
		case 4://图集相册
			$plugins_sta=true;
			$plugins=$db->getAll('select * from `web_mod_plugin` where `dataid`='.$id.' order by `sort` asc,`id` desc');
			break;
		case 6://投票
			$order = preg_replace('/[^a-z]+/i', '', $_GET['sort']);
			if(empty($order)){
				$order = 'time';
			}
			$allow_order=array(
				'rand'=>array('sql'=>' ORDER BY `no` ASC,`rel_id` DESC','name'=>'按编号排序','url'=>'/'.USERID.'/show/rand-'.$id.'.html'),
				'time'=>array('sql'=>' ORDER BY `sort` DESC,`rel_id` DESC','name'=>'按最新排序','url'=>'/'.USERID.'/show/time-'.$id.'.html'),
				'votes'=>array('sql'=>' ORDER BY `vote` DESC,`rel_id` DESC','name'=>'按票数排序','url'=>'/'.USERID.'/show/votes-'.$id.'.html'),
				'is'=>true,
			);

			if(!isset($allow_order[$order])){
				sta_404(1);
			}
			$where=$allow_order[$order]['sql'];
			if(isset($_GET['no'])&&!empty($_GET['no'])){
				$no_str=addslashes(str_cut(strip_tags(trim($_GET['no'])),10));
			}else{
				$no_str='';
			}
			if(!empty($no_str)){
				$where=' and `no` like "%'.$no_str.'%" '.$where;
			}
			if(isset($_GET['tit'])&&!empty($_GET['tit'])){
				$no_str=addslashes(str_cut(strip_tags(trim($_GET['tit'])),10));
			}else{
				$no_str='';
			}
			if(!empty($no_str)){
				$where=' and `title` like "%'.$no_str.'%" '.$where;
			}
			$page=isset($_GET['page'])?intval($_GET['page']):1;
			$page=max(1,$page);
			$offset=6;
			$start=($page-1)*$offset;
			$all_num=$db->get_one('select count(*) as num from `web_mod_vote_item` where `dataid`='.$id.$where);
			$list_items=$db->getAll('select * from `web_mod_vote_item` where `dataid`='.$id.$where.' limit '.$start.','.$offset,'rel_id');
			$page_str=pages_m($all_num['num'], $page, $offset);
			if(!empty($list_items)){
				$all_infos=$db->getAll('select * from `web_mod_data` where `id` in ('.implode(',',array_keys($list_items)).')','id');
			}else{
				$all_infos=array();
			}
			$detail_extra['content']=explode('_SPUER_ZERO_',$detail_extra['content'],2);
			$banner_sta=false;
			$main_extra=unserialize($detail_info['extra']);
			$diy['banner']['data']=array(array('name'=>$detail_info['title'],'url'=>str_replace('_real','_360_200',$detail_info['thumb']),'link'=>'#'));
			break;
		case 7:
			$has_burn_num=$db->get_one('select count(*) as num from `web_mod_promo_record` where `pid`='.$id);
			$has_burn_num=intval($has_burn_num['num']);
			$main_extra=unserialize($detail_info['extra']);
			break;
		case 8:
			$main_extra=unserialize($detail_info['extra']);
			$all_pz_arr=array('一等奖','二等奖','三等奖','四等奖','五等奖','六等奖');
			$awards=$db->getAll('select * from `web_plugin_wheel_gift` where `mid`='.$id.' order by `level` asc');
			$pz_num=$db->get_one('select count(*) as pz from `web_plugin_wheel_gift` where `level`<90 and `mid`='.$id);
			$pz_num=min(max(3,$pz_num['pz']),6);
			$pz_num-=2;
			$style_id=intval($main_extra['g']);
			$info_sta=intval($main_extra['h']);
			if($info_sta>1&&$style_id==1){
				$style_id=5-$style_id;
			}
			if(empty($wxinfo)){
				show_mb_msg('还没有设置微信平台信息','goback');
			}
			$wx_this_id=intval($main_extra['i']);
			$wxinfo_arr=$wxinfo[0];
			foreach($wxinfo as $k=>$v) {
				if($v['id']==$wx_this_id){
					$wxinfo_arr=$v;
				}
			}
            
			$tpl_agv='draw/'.$style_id;
			break;
		case 10:
			$show_video=true;
			$main_extra=unserialize($detail_info['extra']);
			if(!empty($main_extra)){
				$video_id=$main_extra['b'];
				$video_url=$main_extra['a'];
				switch($main_extra['c']) {
					case 'youku':
						//$video_sh="http://player.youku.com/player.php/partnerid/XMTAwNA==/sid/".$video_id."/v.swf";
						$video_sh="http://static.youku.com/v1.0.0364/v/swf/loader.swf?winType=adshow&VideoIDS=".$video_id."&isAutoPlay=false";
						break;
					case 'tudou':
						preg_match('/\/[a|v|l][a-z]+\/[\w_\-]*/',$video_url,$match);
						$match=explode('/',$match[0]);
						$at=substr($match['1'],0,1);  //类别
						$video_t=$match['2']; //视频id
						$video_sh="http://www.tudou.com/".$at."/".$video_t."/&iid=".$video_id."/v.swf";
						break;
					case 'iqiyi':
						$aa=str_replace('#','&amp;vid=',$video_id);
						$video_sh="http://www.iqiyi.com/player/20130618101936/Player.swf?tvId={$aa}&amp;autoplay=true";
						break;
					case 'sohu':
						$video_sh="http://share.vrs.sohu.com/".$video_id."/v.swf&amp;autoplay=fase";
						break;
					case 'ku6':
						$video_sh="http://player.ku6.com/refer/".$video_id."/v.swf";
						break;
					case 'letv':
						$video_sh="http://img1.c0.letv.com/ptv/player/swfPlayer.swf?id=".$video_id."&amp;from=zw_bdkj";
						break;
					case 'yinyuetai':
						$video_sh="http://player.yinyuetai.com/video/swf/".$video_id."/26/a.swf";
						break;
					case '56':
						$video_sh="http://player.56.com/v_".$video_id.".swf";
						break;
				}
				$main_extra['video_swf']=$video_sh;
			}
			break;
	}
	define('NOBANNER',$banner_sta);
	if(!empty($detail_extra)){
		$detail_info['content']=$detail_extra['content'];
		$detail_info['extra']=unserialize($detail_extra['extra']);
	}
	$head['title']=$orign_cates[$cid]['catname'];
	$head['wx_title']=$detail_info['title'];
	$head['dsp']=$detail_info['dsp'];
	$foot_wx_js=true;
	$foot_wx_img='http://'.$sdomain.str_replace('_real','_200_200',$detail_info['thumb']);
	$head_pos_str='<span>&gt;</span><a href="'.$orign_cates[$cid]['url'].'">'.$head['title'].'</a>';
	$tjdata_code_sta=false;
	$tjdata_forms=$db->getAll('select * from `web_data_main` where `userid`='.$userid,'id');
	if(!empty($tjdata_forms)){
		$tjform_ids=implode(',',array_keys($tjdata_forms));
		if($data_type==1){
			$data_rel_info=$db->get_one('select * from `web_data_url` where `id`='.$id.' and `fid` in ('.$tjform_ids.') and `type`=1');
		}else{
			$data_rel_info=$db->get_one('select * from `web_data_url` where `id`='.$cid.' and `fid` in ('.$tjform_ids.') and `type`=2');
			if(empty($data_rel_info)){
				$data_rel_info=$db->get_one('select * from `web_data_url` where `id`='.$id.' and `fid` in ('.$tjform_ids.') and `type`=1');
			}
		}
		if(!empty($data_rel_info)){
			$tjdata_code_sta=true;
			$tjdata_form=$tjdata_forms[$data_rel_info['fid']];
			$all_tjdata_items=$db->getAll('select * from `web_data_rel` where `dataid`='.$data_rel_info['fid'].' order by sort desc,`id` asc');
			$this_tj_dataid=$id;
		}
	}
	/*diy_menu_start*/
	$imenu_code_sta=false;
	$imenu_forms=$db->getAll('select * from `web_menu_main` where `userid`='.$userid,'id');
	if(!empty($imenu_forms)){
		$tjform_ids=implode(',',array_keys($imenu_forms));
		$data_rel_info=$db->get_one('select * from `web_menu_url` where `id` in ('.$cid.',0) and `mid` in ('.$tjform_ids.') and `type`=2');		
		if(empty($data_rel_info)){	
			$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`='.$cid.' and `mid` in ('.$tjform_ids.') and `type`=0');	
		}
		if(empty($data_rel_info)){
			$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`='.$id.' and `mid` in ('.$tjform_ids.') and `type`=1');
		}
		if(!empty($data_rel_info)){
			$imenu_code_sta=true;
			$all_imenu_items=$db->getAll('select * from `web_menu_item` where `mid`='.$data_rel_info['mid'].' order by `sort` asc,`id` asc','id');
			$all_imenu_items=c_tree($all_imenu_items,'pid');

            /*自定义菜单样式数据*/
            $mid = $data_rel_info['mid'];
            $data= $db->get_one('select `type`,`color`,`pos` from `web_menu_main` where `id`='.$mid);
            $type=$data['type'];
            $color=$data['color'];
            $pos=$data['pos'];
            $style=$pos==1?3:4;
		}
       
	}
	/*diy_menu_end*/	
	$banner_image_arr=array(array(
		'url'=>$detail_info['thumb'],
		'link'=>'#',
		'name'=>$detail_info['title']
	));
	include T('wap',$tpl_agv);
}else{
	sta_404(1);
}