<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'add'=>1,'edit'=>1,'dele'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_shop_banner` where userid='.$_userid.' order by sort asc,addtime desc');
		include T('seller_admin','banner_list');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_banner` where id='.$id);
		exit('ok');
		break;
	case 'add':
		include T('seller_admin','banner_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_shop_banner` where id='.$id);
		include T('seller_admin','banner_add');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$infos=array();
		$infos['userid']=$_userid;
		$infos['title']=trim($_POST['title']);
		$infos['url']=trim($_POST['url']);
		$infos['addtime']=time();
		$infos['thumb']=$_POST['thumb'];
		if(empty($_POST['thumb'])){
			showmessage('请上传banner图片','goback');
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
		if($id>0){
			$db->update('web_shop_banner',$infos,'id='.$id);
		}else{
			$db->insert('web_shop_banner',$infos);
		}
		showmessage('保存成功','/home/banner.html');
		break;
}