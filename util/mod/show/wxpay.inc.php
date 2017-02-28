<?php
error_reporting(E_ALL);
$acts=array('index'=>true,'returnu'=>true,'failback'=>1,'notifyu'=>true,'wxpay'=>1,'scan'=>1,'wxnotify'=>1, 'wxajax' => 1, 'update_order' => 1, 'getCode' => 1);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}

switch($c) {
	case 'index':
		exit('wrong way!');
		break;
	case 'wxpay':	
		$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
		$order=array();
		if($id){
			$order=$db->get_one('select * from `web_order` where `id`='.$id);
		}
		if(!empty($order)&&$order['status']==1){
			require(PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Api.php');
			require(PHPCMS_ROOT.APP_DIR.'/util/core/WxPay.NativePay.php');
			$notify = new NativePay();
			$url1 = $notify->GetPrePayUrl("mall_".$order['id']."_".$order['no']);
			if($ismobile){
				header('Location:'.$url1);
			}else{
				$url2 ='http://paysdk.weixin.qq.com/example/qrcode.php?data='.urlencode($url1);
				header('Location:'.$url2);
			}
		}else{
			//header('location:http://static.7192.com/');
			//输出失效提示图片
			exit;
		}
		break;
	case 'scan':
		error_reporting(E_ERROR);
		require(PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Api.php');
		require(PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Notify.php');
		require(PHPCMS_ROOT.APP_DIR.'/util/core/log.php');

		$logfile=PHPCMS_ROOT.APP_DIR."/log/".date('Y/m/d').'.log';
		$log_path=pathinfo($logfile);
		createDir($log_path['dirname']);
		$logHandler= new CLogFileHandler($logfile);
		$log = Log::Init($logHandler, 15);
		//初始化日志
		class NativeNotifyCallBack extends WxPayNotify
		{
			public function unifiedorder($openId, $product_id)
			{
				$pc_arr=explode('_',$product_id);
				$order_id=intval($pc_arr[1]);
				$db = MySQL::getdb();
				$order=$db->get_one('select * from `web_order` where `id`='.$order_id);
				if(!empty($order)||$order['status']==1){
					$order_no=$order['no'];
					$ps_body='商城订单支付';
					$ps_dsp='商城订单支付';
					$total_fee=intval("".(($order['fee'])*100));
				}else{
					return array();
				}
				//统一下单
				Log::DEBUG("begin order_create");
				$input = new WxPayUnifiedOrder();
				$input->SetBody($ps_body);
				$input->SetAttach($ps_dsp);
				$input->SetOut_trade_no($order_no);
				$input->SetTotal_fee($total_fee);
				$input->SetTime_start(date("YmdHis"));
				$input->SetTime_expire(date("YmdHis", TIME + 600));
				//$input->SetSpbill_create_ip(IP);
				$input->SetGoods_tag("qysc_pay");
				$input->SetNotify_url('http://www.kingmanor.cn/wxpay_wxnotify.html');
				$input->SetTrade_type("NATIVE");
				$input->SetOpenid($openId);
				$input->SetProduct_id($product_id);
				$result = WxPayApi::unifiedOrder($input);
				return $result;
			}
			
			public function NotifyProcess($data, &$msg)
			{
				Log::DEBUG("begin NotifyProcess");
				//echo "处理回调";
				if(!array_key_exists("openid", $data) ||
					!array_key_exists("product_id", $data))
				{
					$msg = "回调数据异常";
					return false;
				}
				 
				$openid = $data["openid"];
				$product_id = $data["product_id"];
				
				//统一下单
				$result = $this->unifiedorder($openid, $product_id);
				Log::DEBUG("begin ".var_export($result,1));
				if(!array_key_exists("appid", $result) ||
					 !array_key_exists("mch_id", $result) ||
					 !array_key_exists("prepay_id", $result))
				{
					$msg = "统一下单失败";
					return false;
				}
				
				$this->SetData("appid", $result["appid"]);
				$this->SetData("mch_id", $result["mch_id"]);
				$this->SetData("nonce_str", WxPayApi::getNonceStr());
				$this->SetData("prepay_id", $result["prepay_id"]);
				$this->SetData("result_code", "SUCCESS");
				$this->SetData("err_code_des", "OK");
				return true;
			}
		}

		Log::DEBUG("begin scan");
		$notify = new NativeNotifyCallBack();
		$notify->Handle(true);
		break;
	case 'wxnotify':
		require( PHPCMS_ROOT.APP_DIR.'/util/core/log.php');
		$logfile=PHPCMS_ROOT.APP_DIR."/log/".date('Y/m/d').'.log';
		$log_path=pathinfo($logfile);
		createDir($log_path['dirname']);
		$logHandler= new CLogFileHandler($logfile);
		$log = Log::Init($logHandler, 15);
		require( PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Api.php');
		require( PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Notify.php');

		class PayNotifyCallBack extends WxPayNotify{
			//查询订单
			public function Queryorder($transaction_id)
			{
				$input = new WxPayOrderQuery();
				$input->SetTransaction_id($transaction_id);
				$result = WxPayApi::orderQuery($input);
				Log::DEBUG("query:" . json_encode($result));
				if(array_key_exists("return_code", $result)
					&& array_key_exists("result_code", $result)
					&& $result["return_code"] == "SUCCESS"
					&& $result["result_code"] == "SUCCESS")
				{
					$db = MySQL::getdb();
					$order_hr = $db->get_one("SELECT * FROM `web_order` WHERE `no`='{$result['out_trade_no']}'");
					Log::DEBUG("call order_hr:" . json_encode($order_hr));
					if(!empty($order_hr)&&$order_hr['status']==1){
						$this->openvip($order_hr);
					}
					//$order_goods=$db->getAll('select * from `web_shop_goods_cart` where oid='.$order_hr['id']);
					/*foreach($order_goods as $k=>$v) {//把商品销售量加上
						//$db->query('update `web_shop_goods` set buy='.$v['num'].' where id='.$v['gid']);
						//$score=intval($v['price']);
						/*if($score>1){
							$time=time();
							$uid=$v['userid'];
							$db->query("insert into `web_score_log` (userid,score,type,way,time) values ('$uid','$score',2,1,'$time')");//插入积分变动记录
							$db->query('update `ucenter` set score=score+'.$score.' where userid='.$uid);//加入余额
						}*/
						
					/*}*/
					if($r['is_bond']==1){//定金状态
						$db->query('update `web_shop` set bond_sta=1 where userid='.$r['userid']);
					}
					return true;
				}
				return false;
			}

			private function openvip($order)
			{
				Log::DEBUG("call updateorder:" . json_encode($order));
				updateorder($order,2);
				return true;
			}
			
			//重写回调处理函数
			public function NotifyProcess($data, &$msg)
			{
				Log::DEBUG("call back:" . json_encode($data));
				$notfiyOutput = array();
				
				if(!array_key_exists("transaction_id", $data)){
					$msg = "输入参数不正确";
					return false;
				}
				//查询订单，判断订单真实性
				if(!$this->Queryorder($data["transaction_id"])){
					$msg = "订单查询失败";
					return false;
				}
				return true;
			}
		}

		Log::DEBUG("begin notify");
		$notify = new PayNotifyCallBack();
		$notify->Handle(false);

		break;
	case 'wxajax':

		$oid=intval($_REQUEST['oid']);
		//$callback=preg_replace('/[^a-z_0-9]+/i','',$_REQUEST['callback']);

		if(empty($oid)){
			echo json_encode(array('msg'=>'nooid'));
			exit;
		}

		$info=$db->get_one("select * from web_order where id='$oid'");
		if(empty($info)){
			echo json_encode(array('msg'=>'nooid'));
			exit;
		}
		$fee=$info['fee'];
		$desc=$subject='微信支付'.$fee.'元';

		$fee = intval(strval($fee*100));
		if($fee<=0){
			echo json_encode(array('msg'=>'nomoney'));
			exit;
		}

		if($_SESSION['userid']==123){
			$fee='1';
		}

		if(isset($_SESSION['openids'])&&strlen($_SESSION['openids'])==28){
			require(PHPCMS_ROOT.APP_DIR.'/util/core/wxpay/WxPay.Api.php');
			require(PHPCMS_ROOT.APP_DIR.'/util/core/WxPay.JsApiPay.php');
			require(PHPCMS_ROOT.APP_DIR.'/util/core/log.php');
			$tools = new JsApiPay();
			$openId =$_SESSION['openids'];	
			$order_no=$info['no'];
			$input = new WxPayUnifiedOrder();
			$input->SetBody($subject);
			$input->SetAttach($subject);
			$input->SetOut_trade_no($order_no);
			$input->SetTotal_fee($fee);
			$input->SetTime_start(date("YmdHis"));
			$input->SetTime_expire(date("YmdHis", TIME + 600));
			//$input->SetSpbill_create_ip(IP);
			$input->SetGoods_tag("test_quan");
			$input->SetNotify_url("http://www.kingmanor.cn/wxpay.html?c=wxnotify");
			$input->SetTrade_type("JSAPI");
			$input->SetOpenid($openId);
			$order = WxPayApi::unifiedOrder($input);
			//var_dump($order);
			//exit;
			$jsApiParameters = $tools->GetJsApiParameters($order);
			echo $jsApiParameters;
			exit;
		}else{
			echo json_encode(array('msg'=>'noopenid'));
			exit;
		}
		break;	
	case 'update_order':
		updateorder($_GET['id'], 2);
		header('Location: http://www.kingmanor.cn/home/order.html?org=dfh');
		break;
}

function updateorder($id,$sta){

	if (!is_array($id)) {
		$order_hr['id'] = $id;
	} else {
		$order_hr = $id;
	}

	$pay_tp=$sta==2?'pay_wxpay':'pay_alipay';
	$db=MYSql::getdb();
	$db->query('update `web_order` set `status`=2 where `id`='.$order_hr['id']);
	$db->query('update `web_trade_log` set status=1 where oid='.$order_hr['id']);//把资金流水设为已支付
	$now=TIME;
	//$db->query('insert into `web_shop_good_order_paylog` (`oid`,`memo`,`addtime`) values ('.$order_hr['id'].',"'.$pay_tp.'",'.$now.')');
	$db->query('update `web_shop_goods_cart` set `status`=1 where `oid`='.$order_hr['id']);
	$carts=$db->getAll("select * from `web_shop_goods_cart` where `oid`=".$order_hr['id']);
	foreach($carts as $k=>$v){
		$num=$v['num'];
		$id=$v['gid'];
		$db->query("update `web_shop_goods` set `num`=`num`-'$num', `buy` = '$num' where `id`='$id'");
		$fxid=$v['fxid'];
		if($fxid>0){//该订单商品可提成分销佣金
			$this_good=$db->get_One('select userid,fx_fee from `web_shop_goods` where id='.$v['gid']);//商品的佣金
			$fx_fee=$this_good['fx_fee'];
			$shopid=$this_good['userid'];
			$buyerid=$v['userid'];
			$gid=$v['gid'];
			$oid=$v['oid'];
			if($fx_fee>0){
				$fee_total=$fx_fee*$v['num'];//总佣金
				$db->query("insert into `web_fx_trade_log` (fxid,buyerid,shopid,oid,gid,cash,time) values ('$fxid','$buyerid','$shopid','$oid','$gid','$fee_total','$now')");//存储佣金流水
			}
		}
	}

	$discount = $db->findOne('select discount from `web_order` where `id` = '.$order_hr['id']);
	$score = intval($discount * 100);

	if($score>0){//保存积分变动记录；更新用户积分余额
		$log_extra='购买商品消费';//积分变动备注
		$db->query("insert into `web_score_log` (userid,score,type,way,time,extra) values ('$_userid','$score',2,2,'$time','$log_extra')");//type=2 购物消费
		$db->query('update `ucenter` set score=`score` - "$score" where userid='.$_userid);
	}
}