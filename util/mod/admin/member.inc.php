<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'apply'=>1,'saveapply'=>1,'goods'=>1,'log'=>1,'tx'=>1,'txsave'=>1,'txlog'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$apply_info=$db->get_One('select * from `web_fx_apply_info` where userid='.$_userid);
$all_cash=$db->findOne('select sum(cash)  from `web_fx_trade_log` where fxid='.$_userid);
$tx_cash=$db->findOne('select sum(cash) from `web_cash` where userid='.$_userid);
$yu=$all_cash-$tx_cash;
switch($c) {
	case 'index':		
		include T('admin','member');
		break;
	case 'apply':		
		include T('admin','member_apply');
		break;
	case 'tx':
		include T('admin','member_tixian');
		break;
	case 'txsave':
		$txcash=trim($_POST['cash']);
		$way=intval($_POST['way']);
		$account=trim($_POST['account']);

		if($yu-$txcash<0){
			exit('余额不足！');
		}
		$name=trim($_POST['name']);
		$tel=trim($_POST['tel']);
		if(empty($txcash)||$txcash<0){
			exit('提现金额有误！');
		}elseif($txcash<1){
			exit('提现金额不能低于1元！');
		}else{
			$time=TIME;
			$db->query("insert into `web_cash` (userid,cash,way,account,name,tel,time,is_fx) values ('$_userid','$txcash','$way','$account','$name','$tel','$time',1)");
			exit('ok');
		}
		break;
	case 'txlog':
		$list=$db->getAll('select * from `web_cash` where userid='.$_userid.' and is_fx=1');
		include T('admin','tx_log');
	case 'goods':
		$fxgoods=$db->getAll('select id,title,userid,thumb from `web_shop_goods` where is_fx=1 and status=1 order by addtime desc');
		include T('admin','member_goods');
		break;
	case 'log':
		$log=$db->getAll('select * from `web_fx_trade_log` where fxid='.$_userid.' order by time desc');
		include T('admin','member_log');
		break;
	case 'saveapply':
		$infos=array();
		$infos['name']=trim($_POST['name']);
		$infos['tel']=trim($_POST['tel']);
		$infos['id_no']=trim($_POST['id_no']);
		$infos['userid']=$_userid;
		if(empty($_POST['id_pic'])){
			showmessage('请上传身份证照片','goback');
		}else{
			$real_file=PHPCMS_ROOT.APP_DIR.$_POST['id_pic'];
			if(strpos($real_file,'temp')){
				$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
				if(createDir($d)){
					$file_name_arr=explode('_real',$real_file,2);
					$new_base=$d.substr($file_name_arr[0],-9);
					$new_real=$new_base.'_real'.$file_name_arr[1];
					rename($real_file,$new_real);
					$infos['id_pic']=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
				}
			}else{
				$infos['id_pic']=$_POST['id_pic'];
			}
		}
		$infos['time']=time();
		if(!empty($apply_info)){
			$db->update('web_fx_apply_info',$infos,'userid='.$_userid);
		}else{
			$db->insert('web_fx_apply_info',$infos);
		}
		
		showmessage('促销员申请信息提交成功！请等待管理员审核！','/home/member.html');
		break;
}