<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'edit'=>1,
	'save'=>1
);
if(!isset($c_arr[$c])){
	$c='index';
}
switch($c) {
	case 'index':
		$shop_info=$db->get_One('select * from `web_shop` where userid='.$_userid);
		include T('seller_admin','shop_edit');
		break;
	case 'save':
		$infos=array();
		$infos['title']=trim($_POST['title']);
		$infos['logo']=$_POST['logo'];
		if(empty($_POST['logo'])){
			showmessage('请上传Logo图片','goback');
		}else{
			$real_file=PHPCMS_ROOT.APP_DIR.$_POST['logo'];
			if(strpos($real_file,'temp')){
				$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
				if(createDir($d)){
					$file_name_arr=explode('_real',$real_file,2);
					$new_base=$d.substr($file_name_arr[0],-9);
					$new_real=$new_base.'_real'.$file_name_arr[1];
					rename($real_file,$new_real);
					$temp_120=implode('_180_60',$file_name_arr);
					$new_120=$new_base.'_180_60'.$file_name_arr[1];
					rename($temp_120,$new_120);
					$infos['logo']=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
				}
			}else{
				$infos['logo']=$_POST['logo'];
			}
		}
		$infos['des']=trim($_POST['des']);
		$infos['notice']=trim($_POST['notice']);
		$infos['tel']=trim($_POST['tel']);
		$infos['address']=trim($_POST['address']);
		$infos['lng']=trim($_POST['lng']);
		$infos['lat']=trim($_POST['lat']);
		$db->update('web_shop',$infos,'userid='.$_userid);
		showmessage('保存成功','/home/shop.html');
		break;
}