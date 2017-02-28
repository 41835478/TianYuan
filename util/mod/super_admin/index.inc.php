<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$config=$db->get_One('select * from `web_config`');
		include T('super_admin','intro');
		break;
	case 'save':		
		$infos=array();
		$infos['sitename']=str_cut(strip_tags(trim($_POST['sitename'])),40);
		if(empty($infos['sitename'])){
			showmessage('请填写网站名称','goback');
		}
		$infos['keywords']=str_cut(strip_tags(trim($_POST['keywords'])),100);
		if(empty($infos['keywords'])){
			showmessage('请填写网站关键词','goback');
		}
		$infos['sitedsp']=str_cut(strip_tags(trim($_POST['sitedsp'])),100);
		if(empty($infos['sitedsp'])){
			showmessage('请填写网站说明','goback');
		}
		$infos['welcome']=str_cut(strip_tags(trim($_POST['welcome'])),100);
		$infos['search']=str_cut(strip_tags(trim($_POST['search'])),100);
		$infos['wxname']=str_cut(strip_tags(trim($_POST['wxname'])),100);
		$infos['meta']=trim($_POST['meta']);
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
					$infos['logo']=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
				}
			}else{
				$infos['logo']=$_POST['logo'];
			}
		}

		$real_file2=PHPCMS_ROOT.APP_DIR.$_POST['wxqr'];
		if(strpos($real_file2,'temp')){
			$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
			if(createDir($d)){
				$file_name_arr2=explode('_real',$real_file2,2);
				$new_base2=$d.substr($file_name_arr2[0],-9);
				$new_real2=$new_base2.'_real'.$file_name_arr[1];
				rename($real_file2,$new_real2);
				$infos['wxqr']=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real2);
			}
		}else{
			$infos['wxqr']=$_POST['wxqr'];
		}
		$db->update('web_config',$infos);
		showmessage('网站基础资料信息更新成功','/?m=admin&a=intro');
		break;
}