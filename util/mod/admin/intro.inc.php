<?php
$acts=array('index'=>true,'save'=>true,'lev'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}
$c_title='个人资料';
switch($c){
	case 'index':
		$infos=$db->get_One('select * from web_shop_accout where userid='.$_userid);
		include T('admin','intro');
		break;
	case 'save':
		$infos=array();		
        $id=isset($_POST['id'])?intval($_POST['id']):0;
		$infos['nickname'] = htmlspecialchars($_POST['nickname']);
        $infos['birth'] = strtotime($_POST['birth']);
		$infos['userid']=$_userid;
		$infos['sex']=intval($_POST['sex']);
		$infos['realname'] = htmlspecialchars($_POST['realname']);
		$infos['favor'] = htmlspecialchars($_POST['favor']);
		$infos['areaid']=intval($_POST['areaid']);
		$infos['qq']=trim($_POST['qq']);
		$infos['phone']=trim($_POST['phone']);
		$infos['img']=trim($_POST['img']);
		$info=$db->get_One('select * from web_shop_accout where userid='.$_userid);
		if(empty($info)){
			$db->insert('web_shop_accout',$infos);
		}else{            
			$db->update('web_shop_accout',$infos,' `userid`='.$_userid);
		}
		showmessage('保存成功','/?m=admin&a=intro');
		break;
}