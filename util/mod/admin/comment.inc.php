<?php
$acts=array('fbpl'=>true,'list'=>true,'ylist'=>true,'save'=>true,'ajaxcom'=>true);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
if(!isset($acts[$c])){
	$c='list';
}
$star=array(
0=>'差评',
1=>'差评',
2=>'中评',
3=>'中评',
4=>'好评',
5=>'好评',

);
switch($c){
	case 'list':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=5;
		$start=($page-1)*$offset;
		if($_GET['d']=='ylist'){
				$order_u=$db->getAll('select * from `web_shop_goods_cart` where userid='.$_userid.' and com_sta=1 and status=1 and dili_sta=1 and recieve=1 order by time desc');
				foreach($order_u as $k=>$v) {
					$gid[$v['gid']]=1;
				}
					$gids=implode(',',array_keys($gid));
					if(!empty($gids)){
					$goods=$db->getAll("select * from web_shop_goods where id in($gids)","id");
					$nums=$db->get_one("select count(*) as num from web_shop_goods where id in($gids)","id");
					}
		}else{
			$order_u=$db->getAll('select * from `web_shop_goods_cart` where userid='.$_userid.' and com_sta=0 and dili_sta=1 and recieve=1 and status=1 order by time desc');
			foreach($order_u as $k=>$v) {
				$gid[$v['gid']]=1;
			}
			$gids=implode(',',array_keys($gid));
			if(!empty($gids)){
				$goods=$db->getAll("select * from web_shop_goods where id in($gids)","id");
			}
		}
	
		$num_comment=$db->get_one('select count(*) as num from `web_shop_goods_cart` where userid='.$_userid.' and com_sta=0 order by time desc');
		/*foreach($cart_u as $k=>$v) {
			$gid[$v['gid']]=1;
		}
		$gids=implode(',',array_keys($gid));
		if(!empty($gids)){
			$goods=$db->getAll('select * from web_shop_goods where id in('.$gids.') limit '.$start.','.$offset,"id");
			$nums=$db->get_one("select count(*) as num from web_shop_goods where id in($gids)","id");
		}*/
		$pagestr=pages_y($nums['num'], $page, $offset);
		if($ismobile||$_GET['t']==11){
			include T('show/m/','comment_n');
		}else{
			include T('admin','comment_n');
		}
		break;
	case 'ylist':
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$page=max(1,$page);
		$offset=5;
		$start=($page-1)*$offset;
		$cart_y=$db->getAll('SELECT gc.*, bsc.content, bsc.star FROM web_shop_goods_cart gc LEFT JOIN web_shop_comments bsc ON gc.userid = bsc.userid AND gc.gid = bsc.gid AND gc.oid = bsc.cid  where gc.userid='.$_userid.' and gc.com_sta=1 and gc.status=1 order by gc.time desc');
		foreach($cart_y as $k=>$v) {
			$gid[$v['gid']]=1;
		}
		$gids=implode(',',array_keys($gid));
		if(!empty($gids)){
			$goods=$db->getAll("select * from web_shop_goods where id in($gids)","id");
			$nums=$db->get_one("select count(*) as num from web_shop_goods where id in($gids)","id");
		}
		$pagestr=pages_y($nums['num'], $page, $offset);	
		if($ismobile||$_GET['t']==11){
			include T('show/m/','comment_y');
		}else{
			include T('admin','comment_y');
		}
		break;
	case 'fbpl':
		$oid=intval($_REQUEST['oid']);
		$cart=$db->getAll("select * from web_shop_goods_cart where oid=$oid and dili_sta=1 and recieve=1");
		if($ismobile||$_GET['t']==11){
			include T('show/m','comment');	
		}else{
			include T('admin','comment');
		}
		break;
	case 'save':

		if ($_POST['type'] == 'm') {

			$info = $_POST['info'];
			$nm = $_POST['nm'];
			$token = true;

			$haspic = 0;

			if ($nm) {
				$mm == 1;
			} else {
				$mm == 0;
			}

			$cartid=intval($_REQUEST['cartid']);
			$cart=$db->get_one("select * from web_shop_goods_cart where id=$cartid");
			$cid=$cart['oid'];
			$time = time();

			$person_info=$db->get_one("select * from web_shop_accout where userid='$_userid'");

			if(!empty($person_info)){
				$nickname=$person_info['nickname'];
			}else{
				$nickname=$db->findOne("select username from ucenter where userid='$_userid'");
			}

			foreach ($info as $val) {

				$gid = $val['id'];

				$goods_info=$db->get_one("select * from web_shop_goods where id=$gid");

				$uid=$goods_info['userid'];
				$content=strip_tags($val['content']);
				$score=intval($val['score']);

				$db->query("insert into web_shop_comments (userid,nickname,uid,gid,cid,pid,spid,content,star,mm,haspic,addtime)values('$_userid','$nickname','$uid','$gid','$cid',0,0,'$content','$score','$mm','$haspic','$time') ");
				$comid=$db->insert_id();

				if (!$comid) {
					$token = false;
				}
			}

			if ($token) {
				$return['success'] = true;
				$return['content'] = '评价成功';
			} else {
				$return['success'] = false;
				$return['content'] = '评价失败';
			}

			$return = json_encode($return);
			echo $return;

		} else {
			$cartid=intval($_REQUEST['cartid']);
			$cart=$db->get_one("select * from web_shop_goods_cart where id=$cartid");
			$cid=$cart['oid'];
			$gid=$cart['gid'];
			$goods_info=$db->get_one("select * from web_shop_goods where id=$gid");
			$person_info=$db->get_one("select * from web_shop_accout where userid='$_userid'");
			if(!empty($person_info)){
				$nickname=$person_info['nickname'];
			}else{
				$nickname=$db->findOne("select username from ucenter where userid='$_userid'");
			}
			$uid=$goods_info['userid'];
			$content=strip_tags($_REQUEST['content']);
			$score=intval($_REQUEST['score']);
			$time=time();
			$mm=$_REQUEST['mm'];
			if($_REQUEST['mm']=='on'){
				$mm=1;
			}else{
				$mm=0;
			}
			$img=$_REQUEST['img'];//评论图片
			
			if(!empty($img)){
				$haspic=1;
			}else{
				$haspic=0;
			}
			$db->query("insert into web_shop_comments (userid,nickname,uid,gid,cid,pid,spid,content,star,mm,haspic,addtime)values('$_userid','$nickname','$uid','$gid','$cid',0,0,'$content','$score','$mm','$haspic','$time') ");
			$comid=$db->insert_id();
			foreach($img as $k=>$v) {
				if(!empty($v)){
					if(strpos($v,'temp')){
						$d =PHPCMS_ROOT.APP_DIR.'/static/uploadfile/'.date('Y/md/');
						if(createDir($d)){
							$file_name_arr=explode('_real',$v,2);
							$new_base=$d.substr($file_name_arr[0],-17);
							$new_real=$new_base.'_real'.$file_name_arr[1]; 
							$new_real2=$new_base.'_60_60'.$file_name_arr[1];
							$new_real3=$new_base.'_60_80'.$file_name_arr[1];
							$oimg=str_replace('/static',PHPCMS_ROOT.APP_DIR.'/static',$v);
							$oimg2=str_replace('_real','_60_60',$oimg);
							$oimg3=str_replace('_real','_60_80',$oimg);
							rename($oimg,$new_real);
							rename($oimg2,$new_real2);
							rename($oimg3,$new_real3);
							$_pic=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real);
							$_pic2=str_replace(PHPCMS_ROOT.APP_DIR.'/static','/static',$new_real2);
						}
					
					}else{
						$_pic=$v;
					}

					$db->query("insert into web_com_img (cid,thumb)values('$comid','$_pic')");
					$n++;
				}
			}
			$db->query("update web_shop_goods_cart set com_sta=1 where id='$cartid'");
			echo 'ok';
		}
		
		break;
	case 'ajaxcom':
		$oid=intval($_POST['oid']);
		$gid=intval($_POST['gid']);
		$com=$db->get_one("select * from `web_shop_comments` where `gid`='$gid' and `cid`='$oid' and `pid`=0 and `userid`='$_userid'");
		$thumbs=$db->getAll("select * from `web_com_img` where `cid`=".$com['id']);
		?>
			
			<div class="box-t"></div>
			<div class="comt-tip hide">
			</div>
			<div class="form hasf">
				<div class="item scoreEl">
					<span class="label">
						<em>*</em>评分：
					</span>
					<div class="fl">
						<div id="raty" style="cursor: pointer;padding-top:6px;">
						<?php for($i=0;$i<$com['star'];$i++){?>
							<img alt="1" src="/static/img/wap/star-on.png" title="">&nbsp;
						<?php }?>
						<?php for($i=0;$i<(5-$com['star']);$i++){?>
							<img alt="1" src="/static/img/wap/star-off.png" title="">&nbsp;
						<?php }?>
						</div>
					</div>
				</div>
				<div class="item xindeEl">
					<span class="label">
						<em>*</em>心得：
					</span>
					<div class="fl">
						<div class="summary-cont-box">
							<pre><div class="sumy-area-txt"><?=$com['content']?></div></pre>
						</div>
					</div>
				</div>
				<div class="item imgEl imgshowEl hide" style="display: block;">
					<span class="label">
						晒单：
					</span>
					<div class="fl">
						<div class="upload-img-box">
							<div class="img-lists">
								<ul class="img-list-ul">

								<?php foreach($thumbs as $k=>$v){?>
									<li>
										<img width="60" height="60" alt="" src="<?=$v['thumb']?>">
									</li>
								<?php }?>
								</ul>
								<div class="img-bigbox hide">
									<img title="" src="" class="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
		<?php	
		break;
}