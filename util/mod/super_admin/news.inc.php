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
$cates=$db->getAll('select * from `web_news_cate`','id');
switch($c) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$nums=$db->get_one("select count(*) as num from `web_news`");
		$list=$db->getAll('select * from `web_news` order by addtime desc limit '.$start.','.$offset);
		$pagestr=pages_y($nums['num'], $page, $offset);	
		include T('super_admin','news_list');
		break;
	case 'add':
		foreach($cates as $k=>$v) {
			$op.='<option value="'.$v['id'].'" >'.$v['title'].'</option>';
		}
		include T('super_admin','news_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_news` where id='.$id);
		foreach($cates as $k=>$v) {
			if($v['id']==$info['cateid']){
				$sel='selected';
			}else{
				$sel='';
			}
            $op.='<option value="'.$v['id'].'" '.$sel.' >'.$v['title'].'</option>';
        }
		include T('super_admin','news_add');
		break;
	case 'check':
		$id=intval($_REQUEST['id']);
		$db->query('update `web_news` set status=1 where id='.$id);
		exit('ok');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_news` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$content=trim($_POST['content']);
		$cateid=intval($_POST['cateid']);
		$time=time();
		if($id>0){
			$db->query("update `web_news` set cateid='$cateid',title='$title',content='$content' where id='$id'");
			$msg='更新成功';
		}else{
			$db->query("insert into `web_news` (cateid,title,content,addtime) values ('$cateid','$title','$content','$time')");
			$msg='发布成功';
		}
		showmessage($msg,'/?m=admin&a=news');
		break;
}