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
switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_ad_pos` order by addtime desc');
		include T('super_admin','ad_list');
		break;
	case 'add':
		include T('super_admin','ad_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_ad_pos` where id='.$id);
		include T('super_admin','ad_add');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_ad_pos` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_ad_pos` where id='.$id);
		$db->query('delete from `web_ads` where posid='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$name=trim($_POST['title']);
		$width=trim($_POST['width']);
		$height=trim($_POST['height']);
		$addtime=time();
		if($id>0){
			$db->query("update `web_ad_pos` set name='$name',width='$width',height='$height' where id='$id'");
			$msg='更新成功';
		}else{
			$db->query("insert into `web_ad_pos` (name,width,height,addtime) values ('$name','$width','$height','$addtime')");
			$msg='发布成功';
		}
		showmessage($msg,'/?m=admin&a=ad');
		break;
}