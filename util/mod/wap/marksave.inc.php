<?php
$id=intval($_POST['id']);
$info=$db->get_one('select `id`,`userid`,`level`,`catid` from `web_mod_data` where `id`='.$id);
if(isset($info['userid'])&&$info['userid']==$userid){
	if($info['level']>0){//检测访问权限
		$qa_info=$db->get_one('select * from `web_mod_data_qa` where `id`='.$id);//获取权限问题信息
		$qa_main=unserialize($qa_info['qa']);
		$answer=trim($_POST['a']);
		if($qa_main['a']!=$answer){
			exit('0');
		}else{
			$md5=$qa_info['md5'];
			$sid = session_id();
			Cookie::set($md5,$sid);
		}
	}

	if(!empty($_POST)){
		$uid = intval($_POST['uid']);							//操作用户的id
		$dataid = intval($_POST['id']);							//页面id
		$markid = intval($_POST['markid']);							//markid 标记主信息的id
		$ip=ip();													//ip地址
		$date = TIME;										//操作的时间
		$detail_info=$db->get_one('select * from `web_mod_data` where `id`='.$dataid);
		$cid=$detail_info['catid'];
		$infos = $db->get_one("SELECT * FROM `web_mark_main` WHERE `id`='{$markid}'");
		$rel_infos = $db->get_one("SELECT * FROM `web_mark_rel` WHERE `id`={$dataid} and `markid`='{$markid}' and type=1");
		if(empty($rel_infos)){	//暂时注释掉
			$cid_rel=$db->get_one('select * from `web_mark_rel` where `id`='.$cid.' and `markid`='.$markid.' and `type`=2');
			if(empty($cid_rel)){
				exit('-1');					//从`web_mark_rel`里查询。防止关闭按钮后未刷新页面也能提交
			}
		}
		if(empty($detail_info)||$detail_info['userid']!=$userid){
			exit('-1');
		}
		if(empty($infos)||$infos['userid']!=$userid){
			exit('-1');						//要提交的按钮不存在
		}
		if($infos['startdate']>TIME||($infos['enddate']>0&&$infos['enddate']<TIME)){
			exit($infos['closemsg']);//表单采集还没有开始或者时间已经过了
		}else{
			$start_hour=$infos['starttime']?date('His',$infos['starttime']):0;
			$end_hour=$infos['endtime']?date('His',$infos['endtime']):0;
			if($start_hour>0){
				$start_hour=strtotime($start_hour);
				if($start_hour>TIME){
					exit($infos['closemsg']);//现在还没有开始采集，定义从几号到几号的采集
				}
			}
			if($end_hour>0){
				$end_hour=strtotime($end_hour);
				if($end_hour>$start_hour&&$end_hour<TIME){
					exit($infos['closemsg']);//采集时间段已过，每天的采集时间段
				}
			}
		}
		$main_user = $db->get_one("SELECT * FROM `web_mark_info` WHERE `uid`='{$uid}' and `markid`='{$markid}' and `ip`='{$ip}'");
		$range = $infos['range'];									//判断是不是本站的会员
		$cancelable = $infos['cancelable'];						//判断是不是要取消标记
		if($main_user&&($uid!=$main_user['uid']||$_username!=$main_user['username'])){
			exit('提交表单失败！请重新提交');
		}
		if($range==1&&empty($uid)){
			die('-6');					//您不是本站的会员，请您登陆后再提交数据！
		}elseif($cancelable==1&&$main_user){
			$del = mysql_query("DELETE FROM `web_mark_info` WHERE `uid`='{$uid}' and `markid`='{$markid}' and `ip`='{$ip}'");
			exit('-7');					//取消标记信息的
		}else{
			$arr=array('uid'=>$uid,'ip'=>$ip,'dataid'=>$dataid,'username'=>$_username,'addtime'=>$date,'status'=>0,'markid'=>$markid);
			$rel = $db->insert('web_mark_info',$arr,0,0,1);
			if($rel){
				die($infos['successmsg']); //提交成功
			}else{
				die($infos['failmsg']);		//提交失败
			}
		}
	}
}else{
	//exit('404');
	sta_404(0);
}
?>