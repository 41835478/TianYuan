<?php
$acts=array('index'=>true,'save'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
if(!isset($acts[$c])){
	$c='index';
}
$tb_rule = isset($_REQUEST['tb']) ? intval($_REQUEST['tb']) : 3;
$tb_rtn = isset($_REQUEST['rtn']) ? trim($_REQUEST['rtn']) :'';
$create_thmb=true;
if($tb_rule==2){
	$w=$w1=$h1=$h=200;
}else{
	$w=200;
	$h=200;
}

$spuer_w = $spuer_h = 1200;

switch($c) {
	case 'index':
		include T('func','upfile_wap');
		break;
	case 'save':
		$url	= '/wap/upfile.html';
		if(!empty($tb_rtn)){
			$url.='&rtn='.$tb_rtn;
		}
		$f = $_FILES['file'];
		if( $f['size']>1024*2000 ){
			$msg	= '图片大小超过系统限制（2MB以内）';
			include T('func','alert');
			exit;
		}
		if(!empty($f)){
			$ext = 'jpg';
				$d ='D:/wwwroot/'.APP_DIR.'/static/temp/';
				$filemain = date('YmdHis').mt_rand(100,999).'_real';
				$filename = $filemain.'.'.$ext;
				$real_name=$d.$filename;
				$realfilename=str_replace('D:/wwwroot/'.APP_DIR.'/static','/static',$real_name);
				if(move_uploaded_file($f['tmp_name'], $real_name)){
					reStore($real_name,$spuer_w,$spuer_h);
					if($create_thmb){
						if($tb_rule>1){
							$file_a=str_replace('_real','_'.$w.'_'.$h,$real_name);
							getThumb($real_name,$w,$h,$file_a);
						}
						if($tb_rule<3){
							$file_b=str_replace('_real','_'.$w1.'_'.$h1,$real_name);
							getThumb($real_name,$w1,$h1,$file_b);
						}
						if($tb_rule==2){
							$file_c=str_replace('_real','_480_240',$real_name);
							getThumb($real_name,480,240,$file_c);
						}
					}
					echo '<font color="green" style="font-size:14px;">上传<br/>成功</font>';
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
		include T('func','alert_wap');
		break;
}