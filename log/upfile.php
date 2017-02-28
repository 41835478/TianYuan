<?php

define('APP_DIR','');
define ( 'Q_DIR', dirname(__FILE__));

define('PHPCMS_ROOT', str_replace("\\", '/', substr(Q_DIR, 0,-4)).'/');

include(PHPCMS_ROOT.'/util/origin.inc.php');

$acts=array('index'=>true,'save'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
if(!isset($acts[$c])){
	$c='index';
}
$tb_rule = isset($_REQUEST['tb']) ? intval($_REQUEST['tb']) : 1;
$tb_rtn = isset($_REQUEST['rtn']) ? trim($_REQUEST['rtn']) :'';
$create_thmb=true;
if($tb_rule==1){
	$w=$h=300;
}elseif($tb_rule==2){
	$w=$h=100;
}elseif($tb_rule==3){
	$w=$h=260;
	//$create_thmb=false;
}

$spuer_w = $spuer_h = 1920;

switch($c) {
	case 'index':
		if($tb_rule==2){
			include T('func','upload');
		}else{
			include T('func','upfile');
		}		
		break;
	case 'save':
		$url	= '/log/upfile.php?tb='.$tb_rule;
		if(!empty($tb_rtn)){
			$url.='&rtn='.$tb_rtn;
		}
		$f = $_FILES['file'];
		if( $f['size']>1024*1024 ){
			$msg	= '图片大小超过系统限制（1M）';
			include T('func','alert');
			exit;
		}
		if(!empty($f)){
			$ext = strtolower(array_pop(explode('.', $f['name'])));
			$allow_img=array('gif','png','jpg','jpeg');
			$msg_001='图片只允许JPG,GIF,PNG格式';

			if(!in_array($ext, $allow_img)){
				$msg = $msg_001;
			}else{
				//D:/xampp//htdocs/util/
				$d =PHPCMS_ROOT.APP_DIR.'/static/temp/';
				$filemain = date('YmdHis').mt_rand(100,999).'_real';
				$filename = $filemain.'.'.$ext;
				$real_name=$d.$filename;
				$realfilename=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$real_name);
				if(move_uploaded_file($f['tmp_name'], $real_name)){
					reStore($real_name,$spuer_w,$spuer_h);
					if($create_thmb){
						$file_a=str_replace('_real','_thumb',$real_name);
						getThumb($real_name,$w,$h,$file_a);
					}
					echo '<font color="green" style="font-size:14px;">图片上传成功!</font>';
					if(!empty($tb_rtn)){
						echo '<script type="text/javascript">
								window.parent.setImg("'.$realfilename.'","'.$tb_rtn.'");';
					}else{
						echo '<script type="text/javascript">
								window.parent.setImg("'.$realfilename.'");';
					}
					echo '</script>';
				}else{
					$msg='文件上传失败！';
				}
			}
		}
		include T('func','alert');
		break;
}