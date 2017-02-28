<?php
$acts=array(
	'index'=>true,
	'level'=>true
);
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'index';
if(!isset($acts[$c])){
	$c='index';
}

$id=intval($_REQUEST['id']);
$uid=isset($_REQUEST['uid'])?intval($_REQUEST['uid']):0;
$info=$db->get_One('select * from `web_shop_goods` where id='.$id);
$shop=$db->get_One('select * from `web_shop` where userid='.$info['userid']);
$fxid=isset($_REQUEST['fxid'])?intval($_REQUEST['fxid']):0;//是否是分销的商品 fxid是分销用户id

switch($c){
	case 'index':
		$db->query('update `web_shop_goods` set view=view+1 where id='.$id);
		$catenav=catnav($info['catid']);
		$album=$db->getAll('select * from `web_shop_goods_photo`');
		$favgood=$db->get_One('select * from `web_shop_care` where userid='.$_userid.' and dataid='.$id.' and type=1');
		$favshop=$db->get_One('select * from `web_shop_care` where userid='.$_userid.' and dataid='.$info['userid'].' and type=2');
		$photos=$db->getAll('select * from `web_shop_goods_photo` where `gid`='.$id.' order by `sort` asc,`id` desc');//获取当前商品图集图片
		$show_main='/'.$uid.'/';//商铺主页url
		$show_url=$show_main.$id.'.html';//当前页面url
		//$shop_trans=$db->get_One('select * from `web_transport` where userid='.$info['userid']);
		$time=time();
		$quan=$db->getAll('select * from `web_quan` where etime<'.$time.' and (shopid='.$info['userid'].' or shopid=0)');//查询可用优惠券

		$arr_spec=unserialize($info['spec']);
		//商品评论
		$page=isset($_REQUEST['page'])?intval($_REQUEST['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$comments=$db->getAll("select * from web_shop_comments where gid=$id order by addtime desc limit $start,$offset","id");
		$stars=$db->getAll("select count(*) as num,star from web_shop_comments where gid=$id group by star","star");
		$cate_top=$db->get_One('select * from `web_cate` where id='.$info['catid']);
		$tj_arr=$db->getAll('select * from `web_cate` where parent='.$cate_top['parent'],'id');//查询该商品的同级分类
		$tj_str=implode(',',array_keys($tj_arr)); 
		$tj_item=$db->getAll('select id,title,thumb,price from `web_shop_goods` where catid in ('.$tj_str.') and status=1 order by view limit 10');
		$negative=$neutral=$positive=0; 
		$negative=$stars[0]['num']+$stars[1]['num'];
		$neutral=$stars[2]['num']+$stars[3]['num'];
		$positive=$stars[4]['num']+$stars[5]['num'];
		$tol=$negative+$neutral+$positive;
		$pagestr=pages_y($tol, $page, $offset,"javascript:page(this);");

		$haspic=$db->findOne("select count(*) from web_shop_comments where gid=$id and haspic=1");
		foreach($comments as $k=>$v) {
			$ord[$v['cid']]=1;
			$uidd[$v['userid']]=1;
			$all_pids[$v['gid']]=1;
		}
		
		$tids=implode(',',array_keys($comments));
		if(!empty($tids)){
			$thumbs=$db->getAll("select * from web_com_img where cid in($tids)",'cid',true);
		}

		if($ord){
			$ords=implode(',',array_keys($ord));
			if(!empty($ords)){
				$_ords=$db->getAll("select * from web_order where id in($ords)","id");//
			}
		}
		if(!empty($uidd)){
			$pe=implode(',',array_keys($uidd));
			$_pe=$db->getAll("select * from web_shop_accout where userid in($pe)","userid");
		}
		if($tol>0){
			$pos_per=round(($positive/$tol)*100,0);
			$neu_per=round(($neutral/$tol)*100,0);
			$neg_per=round(($negative/$tol)*100,0);
		}
		if(empty($comments)){
			$per=10;
			$pos_per=100;
		}
		$pids=array_keys($comments);
		$pid_str=implode(',',$pids);
		if(!empty($pid_str)){
			$childs=$db->getAll("select * from web_shop_comments where spid in($pid_str) order by addtime asc");
		}
		if($childs){						
			foreach($childs as $k=>$v) {
				$_pids[$v['pid']]=1;
				$_childs[$v['id']]=$v['userid'];
			}
		}
		if(!empty($_pids)){						
			$strs=implode(',',array_keys($_pids));
			$uids=$db->getAll("select userid,id from web_shop_comments where pid in($strs) ","userid");
			$_uids=implode(',',array_keys($uids));
			$user=$db->getAll("select uid,username from ucenter where uid in($_uids) ","uid");
		}
		$hot_sale=$db->getAll('select id,title,thumb,price from `web_shop_goods` where userid='.$_userid.' order by buy desc limit 5');
		if($ismobile||$_GET['t']==11){
			include T('show/m/','goods');
		}else{
			include T('show/pc/','goods');
		}
		break;
	case 'level':
		$ty=strip_tags($_REQUEST['ty']);
		$page=isset($_REQUEST['page'])?intval($_REQUEST['page']):1;
		$page=max(1,$page);
		$offset=10;
		$start=($page-1)*$offset;
		$where='';
		switch($ty){
			case 'all':
				$where.='';
				break;
			case 'positive':
				$where.=' and star>=4';
				break;
			case 'neutral':
				$where.=' and star>=2 and star<4 ';
				break;
			case 'pic':
				$where.=' and haspic=1';
				break;
			case 'neg':
				$where.=' and star<2';
				break;
		}

		//商品评论
		$comments=$db->getAll("select * from web_shop_comments where gid=$id $where order by addtime desc limit $start,$offset","id");
		$tol=$db->findOne("select count(*) from web_shop_comments where  gid=$id $where");
		$pagestr=pages_y($tol, $page, $offset,"javascript:page(this);");

		$tids=implode(',',array_keys($comments));
		if(!empty($tids)){
			$thumbs=$db->getAll("select * from web_com_img where cid in($tids)",'cid',true);
		}

		$extra=unserialize($pc['extra']);
		$negative=$neutral=$positive=0;
		$uidd=$ord=$all_pids=array();
		foreach($comments as $k=>$v){
			switch($v['star']){
				case '0':
				case '1':
					$negative++;
					break;
				case '2':
				case '3':
					$neutral++;
					break;
				case '4':
				case '5':
					$positive++;
					break;
			}
			$ord[$v['cid']]=1;
			$uidd[$v['userid']]=1;			
			$all_pids[$v['gid']]=1;
		}

		$extra=unserialize($pc['extra']);

		if(!empty($all_pids)){
			$all_pidstr=implode(',',array_keys($all_pids));
		}

		$ords=implode(',',array_keys($ord));
		if(!empty($ords)){
			$_ords=$db->getAll("select * from web_order where id in($ords)","id");
		}
		
		if(!empty($uidd)){
			$pe=implode(',',array_keys($uidd));
			$_pe=$db->getAll("select * from web_shop_accout where userid in($pe)","userid");
		}
		
		$tol=count($comments);
		if($tol>0){
			$pos_per=round(($positive/$tol)*100,0);
			$neu_per=round(($neutral/$tol)*100,0);
			$neg_per=round(($negative/$tol)*100,0);
		}else{
			$pos_per=100;
			$neu_per=0;
			$neg_per=0;
		}
		
		$pids=array_keys($comments);
		$pid_str=implode(',',$pids);
		if(!empty($pid_str)){
			$childs=$db->getAll("select * from web_shop_comments where spid in($pid_str) order by addtime asc");
		}
		if(!empty($childs)){
			foreach($childs as $k=>$v) {
				$_pids[$v['pid']]=1;
				$_childs[$v['id']]=$v['userid'];
			}
			$strs=implode(',',array_keys($_pids));
		
			$uids=array();
			if(!empty($strs)){
				$uids=$db->getAll("select userid,id from web_shop_comments where pid in($strs) ","userid");
			}

			$auids=$uids+$uidd;
			$_uids=implode(',',array_keys($auids));
			if(!empty($_uids)){
			$user=$db->getAll("select userid,username from ucenter where userid in($_uids) ","uid");
			}
		}

		

		//$childs=cr($childs,'spid');
		$str='';
		?>
		<div class="com-table-main">
					<?php foreach($comments as $k=>$v){?>
						<div class="comments-item"data-top="">
							<table class="com-item-main clearfix">
							<tbody>
							<tr>
								<td class="com-i-column column1">
									<div class="p-comment">
										<span class="desc"><?=$v['content']?></span><b class="time"><?=date('Y-m-d H:i',$v['addtime'])?></b>
									</div>
									<?php if(!empty($thumbs[$v['id']])){?>
									<div class="J-p-show-img p-show-img clearfix">
									<table>
										<tbody>
											<tr>
											<?php foreach($thumbs[$v['id']] as $kk=>$vv){?>
												<td>
												<a class="J-show-more-pic comment-show-pic-wrap fancybox_pics" data-ind="0" href="http://qysc.7192.com<?=$vv['thumb']?>" data-href="" data-fancybox-group="lb" data-original="http://qysc.7192.com<?=$vv['thumb']?>"> 
												<img src="<?=str_replace('_real','_60_80',$vv['thumb'])?>" alt="苍***帆 的晒单图片"></a>
												</td>
											<?php }?>
											</tr>
										</tbody>
									</table><span class="show-number">共<?=count($thumbs[$v['id']])?>张图片</span>
									</div>
									<?php }?>
								</td>
								<td class="com-i-column column2">
									<div class="grade-star g-star<?=$v['star']?>">
										&nbsp;
									</div>
								</td>
								<td class="com-i-column column3">
									<div class="type-item">
										
									</div>
									<div class="type-item">
									<?php
									$extra=unserialize($ids[$v['gid']]['extra']);
										if(!empty($all_extra_rel)){foreach($all_extra_rel[$spid] as $ke=>$ve) {
										if(isset($extra[$ve['id']])){?>
										<span class="label"><?=$ve['cname']?>：</span><span class="text"><?=implode('',$extra[$ve['id']])?></p>
										<?php }}
									}?>
									</div>
								</td>
								<td class="com-i-column column5">
									<div class="user-item">
										<span class="user-name"><?php 
										//if(empty($v['nickname'])){
										//	$name=$user[$v['userid']]['username'];
										//}else{
										//	$name=$v['nickname'];
										//}
										if($v['mm']==1){
											$num=mb_strlen($user[$v['userid']]['username'],'utf-8');
											$f=mb_substr($user[$v['userid']]['username'],0,1,'utf-8');
											$l=mb_substr($user[$v['userid']]['username'],$num-1,1,'utf-8');
											echo $f.'***'.$l;
										}else{
											echo $user[$v['userid']]['username'];
										}
										
										?></span>
									</div>
									<div class="user-item">
										<span class="u-vip-level" style="color:#ff0000">
										<?php
											$myscore=$_pe[$v['userid']]['score'];
											$areaid=$_pe[$v['userid']]['areaid'];
											$areaname=getFullArea($all_area,$areaid,' ');
											if(empty($myscore)){
												$myscore=0;
											}
											if($myscore<1){
												$lev='注册会员';
											}elseif($myscore>1&&$myscore<99){
												$lev='铜牌会员';
											}elseif($myscore>99&&$myscore<499){
												$lev='银牌会员';
											}elseif($myscore>499){
												$lev='金牌会员';
											};
											echo $lev;
										?>
										</span><span class="u-addr"><?=$areaname?></span>
									</div>
									<div class="user-item">
										<span class="buy-time"><?=date('Y-m-d H:i',$_ords[$v['cid']]['updatetime'])?> 购买</span>
									</div>
								</td>
							</tr>
							</tbody>
							</table>
						</div>	
						<?php }?>
					</div>
					<div class="com-table-footer">
						<div class="ui-page-wrap clearfix">
							<div class="ui-page">
								<?=str_replace('href','onclick',$pagestr)?>
							</div>
						</div>
					</div>
		<?php
		break;
}