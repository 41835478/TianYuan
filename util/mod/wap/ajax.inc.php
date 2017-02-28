<?php
$do = $_REQUEST['do'];
function isEmail($str){
    return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i',$str);
}
switch($do){
	case 'votemore':
		$openid=$_SESSION['openid'];
		if (empty($openid)||strlen($openid)!=28) {
			exit('nowx');//没有微信openid
		}
		$id=intval($_POST['id']);
		if($id){
			$main_info=$db->get_one('select * from `web_vote`.`web_data_main` where `id`='.$id);
			if(empty($main_info)){
					exit('noid');
			}
			$log=$db->get_one('select * from `web_vote`.`web_quan_log` where `dataid`='.$id.' and `openid`="'.$openid.'"');
            $mobile=str_cut(htmlspecialchars(strip_tags($_POST['tell'])),15);
            $flag=$db->get_one('select id from `web_vote`.`web_quan_log` where `dataid`='.$id.' and `tell`="'.$mobile.'"');
            if(!empty($flag)){
                echo '2';
                exit;
            }
			if(empty($log)){
                $url='http://v.showji.com/Locating/showji.com20150416273007.aspx?m='.$mobile.'&output=json&callback=arr&timestamp=1435310102487';
                $sContent=http_get($url);
                $cont=substr(substr($sContent,4),0,strlen(substr($sContent,4))-2);
                $html=json_decode($cont);
                $_place=$html->Province.$html->City;
				$extra=array(
					'openid'=>$openid,
					'dataid'=>$id,
					'quanid'=>$main_info['quan_id'],
					'tit'=>str_cut(htmlspecialchars(strip_tags($_POST['tit'])),30),
					'tell'=>$mobile,
					'tp'=>intval($_POST['tp']),
					'addtime'=>TIME,
                    'place'=>$_place
				);
				$db->insert('web_vote.web_quan_log',$extra);
			}
			exit('ok');
		}else{
			exit('noid');
		}
		break;
	case 'vote':
		$openid=$_SESSION['openid'];
		if (empty($openid)||strlen($openid)!=28) {
			exit('nowx');//没有微信openid
		}
        
		$id=intval($_POST['id']);
        $infoid=intval($_POST['infoid']);
        $main_info=$db->get_one("select * from `web_vote`.`web_data_main` where id='$infoid'");
        if($main_info['vtype']==2){
            exit('gongzhong');
        }
        if(TIME<$main_info['stime']){
            exit('early');
        }elseif(TIME>$main_info['etime']){
            exit('late');
        }
		if($id){
			$item=$db->get_one('select * from `web_vote`.`web_vote_item` where `id`='.$id);
			if(!empty($item)){
				$dataid=$item['dataid'];
				//$main_info=$db->get_one('select * from `web_vote`.`web_data_main` where `id`='.$dataid);
				if(empty($main_info)){
					exit('noid');
				}

                $log_new=$db->get_one('select * from `web_vote`.`web_vote_log` where `dataid`='.$dataid.' and `openid`="'.$openid.'" order by `id` desc');
                $limit=$main_info['limit'];//$db->findOne("select `limit` from `web_vote`.`web_data_main` where id='$dataid'");
                $last=$log_new['time'];
                if($limit=='-1'){
                    $flag=0;
                }else{
                    if(TIME-$last>=$limit){
                        $flag=1;
                    }else{
                        $flag=0;
                    }
                }
                $limitvote=$main_info['limitvote'];//$db->findOne("select `limitvote` from `web_vote`.`web_data_main` where id='$dataid'");
                if($limitvote!='-1'){
                    $log=$db->get_one('select * from `web_vote`.`web_vote_log` where `dataid`='.$dataid.' and `rel_id`="'.$id.'" order by `id` desc');
                    $last=$log['time'];
                    if((TIME-$last)<$limitvote){
                        exit('limitvote');
                    }
                }
                //$logs=$db->findOne('select id from `web_vote`.`web_vote_log` where `dataid`='.$dataid.' and `openid`="'.$openid.'" order by `id` desc');

                if(!empty($log_new)&&($flag==0)){
                    exit('hasvote');
                }else{

                    $infos=array(
                        'dataid'=>$dataid,
                        'rel_id'=>$id,
                        'siteuserid'=>$main_info['userid'],
                        'openid'=>$openid,
                        'ip'=>IP,
                        'time'=>TIME
                    );
                    $db->insert(' web_vote.web_vote_log',$infos);
                    $db->query('update `web_vote`.`web_vote_item` set `vote`=`vote`+1 where `id`='.$id);
                    exit('ok');
                }
			}else{
				exit('noid');
			}
		}else{
			exit('noid');
		}
		break;
	case 'savevoteitem':
		$dataid=intval($_POST['dataid']);
		$data=$db->get_one('select * from `web_vote`.`web_data_main` where `id`='.$dataid);
		if(!empty($data)){
			$infos=array();
			$infos['dataid']=$dataid;
			$infos['title']=str_cut(strip_tags(trim($_POST['title'])),20);        
			if(empty($infos['title'])){
				show_mb_msg('请填写选手姓名','/votes/add_'.$dataid.'.html');
			}

			$infos['mobile']=str_cut(strip_tags(trim($_POST['mobile'])),20);        
			if(empty($infos['mobile'])){
				show_mb_msg('请填写一个联系手机','/votes/add_'.$dataid.'.html');
			}

			$infos['extra']=str_cut(strip_tags(trim($_POST['extra'])),200);
			if(empty($infos['extra'])){
				show_mb_msg('请填写适量的参赛宣言','/votes/add_'.$dataid.'.html');
			}
			if(empty($_POST['img'])){
				show_mb_msg('请至少上传一张参赛照片','/votes/add_'.$dataid.'.html');
			}
			$id=$db->insert(' web_vote.web_vote_item',$infos,true);
			foreach($_POST['img'] as $k=>$v) {
				$v=intval($v);
				$order_count=0;
				$pic=$db->get_one("select * from `web_vote`.`web_vote_item_plugin` where `id`={$v}");
				if(!empty($pic)){
					if($cover==''){
						$cover=$pic['thumb'];
					}
					$db->query("update `web_vote`.`web_vote_item_plugin` set `dataid`={$id},`sort`={$order_count} where `id`={$v}");
					$order_count++;
				}
			}
			$db->query("update `web_vote`.`web_vote_item` set `thumb`='{$cover}',`status`=0 where `id`={$id}");
		}
		show_mb_msg('信息提交成功，请耐心等待管理员审核','/votes/'.$dataid.'.html');
		break;
	case 'confirmitem':
		$dataid=intval($_POST['dataid']);
		$data=$db->get_one('select * from `web_vote`.`web_data_main` where `id`='.$dataid);
		if(!empty($data)){
			$infos=array();
			$infos['dataid']=$dataid;
			$infos['title']=str_cut(strip_tags(trim($_POST['title'])),20);        
			if(empty($infos['title'])){
				show_mb_msg('请填写选手姓名','/votes/add_'.$dataid.'.html');
			}

			$infos['mobile']=str_cut(strip_tags(trim($_POST['mobile'])),20);        
			if(empty($infos['mobile'])){
				show_mb_msg('请填写一个联系手机','/votes/add_'.$dataid.'.html');
			}

			$infos['extra']=str_cut(strip_tags(trim($_POST['extra'])),200);
			if(empty($infos['extra'])){
				show_mb_msg('请填写适量的参赛宣言','/votes/add_'.$dataid.'.html');
			}
			if(empty($_POST['img'])){
				show_mb_msg('请至少上传一张参赛照片','/votes/add_'.$dataid.'.html');
			}
            $phone=$db->findOne("select id from `web_vote`.web_vote_item where mobile='{$infos['mobile']}' and dataid='$dataid'");
            if(!empty($phone)){
				show_mb_msg('手机号重复,请重新提交','/votes/add_'.$dataid.'.html');
			}
			$id=$db->insert(' web_vote.web_vote_item',$infos,true);
			foreach($_POST['img'] as $k=>$v) {
				$v=intval($v);
				$order_count=0;
				$pic=$db->get_one("select * from `web_vote_item_plugin` where `id`={$v}");
				if(!empty($pic)){
					if(strpos($pic['thumb'],'/temp/')){//$old_path
						$now_p=str_replace('/static/temp/','',$pic['thumb']);
						$old_p=str_replace("_real",'_150_200',$now_p);
						$new_p=str_replace("_real",'_200_200',$now_p);
                        $new_p2=str_replace("_real",'_220_330',$now_p);
						rename($old_path.$now_p, $ftppath.$now_p);
						rename($old_path.$old_p, $ftppath.$old_p);
						rename($old_path.$new_p, $ftppath.$new_p);
                        rename($old_path.$new_p2, $ftppath.$new_p2);
						$save_file=str_replace('D:/wwwroot/vote/static','/static',$ftppath.$now_p);
					}else{
						$save_file=$pic['thumb'];
					}
					if($cover==''){
						$cover=$save_file;
					}
					$db->query("update `web_vote_item_plugin` set `dataid`={$id},`thumb`='{$save_file}',`sort`={$order_count} where `id`={$v}");
					$order_count++;
				}
			}
			$no=$data['pre'].$id;
			$db->query("update `web_vote`.`web_vote_item` set `thumb`='{$cover}',`no`='$no',`status`=1 where `id`={$id}");
		}
		show_mb_msg('信息提交成功','/votes/show_'.$dataid.'.html?iid='.$id);
		break;
	case 'qa':
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
			exit('1');
		}else{
			exit('404');
		}
		break;
    case 'cu'://验证用户名
        $username = htmlspecialchars(strip_tags(trim($_POST['u'])));
        $username = iconv('UTF-8', 'GBK', $username);

        if(empty($username)){
            exit('-1');
        }

        if( strlen($username) >= 4 AND strlen($username)<= 15 ){
            $db->query('SET NAMES \'gbk\'');
            $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `username` = '{$username}'");
            $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `username` = '{$username}'");
            $db->query('SET NAMES \'utf8\'');
            if(empty($r) && empty($rr)){
                exit('1');
            }else{
                exit('0');
            }
        }else{
            exit('-2');
        }

        break;

    case 'ce'://验证电子邮件 

        $email = $_POST['e'];
        if(empty($email)){
            exit('-1');
        }
        if( isEmail($email) ){
            $db->query('SET NAMES \'gbk\'');
            $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `email` = '{$email}'");
            $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `email` = '{$email}'");
            $db->query('SET NAMES \'utf8\'');
            if(empty($r) && empty($rr)){
                exit('1');
            }else{
                exit('0');
            }
        }else{
            exit('2');
        }

        break;

    case 'cc':

        if(strtolower($_POST['c'])!=$_SESSION['checkcode']){
            exit('0');
        }else{
            exit('1');
        }

        break;

    case 'regcheck':
        
        $username = htmlspecialchars(strip_tags(trim($_POST['u'])));
        $username = iconv('UTF-8','GBK',$username);
        $email = htmlspecialchars(strip_tags(trim($_POST['e'])));
        $code = strtolower($_POST['c']);

        if(empty($username)){
            exit('forusername|username_empty');
        }

        if( strlen($username) < 4 OR strlen($username) > 15 ){
            exit('forusername|username_format');
        }

        $db->query('SET NAMES \'gbk\'');
        $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `username` = '{$username}'");
        $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `username` = '{$username}'");
        $db->query('SET NAMES \'utf8\'');

        if(!empty($r) || !empty($rr)){
            exit('forusername|username_exists');
        }

        if(empty($email)){
            exit('foremail|email_empty');
        }

        if( !isEmail($email) ){
            exit('foremail|email_format');
        }
        
        $db->query('SET NAMES \'gbk\'');
        $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `email` = '{$email}'");
        $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `email` = '{$email}'");
        $db->query('SET NAMES \'utf8\'');

        if(!empty($r) || !empty($rr)){
            exit('foremail|email_exists');
        }

        if(empty($code)){
            exit('forcode|code_empty');
        }

        if($code!=$_SESSION['checkcode']){
             exit('forcode|code_wrong');
        }

        exit('ok');

        break;
    case 'cu'://验证用户名
        $username = htmlspecialchars(strip_tags(trim($_POST['u'])));
        $username = iconv('UTF-8', 'GBK', $username);

        if(empty($username)){
            exit('-1');
        }

        if( strlen($username) >= 4 AND strlen($username)<= 15 ){
            $db->query('SET NAMES \'gbk\'');
            $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `username` = '{$username}'");
            $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `username` = '{$username}'");
            $db->query('SET NAMES \'utf8\'');
            if(empty($r) && empty($rr)){
                exit('1');
            }else{
                exit('0');
            }
        }else{
            exit('-2');
        }

        break;

    case 'ce'://验证电子邮件 

        $email = $_POST['e'];
        if(empty($email)){
            exit('-1');
        }
        if( isEmail($email) ){
            $db->query('SET NAMES \'gbk\'');
            $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `email` = '{$email}'");
            $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `email` = '{$email}'");
            $db->query('SET NAMES \'utf8\'');
            if(empty($r) && empty($rr)){
                exit('1');
            }else{
                exit('0');
            }
        }else{
            exit('2');
        }

        break;

    case 'cc':

        if(strtolower($_POST['c'])!=$_SESSION['checkcode']){
            exit('0');
        }else{
            exit('1');
        }

        break;

    case 'regcheck':
        
        $username = htmlspecialchars(strip_tags(trim($_POST['u'])));
        $username = iconv('UTF-8','GBK',$username);
        $email = htmlspecialchars(strip_tags(trim($_POST['e'])));
        $code = strtolower($_POST['c']);

        if(empty($username)){
            exit('forusername|username_empty');
        }

        if( strlen($username) < 4 OR strlen($username) > 15 ){
            exit('forusername|username_format');
        }

        $db->query('SET NAMES \'gbk\'');
        $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `username` = '{$username}'");
        $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `username` = '{$username}'");
        $db->query('SET NAMES \'utf8\'');

        if(!empty($r) || !empty($rr)){
            exit('forusername|username_exists');
        }

        if(empty($email)){
            exit('foremail|email_empty');
        }

        if( !isEmail($email) ){
            exit('foremail|email_format');
        }
        
        $db->query('SET NAMES \'gbk\'');
        $r = $db->get_one("select `uid` from `ucenter`.`uc_members` where `email` = '{$email}'");
        $rr = $db->get_one("select `uid` from `qgyinglou`.`qy_member` where `email` = '{$email}'");
        $db->query('SET NAMES \'utf8\'');

        if(!empty($r) || !empty($rr)){
            exit('foremail|email_exists');
        }

        if(empty($code)){
            exit('forcode|code_empty');
        }

        if($code!=$_SESSION['checkcode']){
             exit('forcode|code_wrong');
        }

        exit('ok');

        break;
}