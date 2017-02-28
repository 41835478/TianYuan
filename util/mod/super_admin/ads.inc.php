<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1
	);
if(!isset($c_arr[$c])){
	$c='index';
}
$pid=intval($_REQUEST['pid']);
switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_ads` where posid='.$pid);
		include T('super_admin','ads_list');
		break;
	case 'add':
		include T('super_admin','ads_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_ads` where id='.$id);
		include T('super_admin','ads_add');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_ads` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_ads` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$link=trim($_POST['link']);
		if(empty($_POST['img'])){
			showmessage('请上传广告图片','goback');
		}else{
			$real_file=PHPCMS_ROOT.APP_DIR.$_POST['img'];
			if(strpos($real_file,'temp')){
				$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
				if(createDir($d)){
					$file_name_arr=explode('_real',$real_file,2);
					$new_base=$d.substr($file_name_arr[0],-9);
					$new_real=$new_base.'_real'.$file_name_arr[1];
					rename($real_file,$new_real);
					$img=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
				}
			}else{
				$img=$_POST['img'];
			}
		}
		$addtime=time();
		$pid=intval($_REQUEST['pid']);
		if($id>0){
			$db->query("update `web_ads` set posid='$pid',title='$title',link='$link',img='$img' where id='$id'");
			$msg='更新成功';
		}else{
			$db->query("insert into `web_ads` (posid,title,link,img,addtime) values ('$pid','$title','$link','$img','$addtime')");
			$msg='发布成功';
		}
		showmessage($msg,'/?m=admin&a=ads&pid='.$pid);
		break;
}