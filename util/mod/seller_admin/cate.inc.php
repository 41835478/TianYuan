<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'add'=>1,'edit'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$c_title='商城类目管理';
$shop_cate=$db->getAll('select * from `web_cate_shop` where userid='.$_userid);
$shop_cate_top=$db->getAll('select * from `web_cate_shop` where userid='.$_userid.' and parent=0');
switch($c) {
	case 'index':
		
		include T('seller_admin','cate');
		break;
	case 'add':
		include T('seller_admin','cate_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_cate_shop` where userid='.$_userid.' and id='.$id);
		include T('seller_admin','cate_add');
		break;
	case 'save':
		$id=intval($_REQUEST['id']);
		$name=trim($_POST['name']);
		if(empty($name)){
			exit('请填写分类标题');
		}
		$parent=intval($_POST['parent']);
		$time=time();
		if($id>0){
			$db->query("update `web_cate_shop` set name='$name',parent='$parent' where id=$id");
		}else{
			$db->query("insert into `web_cate_shop` (userid,name,parent,sort,time) values ('$_userid','$name','$parent',0,'$time')");
		}
		exit('ok');
		break;
} 