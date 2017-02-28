<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1,
	'drop'=>1,
	'tj'=>1,
	'hot'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}
$cates=$db->getAll('select * from `web_cate` where parent=0');
$parent=$db->getAll('select * from `web_cate` where parent=0 and visible=1 order by pos asc');
$sta_arr=array(
	0=>'未审核',
	1=>'已审核',
	4=>'已下架',
);
switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_shop_goods`");
		$list=$db->getAll('select * from `web_shop_goods` limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);
		include T('super_admin','goods_list');
		break;
	case 'add':
		foreach($cates as $k=>$v) {
			$op.='<option value="'.$v['id'].'" >'.$v['name'].'</option>';
		};
		
		include T('super_admin','goods_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_shop_goods` where id='.$id);
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
			include T('super_admin','goods_add');
		}else{
			showmessage('参数错误','goback');
		}
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'tj':
		$id=intval($_REQUEST['id']);
		$sta=intval($_REQUEST['sta']);
		$db->query('update `web_shop_goods` set tj='.$sta.' where id='.$id);
		exit('ok');
		break;
	case 'hot':
		$id=intval($_REQUEST['id']);
		$sta=intval($_REQUEST['sta']);
		$db->query('update `web_shop_goods` set hot='.$sta.' where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_goods` where id='.$id);
		$db->query('delete from `web_shop_goods_photo` where gid='.$id);
		exit('ok');
		break;
	case 'drop':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop_goods` set status=4 where id='.$id);//下架
		exit('ok');
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
		$infos['sort']=0;
		$infos['num']=intval($_POST['num']);
		$infos['oldprice']=trim($_POST['oldprice']);
		$infos['price']=trim($_POST['price']);
		
		$infos['weight']=trim($_POST['weight']);
		$infos['ms']=trim($_POST['ms']);//体积
		$infos['trans_type']=intval($_POST['trans_type']);
		$infos['goods_sn']=trim($_POST['goods_sn']);
		$infos['flvid']=intval($_POST['flvid']);//运费模板 2017/2/23
		if(empty($infos['flvid'])){
			showmessage('请选择一个运费模板','goback');
		}
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





		
		showmessage($msg,'/?m=admin&a=goods&c=list');
		break;
}