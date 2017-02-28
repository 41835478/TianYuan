<?php
define('APP_DIR','');
define ( 'Q_DIR', dirname(__FILE__));

define('PHPCMS_ROOT', str_replace("\\", '/', substr(Q_DIR, 0)).'/');
require(PHPCMS_ROOT.'/util/config.php');
require(PHPCMS_ROOT.'/util/core/db.class.php');

error_reporting(E_ERROR);
$db = MySQL::getdb();
if($_GET['type']=='map'){
    $id = intval($_GET['id']);
    $sc = array(
        'c1'=>'2',
        'c19'=>'20',
        'c797'=>'798',
        'c2254'=>'2255'
    );
    $id = isset($sc['c'.$id]) ? intval($sc['c'.$id]) : $id;
    if($id){
        $citys = $db->getAll('SELECT `name` FROM `web_area` WHERE `parentid`='.$id);
        $citya = array();
        foreach($citys as $city){
            $citya[]=$city['name'];
        }
        echo '["'.implode('","',$citya).'"]';
    }else{
        echo '[]';
    }
}else if($_GET['type']=='city'){
    $areaid=intval($_POST['areaid']);
    $all_city=$db->getAll('select areaid,name from web_area where parentid='.$areaid);
    $option='';
    foreach($all_city as $k=>$v){
        $option.='<option value="'.$v['areaid'].'">'.$v['name'].'</option>';
    }    
    $fc=$all_city[0]['areaid'];
    $child=$db->getAll('select areaid,name from web_area where parentid='.$fc);
    $option2='';
    foreach($child as $k=>$v){
        $option2.='<option value="'.$v['areaid'].'">'.$v['name'].'</option>';
    }    
    $op[0]=$option;
    $op[1]=$option2;
    echo json_encode($op);  
    
}else if($_GET['type']=='qu'){
    $areaid=intval($_POST['areaid']);
    $sc = array(
        //'c1'=>'2',
        'c19'=>'20',
        'c797'=>'798',
        'c2254'=>'2255'
    );
    $areaid = isset($sc['c'.$areaid]) ? intval($sc['c'.$areaid]) : $areaid;
    $all_city=$db->getAll('select areaid,name from web_area where parentid='.$areaid);
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

