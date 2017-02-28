<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'dele'=>1,'save'=>1,'reply'=>1,'delreply'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_shop_comments` where uid='.$_userid.' order by addtime desc');
		include T('seller_admin','comment');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_comments` where id='.$id);
		$db->query('delete from `web_com_img` where cid='.$id);//删除评论的图片
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$linkurl=trim($_POST['linkurl']);
		$pos=intval($_POST['pos']);
		$visible=intval($_POST['visible']);
		$addtime=time();
		if($id>0){
			$db->query("update `web_links` set title='$title',linkurl='$linkurl',pos='$pos',visible='$visible' where id='$id'");
		}else{
			$db->query("insert into `web_links` (userid,title,linkurl,pos,visible,addtime) values ('$_userid','$title','$linkurl','$pos','$visible','$addtime')");
		}
		exit('ok');
		break;
	case 'reply':
		$cid=intval($_REQUEST['cid']);
		$reply=trim($_POST['reply']);
		$time=time();
		$db->query("insert into `web_shop_comment_reply` (cid,userid,reply,addtime) values ('$cid','$_userid','$reply','$time')");
		$db->query("update `web_shop_comments` set reply=1 where id='$cid'");
		exit('ok');
		break;
	case 'delreply':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_shop_comment_reply` where id='.$id);
		exit('ok');
		break;
}