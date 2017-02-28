<?php
define('CHARSET','gbk');
define('UPATH','D:/wwwroot/static/upload/poco/');
define('STATIC_URL','/static');
require('D:/wwwroot/qlib/class_config.php');
require('D:/wwwroot/qlib/class_string.php');
require('D:/wwwroot/qlib/adapter/db/mysql.php');
require('D:/wwwroot/qlib/class_smart_thumb.php');
//cookie设置
config::set('cookie_prefix','qy_');
config::set('cookie_expire',86400*2);
config::set('cookie_path','/');
config::set('cookie_domain','.7192.com');
config::set('authcode','o3298cjvm2');
//数据库配置
config::set('db', array(
    'host'=>'192.168.60.2:60002',
    'user'=>'root',
    'pass'=>'QY(7192)a0shashen00@7192.com',
    'dbname'=>'yingbo',
    'charset'=>'gbk',
    'pconnect'=>0
));

$dpath = date('Y/md/');
$targetPath = UPATH.$dpath;


if(!function_exists('reSaveImage')){
	function reSaveImage($filename,$width=900){
		if(!file_exists($filename)){
			return false;
		}
		$info = pathinfo($filename);
		if(!is_writeable($info['dirname'])){
			return false;
		}
		$ext = str_replace('jpg','jpeg', strtolower($info["extension"]));
		$new = $info['basename'];
		$cFun = 'imagecreatefrom'.$ext;
		$oFun = 'image'.$ext;
		list($width_orig, $height_orig) = getimagesize($filename);

		if($width_orig > $width){
			$height = ceil($width*$height_orig/$width_orig);
			$image_p = imagecreatetruecolor($width, $height);
			$image = $cFun($filename);
			imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			imagedestroy($image);
		}else{
			$image_p = $cFun($filename);
		}
		if($ext=='jpeg'){
			imagejpeg($image_p, $filename, 80);
		}else{
			$oFun($image_p, $filename);
		}
		imagedestroy($image_p);
		return $filename;
	}
}

$db = new Mysql(config::get('db'));
$tid=isset($_REQUEST['tid'])?intval($_REQUEST['tid']):0;
if (!empty($_FILES)) {
    if(!file_exists($targetPath)){
        mkdir($targetPath, 0777, true) or die('dir');
    }
    $oname = $_FILES['Filedata']['name'];
    $ssoname = iconv('UTF-8','GBK',$oname);
    $ssoname = htmlspecialchars($ssoname);
    $ssoname = str_replace(array('%','"',"'"),'',$ssoname);
    if(empty($ssoname)){
        $ssoname = '未命名';
    }
	//$ssoname='';
    $ext = preg_replace('/[^a-z]+/i', '', strtolower(end(explode('.', $oname))));
    $nname = date('His').StringExt::rand(8, 2).'.'.$ext;
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	$fileTypes = array('jpg', 'jpeg', 'gif', 'png');

	if (in_array($ext,$fileTypes)) {
		if(move_uploaded_file($tempFile,$targetPath.$nname)){
			reSaveImage($targetPath.$nname,800);
            list($width,$height,,) = getimagesize($targetPath.$nname);
            $thumb = new smartThumb();
            $thumb->setSize(234,250);
            $thumb->setImage($targetPath.$nname);
            $thumb->scaleThumb();
            $thumb->createThumbUseWidth($targetPath.$nname);
            $thumb->save('234x250');
            $thumb->setSize(350,262);
            $thumb->save('350x262');
			if($width>800){
				$height = ceil(800*$height/$width);
				$width=800;
			}
            $id = $db->insert('web_talk.web_talk_works',array(
                'tid'=>$tid,
                'addtime'=>time(),
                'thumb'=>$dpath.$nname,
                'oname'=>$ssoname,
            ), true);
        }
		echo 'ok|'.$id.'|'.$dpath.$nname.'|'.iconv('GBK','UTF-8',$ssoname);
	} else {
		echo 'type';
	}
}
?>