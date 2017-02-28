<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$c_title='店铺管理';
switch($c) {
	case 'index':
		$diy_info=$db->get_One('select * from `web_shop_diy` where userid='.$_userid);
		include T('seller_admin','diy_shop');
		break;
	case 'save':
		$old_info=$db->get_One('select * from `web_shop_diy` where userid='.$_userid);
		$infos=array();
		$infos['userid']=intval($_userid);
		$infos['content']=filter_xss($_POST['content'],ALLOWED_HTMLTAGS);
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
		if(empty($old_info)){
			$db->insert('web_shop_diy',$infos);
		}else{
			$db->update('web_shop_diy',$infos,'userid='.$_userid);
		}
		showmessage('保存成功','goback');
		break;
}