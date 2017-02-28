<?php
$id=intval($_GET['id']);
$form=$db->get_one('select * from `web_data_main` where `id`='.$id);
if(empty($form)&&$form['userid']!=$userid){
	exit('-1');//您提交的表单不存在
}
$dataid=intval($_POST['dataid']);
if($dataid!=0){
	$data_info=$db->get_one('select `id`,`userid` from `web_mod_data` where `id`='.$dataid);
	if(empty($data_info)||$data_info['userid']!=$userid){
		exit('-1');
	}
}
if($form['startdate']>TIME||($form['enddate']>0&&$form['enddate']<TIME)){
	exit('-2');//表单采集还没有开始或者时间已经过了
}else{
	$start_hour=$form['starttime']?date('His',$form['starttime']):0;
	$end_hour=$form['endtime']?date('His',$form['endtime']):0;
	if(($start_hour>0)){
		$start_hour=strtotime($start_hour);
		if($start_hour>TIME){
			exit('-3');//现在还没有开始采集
		}
	}
	if($end_hour>0){
		$end_hour=strtotime($end_hour);
		if($end_hour>$start_hour&&$end_hour<TIME){
			exit('-4');//采集时间段已过
		}
	}
	if($form['range']==1){
		if($_userid>0){
			$score_uc=$db->get_one('select * from `web_plugin_score_uc` where `siteuserid`='.$userid.' and `qyuid`='.$_userid);
			if(empty($score_uc)){
				exit('-6');//您还不是本站会员，请先去激活或者领取会员卡
			}
		}else{
			exit('-5');//您还没有登陆
		}
	}
}

$all_tjdata_items=$db->getAll('select * from `web_data_rel` where `dataid`='.$id.' order by sort desc,`id` asc','id');
$this_tj_content=$uniq=array();
$_post_infos=filter_xss($_POST);
foreach($all_tjdata_items as $k=>$v) {
	if(isset($_post_infos['c_'.$v['id']])){
		switch($v['type']) {
			case 'TextArea':
				$v['uniq']=0;
				$now_text=str_cut(htmlspecialchars(trim($_post_infos['c_'.$v['id']])),200);
				break;
			case 'TextField':
				$now_text=str_cut(htmlspecialchars(trim($_post_infos['c_'.$v['id']])),40);
				break;
			case 'TelephoneField':
				$now_text=filter_var($_post_infos['c_'.$v['id']],FILTER_SANITIZE_NUMBER_INT);
				break;
			case 'MobileField':
				$now_text=filter_var($_post_infos['c_'.$v['id']],FILTER_SANITIZE_NUMBER_INT);
				break;
			case 'RadioButton':
				$v['uniq']=0;
				$now_text=$_post_infos['c_'.$v['id']]!=0&&empty($_post_infos['c_'.$v['id']])?'':trim($_post_infos['c_'.$v['id']]);
				$now_text=$now_text!=='other'?intval($now_text):'other';
				$extra_arr=unserialize($v['extra']);
				if(isset($extra_arr['options'][$now_text])){
					$now_text=$now_text==='other'?str_cut(htmlspecialchars(trim($_post_infos['c_'.$v['id'].'_other'])),40):$extra_arr['options'][$now_text];
				}else{
					$now_text='';
				}
				break;
			case 'DropDown':
				$v['uniq']=0;
				$now_text=$_post_infos['c_'.$v['id']]!=0&&empty($_post_infos['c_'.$v['id']])?'':intval($_post_infos['c_'.$v['id']]);

				$extra_arr=unserialize($v['extra']);
				if(isset($extra_arr['options'][$now_text])){
					$now_text=$extra_arr['options'][$now_text];
				}else{
					$now_text='';
				}
				break;
			case 'RatingField':
				$v['uniq']=0;
				$now_text=empty($_post_infos['c_'.$v['id']])?'':intval($_post_infos['c_'.$v['id']]);
				break;
			case 'CheckBox':
				$v['uniq']=0;
				$now_text_arr=is_array($_post_infos['c_'.$v['id']])?$_post_infos['c_'.$v['id']]:array();
				$extra_arr=unserialize($v['extra']);
				$now_text=array();
				foreach($now_text_arr as $chk_k=>$chk_v) {
					$chk_v=trim($chk_v);
					$chk_v=$chk_v!=='other'?intval($chk_v):'other';
					if(isset($extra_arr['options'][$chk_v])){
						if($chk_v!=='other'){
							$now_text[]=$chk_v;
						}else{
							$now_text['other']=str_cut(htmlspecialchars(trim($_post_infos['c_'.$v['id'].'_other'])),40);
						}
					}
				}
				break;
			case 'NumberField':
				$now_text=filter_var($_post_infos['c_'.$v['id']],FILTER_SANITIZE_NUMBER_INT);
				break;
			case 'EmailField':
				$now_text=filter_var($_post_infos['c_'.$v['id']],FILTER_SANITIZE_EMAIL);
				break;
			case 'LinkField':
				$now_text=filter_var($_post_infos['c_'.$v['id']],FILTER_SANITIZE_URL);
				break;
			case 'DateField':
				$v['uniq']=0;
				$now_text=trim($_post_infos['c_'.$v['id']]);
				break;
		}
		if($v['need']==1&&($now_text!==0&&empty($now_text))){
			exit('您填写的【'.$v['title'].'】不能为空');
		}
		if($v['uniq']==1){
			$this_md5_val=is_array($now_text)?md5(serialize($now_text)):md5($now_text);
			$has_exist=$db->get_one('select * from `web_data_limit` where `cid`='.$id.' and `rid`='.$v['id'].' and `val`="'.$this_md5_val.'"');
			if(!empty($has_exist)){
				exit('您填写的【'.$v['title'].'】已经使用过了');
			}else{
				$uniq[]=array(
					'cid'=>$id,
					'rid'=>$v['id'],
					'val'=>$this_md5_val
				);
			}
		}
		$this_tj_content[$v['id']]=array(
			'name'=>$v,
			'text'=>$now_text
		);
	}
}
$content_arr=array(
	'fid'=>$id,
	'dataid'=>$dataid,
	'userid'=>$_userid,
	'uname'=>$_username,
	'content'=>serialize($this_tj_content),
	'status'=>0,
	'addtime'=>TIME
);
$contentid=$db->insert('web_data_content',$content_arr,true);
foreach($uniq as $k=>$v) {
	$uniq[$k]['contentid']=$contentid;
}
@$db->insert('web_data_limit',$uniq);
exit('1');