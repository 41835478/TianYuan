<?php
if(!$_userid){
	showmessage('您还没有登录','goback');
}
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$all_area=$db->getAll('select `areaid`,`arrparentid`,`name` FROM `web_area` WHERE 1','areaid');
switch($c){
	case 'index':
		$key=isset($_REQUEST['key'])?intval($_REQUEST['key']):'';
		$address=array();
		if($key){
			$sql='select * from `web_shop_address` where `id`="'.$key.'"';
			$address_tmp=$db->get_one($sql);
			if(empty($address_tmp)||$address_tmp['userid']!=$_userid){
				$key='';
			}else{
				$address=unserialize($address_tmp['address']);
			}
		}
		if ($ismobile) {
			include T('show/m','address_edit');
		} else {
			include T('show','address');
		}
		break;
	case 'list':
		$sql = 'select * from `web_shop_address` where `userid`="'.$_userid.'"';
		$my_address=$db->getAll($sql);
		if ($ismobile) {
			include T('show/m','address_list');
		}
		break;
	
}