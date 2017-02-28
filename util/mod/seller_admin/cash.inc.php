<?php

$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
$c_arr=array('index'=>1,'apply'=>1,'log'=>1,'txlog'=>1);
if(!isset($c_arr[$c])){
	$c='index';
}
$account=$db->getAll('select sum(fee+trans_fee) as cash from `web_trade_log` where status=1 and userid='.$_userid);
$cash=$account[0]['cash'];
$tx_cash=$db->findOne('select sum(cash) from `web_cash` where userid='.$_userid);
$yu=$cash-$tx_cash;
switch($c) {
	case 'index':
		
		include T('seller_admin','cash');
		break;
	case 'apply':
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
			$db->query("insert into `web_cash` (userid,cash,way,account,name,tel,time) values ('$_userid','$txcash','$way','$account','$name','$tel','$time')");
			exit('ok');
		}
		break;
	case 'log':
		$list=$db->getAll('select * from `web_trade_log` where userid='.$_userid.' and status=1');
		include T('seller_admin','trade_log');
		break;
	case 'txlog':
		$list=$db->getAll('select * from `web_cash` where userid='.$_userid);
		include T('seller_admin','tx_log');
		break;
}