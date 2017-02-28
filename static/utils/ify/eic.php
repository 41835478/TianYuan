<?php
define('CHARSET','gbk');
define('UPATH','D:/wwwroot/static/upload/poco/');
define('STATIC_URL','/static');
require('D:/wwwroot/cloud/include/class_config.php');
require('D:/wwwroot/cloud/include/config_poco.php');
require('D:/wwwroot/cloud/include/class_string.php');
require('D:/wwwroot/cloud/include/class_mysql.php');
require('D:/wwwroot/cloud/include/class_smart_thumb.php');

$dpath = date('Y/md/');
$targetPath = UPATH.$dpath;
$sid = $_POST['sid'];
if(empty($sid)){
    unlink($_FILES['Filedata']['tmp_name']);
    die('uid');
}else{
    $info = StringExt::decode($sid, 'eics');
    if(empty($info) || strpos($info,'-')===false){
        unlink($_FILES['Filedata']['tmp_name']);
        die('uid');
    }else{
        list($uid,$albumid,$time) = explode('-', $info);
    }
}

$uid=intval($uid);
if(!$uid){
    unlink($_FILES['Filedata']['tmp_name']);
    die('uid');
}
$db = new Mysql(config::get('db'));
$_qyinfo=$db->findRow('select `id`,`siteuserid`,`qyuid` from `web_ws`.`web_plugin_score_uc` where `id`='.$uid);
if(empty($_qyinfo)){
	die('uid');
}
if (!empty($_FILES)) {
    if(!file_exists($targetPath)){
        mkdir($targetPath,0777,true) or die('dir');
    }
    $oname = $_FILES['Filedata']['name'];
    $ssoname = @iconv('UTF-8','GBK',$oname);
    $ssoname = htmlspecialchars($ssoname);
    $ssoname = str_replace(array('%','"',"'"),'',$ssoname);
    if(empty($ssoname)){
        $ssoname = 'Î´ÃüÃû';
    }
    $ext = strtolower(end(explode('.',$oname)));
    $nname = date('His').StringExt::rand(8,2).'.'.$ext;
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	$fileTypes = array('jpg','jpeg','gif','png');
	
	if (in_array($ext,$fileTypes)) {
		if(move_uploaded_file($tempFile,$targetPath.$nname)){
            list($w,$h,,) = getimagesize($targetPath.$nname);
			$width_max=1000;
			if($w >$width_max){
				$height = ceil($width_max*$h/$w);
				$width=$width_max;
				$image_p = imagecreatetruecolor($width, $height);
				$image = imagecreatefromjpeg($targetPath.$nname);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $w, $h);
				imagejpeg($image_p, $targetPath.$nname, 90);
				imagedestroy($image_p);
			}else{
				$height =$h;
				$width=$w;
			}
            $thumb = new smartThumb();
            $thumb->setSize(234,250);
            $thumb->setImage($targetPath.$nname);
            $thumb->scaleThumb();
            $thumb->createThumbUseWidth($targetPath.$nname);
            $thumb->save('234x250');
            $thumb->setSize(350,262);
            $thumb->save('350x262');


            $id = $db->insert('yingbo.yb_photos',array(
                'albumid'=>$albumid,
                'userid'=>$_qyinfo['qyuid'],
                'catid'=>1,
                'gtype'=>5,
                'time'=>time(),
                'status'=>'1',
                'outer'=>'0',
                'width'=>$width,
                'height'=>$height,
                'imageurl'=>$dpath.$nname,
                'title'=>$ssoname,
				'qyuid'=>$uid,
                'isei'=>2
            ), true);
        }
		echo 'ok|'.$id.'|'.$dpath.$nname.'|'.iconv('GBK','UTF-8',$ssoname);
	}else{
		echo 'type';
	}
}
?>