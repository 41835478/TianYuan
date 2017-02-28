<?php
//微网站的首页相关
$cid=isset($_REQUEST['cid'])?intval($_REQUEST['cid']):0;

define('NOBANNER',true);
if($cid>0&&isset($orign_cates[$cid])){
	switch($orign_cates[$cid]['type']) {
		case 1:
			$this_mod='show';
			$show_cate=true;
			$detail_info=$db->get_one('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' order by `sort` desc,`id` desc');
			if(isset($detail_info['userid'])&&$detail_info['userid']==$userid){
				$id=$detail_info['id'];
				header_302('/'.USERID.'/show/'.$id.'.html','');
			}else{
				show_mb_msg('内容信息还没有发布！','goback');
			}
			break;
		case 5:
			$par_id=$orign_cates[$cid]['pid']>0?$orign_cates[$cid]['pid']:$cid;
			if(!isset($all_cates[$par_id]['child'])){
				show_mb_msg('内容信息还没有发布！','goback');
			}
			$all_menu_list=$all_cates[$par_id]['child'];
			$style_id=1;
			if($cid==$par_id){
				$cid=array_shift(array_keys($all_menu_list));
			}
			$page=isset($_GET['page'])?intval($_GET['page']):1;
			$page=max(1,$page);
			$offset=10;
			$start=($page-1)*$offset;

				$all_num=$db->get_one('select count(*) as num from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid);
				$list_infos=$db->getAll('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' order by `sort` desc,`id` desc limit '.$start.','.$offset);

			$page_str=pages_m($all_num['num'], $page, $offset);
			$head['title']=$all_cates[$par_id]['catname'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';
			$all_allow_mod=$db->getAll('select * from `web_mod_model_rel` where `cid`='.$orign_cates[$par_id]['type'].' and `lv`=1 order by `sort` asc','mid');
			$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$orign_cates[$par_id]['tpl_list'];
			if($style_id<1||!isset($all_allow_mod[$style_id])){
				$allow_mod_ids=array_pop($all_allow_mod);
				$style_id=$allow_mod_ids['mid'];
			}
			include T('wap',$all_mod_info[$style_id]['html']);
			break;
		case 9:
			$url=$all_cates[$cid]['link'];
			header_302($url,'');
			break;
		default:
			$page=isset($_GET['page'])?intval($_GET['page']):1;
			$page=max(1,$page);
			$offset=10;
			$start=($page-1)*$offset;

			$all_num=$db->get_one('select count(*) as num from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid);
			$list_infos=$db->getAll('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' order by `sort` desc,`id` desc limit '.$start.','.$offset);

			$page_str=pages_m($all_num['num'], $page, $offset);
			$head['title']=$all_cates[$cid]['catname'];
			$head['dsp']=$all_cates[$cid]['dsp'];
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';
			$all_allow_mod=$db->getAll('select * from `web_mod_model_rel` where `cid`='.$orign_cates[$cid]['type'].' and `lv`=1 order by `sort` asc','mid');
			$par_id=$orign_cates[$cid]['pid']>0?$orign_cates[$cid]['pid']:$cid;
			$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$orign_cates[$par_id]['tpl_list'];
			if($style_id<1||!isset($all_allow_mod[$style_id])){
				
				$allow_mod_ids=array_pop($all_allow_mod);
				$style_id=$allow_mod_ids['mid'];
			}
			if($_GET['test']==2){
					print_r($orign_cates);
					
				}
			//if(USERID==114197&&$sta){
			//	include T('wap','list/'.$_GET['s']);
			//}else{
			/*diy_menu_start*/
			$imenu_code_sta=false;
			$imenu_forms=$db->getAll('select * from `web_menu_main` where `userid`='.$userid,'id');
			if(!empty($imenu_forms)){
				$tjform_ids=implode(',',array_keys($imenu_forms));
				$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`in ('.$cid.',0) and `mid` in ('.$tjform_ids.') and `type`=2');
				if(empty($data_rel_info)){
					$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`='.$cid.' and `mid` in ('.$tjform_ids.') and `type`=0');
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
		$foot_wx_js=true;
		$foot_wx_img='http://'.$sdomain.str_replace('_real','_200_200',$all_cates[$cid]['icon']);
		$banner_image_arr=array(array(
			'url'=>$all_cates[$cid]['icon'],
			'link'=>'#',
			'name'=>$all_cates[$cid]['catname'],
		));


		if($_GET['test']==2){
			//echo $style_id;
			//echo T('wap',$all_mod_info[$style_id]['html']);
			//exit;
		}

		include T('wap',$all_mod_info[$style_id]['html']);
	}
}else{
	sta_404(1);
}