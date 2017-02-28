<?php
$acts=array(
	'index'=>1,

	
);
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'index';
if(!isset($acts[$a])){
	$a='index';
}
$allcate=$db->getAll('select * from `web_news_cate`');
$id=intval($_REQUEST['id']);
switch($a) {
	case 'index':
		$info=$db->get_One('select * from `web_news` where id='.$id);
		if($ismobile||$_GET['t']==11){
			include T('wxsite/m/','news');
		}else{
			include T('show/pc/','news');
		}
		break;
}
