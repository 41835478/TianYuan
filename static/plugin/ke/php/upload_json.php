<?php
exit;
require('../../include/common.inc.php');
require_once(PHPCMS_ROOT.'cloud/include/upload.func.php');
require_once(PHPCMS_ROOT.'cloud/include/image.func.php');
require_once 'JSON.php';
$php_path = dirname(__FILE__) . '/';
$php_url = dirname($_SERVER['PHP_SELF']) . '/';

//文件保存目录路径
$save_path = PHPCMS_ROOT.'cloud/temp/ftptmp';
//文件保存目录URL
$save_url =  NUU;
//定义允许上传的文件扩展名
$ext_arr = array('gif', 'jpg', 'jpeg', 'png');//, 'bmp'
//最大文件大小
$max_size = 1000000;
//PHP上传失败
if (!empty($_FILES['imgFile']['error'])) {
	switch($_FILES['imgFile']['error']){
		case '1':
			$error = '超过php.ini允许的大小。';
			break;
		case '2':
			$error = '超过表单允许的大小。';
			break;
		case '3':
			$error = '图片只有部分被上传。';
			break;
		case '4':
			$error = '请选择图片。';
			break;
		case '6':
			$error = '找不到临时目录。';
			break;
		case '7':
			$error = '写文件到硬盘出错。';
			break;
		case '8':
			$error = 'File upload stopped by extension。';
			break;
		case '999':
		default:
			$error = '未知错误。';
	}
	alert($error);
}

//有上传文件时
if (empty($_FILES) === false) {
	//原文件名
	$file_name = $_FILES['imgFile']['name'];
	//服务器上临时文件名
	$tmp_name = $_FILES['imgFile']['tmp_name'];
	//文件大小
	$file_size = $_FILES['imgFile']['size'];
	//检查文件名
	if (!$file_name) {
		alert("请选择文件。");
	}
	//检查目录
	if (@is_dir($save_path) === false) {
		alert("上传目录不存在。");
	}
	//检查目录写权限
	if (!is__writable($save_path)) {
		alert("上传目录没有写权限。");
	}
	//检查是否已上传
	if (@is_uploaded_file($tmp_name) === false) {
		alert("临时文件可能不是上传文件。");
	}
	//检查文件大小
	if ($file_size > $max_size) {
		alert("上传文件大小超过限制。");
	}
	//获得文件扩展名
	$temp_arr = explode(".", $file_name);
	$file_ext = array_pop($temp_arr);
	$file_ext = trim($file_ext);
	$file_ext = strtolower($file_ext);
	//检查扩展名
	if (in_array($file_ext, $ext_arr) === false) {
		alert("上传文件扩展名是不允许的扩展名。");
	}
	//创建文件夹
	$ymd = date("Y/md/");
	if (!file_exists($save_path)) {
		dir_create($save_path);
	}
	//新文件名
	$new_file_name = date("His").rand(100, 999) . '_u'.$_userid.'.' . $file_ext;
	//移动文件
	$file_path = $save_path . $new_file_name;
	if (move_uploaded_file($tmp_name, $file_path) === false) {
		alert("上传文件失败。");
	}else{
		list($width_orig, $height_orig) = getimagesize($file_path);

		$img_max_width=600;

		if($width_orig>$img_max_width){
			$iwidth = $img_max_width;
			$iheight = ceil($iwidth*$height_orig/$width_orig);
		}else{
			$iwidth = $width_orig;
			$iheight = $height_orig;
		}
		$image_p = imagecreatetruecolor($iwidth, $iheight);
		$fun1 = 'imagecreatefrom'.str_replace('jpg','jpeg',$file_ext);
		$fun2 = 'image'.str_replace('jpg','jpeg',$file_ext);
		$image = $fun1($file_path);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $iwidth, $iheight, $width_orig, $height_orig);
		if($file_ext=='jpg' or $file_ext=='jpeg'){
			imagejpeg($image_p, $file_path, 85);
		}else{
			$fun2($image_p, $file_path);
		}
		imagedestroy($image_p);
		@imagedestroy($image);
        
        $ftpfile = str_replace('_u'.$_userid, '', $new_file_name);
        $ftppath = '/uploadfile/'.$ymd;
        if( upload($file_path, $ftppath.$ftpfile) ){
            file_exists($file_path) && unlink($file_path);
            $file_url = STATIC_S.$ftppath.$ftpfile;
			/*放入数据库 start*/
			$db->query("INSERT INTO `zero`.`zz_web_img` SET `img`='{$file_url}'");
			/* end */
        }else{
            alert('FTP上传失败');
        }
	}

	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 0, 'url' => $file_url));
	exit;
}


function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 1, 'message' => $msg));
	exit;
}
