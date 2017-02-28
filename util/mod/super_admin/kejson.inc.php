<?php
require(PHPCMS_ROOT.APP_DIR.'/util/core/JSON.php');
//文件保存目录路径
$save_path =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
createDir($save_path);
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
	//新文件名
	$new_file_name = date("His").rand(100, 999) . '_ke.' . $file_ext;
	//移动文件
	$file_path = $save_path . $new_file_name;
	if (move_uploaded_file($tmp_name, $file_path) === false) {
		alert("上传文件失败。");
	}else{
		list($width_orig, $height_orig,$srcType) = getimagesize($file_path);
		$file_ext	=	image_type_to_extension($srcType,false);
		if (in_array($file_ext, $ext_arr) === false) {
			alert("上传文件扩展名是不允许的扩展名。");
		}
		$func		=	str_replace('jpg','jpeg',$file_ext);
		$img_max_width=560;
		if($width_orig>$img_max_width){
			$iwidth = $img_max_width;
			$iheight = ceil($iwidth*$height_orig/$width_orig);
		}else{
			$iwidth = $width_orig;
			$iheight = $height_orig;
		}
		$image_p = imagecreatetruecolor($iwidth, $iheight);
		$fun1 = 'imagecreatefrom'.$func;
		$fun2 = 'image'.$func;
		$image = $fun1($file_path);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $iwidth, $iheight, $width_orig, $height_orig);
		if($file_ext=='jpg' or $file_ext=='jpeg'){
			imagejpeg($image_p, $file_path, 85);
		}else{
			$fun2($image_p, $file_path);
		}
		imagedestroy($image_p);
		@imagedestroy($image);
		$file_url = str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$file_path);
		/*放入数据库 start*/
		//$imgid=$db->insert('wm_ke_img',array('img'=>$file_url),true);
		/* end */
 	}
	$json = new Services_JSON();
	echo $json->encode(array('error' => 0,'id'=>$imgid, 'url' => $file_url));
	exit;
}


function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 1, 'message' => $msg));
	exit;
}
