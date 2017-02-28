<?php
include('../util/origin.inc.php');
$acts=array('index'=>true,'save'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
if(!isset($acts[$c])){
	$c='index';
}
$create_thmb=true;

$spuer_w = $spuer_h = 1200;

switch($c) {
	case 'index':
		include T('func','upfile');
		break;
	case 'save':
		$url = '/log/adfile.php';
		
		$f = $_FILES['file'];
		if( $f['size']>1024*1024 ){
			$msg	= '图片大小超过系统限制（1MB）';
			include T('func','alert');
			exit;
		}
		if(!empty($f)){
			$ext = strtolower(array_pop(explode('.', $f['name'])));
			$allow_img=array('gif','png','jpg','jpeg','swf');
			$msg_001='图片只允许JPG,GIF,PNG,swf格式';

			if(!in_array($ext, $allow_img)){
				$msg = $msg_001;
			}else{
				$d =PHPCMS_ROOT.APP_DIR.'/static/temp/';
				$filemain = date('YmdHis').mt_rand(100,999).'_real';
				$filename = $filemain.'.'.$ext;
				$real_name=$d.$filename;
				$realfilename=str_replace('D:/wwwroot/'.APP_DIR.'/static','/static',$real_name);
				if(move_uploaded_file($f['tmp_name'], $real_name)){
					echo '<font color="green" style="font-size:14px;">上传成功!</font>';
					echo '<script type="text/javascript">
							window.parent.setImg("'.$realfilename.'");';
					echo '</script>';
				}else{
					$msg='文件上传失败！';
				}
			}
		}
		//include T('func','alert');
		break;
}