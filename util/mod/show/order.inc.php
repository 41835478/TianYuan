<?php
/**
 * 订单展示页面
 */
if(!$_userid){
	showmessage('您还没有登录','/');
}
$id=intval($_REQUEST['id']);
if($id>0){
	$order=$db->get_one('select * from `web_order` where `id`='.$id);

	if(!empty($order)||$order['userid']!=$_userid){
		if($order['status']==1){
		}elseif($order['status']==2){
			showmessage('当前订单已经支付','/?m=admin&a=order');
			exit;
		}else{
			showmessage('当前订单信息不存在','/?m=admin&a=order');
			exit;
		}
		if($order['is_bond']==1){
			
		}else{
			$all_cart=$db->getAll('select * from `web_shop_goods_cart` where `oid`='.$id.' order by `id` desc','gid');
			if(empty($all_cart)){
				showmessage('当前订单信息不存在1','/?m=admin&a=order');
				exit;
			}else{
				$all_gidstr=implode(',',array_keys($all_cart));
				$all_goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$all_gidstr.')');
				$shop_html=array();
				if(!empty($all_goods)){
					foreach($all_goods as $k=>$v) {
						$shop_item=array();
						$shop_item[]=$v['tag_name'];
						$shop_item[]=$v['title'];
						$extra=unserialize($v['extra']);
						if(!empty($extra)){
							foreach($extra as $ev) {
								$shop_item[]=implode(' ',$ev);
							}
						}
						$shop_html[]=implode(' ',$shop_item);
					}
				}
				$shop_html=implode('，',$shop_html);
			}
			$all_area=$db->getAll('select `areaid`,`arrparentid`,`name` FROM `web_area` WHERE 1','areaid');
			$order_extra=$db->get_one('select * from `web_order_extra` where `id`='.$id);
			$address=unserialize($order_extra['extra']);
			$address=unserialize($address['address']['address']);
		}
		
		if($ismobile||$_GET['t']==11){
			$zf_type = $_REQUEST['zf_type'];

			$share_title='田园商城';
			$act_url='http://www.kingmanor.cn/order/'.$id.'.html';
			$share_dsp='田园商城，可以直接使用微信支付哦';
			require(PHPCMS_ROOT.APP_DIR.'/util/core/WxPay.JsApiPay.php');
			require(PHPCMS_ROOT.APP_DIR.'/util/core/log.php');
			$tools = new JsApiPay();
			$openId = $tools->GetOpenid($act_url);
			if(!empty($openId)){
				$_SESSION['openids']=$openId;
				require(PHPCMS_ROOT.APP_DIR.'/util/core/jssdk.php');
				$jssdk = new JSSDK(WX_APPID, WX_APPSECRET);
				$signPackage = $jssdk->GetSignPackage();
				//include T('mall','pspay');
			}else{
				header_302($act_url);
				exit;
			}

			/*if (!$zf_type || $zf_type = 'wx') {
				if (!$_GET['code']) {
					$oid = $_GET['oid'];
						if(isset($_SESSION['user'])){
							print_r($_SESSION['user']);
							exit;
						}

						$APPID='wx9ae15f46dd087cd7';
						$REDIRECT_URI='http://www.kingmanor.cn/order.html?id='.$id;
						$scope='snsapi_base';
						//$scope='snsapi_userinfo';//需要授权
						$url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect';
						header("Location:".$url);
				}

				if ($_GET['code']) {
					$appid = "wx9ae15f46dd087cd7"; 
					$secret = "e6724ce294b22cc9406addafea82f8ba";
					$get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';
					$ch = curl_init();
					curl_setopt($ch,CURLOPT_URL,$get_token_url); 
					curl_setopt($ch,CURLOPT_HEADER,0); 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); 
					$res = curl_exec($ch); 
					curl_close($ch); 
					$json_obj = json_decode($res,true);
					//根据openid和access_token查询用户信息 
					$access_token = $json_obj['access_token']; 
					$openid = $json_obj['openid']; 

					$_SESSION['openid'] = $openid;

				}
			}*/
			include T('show/m/','order_fk');
		}else{
			include T('show/pc/','order');
		}
		exit;
	}
}
showmessage('当前订单信息不存在','/');