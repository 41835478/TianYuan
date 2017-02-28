<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'dele'=>1,'add'=>1,'edit'=>1,'save'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		$list=$db->getAll('select * from `web_quan` where shopid='.$_userid.' order by time desc');
		include T('seller_admin','quan_list');
		break;
	case 'add':
		include T('seller_admin','quan_add');
		break;
	case 'edit':
		$id=intval($_REQUEST['id']);
		$info=$db->get_One('select * from `web_quan` where id='.$id);
		include T('seller_admin','quan_add');
		break;
	case 'dele':
		$id=intval($_REQUEST['id']);
		$db->query('delete from `web_quan` where id='.$id);
		exit('ok');
		break;
	case 'save':
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		$infos=array();
        $infos['shopid']=$_userid;
        $infos['title']=trim($_POST['title']);
        if(empty($infos['title'])){
            showmessage('页面标题不能为空！');
        }
		$infos['stime']=strtotime($_POST['stime']);
        $infos['etime']=strtotime($_POST['etime']);
		if($infos['stime']>$infos['etime']){
            showmessage('活动结束时间不能早于开启时间！');
        }
        $infos['type']=0;//0商铺；1平台
		$infos['time']=TIME;
		$infos['fee']=trim($_POST['fee']);
		$infos['beyond']=trim($_POST['beyond']);
		if($id>0){
			$db->update('web_quan',$infos,'id='.$id);
		}else{
			$db->insert('web_quan',$infos);
		}
		showmessage('保存成功','/home/quan.html');
		break;
}