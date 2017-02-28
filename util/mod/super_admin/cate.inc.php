<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array(
	'index'=>1,
	'add'=>1,
	'edit'=>1,
	'check'=>1,
	'dele'=>1,
	'save'=>1,
	'saveall'=>1,
	'type'=>1,
	'savetype'=>1,
	'getsub'=>1,
	'spec'=>1,
	'savespec'=>1,
	);
if(!isset($c_arr[$c])){
	$c='index';
}


switch($c) {
	case 'getsub':
		$parent=$_REQUEST['parent'];
		$sub=$db->getAll('select * from `web_cate` where parent='.$parent);
		if(empty($sub)){
			$op='<option value="-1">无子分类</option>';
		}else{
			foreach($sub as $k=>$v) {
				$op.='<option value="'.$v['id'].'" >'.$v['name'].'</option>';
			}
		}
		echo $op;
		break;
	case 'index':
		$id=$_REQUEST['id'];
		if($id>0){
			$cate_info=$db->get_One('select * from `web_cate` where id='.$id);
			if($cate_info['parent']>0){//二三级
				
				$cate=$db->getAll('select * from `web_cate` where parent='.$cate_info['parent']);
			}else{
				$cate=$db->getAll('select * from `web_cate` where parent=0 order by pos asc');//一级
			}
			$list=$db->getAll('select * from `web_cate` where parent='.$id.' order by pos asc');
		}else{
			$cate=$db->getAll('select * from `web_cate` where parent=0 order by pos asc');
			$list=$db->getAll('select * from `web_cate` where parent=0 order by pos asc');
		}
		include T('super_admin','cate_list');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_cate` where id='.$id);
		$db->query('delete from `web_cate` where parent='.$id);
		exit('ok');
		break;
	case 'save':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$parent=intval($_POST['parent']);
		$name=trim($_POST['name']);
		$pos=intval($_POST['pos']);
		$visible=intval($_POST['visible']);
		if($id>0){
			$db->query("update `web_cate` set parent='$parent',name='$name',pos='$pos',visible='$visible' where id='$id'");
		}else{
			$db->query("insert into `web_cate` (parent,name,pos,visible) values ('$parent','$name','$pos','$visible')");
		}
		exit('ok');
		break;
	case 'saveall':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$parent=intval($_POST['parent']);
		$name=trim($_POST['name']);
		$pos=intval($_POST['pos']);
		$visible=intval($_POST['visible']);
		if($id>0){
			$db->query("update `web_cate` set parent='$parent',name='$name',pos='$pos',visible='$visible' where id='$id'");
		}else{
			$db->query("insert into `web_cate` (parent,name,pos,visible) values ('$parent','$name','$pos','$visible')");
		}
		exit('ok');
		break;
	case 'type':
		$id=intval($_REQUEST['id']);
		$list=$db->getAll('select * from `web_cate_type` where cateid='.$id.' order by pos asc');
		include T('super_admin','cate_type_list');
		break;
	case 'spec':
		$id=intval($_REQUEST['id']);
		$list=$db->getAll('select * from `web_cate_spec` where cateid='.$id.' order by pos asc');
		include T('super_admin','cate_spec_list');
		break;
	case 'savetype':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$opt=trim($_POST['opt']);
		$pos=intval($_POST['pos']);
		$cateid=intval($_POST['cateid']);
		if($id>0){
			$db->query("update `web_cate_type` set title='$title',opt='$opt',pos='$pos',cateid='$cateid' where id='$id'");
		}else{
			$db->query("insert into `web_cate_type` (title,opt,pos,cateid) values ('$title','$opt','$pos','$cateid')");
		}
		exit('ok');
		break;
	case 'savespec':
		$id=$_REQUEST['id']?intval($_REQUEST['id']):0;
		$title=trim($_POST['title']);
		$spec=trim($_POST['spec']);
		$pos=intval($_POST['pos']);
		$cateid=intval($_POST['cateid']);
		if($id>0){
			$db->query("update `web_cate_spec` set title='$title',spec='$spec',pos='$pos',cateid='$cateid' where id='$id'");
		}else{
			$db->query("insert into `web_cate_spec` (title,spec,pos,cateid) values ('$title','$spec','$pos','$cateid')");
		}
		exit('ok');
		break;
}