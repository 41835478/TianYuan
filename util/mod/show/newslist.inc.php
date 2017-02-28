<?php
$acts=array(
	'index'=>1,

	
);
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'index';
if(!isset($acts[$a])){
	$a='index';
}
$allcate=$db->getAll('select * from `web_news_cate`','id');
$id=intval($_REQUEST['id']);
$cateinfo=$db->get_One('select * from `web_news_cate` where id='.$id);
switch($a) {
	case 'index':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=28;
		$start=($page-1)*$offset;
		$nums=$db->get_one('select count(*) as num from `web_news` where cateid ='.$id.' and status=1');
		$list=$db->getAll('select * from `web_news` where cateid ='.$id.' and status=1 order by addtime desc limit '.$start.','.$offset);
		$pagestr=pages_z($nums['num'], $page, $offset);
		if($ismobile||$_GET['t']==11){
			include T('wxsite/m/','newslist');
		}else{
			include T('show/pc/','newslist');
		}
		break;
}
