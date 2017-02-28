<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'dele'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_shop_nav` where userid='.$_userid.' order by pos asc,addtime desc');
		include T('seller_admin','nav');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_nav` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$url=trim($_POST['url']);
		$pos=intval($_POST['pos']);
		$visible=intval($_POST['visible']);
		$addtime=time();
		if($id>0){
			$db->query("update `web_shop_nav` set title='$title',url='$url',pos='$pos',visible='$visible' where id='$id'");
		}else{
			$db->query("insert into `web_shop_nav` (userid,title,url,pos,visible,addtime) values ('$_userid','$title','$url','$pos','$visible','$addtime')");
		}
		exit('ok');
		break;
}