<?php
//微网站的首页相关
$menus=array();
if(!empty($diy['menu']['index'])){
	foreach($diy['menu']['index'] as $k=>$v) {
		if(isset($super_menus[$k])){
			$menus[$k]=$super_menus[$k];
		}
	}
	$menus=array_merge($menus,$super_menus);
}else{
	$menus=$super_menus;
}
$menus=array_slice($menus,0,$config['m_menu_num']);
$head_pos_str='';
$cid=isset($_REQUEST['cid'])?intval($_REQUEST['cid']):0;
if($banner_show_switch&&USERID=='537186'){
	if($cid==0){
		$cid=26;
		$banner_show_switch=false;
	}
}
if($cid>0&&isset($orign_cates[$cid])){
	if($orign_cates[$cid]['type']==11){
		$all_index_infos=$db->getAll('select * from `web_mod_data` where `catid`='.$cid.' and `userid`='.$userid.' order by `sort` desc,`id` desc ');
		$index_menu_arr=array();
		if(!empty($all_index_infos)){
			foreach($all_index_infos as $k=>$v) {
				$extra=unserialize($v['extra']);
				$v['url']=$extra['a'];
				$v['catname']=$v['title'];
				$v['icon']=$v['thumb'];
				$index_menu_arr[]=$v;
			}
		}
		$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$diy['tpls']['index'][$cid]['style'];
		$foot_wx_js=true;
		$head['title']=$orign_cates[$cid]['catname'];
		$head['dsp']=$orign_cates[$cid]['dsp'];
		$foot_wx_img='http://'.$sdomain.str_replace('_real','_200_200',$orign_cates[$cid]['icon']);
		$banner_image_arr=array(array(
			'url'=>$orign_cates[$cid]['icon'],
			'link'=>'#',
			'name'=>$head['title'],
		));
	}else{
		show_mb_msg('您访问的页面不存在哦','/');
	}
}else{
	$style_id=($sta&&isset($_REQUEST['s']))?intval($_REQUEST['s']):$diy['tpls']['df']['style'];
	$foot_wx_js=true;
	$head['title']=$config['sitename'];
	$head['dsp']=$config['sitedsp'];
	$foot_wx_img='http://'.$sdomain.str_replace('_real','_480_240',$diy['banner']['data'][0]['url']);
}
/*diy_menu_start*/
	$imenu_code_sta=false;
	$imenu_forms=$db->getAll('select * from `web_menu_main` where `userid`='.$userid,'id');
	if(!empty($imenu_forms)){
		$tjform_ids=implode(',',array_keys($imenu_forms));
		$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`=0 and `mid` in ('.$tjform_ids.') and `type`=2');
		if(empty($data_rel_info)){
			$data_rel_info=$db->get_one('select * from `web_menu_url` where `id`=0 and `mid` in ('.$tjform_ids.') and `type`=0');
		}
		if(!empty($data_rel_info)){
			$imenu_code_sta=true;
			$all_imenu_items=$db->getAll('select * from `web_menu_item` where `mid`='.$data_rel_info['mid'].' order by `sort` asc,`id` asc','id');
			$all_imenu_items=c_tree($all_imenu_items,'pid');
			/*自定义菜单新样式数据*/
			$mid = $data_rel_info['mid'];
			$data= $db->get_one('select `type`,`color`,`pos` from `web_menu_main` where `id`='.$mid);
			$type=$data['type'];
			$color=$data['color'];
			$pos=$data['pos'];
			$style=$pos==1?3:4;
		}
	}
/*diy_menu_end*/
if(!isset($_REQUEST['oo'])){
	$all_allow_mod=$db->getAll('select * from `web_mod_model_rel` where `cid`=0 and `lv`=0 order by `sort` asc','mid');
	if(!isset($all_allow_mod[$style_id])){
		$allow_mod_ids=array_keys($all_allow_mod);
		$style_id=$allow_mod_ids[0];
	}
	if($_userid==114197){
		//$all_mod_info[$style_id]['html']='index/24';
	}
	include T('wap',$all_mod_info[$style_id]['html']);
}else{
	include T('wap','index/'.$style_id);
}