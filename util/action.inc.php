<?php
$m=isset($_REQUEST['m'])?trim($_REQUEST['m']):'wxsite';
$m_arr=array('wxsite'=>true,'admin'=>true);
if(!isset($m_arr[$m])){
	$m='wxsite';
}
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'';
switch($m) {
	case 'wxsite':
		
		$w_l=array('cate'=>true);
		if(isset($w_l[$a])){
			
			include(Q_DIR.'/util/action/wxsite/'.$a.'.inc.php');
		}else{
			sta_404(0);
		}
		break;
	case 'admin':
		$w_l=array('photo'=>true,'area'=>true,'tx'=>true);
		if(isset($w_l[$a])){
			include(Q_DIR.'/util/action/admin/'.$a.'.inc.php');
		}else{
			sta_404(0);
		}
		break;
}
