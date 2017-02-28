<?php
define('PHPCMS_ROOT','D:/wwwroot/');

require(PHPCMS_ROOT.APP_DIR.'/util/config.php');
require(PHPCMS_ROOT.APP_DIR.'/util/core/db.class.php');
$db = MySQL::getdb();
$id = intval($_POST['id']);
if($id){
    $my_cate = $db->get_one('SELECT * FROM `wm_cate` WHERE `id`='.$id);
	if(empty($my_cate)){
		exit(json_encode(array(
			'msg'=>'404',//没有这个分类
		)));
	}elseif($my_cate['childids']==$id){
		exit(json_encode(array(
			'msg'=>'ok',//没有这个分类
			'cate'=>$my_cate
		)));
	}else{
		$cates=$db->getAll('select * from `wm_cate` where `pid`='.$id.' and sta=1 order by sort asc,id asc','id');
		if(!empty($cates)){
			exit(json_encode(array(
				'msg'=>'200',//没有这个分类
				'cate'=>$cates
			)));
		}else{
			exit(json_encode(array(
				'msg'=>'403',//空分类
			)));
		}
	}
}else{
	exit(json_encode(array(
		'msg'=>'404',//没有这个分类
	)));
}