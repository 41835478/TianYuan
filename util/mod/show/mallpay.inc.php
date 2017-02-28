<?php
/**
 *新版网上直连支付 控制器
 */

    $token = $_REQUEST['d'];

    $basic = array(
        'partner'=>'2088521376402154',
        'key'=>'1x328rca9gnhi6qplgwq1khwiv47fdwe',
        'sign_type' => 'MD5',
        'input_charset' => 'UTF-8',
        'cacert' => getcwd().'/bankpay/cacert.pem',
        'transport'=>'http'
    );

    //支付过程中默认必须设置的参数数组
    $payment = array(
        '_input_charset' => 'UTF-8',//表单提交数据时的页面编码
        'service' => "create_direct_pay_by_user",//默认无须修改
        'partner'=>'2088521376402154',//我们的合作ID  实名认证企业支付宝账户后获得
        'key'=>'1x328rca9gnhi6qplgwq1khwiv47fdwe',//实名认证企业支付宝后 获得
        'seller_email' => 'mengxinongyekeji@126.com' ,//商户的支付宝账户，也就是我们的支付宝账户
        'return_url' =>'http://www.kingmanor.cn/mallpay.html?d=returnu', //同步返回返回处理
        'notify_url' =>'http://www.kingmanor.cn/mallpay.html?d=notifyu', //异步通知返回处理
        'payment_type'=>'1', // 默认为1,不需要修改 1,为商户出售商品和服务的类型 还有 捐款等类型所以这里对于我们来说只可能是1
        'paymethod'	=> 'bankPay',//使用此参数 将会直连 银行缴费 在到达网银页面之前页面可以自己设计
     );

    /**
     * 默认动作 这里用作分发不同的业务的支付
     */
    switch ($token) {
        // 支付
        case 'index':
           //没有提交数据不允许访问数据
            $oid = $_POST['oid'];
            empty($oid) and die('支付项目丢失');

            //$db = QDB::getConn();
            $order = $db->get_One("SELECT * FROM `web_mall`.`web_order` WHERE `id`={$oid}");
            //$order = $db->getRow("SELECT * FROM `wed_mall`.`wm_shop_good_order` WHERE `id`={$oid}");
            if(empty($order)){
                showmessage('抱歉,订单不存在!','http://qysc.7192.com');
            }else{
                $time = time();
                $total_fee=$order['fee'];
                $params = array(
                    'subject'   => "田园商城订单",
                    'quantity'  => 1,
                    'price'     => $total_fee,
                    'defaultbank'=>$_POST['default_bank'],
                    'body'      => "田园商城订单",
                    'out_trade_no'=> $order['no'],
                );
                
                if(empty($_POST['default_bank'])){
                    unset($params['defaultbank']);
                    unset($payment['paymethod']);
                }
            }

            //向支付宝发起请求
            require_once(PHPCMS_ROOT . "bankpay/alipay_submit.class.php");
            $params['price'] = $total_fee;
            $parameter = array_merge($payment, $params);
            $alipaySubmit = new AlipaySubmit($basic);
            $html_text = $alipaySubmit->buildRequestForm($parameter, "get", "确认");
            echo '正在进入网上支付页面，请稍等……',$html_text;
        break;
        case 'returnu':
            require_once(PHPCMS_ROOT . "bankpay/alipay_notify.class.php");
            $alipayNotify = new AlipayNotify($basic);
            $verify_result = $alipayNotify->verifyReturn();
            if($verify_result) {
                $osn = $_GET['out_trade_no'];
                $trade_no = $_GET['trade_no'];
                $trade_status = $_GET['trade_status'];
                if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                    $r = $db->get_One("SELECT * FROM `web_mall`.`web_order` WHERE `no`='{$osn}'");
                    if(empty($r)){
                        showmessage('抱歉,订单不存在!','http://www.kingmanor.cn/home/order.html');
                        exit;
                    }else{
                        if($r['status']>1){
                            $yt = intval($r['type']);
                            showmessage('恭喜,订单支付成功','http://www.kingmanor.cn/home/order.html?org=dfh');
                            exit;
                        }else{                  
                            $res = $db->query('UPDATE web_order SET `status` = 2, `paytype` = 1 WHERE `no` = "'.$osn.'"');
							$db->query('update `web_trade_log` set status=1 where oid='.$r['id']);//把资金流水设为已支付
                        }
                    }

                } else {
                    echo "trade_status=".$_GET['trade_status'];
                }
                showmessage('恭喜,订单支付成功','http://www.kingmanor.cn/home/order.html?org=dfh');
                exit;

            }else{
                echo "验证失败！请勿非法伪造数据！";
            }
        break;
        case 'notifyu':
            require_once(PHPCMS_ROOT . "bankpay/alipay_notify.class.php");
            //计算得出通知验证结果
            $alipayNotify = new AlipayNotify($basic);
            $verify_result = $alipayNotify->verifyNotify();
            if($verify_result) {
                $osn = $_REQUEST['out_trade_no'];
                /*$sosn = intval($osn);
                if(time()-$sosn>86400){//不再响应一天前的订单
                    die('success');
                }*/
                $trade_no = $_REQUEST['trade_no'];
                $trade_status = $_REQUEST['trade_status'];
                if($_REQUEST['trade_status'] == 'TRADE_FINISHED') {

                    $r = $db->get_One("SELECT * FROM `web_order` WHERE `no`='{$osn}'");
                    if(empty($r)){
                        die('success');
                    }else{
                        if($r['status']>1){
                            die('success');
                        }else{
                            $res = $db->query('UPDATE web_order SET `status` = 4, `paytype` = 1 WHERE `no` = "'.$osn.'"');
                        }
                    }

                } else if ($_REQUEST['trade_status'] == 'TRADE_SUCCESS') {

                    $r = $db->get_One("SELECT * FROM `web_order` WHERE `no`='{$osn}'");
                    if(empty($r)){
                        die('success');
                    }else{
                        if($r['status']>1){
                            die('success');
                        }else{
                            $res = $db->query('UPDATE web_order SET `status` = 2, `paytype` = 1 WHERE `no` = "'.$osn.'"');
                        }
                    }
					$order_goods=$db->getAll('select * from `web_shop_goods_cart` where oid='.$r['id']);
					foreach($order_goods as $k=>$v) {//把商品销售量加上
						$db->query('update `web_shop_goods` set buy='.$v['num'].' where id='.$v['gid']);
						$score=intval($v['price']);
						$time=time();
						if($score>1){
							
							$uid=$v['userid'];
							$db->query("insert into `web_score_log` (userid,score,type,way,time) values ('$uid','$score',2,1,'$time')");//插入积分变动记录
							$db->query('update `ucenter` set score=score+'.$score.' where userid='.$uid);//加入余额
						}
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
								$db->query("insert into `web_fx_trade_log` (fxid,buyerid,shopid,oid,gid,cash,time) values ('$fxid','$buyerid','$shopid','$oid','$gid','$fee_total','$time')");//存储佣金流水
							}
						}
						
					}
					if($r['is_bond']==1){//定金状态
						$db->query('update `web_shop` set bond_sta=1 where userid='.$r['userid']);
					}
					$db->query('update `web_trade_log` set status=1 where oid='.$r['id']);//把资金流水设为已支付
                }  
                echo "success";
            } else {
                echo "fail";
                //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
            }
            break;
    }

?>