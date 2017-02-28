<?php
define('APP_DIR','www');
define('MICROTIME_START', microtime(true));
define ('Q_DIR', dirname(__FILE__));
define('PHPCMS_ROOT', str_replace("\\", '/', substr(Q_DIR, 0, -4)).'/');
date_default_timezone_set('Asia/shanghai');
error_reporting(E_ALL ^ E_NOTICE);
require(PHPCMS_ROOT.APP_DIR.'/util/config.php');
require(PHPCMS_ROOT.APP_DIR.'/util/core/db.class.php');
require(PHPCMS_ROOT.APP_DIR.'/util/core/functions.inc.php');
define('TU',PHPCMS_ROOT.APP_DIR.'/static/temp/');
if (isset($_POST["PHPSESSID"])) {
    session_id($_POST["PHPSESSID"]);
}
session_start();
$_userid=isset($_SESSION['userid'])?$_SESSION['userid']:0;
if(!$_userid){
    echo 'ERROR:登陆超时，请重新登陆';
    exit(0);
}

header('Content-type: text/html; charset='.CHARSET);
ini_set("html_errors", "0");

if (!isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
	//没有文件上传
    echo "ERROR:上传失败";
    exit(0);
}
$oname = $_FILES["Filedata"]["name"];
$ext = strtolower(pathinfo($oname, PATHINFO_EXTENSION));
//$ext = strtolower(array_pop(explode('.', $oname)));
if(!in_array($ext,array('jpg','jpeg'))){
	//非jpg和jpeg的不能上传
	echo 'ERROR:文件类型不正确';
	exit(0);
}
$tmpname = TU.date('Ymd_His').mt_rand(100,999).'_real.'.$ext;

if(!move_uploaded_file($_FILES["Filedata"]["tmp_name"], $tmpname)){
	//文件移动出错
	echo 'ERROR:由于网络问题，传输过程中断，请稍后重试';
	exit(0);
}

list($w, $h, $type, $attr) = getimagesize($tmpname);
$w = intval($w);
$h = intval($h);
if(!($w && $h)){
    unlink($tmpname);
    echo 'ERROR:图片尺寸错误';
    exit(0);
}
if($w>2000 || $h>2000){
    unlink($tmpname);
    echo 'ERROR:图片尺寸太大了';
    exit(0);
}
$next =	image_type_to_extension($type,false);
if($next!='jpg'&&$next!='jpeg'){
    echo 'ERROR:文件损坏或者格式错误'.$next;
	exit(0);
}
/*
resize the real_img
*/
$width=800;
$height=800;
$image = imagecreatefromjpeg($tmpname);//原图资源

$image_p = imagecreatetruecolor($width,$height);//大图画布
$white = imagecolorallocate($image_p, 255, 255, 255);
@imagefilledrectangle($image_p, 0, 0, $width, $height, $white);//白色填充

$now_rate=$w/$h;
$new_rate=1;
$iwidth = $width;
$iheight = $height;
if ($w>$iwidth||$h>$iheight) {
	 if($now_rate<$new_rate){
		$iwidth = ($iheight / $h) * $w;
	 }else{
		$iheight = ($iwidth / $w) * $h;
	 }
}else{
	$iwidth =$w;
	$iheight =$h;
}
imagecopyresampled($image_p, $image, ($width-$iwidth)/2,  ($height-$iheight)/2, 0, 0, $iwidth, $iheight, $w, $h);
imagedestroy($image);
$w1=$h1=350;
$file_a=str_replace('_real','_'.$w1.'_'.$h1,$tmpname);
$newim = imagecreatetruecolor($w1,$h1);
imagecopyresampled($newim,$image_p,0,0,0,0,$w1,$h1,$width,$height);
imagejpeg($newim, $file_a, 90);//保存图片_350_350
imagedestroy($newim);
$w1=$h1=50;
$file_a=str_replace('_real','_'.$w1.'_'.$h1,$tmpname);
$newim = imagecreatetruecolor($w1,$h1);
imagecopyresampled($newim,$image_p,0,0,0,0,$w1,$h1,$width,$height);
imagejpeg($newim, $file_a, 90);//保存图片_50_50
imagedestroy($newim);
//water_start
if($now_domain=='qysc'){
	$water_img=imagecreatefrompng(PHPCMS_ROOT.APP_DIR.'/static/wxsite/water.png');
}else{
	$water_img=imagecreatefrompng(PHPCMS_ROOT.APP_DIR.'/static/wxsite/water02.png');
}
imageCopy($image_p, $water_img, 0, 0, 0, 0,$width, $height);
//water_end
imagejpeg($image_p, $tmpname, 90);//保存大图_real
imagedestroy($image_p);

$db = MySQL::getdb();

ob_start();
$imagevariable = ob_get_contents();
ob_end_clean();

$file_id = md5($_FILES["Filedata"]["tmp_name"] + rand()*100000);

$_SESSION["file_info"][$file_id] = $imagevariable;
$new_file =str_replace(TU,'/static/temp/',$tmpname);
$sql = "INSERT INTO `web_shop_goods_photo` (`userid`,`gid`,`thumb`,`addtime`) VALUES ({$_userid},0,'{$new_file}',".time().")";
$db->query($sql);//保存信息
$picid=$db->insert_id();
echo "FILEID:" . $file_id . '|' .$new_file.'|'.$picid;	// Return the file id to the script

/*
*从上传的临时目录获得资源，加水印后保存到新目录
*/
function create_new_file($old_file,$newfile,$w_cfg=array()){
	global $_userid;
	$mark_pos=9;
	$www=$w_cfg['w'];
	$hhh=$w_cfg['h']-1;
	$w_img=$w_cfg['water_file'];
	$mark_pos=$w_cfg['p'];
	$water_img=imagecreatefrompng($w_img);
	list($x, $y) = getimagesize($old_file);
	$cfg_ab=array(
		1=>array('a'=>0,'b'=>0),
			array('a'=>($x-$www)/2,'b'=>0),
			array('a'=>$x-$www,'b'=>0),
			array('a'=>0,'b'=>($y-$hhh)/2),
			array('a'=>($x-$www)/2,'b'=>($y-$hhh)/2),
			array('a'=>$x-$www,'b'=>($y-$hhh)/2),
			array('a'=>0,'b'=>$y-$hhh),
			array('a'=>($x-$www)/2,'b'=>$y-$hhh),
			array('a'=>$x-$www,'b'=>$y-$hhh),
	);
	$mark_pos_info=isset($cfg_ab[$mark_pos])?$cfg_ab[$mark_pos]:$cfg_ab[9];
	$image = imagecreatefromjpeg($old_file);//临时目录的图像文件
	$image_new = imagecreatetruecolor($x, $y);//创建新的图像文件副本
	$black = imagecolorallocatealpha($image_new,255,255,255,0);//设置底色
	$white = imagecolorallocatealpha($image_new,32,32,32,0);//设定字体颜色
	$red=imagecolorallocatealpha($image_new,228,0,96,0);//设定字体颜色
	imagecopyresampled($image_new, $image, 0, 0, 0, 0, $x, $y, $x, $y);//将临时目录的图像资源copy到新的副本中
	imagedestroy($image);//释放资源
	imageCopy($image_new, $water_img, $mark_pos_info['a'], $mark_pos_info['b'], 0, 0,$www, $hhh);
	imagejpeg($image_new, $newfile, 90);//保存文件
	imagedestroy($image_new);//释放资源
	return true;
}
if(!function_exists('uidstr')){
    function uidstr($uid=0){
        $uid_str = abs(intval($uid));
        $file_str = sprintf("%09d", $uid_str);
        $dir1 = substr($file_str, 0, 3);
        $dir2 = substr($file_str, 3, 3);
        $dir3 = substr($file_str, 6, 3);
        return $dir1.'/'.$dir2.'/'.$dir3;
    }
}