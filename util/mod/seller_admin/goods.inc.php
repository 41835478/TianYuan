<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'save'=>1,
	'edit'=>1,
	'addphoto'=>1,
	'savephoto'=>1,
	'getsub'=>1,
	'list'=>1,
	'del'=>1,
	'tj'=>1,
	'tjlist'=>1,
	'canceltj'=>1,
	'unsale'=>1,
	'upsale'=>1,
	'spec'=>1,
	'savespec'=>1
);
if(!isset($c_arr[$c])){
	$c='index';
}
$allcate=$db->getAll('select * from `web_cate`');
$cates=$db->getAll('select * from `web_cate` where parent=0');
$all_catess=$db->getAll('select * from `web_cate` where visible=1 order by pos asc,id asc','id');
$cate_tree=c_tree($all_catess,'pid');
$parent=$db->getAll('select * from `web_cate` where parent=0 and visible=1 order by pos asc');
$shop_parent=$db->getAll('select * from `web_cate_shop` where parent=0');
switch($c) {
	case 'spec':
		$id=intval($_REQUEST['id']);
		$goods=$db->get_One('select * from `web_shop_goods` where id='.$id);
		$all_spec=$db->getAll('select * from `web_cate_spec` where cateid='.$goods['catid']);
		$all_type=$db->getAll('select * from `web_cate_type` where cateid='.$goods['catid']);
		
		include T('seller_admin','goods_spec');
		break;
	case 'savespec':
		
		break;
	case 'unsale':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_goods` where isdel=0 and status=0 and userid='.$_userid);
		$list=$db->getAll('select * from `web_shop_goods` where isdel=0 and status=0 and userid='.$_userid);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('seller_admin','goods_list_unsale');
		break;
	case 'upsale':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set `status`=1 where id='.$id);
		exit('ok');
		break;
	case 'del':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set `isdel`=1 where id='.$id);
		exit('ok');
		break;
	case 'tj':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set `tj`=1 where id='.$id);
		exit('ok');
		break;
	case 'canceltj':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set `tj`=0 where id='.$id);
		exit('ok');
		break;
	case 'tjlist':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_goods` where isdel=0 and tj=1 and userid='.$_userid);
		$list=$db->getAll('select * from `web_shop_goods` where isdel=0 and tj=1 and userid='.$_userid);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('seller_admin','goods_list_tj');
		break;
	case 'add':
		foreach($cates as $k=>$v) {
			$op.='<option value="'.$v['id'].'" >'.$v['name'].'</option>';
		};
		
		include T('seller_admin','add_goods');
		
		break;
	case 'list':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_shop_goods` where isdel=0 and status=1 and userid='.$_userid);
		$list=$db->getAll('select * from `web_shop_goods` where isdel=0 and status=1 and userid='.$_userid);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('seller_admin','goods_list');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		if($id>0){
			$goods=$db->get_One('select * from `web_shop_goods` where id='.$id);
			$mywork=$db->getAll('select * from `web_shop_goods_photo` where `gid`='.$id.' order by `sort` asc,`id` desc');
			foreach($cates as $k=>$v) {
				if($v['id']==$goods['catid']){
					$sel='selected';
				}else{
					$sel='';
				}
				$op.='<option value="'.$v['id'].'" '.$sel.'>'.$v['name'].'</option>';
			}
			$cateid=$goods['catid'];
			$catenav=catenav($cateid);
			$arr_spec=unserialize($goods['spec']);
			include T('seller_admin','add_goods');
		}else{
			showmessage('参数错误','goback');
		}
		break;
	case 'getsub':
		$parent=$_REQUEST['parent'];
		$sub=$db->getAll('select * from `web_cate` where parent='.$parent);
		if(empty($sub)){
			$op='<option value="-1">无子分类</option>';
		}else{
			foreach($sub as $k=>$v) {
				$op.='<option value="'.$v['id'].'" >'.$v['name'].'</option>';
			}
		}
		echo $op;
		break;
	case 'save':
		$infos=array();
		$infos['title']=str_cut(strip_tags(trim($_POST['title'])),200);
		if(empty($infos['title'])){
			showmessage('请填写一个商品标题','goback');
		}
		$infos['subtitle']=str_cut(strip_tags(trim($_POST['subtitle'])),200);
		$infos['userid']=$_userid;
		if($_POST['catid']>0){
			$infos['catid']=intval($_POST['catid']);
		}
		if($_POST['shop_catid']>0){
			$infos['shop_catid']=intval($_POST['shop_catid']);
		}
		$infos['sort']=0;
		$infos['num']=intval($_POST['num']);
		$infos['oldprice']=$_POST['oldprice'];
		$infos['is_fx']=trim($_POST['is_fx'])=='on'?1:0;
		$infos['price']=$_POST['price'];
		$infos['fx_fee']=$_POST['fx_fee'];
		$infos['weight']=trim($_POST['weight']);
		$infos['ms']=trim($_POST['ms']);
		$infos['flvid']=intval($_POST['flvid']);//运费模板
		if(empty($infos['flvid'])){
			showmessage('请选择一个运费模板','goback');
		}
		$infos['goods_sn']=trim($_POST['goods_sn']);
		$infos['trans_type']=intval($_POST['trans_type']);
		$infos['addtime']=$infos['updatetime']=TIME;
		$specname=$_POST['specname'];
        $specval=$_POST['specval'];
		
		$arr_spec=array();
        foreach($specname as $k=>$v) {
            $arr_spec[$k]['specname']=$v;
        }
        foreach($specval as $k=>$v) {
            $arr_spec[$k]['specval']=$v;
        }
		$infos['spec']=serialize($arr_spec);


		$infos['content']=filter_xss($_POST['content'],ALLOWED_HTMLTAGS);
		if(empty($_POST['thumb'])){
			showmessage('请上传商品缩略图','goback');
		}else{
			$real_file=PHPCMS_ROOT.APP_DIR.$_POST['thumb'];
			if(strpos($real_file,'temp')){
				$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
				if(createDir($d)){
					$file_name_arr=explode('_real',$real_file,2);
					$new_base=$d.substr($file_name_arr[0],-9);
					$new_real=$new_base.'_real'.$file_name_arr[1];
					rename($real_file,$new_real);
					$infos['thumb']=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
				}
			}else{
				$infos['thumb']=$_POST['thumb'];
			}
		}
		$id=isset($_POST['id'])?intval($_POST['id']):0;
		$update=false;
		if($id>0){
			$old_info=$db->get_one('select * from `web_shop_goods` where `id`='.$id);
			if(isset($old_info['userid'])&&isset($old_info['userid'])==$_userid){
				$update=true;		
				$infos['sort']=$old_info['sort'];
				$infos['addtime']=$old_info['addtime'];
			}
		}
		if($update){
			$db->update('web_shop_goods',$infos,'`id`='.$id);
			$msg='信息更新成功';
		}else{
			$id=$db->insert('web_shop_goods',$infos,true);
			$msg='信息发布成功';
		}

		
		$post=$_POST['info'];
		$ftppath = PHPCMS_ROOT.APP_DIR.'static/uploadfile/'.date('Y/md/');
		createDir($ftppath);
		$cover="";
		$old_path=PHPCMS_ROOT.APP_DIR."/static/temp/";
		$db->query("update `web_shop_goods_photo` set `gid`=0 where `gid`={$id} and `userid`={$_userid}");//把用户自己上传的且本相册内的图片设置catid=0
		$order_count=0;
		foreach($post['sort'] as $v=>$k){
			$pic=$db->get_one("select * from `web_shop_goods_photo` where `id`={$k}");				
			if(!empty($pic)){
				if(strpos($pic['thumb'],'/temp/')){//$old_path
					
					$now_p=str_replace('/static/temp/','',$pic['thumb']);
					$ban_p=str_replace("_real",'_350_350',$now_p);
					$old_p=str_replace("_real",'_50_50',$now_p);
					//$new_p=str_replace("_real",'_200_200',$now_p);
					rename($old_path.$now_p, $ftppath.$now_p);
					rename($old_path.$ban_p, $ftppath.$ban_p);
					rename($old_path.$old_p, $ftppath.$old_p);
					//rename($old_path.$new_p, $ftppath.$new_p);
					$save_file=str_replace(PHPCMS_ROOT.APP_DIR.'static','/static',$ftppath.$now_p);
				}else{
					$save_file=$pic['thumb'];
				}
				if($cover==''){
					$cover=$save_file;
				}
				if($k==$post['cover']){
					$cover=$save_file;
				}
				$db->query("update `web_shop_goods_photo` set `gid`={$id},`thumb`='{$save_file}',`sort`={$order_count} where `id`={$k}");
				$order_count++;
			}
		}
		//deal width diy_photo_content_id start
		$photo_sta=isset($_POST['photo_sta'])?intval($_POST['photo_sta']):-1;
		if($photo_sta==1){//共用
			$photo_id=intval($_POST['photo_id']);
			if($photo_id>0){
				$photo_main=$db->get_one('select * from `wm_shop_goods` where `id`='.$photo_id);
				if(!empty($photo_main)){
					$order_count=$db->get_one('select count(*) as num from `web_shop_goods_photo` where `gid`='.$photo_id);
					$order_count=intval($order_count['num']);
					$cover=$photo_main['thumb'];
				}else{
					$photo_id=$id;
				}
			}else{
				$photo_id=$id;
			}
		}else{//自定义
			$photo_id=$id;
		}
		if($order_count<2){
			showmessage('请至少上传2张商品图片！','goback');
		}





		
		showmessage($msg,'/?m=admin&a=goods&c=list');
		break;
	case 'addphoto':
		$id=intval($_REQUEST['id']);
		if($id>0){
			include T('seller_admin','add_goods_photo');
		}else{
			showmessage('参数错误','goback');
		}
		break;
	case 'savephoto':
		$post=$_POST['info'];
		$ftppath = PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
		createDir($ftppath);
		$cover="";
		$old_path=PHPCMS_ROOT.APP_DIR."/static/temp/";
		$db->query("update `web_shop_goods_photo` set `gid`=0 where `gid`={$id} and `userid`={$_userid}");//把用户自己上传的且本相册内的图片设置catid=0
		$order_count=0;
		foreach($post['sort'] as $v=>$k){
			$pic=$db->get_one("select * from `web_shop_goods_photo` where `id`={$k}");				
			if(!empty($pic)){
				if(strpos($pic['thumb'],'/temp/')){//$old_path
					$now_p=str_replace('/static/temp/','',$pic['thumb']);
					$ban_p=str_replace("_real",'_350_350',$now_p);
					$old_p=str_replace("_real",'_50_50',$now_p);
					//$new_p=str_replace("_real",'_200_200',$now_p);
					rename($old_path.$now_p, $ftppath.$now_p);
					rename($old_path.$ban_p, $ftppath.$ban_p);
					rename($old_path.$old_p, $ftppath.$old_p);
					//rename($old_path.$new_p, $ftppath.$new_p);
					$save_file=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$ftppath.$now_p);
				}else{
					$save_file=$pic['thumb'];
				}
				if($cover==''){
					$cover=$save_file;
				}
				if($k==$post['cover']){
					$cover=$save_file;
				}
				$db->query("update `web_shop_goods_photo` set `gid`={$id},`thumb`='{$save_file}',`sort`={$order_count} where `id`={$k}");
				$order_count++;
			}
		}
		//deal width diy_photo_content_id start
		$photo_sta=isset($_POST['photo_sta'])?intval($_POST['photo_sta']):-1;
		if($photo_sta==1){//共用
			$photo_id=intval($_POST['photo_id']);
			if($photo_id>0){
				$photo_main=$db->get_one('select * from `wm_shop_goods` where `id`='.$photo_id);
				if(!empty($photo_main)){
					$order_count=$db->get_one('select count(*) as num from `web_shop_goods_photo` where `gid`='.$photo_id);
					$order_count=intval($order_count['num']);
					$cover=$photo_main['thumb'];
				}else{
					$photo_id=$id;
				}
			}else{
				$photo_id=$id;
			}
		}else{//自定义
			$photo_id=$id;
		}
		if($order_count<2){
			showmessage('请至少上传2张商品图片！','goback');
		}
		$content_sta=isset($_POST['content_sta'])?intval($_POST['content_sta']):-1;
		if($content_sta==1){//共用
			$content_id=intval($_POST['content_id']);
			if($content_id>0){
				$content_main=$db->get_one('select * from `wm_shop_goods_extra` where `id`='.$content_id);
				if(empty($content_main)){
					$content_id=$id;
				}
			}else{
				$content_id=$id;
			}
		}else{
			$content_id=$id;
		}
		//deal width diy_photo_content_id end
		$extra=array();
		$extra['id']=$id;
		//额外属性处理
		//todo
		$extras=$_POST['extras'];
		$data_extra=$db->getAll('select * from `wm_shop_goods_rel` where `gid`='.$spid.' and `userid`='.$_userid.' order by `sort` asc,`id` asc','id');
		$extra_arr=$extra_m_arr=array();
		if(!empty($data_extra)){
			foreach($data_extra as $k=>$v) {
				if(isset($extras[$k])){
					foreach($extras[$k] as $kv) {
						$kv=str_cut(trim(strip_tags($kv)),80);
						if(!empty($kv)){
							$extra_arr[$k][]=$kv;
						}
					}
				}
			}
		}
		$extra['extra']=serialize($extra_arr);
		$md5=md5($extra['extra']);
		$main_sql="update `wm_shop_goods` set `thumb`='{$cover}',`photo_id`={$photo_id},`content_id`={$content_id},`extra`='{$extra['extra']}',`md5`='{$md5}' where `id`={$id}";
		$db->query($main_sql);
		break;

}