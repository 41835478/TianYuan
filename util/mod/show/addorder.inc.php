<?php
/**
 * 订单生成页面
 */

 $c=$_REQUEST['c']?intval($_REQUEST['c']):0;
 if(!isset($c)){
	$c=0;
 }
if(!$_userid){
	showmessage('您还没有登录','goback');
}
$all_area=$db->getAll('select `areaid`,`arrparentid`,`name` FROM `web_area` WHERE 1','areaid');
switch($c) {
	case '0':
	if(isset($_POST['a'])&&$_POST['a']=='create_order'){
	//创建订单
		$goods=array();

		foreach($_POST['gid'] as $v=>$k) {
			$k=intval($k);
			if($k>0){
				$goods[$k]=1;
			}
		}
		if(!empty($goods)){
			$all_gidstr=implode(',',array_keys($goods));
			$gidslen=strlen($all_gidstr);
			$all_goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$all_gidstr.') and `status`=1','id');
			if(!empty($all_goods)){
				$some_goods=implode(',',array_keys($all_goods));
				if(strlen($some_goods)==$gidslen){
					$cart_list=$db->getAll('select * from `web_shop_goods_cart` where `gid` in ('.$all_gidstr.') and `userid`='.$_userid.' and `status`=0','gid');
					if(!empty($cart_list)){
						$some_cart_gids=implode(',',array_keys($cart_list));
						if(strlen($some_cart_gids)==$gidslen){
							$cart_info=array();
							$cart_gids=array();
							$trans_fee=0;
							$discount=0;//折扣金额
							$extra=array();
							$addressid=intval($_POST['addressid']);
							$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `sort` desc','id');
							if(isset($my_address[$addressid])){
								$extra['address']=$my_address[$addressid];
								$address_Extra=unserialize($my_address[$addressid]['address']);
								$areaid=$address_Extra['areaid'];
								$areaid=($areaid>0)?getTopAreaid($all_area,$areaid):0;
								if($areaid<1){
									showmessage('请设置收货地址','goback');
								}
								$extra['address']=$my_address[$addressid];
							}else{
								showmessage('请设置收货地址','goback');
							}

							foreach($cart_list as $k=>$v) {
								if(isset($all_goods[$k])){
									$this_num=intval($v['num']);
									$v['good']=$all_goods[$k];
									$cart_gids[]=$k;
									
									$total_zc+=$all_goods[$k]['zc']*$this_num;
									$total_fee+=$all_goods[$k]['price']*$this_num;
									$sigle_fee=$all_goods[$k]['price']*$this_num;//单件商品的费用
									$v['tt_fee']=$sigle_fee;
									$cart_info[$all_goods[$k]['userid']][]=$v;
								}
							}
							if(empty($cart_info)){
								showmessage('请检查商品情况','goback');
							}
							//计算运费start
							$wu=array();
							foreach($cart_info as $k=>$v) {
								
								$this_weight=0.0;
								$this_item=array();
								
								foreach($v as $kk=>$kv) {
									
									if($kv['good']['flvid']>0){
										
										if(isset($this_item[$kv['good']['flvid']])){
											$this_item[$kv['good']['flvid']]['w']+=($kv['good']['weight']*$kv['num']);//重量
											$this_item[$kv['good']['flvid']]['t']+=($kv['good']['ms']*$kv['num']);//体积
											$this_item[$kv['good']['flvid']]['n']+=$kv['num'];//数量
										}else{
											$this_item[$kv['good']['flvid']]=array(
												'w'=>$kv['good']['weight']*$kv['num'],
												't'=>$kv['good']['ms']*$kv['num'],
												'n'=>$kv['num'],
												'gid'=>$kv['good']['id'],
												'tt_fee'=>$kv['tt_fee'],
											);
										}
									}
									$this_weight+=$kv['good']['weight']*$kv['num'];
									
								}
								if(!empty($this_item)){
									$wu[$k]=$this_item;
								}
								
							}
							if(empty($wu)){
								showmessage('非法操作','goback');
							}
							$fee_wu=0;
							$area_sta=true;
							$data_fee=array();
							foreach($wu as $k=>$v) {
								
								$uid=intval($k);
								$shop=array();
								if($uid>0){
									$flvids=array_keys($v);
									$flvidstr=implode(',',$flvids);
									$allflv=$db->getAll('select * from `web_shop_flv` where `id` in ('.$flvidstr.')','id');
									if(!empty($allflv)){
										$data=array();
										foreach($v as $kk=>$kv) {
											
											if(isset($allflv[$kk])){
												$flv_this=$allflv[$kk];
											}else{
												continue;
											}
											$all_fee=$db->getAll('select * from `web_shop_fee` where `flvid`='.$kk,'id');
											if(!empty($all_fee)){
												$all_fee_ids=array_keys($all_fee);
												$all_fee_idstr=implode(',',$all_fee_ids);
												$this_level=$db->get_one('select * from `web_shop_fee_rel` where `fid` in ('.$all_fee_idstr.') and `areaid`='.$areaid);
												if(empty($this_level)){
													$data[$kk]=-1;//没有设置的地区，不能配送
												}else{
													$fee=$all_fee[$this_level['fid']];
													$w=floatval($kv['w']);
													$w=max(0,$w);
													$t=floatval($kv['t']);
													$t=max(0,$t);
													$n=intval($kv['n']);
													$n=max($n,1);
													$data[$kk]=$flv_this['type']==1?sumfee($w,$fee):($flv_this['type']==3?sumfee($t,$fee):sumfee($n,$fee));
												}
											}else{
												$data[$kk]=0;
											}
											
										}
										if(!empty($data)){
											$fee_wu+=array_sum($data);
										}
									}
								}
							}
							if(!$area_sta){
								showmessage('有商品在当前地区无货，请重新设置收货地址！','goback');
							}
							//计算运费end
							
							$total_trans_fee=$fee_wu;




							
							$discount=$_POST['discount']?trim($_POST['discount']):0;
							$quanid=intval($_POST['quanid']);//使用的优惠券
							if($quanid>0){
								$quan_info=$db->get_One('select * from `web_quan` where id='.$quanid);
								$quan_cut=$quan_info['fee'];//优惠券减免的金额
								if($total_fee+$total_trans_fee-$discount-$quan_cut>0){//判断优惠金额可用性
									$db->query('update `web_user_quan` set status=1 where userid='.$_userid.' and quanid='.$quanid);//把优惠券设置为已使用
								}else{
									$quan_cut=0;
									$quanid=0;
								}
								
							}else{
								$quan_cut=0;
							}
							$score=100*$discount;
							$no='MO'.date("ymdHis").mt_rand(100,999);
							$time=TIME;
							$order=array(
								'userid'=>$_userid,
								'no'=>$no,
								'status'=>1,
								'org_fee'=>number_format($total_fee,2),
								'fee'=>str_replace(',','',number_format($total_fee+$total_trans_fee-$discount-$quan_cut,2)),
								'trans_fee'=>number_format($total_trans_fee,2),
								'discount'=>number_format($discount,2),
								'quan'=>number_format($quan_cut,2),
								'quanid'=>intval($quanid),
								'addtime'=>$time,
								'updatetime'=>$time
							);

							$oid=$db->insert('web_order',$order,1);

							/*计算每个商家的资金流水 start*/
							foreach($wu as $k=>$v) {
								
								$uid=intval($k);
								$shop=array();
								if($uid>0){
									$flvids=array_keys($v);
									$flvidstr=implode(',',$flvids);
									$allflv=$db->getAll('select * from `web_shop_flv` where `id` in ('.$flvidstr.')','id');
									if(!empty($allflv)){
										$data=array();
										foreach($v as $kk=>$kv) {
											
											if(isset($allflv[$kk])){
												$flv_this=$allflv[$kk];
											}else{
												continue;
											}
											$all_fee=$db->getAll('select * from `web_shop_fee` where `flvid`='.$kk,'id');
											if(!empty($all_fee)){
												$all_fee_ids=array_keys($all_fee);
												$all_fee_idstr=implode(',',$all_fee_ids);
												$this_level=$db->get_one('select * from `web_shop_fee_rel` where `fid` in ('.$all_fee_idstr.') and `areaid`='.$areaid);
												if(empty($this_level)){
													$data[$kk]=-1;//没有设置的地区，不能配送
												}else{
													$fee=$all_fee[$this_level['fid']];
													$w=floatval($kv['w']);
													$w=max(0,$w);
													$t=floatval($kv['t']);
													$t=max(0,$t);
													$n=intval($kv['n']);
													$n=max($n,1);
													$data[$kk]=$flv_this['type']==1?sumfee($w,$fee):($flv_this['type']==3?sumfee($t,$fee):sumfee($n,$fee));
												}
											}else{
												$data[$kk]=0;
											}
											$sg_yf=$data[$kk];//商品对应商家的运费
											$gid=intval($kv['gid']);//对应商品
											$tt_fee=$kv['tt_fee'];//商品总价 不含运费
											$time=time();
											$tid=$db->query("insert into `web_trade_log` (userid,oid,gid,fee,trans_fee,time) values ('$uid','$oid','$gid','$tt_fee','$sg_yf','$time')");//给商家存储资金流水获取流水id
											
										}
									}
								}
							}
							/*计算每个商家的资金流水 end*/




							$memo=$_POST['memo'];
							$memo_info=array(); 
							foreach($memo as $k=>$v) {
								if(isset($cart_info[$k])){
									$memo_info[$k]=htmlspecialchars(trim($v));
								}
							}
							$bid=intval($_POST['bill_2']);
							$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid,'id');
							if($bid>0){
								$bill_4=isset($my_bills[$bid])?$my_bills[$bid]['title']:'个人';
							}else{
								$bill_4='个人';
							}
							$bill=array(
								'bill_1'=>intval($_POST['bill_1']),
								'bill_2'=>$bid,
								'bill_3'=>intval($_POST['bill_3']),
								'bill_4'=>$bill_4,
							);
							$order_extra=array(
								'id'=>$oid,
								'bill'=>serialize($bill),
								'memo'=>serialize($memo_info),
								'extra'=>serialize($extra)
							);
							$db->insert('web_order_extra',$order_extra);
							$db->query('update `web_shop_goods_cart` set `oid`='.$oid.',`status`=2 where `gid` in ('.$all_gidstr.') and `userid`='.$_userid.' and `status`=0');
							if($score>0){//保存积分变动记录；更新用户积分余额
								$log_extra='购买商品消费';//积分变动备注
								$db->query("insert into `web_score_log` (userid,score,type,way,time,extra) values ('$_userid','$score',2,2,'$time','$log_extra')");//type=2 购物消费
								$db->query('update `ucenter` set score=0 where userid='.$_userid);
							}	
							if ($_POST['zf-type']) {
								header_302('/order/'.$oid.'.html?zf_type='.$_POST['zf-type'],'进入支付页面');
							} else {
								header_302('/order/'.$oid.'.html','进入支付页面');
							}				
							
							exit;		
						}
					}else{
						showmessage('网页已经失效','/cart.html');
					}
				}
			}
		}
	}else{

		if(!empty($_GET)&&isset($_GET['gid'])){
			$goods=array();
			foreach($_GET['gid'] as $v=>$k) {
				$k=intval($k);
				if($k>0){
					$goods[$k]=1;
				}
			}
			if(!empty($goods)){
				$all_gidstr=implode(',',array_keys($goods));
				$gidslen=strlen($all_gidstr);
				$all_goods=$db->getAll('select * from `web_shop_goods` where `id` in ('.$all_gidstr.') and `status`=1','id');
				if(!empty($all_goods)){
					$some_goods=implode(',',array_keys($all_goods));
					if(strlen($some_goods)==$gidslen){
						$cart_list=$db->getAll('select * from `web_shop_goods_cart` where `gid` in ('.$all_gidstr.') and `userid`='.$_userid.' and `status`=0','gid');
						if(!empty($cart_list)){
							$some_cart_gids=implode(',',array_keys($cart_list));
							if(strlen($some_cart_gids)==$gidslen){
								$cart_info=array();
								foreach($cart_list as $k=>$v) {
									if(isset($all_goods[$k])){
										$v['good']=$all_goods[$k];
										//$all_pids[$v['good']['spid']]=1;
										$cart_info[$all_goods[$k]['userid']][]=$v;
									}
								}
								if(!empty($cart_info)){
									$uidstr=implode(',',array_keys($cart_info));
								}
								if(!empty($cart_info)){
									$_useridstr=implode(',',array_keys($cart_info));
									$_useridarr=$db->getAll('select * from `web_shop` where `userid` in ('.$_useridstr.')','userid');
								}
								if(!empty($all_pids)){
									$all_pidstr=implode(',',array_keys($all_pids));
									//$all_extra_rel=$db->getAll('select * from `web_shop_goods_rel` where `gid` in ('.$all_pidstr.')  order by `sort` asc,`id` asc','gid',true);
								}
								$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
								$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
								
								





								if($ismobile||$_GET['t']==11){
									include T('show/m/','addorder');
								}else{
									include T('show/pc/','addorder');
								}
								exit;		
							}
						}	
					}
				}
			}
		}
	}
	showmessage('非法操作','goback');
	break;
	case '1':
		$gid=$_GET['gid'];
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
		include T('wxsite/m/','addorder1');					
	break;
	case '2':
		
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
		include T('wxsite/m/','addorder2');
	break;
	case '3':
		$e=intval($_GET['e']);
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
		include T('wxsite/m/','addorder3');
	break;
	case '4':
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
		include T('wxsite/m/','addorder4');
	break;
	case '5':
		$e=isset($_GET['e'])?intval($_GET['e']):0;
	
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		$my_bills=$db->getAll('select * from `web_shop_bills` where `userid`='.$_userid.' order by `id` desc');
		include T('wxsite/m/','addorder');
		break;
	case '6':
		//$all_pc=$db->getAll("select `areaid`,`name` from `web_ws`.`web_area` where `parentid`=0");
		include T('wxsite/m/','addorder3_2');
		break;

}

