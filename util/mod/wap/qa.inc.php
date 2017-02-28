<?php
$c=isset($_REQUEST['c'])?trim($_REQUEST['c']):'list';
$c_Arr=array('list'=>true,'save'=>true);
if(!isset($c_Arr[$c])){
	$c='list';
}
switch($c) {
	case 'list':
			$page=isset($_GET['page'])?intval($_GET['page']):1;
			$page=max(1,$page);
			$offset=5;
			$start=($page-1)*$offset;
			$id=0;
			$note_this=get_note($page,$id,$offset);
			$note_data=$note_this['data'];
			$note_page_str=$note_this['page_str'];
			$head['title']='在线问答';
			$head_pos_str='<span>&gt;</span><a href="#">'.$head['title'].'</a>';
			include T('wap','qa');
		break;
	case 'save':
			//留言设置的对接 todo
			$uid=intval($_userid);
			$time_update=true;
			if($_userid>0&&$_userid==$userid){
				//管理员无冷却时间
				$time_update=false;
				$config['note_sta']=99;
			}else{
				if($uid<1){
					$_username='匿名';
					$lasttime=$db->get_one("select max(`addtime`) as t from `web_mod_qa` where `siteuid`=".USERID." and `userid`=0 and `ip`='".IP."'");
				}else{
					$lasttime=$db->get_one("select max(`addtime`) as t from `web_mod_qa` where `siteuid`=".USERID." and `userid`={$uid}");
				}
				$lasttime=intval($lasttime['t']);
				$limit_time=TIME-$config['note_cd'];
				if($lasttime>$limit_time){
					exit('2');
				}
			}
			$pid=intval($_POST['pid']);

			$tid=$pid;
			if($pid>0){
				$p_note=$db->get_one("select * from `web_mod_qa` where `id`={$pid}");
				if(empty($p_note)){
					exit('-3');//父类评论信息不存在
				}
				if($p_note['userid']>0&&$p_note['userid']==$_userid){
					$tid=$pid=0;
				}
				if($p_note['pid']>0){
					$pid=$p_note['pid'];
				}
			}

			$content=str_cut(trim(htmlspecialchars(strip_tags($_POST['content']))),140);

			if(empty($content)){
				exit('-5');//留言信息不能为空
			}
			$note=array(
				'siteuid'=>USERID,
				'userid'=>$uid,
				'username'=>$_username,
				'dataid'=>0,
				'pid'=>$pid,
				'tid'=>$tid,
				'content'=>$content,
				'ip'=>IP,
				'status'=>$config['note_sta'],
				'addtime'=>TIME,
				'updatetime'=>TIME
			);
			$db->insert('web_mod_qa',$note);
			if($pid>0&&$time_update){
				$db->query('update `web_mod_qa` set `updatetime`='.TIME.' where `id`='.$pid);
			}
			exit('1');
		break;
}