<?php
$acts=array(
	'saveaddress'=>1,
	'deladdress'=>1,
	'dfaddress'=>1,
	'fav'=>1,
	'addcart'=>1,
	'loginsta'=>1,
	'setCart'=>1,
	'quan'=>1,
	'myaddress'=>1,
	'yf'=>1
	
);
$a=isset($_REQUEST['a'])?trim($_REQUEST['a']):'index';
if(!isset($acts[$a])){
	$a='index';
}
switch($a) {
	case 'quan':
		$qid=intval($_REQUEST['id']);
		$old=$db->get_One('select * from `web_user_quan` where userid='.$_userid.' and quanid='.$qid);
		if (empty($old)) {
			$quaninfo=array();
			$quaninfo['userid']=$_userid;
			$quaninfo['quanid']=$qid;
			$quaninfo['time']=time();
			$db->insert('web_user_quan',$quaninfo);
			exit('优惠券领取成功！');
		}else{
			exit('您已经领取过此优惠券了！');
		}
		break;
	case 'loginsta':
		if($_userid){
			exit('200');
		}else{
			exit('503');
		}
	break;
	case 'yf':
		if(!$_userid){
			exit(json_encode(array('msg'=>'503')));
		}
		$aid=isset($_POST['aid'])?intval($_POST['aid']):0;
		if($aid){
			$address=$db->get_one('select * from `web_shop_address` where `id`='.$aid);
			if(!empty($address)&&$address['userid']==$_userid){
				$address_Extra=unserialize($address['address']);
				$areaid=$address_Extra['areaid'];
				$areaid=($areaid>0)?getTopAreaid($all_area,$areaid):0;
				if($areaid<1){
					exit(json_encode(array('msg'=>'505')));//未设置城市
				}
				$wu=json_decode(stripslashes($_POST['wu']),1);
				if(empty($wu)){
					exit(json_encode(array('msg'=>'505')));//没有相关产品
				}
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
								$data_fee[$uid]=array('data'=>$data,'total'=>array_sum($data));
							}
						}
					}
				}
				exit(json_encode(array('msg'=>'200','data'=>$data_fee)));//不是当前用户的地址
			}else{
				exit(json_encode(array('msg'=>'505')));//不是当前用户的地址
			}
		}else{
			exit(json_encode(array('msg'=>'505')));//地址不正确
		}
		break;
	case 'myaddress':
		if(!$_userid){
			exit('503');
		}
		$my_address=$db->getAll('select * from `web_shop_address` where `userid`='.$_userid.' order by `id` desc');
		if(!empty($my_address)){
			usort ($my_address,"sort_desc");
		}
?>
			<ul id="consignee-list">
<?php 
$addressid=0;
if(!empty($my_address)){
$k=1;
foreach($my_address as $kv) {
$address=unserialize($kv['address']);
$area_str=getFullAddress($all_area,$address['areaid'],' ');
if($k<2){
	$addressid=$kv['id'];
}?>
				<li id="add_<?=$kv['id']?>" rel="<?=$kv['id']?>">
					<div class="consignee-item"><span title="<?=$address['linkman']?>"><?=$kv['sort']==1?'默认地址':$address['linkman']?></span><b></b></div>
					<div class="addr-detail">
						<span class="addr-name" title="<?=$address['linkman']?>"><?=$address['linkman']?></span>
						<span class="addr-info" title="<?=$area_str?> <?=$address['address']?>"><?=$area_str?> <?=$address['address']?></span>
						<span class="addr-tel"><?=$address['phone']?></span>
					</div>
					<div class="op-btns">
<?php if($kv['sort']!=1){?>
						<a onclick="set_df('<?=$kv['id']?>')" class="ftx-05 setdefault-consignee">设为默认地址</a>
<?php }?>
						<a onclick="edit_df('<?=$kv['id']?>')" class="ftx-05 edit-consignee">编辑</a>
						<a onclick="del_df('<?=$kv['id']?>')" class="ftx-05 del-consignee">删除</a>
					</div>
				</li>
<?php $k++;
}}else{?>
				<li rel="0">
					<div class="consignee-item" onclick="add_address()"><span title="添加收货人信息">添加收货人信息</span><b></b></div>
				</li>
<?php }?>
			</ul>
			<div class="addr-switch switch-off"<?php if(count($my_address)<2){?> style="display:none"<?php }?> id="consigneeItemAllClick" onclick="show_ConsigneeAll()"><span>更多地址</span><b></b></div>
<?php
		exit;
		break;
	case 'addcart':
		$id=intval($_POST['id']);
		$good=$db->get_one('select * from `web_shop_goods` where `id`='.$id);
		if(!empty($good)){
			$num=max(1,intval($_POST['num']));
			$fxid=intval($_POST['fxid']);
			//echo $num;
			if($_userid){//登录了
				$cart=$db->get_one('select * from `web_shop_goods_cart` where `oid`=0 and `userid`='.$_userid.' and `gid`='.$id); 
				if(empty($cart)){
					$db->insert('web_shop_goods_cart',array(
						'oid'=>0,
						'userid'=>$_userid,
						'gid'=>$id,
						'fee'=>$good['price'],
						'num'=>$num,
						'time'=>TIME,
						'fxid'=>$fxid
					));
					
				}else{
					if($cart['status']==-1){
						$db->query('update `web_shop_goods_cart` set `num`='.$num.',`status`=0 where `id`='.$cart['id']);
					}else{
						$db->query('update `web_shop_goods_cart` set `num`=`num`+'.$num.' where `id`='.$cart['id']);
					}
				}
			}else{//未登录
				$cart = unserialize(Cookie::get('cart'));
				if(isset($cart[$id])){
					$cart[$id]+=$num;
				}else{
					$cart[$id]=$num;
				}
				$cartstr=serialize($cart);
				Cookie::set('cart',$cartstr,864000);
			}
			if($ismobile||$_GET['t']==11){
				exit('mok');
			}else{
				exit('ok');
			}
		}else{
			exit('404');
		}
		break;
	case 'dfaddress':
		if($_userid){
			$key=isset($_POST['key'])?intval($_POST['key']):'';
			if($key){
				$sql='select * from `web_shop_address` where `id`="'.$key.'"';
				$address_tmp=$db->get_one($sql);
				if(empty($address_tmp)||$address_tmp['userid']!=$_userid){
				}else{
					$db->query('update `web_shop_address` set `sort`=0 where `userid`="'.$_userid.'"');
					$db->query('update `web_shop_address` set `sort`=1 where `id`="'.$key.'"');
				}
			}
			exit('ok');
		}else{
			exit('503');
		}
		break;
	case 'deladdress':
		if($_userid){
			$key=isset($_POST['key'])?intval($_POST['key']):'';
			if($key){
				$sql='select * from `web_shop_address` where `id`="'.$key.'"';
				$address_tmp=$db->get_one($sql);
				if(empty($address_tmp)||$address_tmp['userid']!=$_userid){
				}else{
					$db->query('delete from  `web_shop_address` where `id`="'.$key.'"');
				}
			}
			exit('ok');
		}else{
			exit('503');
		}
		break;
	case 'saveaddress':
	
		if($_userid){
			$key=isset($_POST['key'])?intval($_POST['key']):'';
			$update=false;
			if($key){
				$sql='select * from `web_shop_address` where `id`="'.$key.'"';
				$address_tmp=$db->get_one($sql);
				if(empty($address_tmp)||$address_tmp['userid']!=$_userid){
					$key='';
				}else{
					$update=true;
				}
			}
			$linkman=htmlspecialchars(trim($_POST['linkman']));
			if(empty($linkman)){
				exit('linkman');
			}
			$address=htmlspecialchars(trim($_POST['address']));
			if(empty($address)){
				exit('address');
			}
			$phone=htmlspecialchars(trim($_POST['phone']));
			
			if(empty($phone)||!preg_match('/^1(3[0-9]|5[0-35-9]|8[01235-9]|4[7]|7[0-9])[0-9]{8}$/',$phone)){
				exit('phone');
			}
			$tell=htmlspecialchars(trim($_POST['tell']));
			$mail=filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
			$arr=array(
				'linkman'=>$linkman,
				'areaid'=>$_POST['areaid'],
				'address'=>$address,
				'phone'=>$phone,
				'tell'=>$tell,
				'mail'=>$mail,
			);


			$data=array();

			if ($_POST['sort']) {
				if ($_POST['sort'] == 'yes') {
					$data['sort'] = 1;
					$db->update('web_shop_address', array('sort' => 0), 'userid='.$_userid);
				} else {
					$data['sort'] = 0;
				}
				
			}

			$data['address']=serialize($arr);
			$data['addtime']=TIME;
			$data['userid']=$_userid;
			if($update){
				$db->update('web_shop_address',$data,' `id`='.$key);
			}else{
				
				$db->insert('web_shop_address',$data);
			}
			exit('ok');
		}else{
			exit('503');
		}
		break;
	case 'fav':
		$dataid=intval($_POST['dataid']);
		$type=intval($_POST['type']);
		$addtime=TIME;
		$favlog=$db->get_One('select * from `web_shop_care` where userid='.$_userid.' and dataid='.$dataid.' and type='.$type);
		if(empty($favlog)){
			$db->query("insert into `web_shop_care` (dataid,userid,type,addtime) values ('$dataid','$_userid','$type','$addtime')");
			echo('收藏成功！');
		}else{
			$db->query('delete from `web_shop_care` where userid='.$_userid.' and dataid='.$dataid.' and type='.$type);
			echo('取消收藏成功！');
		}
		break;
	case 'setCart':
		$id=intval($_POST['id']);
		$good=$db->get_one('select * from `web_shop_goods` where `id`='.$id);
		if(!empty($good)){
			$num=max(1,intval($_POST['num']));
			if($_userid){//登录了
				$cart=$db->get_one('select * from `web_shop_goods_cart` where `oid`=0 and `userid`='.$_userid.' and `gid`='.$id);

				if(empty($cart)){
					$db->insert('web_shop_goods_cart',array(
						'oid'=>0,
						'userid'=>$_userid,
						'gid'=>$id,
						'fee'=>$good['price'],
						'num'=>$num,
						'time'=>TIME
					));
				}else{
					$db->query('update `web_shop_goods_cart` set `num`='.$num.' where `id`='.$cart['id']);
				}
			}else{//未登录
				$cart = unserialize(Cookie::get('cart'));
				$cart[$id]=$num;
				$cartstr=serialize($cart);
				Cookie::set('cart',$cartstr,864000);
			}
			exit('ok');
		}else{
			exit('404');
		}
		break;
}