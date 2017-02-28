<?php

print_r(PHPCMS_ROOT.APP_DIR);
exit;

require(PHPCMS_ROOT.APP_DIR.'/util/config.php');
require(PHPCMS_ROOT.APP_DIR.'/util/core/db.class.php');
if($_GET['type']=='qu'){
    $areaid=intval($_POST['areaid']);
    $sc = array(
        //'c1'=>'2',
        'c19'=>'20',
        'c797'=>'798',
        'c2254'=>'2255'
    );
    $areaid = isset($sc['c'.$areaid]) ? intval($sc['c'.$areaid]) : $areaid;
    $all_city=$db->getAll('select areaid,name from web_shop_area where parentid='.$areaid);
	echo json_encode($all_city);
}else{
    $id = intval($_POST['id']);
    $sc = array(
        //'c1'=>'2',
        'c19'=>'20',
        'c797'=>'798',
        'c2254'=>'2255'
    );
    $id = isset($sc['c'.$id]) ? intval($sc['c'.$id]) : $id;
	if($id){
		$citys = $db->getAll('SELECT `areaid`,`name` FROM `web_area` WHERE `parentid`='.$id);
		$citya = array();
		foreach($citys as $city){
			$citya[]= '{'."id:'{$city['areaid']}',name:'{$city['name']}'".'}';
		}
		echo '['.implode(',',$citya).']';
	}else{
		echo '[]';
	}
}

