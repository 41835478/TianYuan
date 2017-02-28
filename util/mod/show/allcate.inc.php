<?php
$allcate=$db->getAll('select * from `web_cate` where parent=0 and visible=1 order by pos asc');
foreach ($allcate as $k => $v) {
	$allcate[$k]['sub']=$db->getAll('select * from `web_cate` where parent='.$v['id'].' and visible=1');
}
if($ismobile||$_GET['t']==11){
	include T('show/m/','allcate');
}else{
	include T('show/pc/','index');
}


