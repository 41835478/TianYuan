<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1,
	'close'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_shop` where status>0 order by addtime desc');
		include T('super_admin','shop_list');
		break;
	case 'add':
		include T('super_admin','shop_add');
		break;
	case 'edit':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		$shop_config=$db->get_One('select * from `web_shop` where id='.$id);
		include T('super_admin','shop_add');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop` set status=-1 where id='.$id);
		exit('ok');
		break;
	case 'close':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_shop` set close=1 where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$infos['title']=trim($_POST['title']);
		$infos['des']=trim($_POST['des']);
		$infos['linkman']=trim($_POST['linkman']);
		$infos['email']=trim($_POST['email']);
		$infos['areaid']=trim($_POST['areaid']);
		$infos['tel']=trim($_POST['tel']);
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
		$infos['addtime']=time();
		if($id>0){
			$db->update('web_shop',$infos,'id='.$id);
			$msg='更新成功';
		}else{
			$db->insert('web_shop',$infos);
			$msg='发布成功';
		}
		showmessage($msg,'/?m=admin&a=shop');
		break;
}