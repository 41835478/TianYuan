<?php

class Calendar
{
#农历每月的天数
    var $everyCMonth=array(
    0=>array(8,0,0,0,0,0,0,0,0,0,0,0,29,30,7,1),
    1=>array(0,29,30,29,29,30,29,30,29,30,30,30,29,0,8,2),
    2=>array(0,30,29,30,29,29,30,29,30,29,30,30,30,0,9,3),
    3=>array(5,29,30,29,30,29,29,30,29,29,30,30,29,30,10,4),
    4=>array(0,30,30,29,30,29,29,30,29,29,30,30,29,0,1,5),
    5=>array(0,30,30,29,30,30,29,29,30,29,30,29,30,0,2,6),
    6=>array(4,29,30,30,29,30,29,30,29,30,29,30,29,30,3,7),
    7=>array(0,29,30,29,30,29,30,30,29,30,29,30,29,0,4,8),
    8=>array(0,30,29,29,30,30,29,30,29,30,30,29,30,0,5,9),
    9=>array(2,29,30,29,29,30,29,30,29,30,30,30,29,30,6,10),
    10=>array(0,29,30,29,29,30,29,30,29,30,30,30,29,0,7,11),
    11=>array(6,30,29,30,29,29,30,29,29,30,30,29,30,30,8,12),
    12=>array(0,30,29,30,29,29,30,29,29,30,30,29,30,0,9,1),
    13=>array(0,30,30,29,30,29,29,30,29,29,30,29,30,0,10,2),
    14=>array(5,30,30,29,30,29,30,29,30,29,30,29,29,30,1,3),
    15=>array(0,30,29,30,30,29,30,29,30,29,30,29,30,0,2,4),
    16=>array(0,29,30,29,30,29,30,30,29,30,29,30,29,0,3,5),
    17=>array(2,30,29,29,30,29,30,30,29,30,30,29,30,29,4,6),
    18=>array(0,30,29,29,30,29,30,29,30,30,29,30,30,0,5,7),
    19=>array(7,29,30,29,29,30,29,29,30,30,29,30,30,30,6,8),
    20=>array(0,29,30,29,29,30,29,29,30,30,29,30,30,0,7,9),
    21=>array(0,30,29,30,29,29,30,29,29,30,29,30,30,0,8,10),
    22=>array(5,30,29,30,30,29,29,30,29,29,30,29,30,30,9,11),
    23=>array(0,29,30,30,29,30,29,30,29,29,30,29,30,0,10,12),
    24=>array(0,29,30,30,29,30,30,29,30,29,30,29,29,0,1,1),
    25=>array(4,30,29,30,29,30,30,29,30,30,29,30,29,30,2,2),
    26=>array(0,29,29,30,29,30,29,30,30,29,30,30,29,0,3,3),
    27=>array(0,30,29,29,30,29,30,29,30,29,30,30,30,0,4,4),
    28=>array(2,29,30,29,29,30,29,29,30,29,30,30,30,30,5,5),
    29=>array(0,29,30,29,29,30,29,29,30,29,30,30,30,0,6,6),
    30=>array(6,29,30,30,29,29,30,29,29,30,29,30,30,29,7,7),
    31=>array(0,30,30,29,30,29,30,29,29,30,29,30,29,0,8,8),
    32=>array(0,30,30,30,29,30,29,30,29,29,30,29,30,0,9,9),
    33=>array(5,29,30,30,29,30,30,29,30,29,30,29,29,30,10,10),
    34=>array(0,29,30,29,30,30,29,30,29,30,30,29,30,0,1,11),
    35=>array(0,29,29,30,29,30,29,30,30,29,30,30,29,0,2,12),
    36=>array(3,30,29,29,30,29,29,30,30,29,30,30,30,29,3,1),
    37=>array(0,30,29,29,30,29,29,30,29,30,30,30,29,0,4,2),
    38=>array(7,30,30,29,29,30,29,29,30,29,30,30,29,30,5,3),
    39=>array(0,30,30,29,29,30,29,29,30,29,30,29,30,0,6,4),
    40=>array(0,30,30,29,30,29,30,29,29,30,29,30,29,0,7,5),
    41=>array(6,30,30,29,30,30,29,30,29,29,30,29,30,29,8,6),
    42=>array(0,30,29,30,30,29,30,29,30,29,30,29,30,0,9,7),
    43=>array(0,29,30,29,30,29,30,30,29,30,29,30,29,0,10,8),
    44=>array(4,30,29,30,29,30,29,30,29,30,30,29,30,30,1,9),
    45=>array(0,29,29,30,29,29,30,29,30,30,30,29,30,0,2,10),
    46=>array(0,30,29,29,30,29,29,30,29,30,30,29,30,0,3,11),
    47=>array(2,30,30,29,29,30,29,29,30,29,30,29,30,30,4,12),
    48=>array(0,30,29,30,29,30,29,29,30,29,30,29,30,0,5,1),
    49=>array(7,30,29,30,30,29,30,29,29,30,29,30,29,30,6,2),
    50=>array(0,29,30,30,29,30,30,29,29,30,29,30,29,0,7,3),
    51=>array(0,30,29,30,30,29,30,29,30,29,30,29,30,0,8,4),
    52=>array(5,29,30,29,30,29,30,29,30,30,29,30,29,30,9,5),
    53=>array(0,29,30,29,29,30,30,29,30,30,29,30,29,0,10,6),
    54=>array(0,30,29,30,29,29,30,29,30,30,29,30,30,0,1,7),
    55=>array(3,29,30,29,30,29,29,30,29,30,29,30,30,30,2,8),
    56=>array(0,29,30,29,30,29,29,30,29,30,29,30,30,0,3,9),
    57=>array(8,30,29,30,29,30,29,29,30,29,30,29,30,29,4,10),
    58=>array(0,30,30,30,29,30,29,29,30,29,30,29,30,0,5,11),
    59=>array(0,29,30,30,29,30,29,30,29,30,29,30,29,0,6,12),
    60=>array(6,30,29,30,29,30,30,29,30,29,30,29,30,29,7,1),
    61=>array(0,30,29,30,29,30,29,30,30,29,30,29,30,0,8,2),
    62=>array(0,29,30,29,29,30,29,30,30,29,30,30,29,0,9,3),
    63=>array(4,30,29,30,29,29,30,29,30,29,30,30,30,29,10,4),
    64=>array(0,30,29,30,29,29,30,29,30,29,30,30,30,0,1,5),
    65=>array(0,29,30,29,30,29,29,30,29,29,30,30,29,0,2,6),
    66=>array(3,30,30,30,29,30,29,29,30,29,29,30,30,29,3,7),
    67=>array(0,30,30,29,30,30,29,29,30,29,30,29,30,0,4,8),
    68=>array(7,29,30,29,30,30,29,30,29,30,29,30,29,30,5,9),
    69=>array(0,29,30,29,30,29,30,30,29,30,29,30,29,0,6,10),
    70=>array(0,30,29,29,30,29,30,30,29,30,30,29,30,0,7,11),
    71=>array(5,29,30,29,29,30,29,30,29,30,30,30,29,30,8,12),
    72=>array(0,29,30,29,29,30,29,30,29,30,30,29,30,0,9,1),
    73=>array(0,30,29,30,29,29,30,29,29,30,30,29,30,0,10,2),
    74=>array(4,30,30,29,30,29,29,30,29,29,30,30,29,30,1,3),
    75=>array(0,30,30,29,30,29,29,30,29,29,30,29,30,0,2,4),
    76=>array(8,30,30,29,30,29,30,29,30,29,29,30,29,30,3,5),
    77=>array(0,30,29,30,30,29,30,29,30,29,30,29,29,0,4,6),
    78=>array(0,30,29,30,30,29,30,30,29,30,29,30,29,0,5,7),
    79=>array(6,30,29,29,30,29,30,30,29,30,30,29,30,29,6,8),
    80=>array(0,30,29,29,30,29,30,29,30,30,29,30,30,0,7,9),
    81=>array(0,29,30,29,29,30,29,29,30,30,29,30,30,0,8,10),
    82=>array(4,30,29,30,29,29,30,29,29,30,29,30,30,30,9,11),
    83=>array(0,30,29,30,29,29,30,29,29,30,29,30,30,0,10,12),
    84=>array(10,30,29,30,30,29,29,30,29,29,30,29,30,30,1,1),
    85=>array(0,29,30,30,29,30,29,30,29,29,30,29,30,0,2,2),
    86=>array(0,29,30,30,29,30,30,29,30,29,30,29,29,0,3,3),
    87=>array(6,30,29,30,29,30,30,29,30,30,29,30,29,29,4,4),
    88=>array(0,30,29,30,29,30,29,30,30,29,30,30,29,0,5,5),
    89=>array(0,30,29,29,30,29,29,30,30,29,30,30,30,0,6,6),
    90=>array(5,29,30,29,29,30,29,29,30,29,30,30,30,30,7,7),
    91=>array(0,29,30,29,29,30,29,29,30,29,30,30,30,0,8,8),
    92=>array(0,29,30,30,29,29,30,29,29,30,29,30,30,0,9,9),
    93=>array(3,29,30,30,29,30,29,30,29,29,30,29,30,29,10,10),
    94=>array(0,30,30,30,29,30,29,30,29,29,30,29,30,0,1,11),
    95=>array(8,29,30,30,29,30,29,30,30,29,29,30,29,30,2,12),
    96=>array(0,29,30,29,30,30,29,30,29,30,30,29,29,0,3,1),
    97=>array(0,30,29,30,29,30,29,30,30,29,30,30,29,0,4,2),
    98=>array(5,30,29,29,30,29,29,30,30,29,30,30,29,30,5,3),
    99=>array(0,30,29,29,30,29,29,30,29,30,30,30,29,0,6,4),
    100=>array(0,30,30,29,29,30,29,29,30,29,30,30,29,0,7,5),
    101=>array(4,30,30,29,30,29,30,29,29,30,29,30,29,30,8,6),
    102=>array(0,30,30,29,30,29,30,29,29,30,29,30,29,0,9,7),
    103=>array(0,30,30,29,30,30,29,30,29,29,30,29,30,0,10,8),
    104=>array(2,29,30,29,30,30,29,30,29,30,29,30,29,30,1,9),
    105=>array(0,29,30,29,30,29,30,30,29,30,29,30,29,0,2,10),
    106=>array(7,30,29,30,29,30,29,30,29,30,30,29,30,30,3,11),
    107=>array(0,29,29,30,29,29,30,29,30,30,30,29,30,0,4,12),
    108=>array(0,30,29,29,30,29,29,30,29,30,30,29,30,0,5,1),
    109=>array(5,30,30,29,29,30,29,29,30,29,30,29,30,30,6,2),
    110=>array(0,30,29,30,29,30,29,29,30,29,30,29,30,0,7,3),
    111=>array(0,30,29,30,30,29,30,29,29,30,29,30,29,0,8,4),
    112=>array(4,30,29,30,30,29,30,29,30,29,30,29,30,29,9,5),
    113=>array(0,30,29,30,29,30,30,29,30,29,30,29,30,0,10,6),
    114=>array(9,29,30,29,30,29,30,29,30,30,29,30,29,30,1,7),
    115=>array(0,29,30,29,29,30,29,30,30,30,29,30,29,0,2,8),
    116=>array(0,30,29,30,29,29,30,29,30,30,29,30,30,0,3,9),
    117=>array(6,29,30,29,30,29,29,30,29,30,29,30,30,30,4,10),
    118=>array(0,29,30,29,30,29,29,30,29,30,29,30,30,0,5,11),
    119=>array(0,30,29,30,29,30,29,29,30,29,29,30,30,0,6,12),
    120=>array(4,29,30,30,30,29,30,29,29,30,29,30,29,30,7,1)
    );
##############################
#农历天干

    var $mten=array("null","甲","乙","丙","丁","戊","己","庚","辛","壬","癸");    #农历地支
    var $mtwelve=array("null","子(鼠)","丑(牛)","寅(虎)","卯(兔)","辰(龙)",
                   "巳(蛇)","午(马)","未(羊)","申(猴)","酉(鸡)","戌(狗)","亥(猪)");    #农历月份
    var $mmonth=array("闰","正","二","三","四","五","六",
                  "七","八","九","十","十一","十二","月");
    var $mday=array("null","初一","初二","初三","初四","初五","初六","初七","初八","初九","初十",
                "十一","十二","十三","十四","十五","十六","十七","十八","十九","二十",
                "廿一","廿二","廿三","廿四","廿五","廿六","廿七","廿八","廿九","三十");#农历日
##############################
#赋给初值
#天干地支
    var $ten=0;
    var $twelve=0;
    function MyPub($cYear,$cMonth,$cDay)
    {
        $total=11;#阳历总天数 至1900年12月21日   
        $mtotal=0;#阴历总天数
        for ($y=1901;$y<$cYear;$y++)
        {
            $total+=365;
            if ($y%4==0) $total ++;
        }
        #再加当年的几个月
        switch ($cMonth){
                 case 12:
                      $total+=30;
                 case 11:
                      $total+=31;
                 case 10:
                      $total+=30;
                 case 9:
                      $total+=31;
                 case 8:
                      $total+=31;
                 case 7:
                      $total+=30;
                 case 6:
                      $total+=31;
                 case 5:
                      $total+=30;
                 case 4:
                      $total+=31;
                 case 3:
                      $total+=28;
                 case 2:
                      $total+=31;
               }

            #如果当年是闰年还要加一天
            if ($cYear%4==0 and $cMonth>2)
            {
                $total++;
            }

            $total+=$cDay-1;

            ##############################
            #用农历的天数累加来判断是否超过阳历的天数
            for($j=0;$j<=120;$j++)
            {
                $i=1;
                for($i=1;$i<=13;$i++)
                {
                    $mtotal+=$this->everyCMonth[$j][$i];
                    if ($mtotal>=$total)
                    {
                        $flag=1;
                        break;
                    }
                }
                if ($flag==1)break;
            }
                    return array("m"=>$j,"d"=>$i,"t"=>$total,"n"=>$mtotal);
    }
    function Cal($Year,$Month,$Day)
    {
        $Par=$this->MyPub($Year,$Month,$Day);

        $md=$this->everyCMonth[$Par["m"]][$Par["d"]]-($Par["n"]-$Par["t"]);
        $week=($Par["t"]+5)%7;
        if ($this->everyCMonth[$Par["m"]][0]<>0 and $this->everyCMonth[$Par["m"]][0]<$Par["d"])
        {
                $mm=$Par["d"]-1;
        }else{
                $mm=$Par["d"];
        }
        if ($Par["d"]==$this->everyCMonth[$Par["d"]][0]+1 and $this->everyCMonth[$Par["d"]][0]<>0)
        {
            $cMonth=$this->mmonth[0].$this->mmonth[$mm];#闰月
        }else{
            $cMonth=$this->mmonth[$mm].$this->mmonth[13];
        }
        return array("year"=>$this->mten[$this->everyCMonth[$Par["m"]][14]].$this->mtwelve[$this->everyCMonth[$Par["m"]][15]],
                    "month"=>$cMonth,
                    "day"=>$this->mday[$md],
                    "week"=>$week);
    }
}
function get_item($catid){
	$db=MYSql::getdb();
	$list=$db->getAll("select * from `web_cate` where parent=$catid");
	$result='';
	foreach($list as $k=>$v) {
		$result.='<a href="/list/'.$v['id'].'.html">'.$v['name'].'</a>';
	}
	return $result;
}
function getTopAreaid($area,$id){
	if(isset($area[$id])){
		$p_arr=explode(',',$area[$id]['arrparentid']);
		if($p_arr){
			return $p_arr[0]>0?$p_arr[0]:$id;
		}else{
			return $id;
		}
	}else{
		return 0;
	}
}
function getnews($catid,$num){
	$db=MYSql::getdb();
	$list=$db->getAll("select * from `web_news` where cateid=$catid limit $num");
	return $list;
}

function get_score($uid) {
	$db=MYSql::getdb();
	$stars=$db->getAll("select count(*) as num,star from web_shop_comments where uid=".$uid." and pid=0 group by star","star");
	$s_tol=$s_negative=$s_neutral=$s_positive=0; 
	
	if(empty($stars)){
		$s_pos_per=100;
		$s_neu_per=0;
		$s_neg_per=0;
		$s_per=10;
	}else{
		for($i=0;$i<5;$i++){
			$stars[$i]['num']=isset($stars[$i]['num'])?intval($stars[$i]['num']):0;
		}
		$s_negative=$stars[0]['num']+$stars[1]['num'];//差评
		$s_neutral=$stars[2]['num']+$stars[3]['num'];//中评
		$s_positive=$stars[4]['num']+$stars[5]['num'];//好评
		$s_tol=$s_negative+$s_neutral+$s_positive;//总数
		$s_pos_per=round(($s_positive/$s_tol)*100,0);
		$s_neu_per=round(($s_neutral/$s_tol)*100,0);
		$s_neg_per=round(($s_negative/$s_tol)*100,0);

		$s_total_star=$stars[1]['num']*1+$stars[2]['num']*2+$stars[3]['num']*3+$stars[4]['num']*4+$stars[5]['num']*5;
		$s_total_a=($stars[0]['num']+$stars[1]['num']+$stars[2]['num']+$stars[3]['num']+$stars[4]['num']+$stars[5]['num'])*5;
		$s_per=round(($s_total_star/$s_total_a)*10,2);
	}
	$s_per=$s_per/2+5;
	$s_mar=((10-$s_per)/10)*100;
	return array($s_tol,$s_negative,$s_neutral,$s_positive,$s_neu_per,$s_neg_per,$s_pos_per,$s_mar,$s_per);
}
function catenav($cateid){
	$db=MYSql::getdb();
	$cateinfo=$db->get_One('select * from `web_cate` where id='.$cateid);
	$catenav=$cateinfo['name'];
	return $catenav;
}

function catnav($cateid){
	$db=MYSql::getdb();
	$cateinfo=$db->get_One('select * from `web_cate` where id='.$cateid);
	if($cateinfo['parent']==0){
		$catenav='<a href="/list/'.$cateid.'.html">'.$cateinfo['name'].'</a>';
	}else{
		$parent=$db->get_One('select id,name from `web_cate` where id='.$cateinfo['parent']);
		$catenav='<a href="/list/'.$parent['id'].'.html">'.$parent['name'].'</a> <i class="fa fa-angle-right"></i> <a href="/list/'.$cateid.'.html">'.$cateinfo['name'].'</a>';
	}
	return $catenav;
}

function cat_tj($catid) {
	$db=MYSql::getdb();
	$now=$db->get_one("select * from `web_cate` where id=$catid");
	$now_tids=explode(',',$now['tids']);
	$m=count($now_tids);
	switch($m){
		case '1':
			$ids=$now['childips'];
			break;
		default:
			$ids=$now_tids[1];
			break;
	}
	$time=time();
	//$top_lists=$db->getAll("select * from wm_shop_recommend where catid in($ids) and '$time'<etime order by sort asc","gid");
	return $top_lists;
}
function index_good($id,$limit=0,$now_domain='qysc'){
		if(empty($now_domain)){
			$now_domain="qysc";	
		}
		$db=MYSql::getdb();
		$index_s=array();
		$index_arr=array();
		$time=TIME;
		$index_cate=$db->getAll('select * from `wm_cate` where `domain`="'.$now_domain.'" and sta=1 and pid='.$id.' ','id');
		$index_tree=c_tree($index_cate,'pid');
		foreach($index_tree as $k=>$v) {
			$index_s[$k]=$v['child'];
		}
		if($index_s){
			$index_s=array_keys($index_s);
			$index_s=implode(',',$index_s);
			$index_arr=$db->getAll('select * from wm_shop_recommend where etime>='.$time.' and catid in ('.$index_s.') order by sort asc limit '.$limit.' ');
		}
		return $index_arr;
	}
function index_ads($c,$now_domain='qysc'){
	$ads_info=array();
	if($c=='l1'){
		$ads=ads(25,1,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads=ads(26,4,$now_domain);
		$ads_info[1]=$ads['ads'][0];
		$ads_info[2]=$ads['ads'][1];
		$ads_info[4]=$ads['ads'][2];
		$ads_info[5]=$ads['ads'][3];
		$ads=ads(42,1,$now_domain);
		$ads_info[3]=$ads['ads'][0];
	}elseif($c=='l2'){
		$ads=ads(27,1,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads=ads(28,4,$now_domain);
		$ads_info[1]=$ads['ads'][0];
		$ads_info[2]=$ads['ads'][1];
		$ads_info[3]=$ads['ads'][2];
		$ads_info[4]=$ads['ads'][3];
		$ads=ads(29,4,$now_domain);
		$ads_info[5]=$ads['ads'][0];
		$ads_info[6]=$ads['ads'][1];
		$ads_info[7]=$ads['ads'][2];
		$ads_info[8]=$ads['ads'][3];
	}elseif($c=='l3'){
		$ads=ads(30,1,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads=ads(31,6,$now_domain);
		$ads_info[1]=$ads['ads'][0];
		$ads_info[2]=$ads['ads'][1];
		$ads_info[4]=$ads['ads'][2];
		$ads_info[6]=$ads['ads'][3];
		$ads_info[7]=$ads['ads'][4];
		$ads_info[8]=$ads['ads'][5];
		
		$ads=ads(32,2,$now_domain);
		$ads_info[3]=$ads['ads'][0];
		$ads_info[9]=$ads['ads'][1];
		$ads=ads(33,1,$now_domain);
		$ads_info[5]=$ads['ads'][0];
	}elseif($c=='l4'){
		$ads=ads(34,8,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads_info[1]=$ads['ads'][1];
		$ads_info[2]=$ads['ads'][2];
		$ads_info[3]=$ads['ads'][3];
		$ads_info[4]=$ads['ads'][4];
		$ads_info[5]=$ads['ads'][5];
		$ads_info[6]=$ads['ads'][6];
		$ads_info[7]=$ads['ads'][7];
	}elseif($c=='l5'){
		$ads=ads(35,1,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads=ads(36,4,$now_domain);
		$ads_info[1]=$ads['ads'][0];
		$ads_info[2]=$ads['ads'][1];
		$ads_info[4]=$ads['ads'][2];
		$ads_info[5]=$ads['ads'][3];
		$ads=ads(37,1,$now_domain);
		$ads_info[3]=$ads['ads'][0];
		
	}elseif($c=='l6'){
		$ads=ads(38,1,$now_domain);
		$ads_info[0]=$ads['ads'][0];
		$ads=ads(39,6,$now_domain);
		$ads_info[1]=$ads['ads'][0];
		$ads_info[2]=$ads['ads'][1];
		$ads_info[4]=$ads['ads'][2];
		$ads_info[6]=$ads['ads'][3];
		$ads_info[7]=$ads['ads'][4];
		$ads_info[8]=$ads['ads'][5];
		
		$ads=ads(40,2,$now_domain);
		$ads_info[3]=$ads['ads'][0];
		$ads_info[9]=$ads['ads'][1];
		$ads=ads(41,1,$now_domain);
		$ads_info[5]=$ads['ads'][0];
	}
	return($ads_info);
}
function ads($id,$limit=0,$now_domain='qysc') {
	if(empty($now_domain)){
		$now_domain="qysc";	
	}
	$db=MYSql::getdb();
	$pos=$db->get_one('select * from `wm_ads_pos` where `id`='.$id);
	if(!empty($pos)){
		$sql='select * from `wm_ads` where `domain`="'.$now_domain.'" and `pos`='.$id.'  order by `sort` asc,`addtime` desc';//`domain`="'.$now_domain.'"
		$limit=min(max(1,intval($limit)),20);
		$sql.=' limit '.$limit;
		$ads=$db->getAll($sql);
	}else{
		$ads=array();
	}
	return array('ads'=>$ads,'pos'=>$pos);
}

function getads($id,$limit=0) {
	if(empty($now_domain)){
		$now_domain="qysc";	
	}
	$db=MYSql::getdb();
	$pos=$db->get_one('select * from `web_ad_pos` where `id`='.$id);
	if(!empty($pos)){
		$sql='select * from `web_ads` where `posid`='.$id.' and status=1  order by `addtime` desc';
		$limit=min(max(1,intval($limit)),20);
		$sql.=' limit '.$limit;
		$ads=$db->getAll($sql);
	}else{
		$ads=array();
	}
	return $ads;
	//return array('ads'=>$ads,'pos'=>$pos);
}

function displayAd($arr,$pos=array()){
	$html='';
	if(!empty($arr)){
		$url='/url/'.$arr['id'].'.html';
		switch($arr['type']) {
			case 'img':
				$html.='<a href="'.$url.'" title="'.$arr['name'].'" target="_blank"><img src="'.$arr['text'].'" alt="'.$arr['name'].'" /></a>';
				break;
			case 'txt':
				$html.='<a href="'.$url.'" title="'.$arr['name'].'" target="_blank">'.$arr['name'].'</a>';
				break;
			case 'swf':
				$html.='<embed wmode="transparent" src="'.$arr['text'].'" width='.$pos['width'].'" height="'.$pos['height'].'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>';
				break;
		}
	}
	return $html;
}
function getIcons($n)
{
    global $db;
    $icon = $db->findOne('select `icon` from `web_data`.`web_jizan_menu_item` where `id`='.$n);
    echo $icon;
}

function getPriceSql($a,$b){
	$a=max($a,0);
	$b=max($b,0);
	if($a<$b){
		$sql=$a==0?'`price`<='.$b:'`price`>='.$a.' and `price`<='.$b;
	}elseif($a>0){
		$sql='`price`>='.$a;
	}else{
		$sql='';
	}
	return $sql;
}

function getFullArea($area,$id,$pix=','){
	if(isset($area[$id])){
		$p_arr=explode(',',$area[$id]['arrparentid']);
		$arr_top=array_shift($p_arr);
		if($arr_top&&$arr_top!=$id){
			$arr=array($area[$arr_top]['name']);
			$arr[]=$area[$id]['name'];
			return implode($pix,$arr);
		}else{
			return $area[$id]['name'];
		}
	}else{
		return '';
	}
}
function getFullAddress($area,$id,$pix=','){
	if(isset($area[$id]) && (intval($id) > 0)){
		$p_arr=explode(',',$area[$id]['arrparentid']);
		if($p_arr){
			$p_arrs=array();
			foreach($p_arr as $k=>$v) {
				if(isset($area[$v])){
					$p_arrs[$v]=$area[$v]['name'];
				}
			}
			if(!isset($p_arrs[$id])){
				$p_arrs[]=$area[$id]['name'];
			}
			return implode($pix,$p_arrs);
		}else{
			return $area[$id]['name'];
		}
	}else{
		return $id;
	}
}
function sumfee($w,$level){
	$fee=0;
	if($w>0){
		$fee=$level['fee'];
		$level['fw']=floatval($level['fw']);
		if($w>$level['fw']){
			$ew_all=($w-$level['fw']);
			$ew_num=ceil($ew_all/$level['ew']);
			$fee+=$ew_num*$level['efee'];
		}
	}
	return round($fee ,2);
}
function cate_html($cate_tree,$id,$float){
	$html='
		<div class="pc_title">
			<h2><i>'.$float.'F</i><b>'.$cate_tree[$id]['cname'].'</b><a href="/list___'.$id.'__1" target="_blank" title="点击查看更多产品">更多产品</a></h2>
			<ul>';
	$i=1;foreach($cate_tree[$id]['child'] as $k=>$v) {
		if($i>7){
			break;
		}
		$html.='<li'.($i==1?' class="hover"':'').'><a href="/list___'.$k.'__1" target="_blank" title="'.$v['cname'].'" rel="'.$v['id'].'">'.$v['cname'].'</a></li>';
		$i++;
	}
	$html.='</ul></div>';
	return $html;
}
function cate_htmll($cate_tree,$id,$float){
	$html='
		
			<h3><i>'.$float.'F</i>'.$cate_tree[$id]['cname'].' <span >wedding vell</span></h3>
				<a href="/list___'.$id.'__1" target="_blank" title="点击查看更多产品">更多 》</a>
			';
	

	return $html;
}

function c_tree($arr,$parent_id){
	$tree = array();
	foreach ($arr as $offset => $row){
		$pid = $row[$parent_id];
		if (!isset($arr[$pid])){
			$tree[$offset] =&$arr[$offset];
			continue;
		}else{
			$parent =&$arr[$pid];
			$parent['child'][$offset] =&$arr[$offset];
		}
	}
	return $tree;
}

function uidstr($uid=0){
	$uid_str = abs(intval($uid));
	$file_str = sprintf("%09d", $uid_str);
	$dir1 = substr($file_str, 0, 3);
	$dir2 = substr($file_str, 3, 3);
	$dir3 = substr($file_str, 6, 3);
	return $dir1.'/'.$dir2.'/'.$dir3;
}

function getfirstchar($s0){   
	$fchar = ord($s0{0});
	if($fchar >= ord("A") and $fchar <= ord("z") )return strtoupper($s0{0});
	$s1 = iconv("UTF-8","gb2312", $s0);
	$s2 = iconv("gb2312","UTF-8", $s1);
	if($s2 == $s0){$s = $s1;}else{$s = $s0;}
	$asc = ord($s{0}) * 256 + ord($s{1}) - 65536;
	if($asc >= -20319 and $asc <= -20284) return "A";
	if($asc >= -20283 and $asc <= -19776) return "B";
	if($asc >= -19775 and $asc <= -19219) return "C";
	if($asc >= -19218 and $asc <= -18711) return "D";
	if($asc >= -18710 and $asc <= -18527) return "E";
	if($asc >= -18526 and $asc <= -18240) return "F";
	if($asc >= -18239 and $asc <= -17923) return "G";
	if($asc >= -17922 and $asc <= -17418) return "I";
	if($asc >= -17417 and $asc <= -16475) return "J";
	if($asc >= -16474 and $asc <= -16213) return "K";
	if($asc >= -16212 and $asc <= -15641) return "L";
	if($asc >= -15640 and $asc <= -15166) return "M";
	if($asc >= -15165 and $asc <= -14923) return "N";
	if($asc >= -14922 and $asc <= -14915) return "O";
	if($asc >= -14914 and $asc <= -14631) return "P";
	if($asc >= -14630 and $asc <= -14150) return "Q";
	if($asc >= -14149 and $asc <= -14091) return "R";
	if($asc >= -14090 and $asc <= -13319) return "S";
	if($asc >= -13318 and $asc <= -12839) return "T";
	if($asc >= -12838 and $asc <= -12557) return "W";
	if($asc >= -12556 and $asc <= -11848) return "X";
	if($asc >= -11847 and $asc <= -11056) return "Y";
	if($asc >= -11055 and $asc <= -10247) return "Z";
	return null;
}

function pinyin_H($zh){
	$ret = "";
	$s1 = iconv("UTF-8","gb2312", $zh);
	$s2 = iconv("gb2312","UTF-8", $s1);
	if($s2 == $zh){$zh = $s1;}
	for($i = 0; $i < strlen($zh); $i++){
		$s1 = substr($zh,$i,1);
		$p = ord($s1);
		if($p > 160){
			$s2 = substr($zh,$i++,2);
			$ret .= getfirstchar($s2);
		}else{
			$ret .= $s1;
		}
	}
	return $ret;
}

function get_note_card($page,$id,$offset=5,$sts=99,$pt='pages_m'){
	$page=max(1,$page);
	$start=$offset*($page-1);
	$db=MYSql::getdb();
	$sta_sql=$sts==99?' and `status`=99 ':'';
	$note_data=$db->getAll("select * from `web_card_qa` where `wxid`={$id} and `pid`=0 {$sta_sql} order by `updatetime` desc,`id` desc limit {$start},{$offset}",'id');
	$note_num=$db->get_one("select count(*) as num from `web_card_qa` where `wxid`={$id} and `pid`=0 {$sta_sql}");
	$note_page_str=$pt($note_num['num'], $page, $offset);
	return array('data'=>$note_data,'page_str'=>$note_page_str);
}

function get_note($page,$id,$offset=5,$sts=99,$pt='pages_m'){
	$page=max(1,$page);
	$start=$offset*($page-1);
	$db=MYSql::getdb();
	$sta_sql=$sts==99?' and `status`=99 ':'';
	$note_data=$db->getAll("select * from `web_mod_qa` where `siteuid`=".USERID." and `dataid`={$id} and `pid`=0 {$sta_sql} order by `updatetime` desc,`id` desc limit {$start},{$offset}");
	$note_num=$db->get_one("select count(*) as num from `web_mod_qa` where `siteuid`=".USERID." and `dataid`={$id} and `pid`=0 {$sta_sql}");
	$note_page_str=$pt($note_num['num'], $page, $offset);
	return array('data'=>$note_data,'page_str'=>$note_page_str);
}

function checkmobile() {
	static $mobilebrowser_list =array('iphone', 'android', 'phone', 'mobile', 'wap', 'netfront', 'java', 'opera mobi', 'opera mini',
				'ucweb', 'windows ce', 'symbian', 'series', 'webos', 'sony', 'blackberry', 'dopod', 'nokia', 'samsung','lenovo',
				'palmsource', 'xda', 'pieplus', 'meizu', 'midp', 'cldc', 'motorola', 'foma', 'docomo', 'up.browser',
				'up.link', 'blazer', 'helio', 'hosin', 'huawei', 'novarra', 'coolpad', 'webos', 'techfaith', 'palmsource',
				'alcatel', 'amoi', 'ktouch', 'nexian', 'ericsson', 'philips', 'sagem', 'wellcom', 'bunjalloo', 'maui', 'smartphone',
				'iemobile', 'spice', 'bird', 'zte-', 'longcos', 'pantech', 'gionee', 'portalmmm', 'jig browser', 'hiptop',
				'benq', 'haier', '^lct', '320x320', '240x320', '176x220');
	$pad_list = array('pad', 'gt-p1000');
	$useragent = strtolower(isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'');
	//$useragent=str_ireplace('coolpad','',$useragent);
	if(dstrpos($useragent, $pad_list)) {
		return true;
	}
	if(dstrpos($useragent, $mobilebrowser_list)) {
		return true;
	}
	return false;
}

function dstrpos($string, &$arr, $returnvalue = false) {
	if(empty($string)) return false;
	foreach((array)$arr as $v) {
		if(strpos($string, $v) !== false) {
			$return = $returnvalue ? $v : true;
			return $return;
		}
	}
	return false;
}

function T($m,$c,$u=0){
	return PHPCMS_ROOT.APP_DIR.'/util/tpls/'.$m.'/'.$c.'.tpl.php';
	//return template::load ( $m, $c,$u);
}

function M($m,$c){
	return PHPCMS_ROOT.APP_DIR.'/util/mod/'.$m.'/'.$c.'.inc.php';
}

function ip(){
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')){
		$ip = getenv('HTTP_CLIENT_IP');
	}elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')){
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')){
		$ip = getenv('REMOTE_ADDR');
	}elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')){
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : 'unknown';
}

function fetchCols($array,$key,$split=''){
    $r = array();
    foreach($array as $val){
        $r[]=$val[$key];
    }
    return empty($split)?$r:implode($split, $r);
}

function new_stripslashes($string){
	if(!is_array($string)) return stripslashes($string);
	foreach($string as $key => $val) $string[$key] = new_stripslashes($val);
	return $string;
}
function new_addslashes($string){
	if(!is_array($string)) {
		return addslashes(preg_replace("/eval/i","eva l",$string));
	}
	foreach($string as $key => $val) $string[$key] = new_addslashes($val);
	return $string;
}

//建站抽奖概率函数
function get_rand($proArr){ 
	$result = ''; 
	$proSum = array_sum($proArr);
	foreach ($proArr as $key => $proCur) { 
		$randNum = mt_rand(1, $proSum); 
		if ($randNum <= $proCur) { 
			$result = $key; 
			break; 
		} else { 
			$proSum -= $proCur; 
		} 
	} 
	unset ($proArr); 
	return $result; 
}

function str_cut($string, $length, $dot = ''){
	$strlen = strlen($string);
	if($strlen <= $length) return $string;
	$string = str_replace(array('&nbsp;', '&amp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;'), array(' ', '&', '"', "'", '“', '”', '—', '<', '>', '·', '…'), $string);
	$strcut = '';
	if(strtolower(CHARSET) == 'utf-8'){
		$n = $tn = $noc = 0;
		while($n < $strlen)
		{
			$t = ord($string[$n]);
			if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
				$tn = 1; $n++; $noc++;
			} elseif(194 <= $t && $t <= 223) {
				$tn = 2; $n += 2; $noc += 2;
			} elseif(224 <= $t && $t < 239) {
				$tn = 3; $n += 3; $noc += 2;
			} elseif(240 <= $t && $t <= 247) {
				$tn = 4; $n += 4; $noc += 2;
			} elseif(248 <= $t && $t <= 251) {
				$tn = 5; $n += 5; $noc += 2;
			} elseif($t == 252 || $t == 253) {
				$tn = 6; $n += 6; $noc += 2;
			} else {
				$n++;
			}
			if($noc >= $length) break;
		}
		if($noc > $length) $n -= $tn;
		$strcut = substr($string, 0, $n);
	}else{
		$dotlen = strlen($dot);
		$maxi = $length - $dotlen - 1;
		for($i = 0; $i < $maxi; $i++)
		{
			$strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
		}
	}
	$strcut = str_replace(array('&', '"', "'", '<', '>'), array('&amp;', '&quot;', '&#039;', '&lt;', '&gt;'), $strcut);
	return $strcut.$dot;
}

function filter_xss($string,$allowedtags=''){
    if(is_array($string)){
        foreach($string as $key => $val) $string[$key] = filter_xss($val, $allowedtags);
    }else{
        $string = strip_tags($string, $allowedtags);
        $string = RXSS($string);
    }
    return $string;
}

function RXSS($val) { 
   $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);  
   $search = 'abcdefghijklmnopqrstuvwxyz'; 
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
   $search .= '1234567890!@#$%^&*()'; 
   $search .= '~`";:?+/={}[]-_|\'\\'; 
   for ($i = 0; $i < strlen($search); $i++) { 
      $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val);
      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val);
   } 
   $ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'script', 'object','frameset', 'ilayer', 'bgsound', 'title', 'base'); //, 'embed', 'layer'
   $ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'); 
   $ra = array_merge($ra1, $ra2); 
    
   $found = true;
   while ($found == true) { 
      $val_before = $val; 
      for ($i = 0; $i < sizeof($ra); $i++) { 
         $pattern = '/'; 
         for ($j = 0; $j < strlen($ra[$i]); $j++) { 
            if ($j > 0) { 
               $pattern .= '('; 
               $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?'; 
               $pattern .= '|(&#0{0,8}([9][10][13]);?)?'; 
               $pattern .= ')?'; 
            } 
            $pattern .= $ra[$i][$j]; 
         } 
         $pattern .= '/i'; 
         $replacement = substr($ra[$i], 0, 2).' '.substr($ra[$i], 2);
         $val = preg_replace($pattern, $replacement, $val);
         if ($val_before == $val) { 
            $found = false; 
         } 
      } 
   } 
   return $val;
}

function show_mb_msg($msg, $url_forward = 'goback', $ms = 1250, $direct = 0){
	$url_forward = preg_replace('/&keyword=([^&]+)/','', $url_forward);
	if($url_forward && $url_forward != 'goback' && $url_forward != 'close'){
		$url_forward = url($url_forward, 1);
	}

	if($direct && $url_forward && $url_forward!='goback'){
		ob_clean();
		header("location:$url_forward");
		exit("<script>self.location='$url_forward';</script>");
	}
	include T('func','show_m_msg');
	exit;
}

function url($url, $isabs = 0)
{
	if(strpos($url, '://') !== FALSE || $url[0] == '?') return $url;
	if($isabs)// || defined('SHOWJS')
	{
		$url = strpos($url, PHPCMS_PATH) === 0 ? SITE_URL.substr($url, strlen(PHPCMS_PATH)) : SITE_URL.$url;
	}
	else
	{
		$url = strpos($url, PHPCMS_PATH) === 0 ? $url : PHPCMS_PATH.$url;
	}
	return $url;
}

/**
 * 安全获取refer
 */
function getRefer()
{   
    if(empty($_SERVER['HTTP_REFERER'])){
        return '/';
    }
    return urlSafe($_SERVER['HTTP_REFERER']);
}

/**
 * URL安全过略
 */
function urlSafe($string)
{
    $string = preg_replace('/[^0-9a-z:\/\.\-_%\?&#=\+]/i','',$string);
    $string = str_replace('%00','',$string);
	$string = str_replace('%20','',$string);
	$string = str_replace('%27','',$string);
	$string = str_replace('%2527','',$string);
    $string = preg_replace('/\.{2,}/','', $string);
    $string = preg_replace('/\/{3,}/','/', $string);
    return $string;
}

/**
 * 获取当前请求地址
 *
 * @return 当前请求地址

function getCurrentUrl()
{
    static $rcurl;
    $curl = '';
    if(empty($curl)){
        $scriptName = basename($_SERVER['SCRIPT_FILENAME']);
        if(basename($_SERVER['SCRIPT_NAME']) === $scriptName) {
            $curl = $_SERVER['SCRIPT_NAME'];
        } else if(basename($_SERVER['PHP_SELF']) === $scriptName) {
            $curl = $_SERVER['PHP_SELF'];
        } else if(isset($_SERVER['ORIG_SCRIPT_NAME']) && basename($_SERVER['ORIG_SCRIPT_NAME']) === $scriptName) {
            $curl = $_SERVER['ORIG_SCRIPT_NAME'];
        } else if(($pos = strpos($_SERVER['PHP_SELF'],'/'.$scriptName)) !== false) {
            $curl = substr($_SERVER['SCRIPT_NAME'],0,$pos).'/'.$scriptName;
        } else if(isset($_SERVER['DOCUMENT_ROOT']) && strpos($_SERVER['SCRIPT_FILENAME'],$_SERVER['DOCUMENT_ROOT']) === 0) {
            $curl = str_replace('\\','/',str_replace($_SERVER['DOCUMENT_ROOT'],'',$_SERVER['SCRIPT_FILENAME']));
            $curl[0] != '/' && $curl = '/'.$curl;
        } else {
            die('request_tainting');
        }
        $rcurl = urlSafe($curl);
        unset($curl, $scriptName);
    }
    return $rcurl;
}
 */

function http_get($url){
	$oCurl = curl_init();
	if(stripos($url,"https://")!==FALSE){
		curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
	}
	curl_setopt($oCurl, CURLOPT_URL, $url);
	curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
	$sContent = curl_exec($oCurl);
	$aStatus = curl_getinfo($oCurl);
	curl_close($oCurl);
	if(intval($aStatus["http_code"])==200){
		return $sContent;
	}else{
		return false;
	}
}

function showmessage($msg, $url_forward = 'goback', $ms = 1250, $direct = 0){
	$url_forward = preg_replace('/&keyword=([^&]+)/','', $url_forward);
	if($url_forward && $url_forward != 'goback' && $url_forward != 'close'){
		$url_forward = url($url_forward, 1);
	}

	if($direct && $url_forward && $url_forward!='goback'){
		ob_clean();
		header("location:$url_forward");
		exit("<script>self.location='$url_forward';</script>");
	}

	include T('func','showmessage');
	exit;
}

function sta_404($type=0){
	$sta_404=array(
		0=>'404',
		1=>'m_404',
	);
	include T('func',$sta_404[$type]);
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}

function isPost()
{
    if( ($_SERVER['REQUEST_METHOD'] == 'POST') && 
        empty($_SERVER['HTTP_X_FLASH_VERSION']) && 
        ( empty($_SERVER['HTTP_REFERER']) ||
          preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST']) 
        )
    ) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function header_302($url,$msg='页面跳转中...'){
	include T('func','header_302');
	exit;
}

function dirFixPath($path){
	$path = str_replace('\\', '/', $path);
	if(substr($path, -1) != '/') $path = $path.'/';
	return $path;
}

function createDir($path, $mode = 0777){
	if(is_dir($path)) return TRUE;
	$path = dirFixPath($path);
	$temp = explode('/', $path);
	$cur_dir = '';
	$max = count($temp) - 1;
	for($i=0; $i<$max; $i++)
	{
		$cur_dir .= $temp[$i].'/';
		if(is_dir($cur_dir)) continue;
		@mkdir($cur_dir, 0777);
		@chmod($cur_dir, 0777);
	}
	return is_dir($path);
}

function pageurl($urlrule, $page, $array = array())
{
	@extract($array, EXTR_SKIP);
	if(strpos($urlrule, '|'))
	{
		$urlrules = explode('|', $urlrule);
		$urlrule = $page < 2 ? $urlrules[0] : $urlrules[1];
	}
	eval("\$url = \"$urlrule\";");
	return $url;
}

function url_par($par, $url = '')
{
	if($url == '') $url = URL;
	$pos = strpos($url, '?');
	if($pos === false)
	{
		$url .= '?'.$par;
	}
	else
	{
		$querystring = substr(strstr($url, '?'), 1);
		parse_str($par, $pars);
		foreach($pars as $k=>$v)
		{
			$querystring = _url_par($k, $v, $querystring);
		}
		$url = substr($url, 0, $pos).'?'.$querystring;
	}
	return $url;
}

function _url_par($var, $value, $querystring)
{
	if($querystring)
	{
		$pattern = "/([&]?)(".preg_quote($var)."\=)([^&]+)([&]?)/";
		$querystring = preg_match($pattern, $querystring) ? preg_replace($pattern, '${1}${2}'.$value.'${4}', $querystring) : $querystring."&$var=$value";
	}
	else
	{
		$querystring = $var.'='.$value;
	}
	return $querystring;
}

function pages_y($num, $curr_page, $perpage = 20, $urlrule = '', $array = array()) {
	$multipage = '';
	//当总条数大于单页显示的最大条数时
	if($num > $perpage){
		$page = 5;
		$offset = 2;//前后的跨度
		$pages = ceil($num / $perpage);//分页总页数
		$from = $curr_page - $offset;//跨度起始位置
		$to = $curr_page + $offset;//跨度结束位置
		if($page >= $pages){
			//当总页数少于5页时
			$from = 1;
			$to = $pages;
		}else{
			//当总页数大于5页时
			if($from < 1){
				$to = $page;
				$from = 1;
			}
			if($to >=$pages){
				$from = $pages-($page-1);
				$to = $pages;
			}
		}
		if($urlrule == '') $urlrule = url_par('page={$page}');
		if($curr_page>0){
			$pre_page=$curr_page>1 ? ($curr_page-1):1;
			$multipage .= '<a rel="'.$pre_page.'" href="'.pageurl($urlrule,$pre_page, $array).'">上一页</a>';
		}
		for($i = $from; $i <= $to; $i++) {
			if($i != $curr_page){
				$multipage .= '<a rel="'.$i.'" href="'.pageurl($urlrule, $i, $array).'">'.$i.'</a> ';
			}else{
				$multipage .= '<b class="current">'.$i.'</b>';
			}
		}
		if($curr_page<$pages){
			$multipage .= '<a rel="'.($curr_page+1).'" href="'.pageurl($urlrule, $curr_page+1, $array).'">下一页</a>';
		}elseif($curr_page==$pages){
			$multipage .= '<a rel="'.$curr_page.'">下一页</a>';
		}
	}
	return $multipage;
}

function pages_z($num, $curr_page, $perpage = 20, $urlrule = '', $array = array()) {
	$multipage = '';
	//当总条数大于单页显示的最大条数时
	if($num > $perpage){
		$page = 5;
		$offset = 2;//前后的跨度
		$pages = ceil($num / $perpage);//分页总页数
		$from = $curr_page - $offset;//跨度起始位置
		$to = $curr_page + $offset;//跨度结束位置
		if($page >= $pages){
			//当总页数少于5页时
			$from = 1;
			$to = $pages;
		}else{
			//当总页数大于5页时
			if($from < 1){
				$to = $page;
				$from = 1;
			}
			if($to >=$pages){
				$from = $pages-($page-1);
				$to = $pages;
			}
		}
		if($urlrule == '') $urlrule = url_par('page={$page}');
		if($curr_page>0){
			$pre_page=$curr_page>1 ? ($curr_page-1):1;
			$multipage .= '<a href="'.pageurl($urlrule,$pre_page, $array).'">上一页</a>';
		}
		for($i = $from; $i <= $to; $i++) {
			if($i != $curr_page){
				$multipage .= '<a href="'.pageurl($urlrule, $i, $array).'">'.$i.'</a> ';
			}else{
				$multipage .= '<b class="current">'.$i.'</b>';
			}
		}
		if($curr_page<$pages){
			$multipage .= '<a href="'.pageurl($urlrule, $curr_page+1, $array).'">下一页</a>';
		}elseif($curr_page==$pages){
			$multipage .= '<a>下一页</a>';
		}
	}
    $urlpre = pageurl($urlrule, '', $array);
	$page=$curr_page;
	$url ='共<b>'.$pages.'</b>页</td><td>到第<input type="text" value="'.$page.'" name="page" id="page" size="2" onKeyDown="if(event.keyCode==13) {redirect(\''.$urlpre.'\'+this.value); return false;}">页</td><td><input type="button" value="确定" class="gotopage" onclick="redirect(\''.$urlpre.'\'+$(\'#page\').val())">';
	return $multipage?'<table><tr><td valign="center">'.$multipage.'</td><td valign="center">'.$url.'</td></tr></table>':'';
}

function pages_m($num, $curr_page, $perpage = 20, $urlrule = '', $array = array()) {
	$multipage = '';
	//当总条数大于单页显示的最大条数时
	if($num > $perpage){
		$page = 5;
		$offset = 2;//前后的跨度
		$pages = ceil($num / $perpage);//分页总页数
		if($urlrule == '') $urlrule = url_par('page={$page}');
		$multipage .=$curr_page>1?'<a href="'.pageurl($urlrule,$curr_page-1, $array).'" class="left_page_style">上一页</a>':'<a class="disabled left_page_style">上一页</a>';
		$multipage .='<strong>'.$curr_page.'/'.$pages.'</strong>';
		$multipage .=$curr_page<$pages?'<a href="'.pageurl($urlrule,$curr_page+1, $array).'" class="right_page_style">下一页</a>':'<a class="disabled right_page_style">下一页</a>';
	}else{
		$multipage='<a class="disabled left_page_style">上一页</a><strong>1/1</strong><a class="disabled right_page_style">下一页</a>';
	}
	return $multipage;
}

function pages_mz($num, $curr_page, $perpage = 20, $urlrule = '', $array = array()) {
	$multipage = '';
	//当总条数大于单页显示的最大条数时
	if($num > $perpage){
		$page = 5;
		$offset = 2;//前后的跨度
		$pages = ceil($num / $perpage);//分页总页数
		if($urlrule == '') $urlrule = url_par('page={$page}');
		$multipage .='<span class="txt"><span class="n">'.$curr_page.'</span>/'.$pages.'</span>';
		$multipage .=$curr_page>1?'<a href="'.pageurl($urlrule,$curr_page-1, $array).'" class="prev" title="上一页"> </a>':'<span class="prev"></span>';
		$multipage .=$curr_page<$pages?'<a href="'.pageurl($urlrule,$curr_page+1, $array).'" class="next" title="下一页"> &gt; </a>':'<span class="next"></span>';
	}else{
		$multipage='<span class="txt"><span class="n">1</span>/1</span><span class="prev"></span><span class="next"></span>';
	}
	return $multipage;
}
/*
*文件等比例存储程序
*/
function reStore($src,$thumbWidth,$thumbHeight,$newfile=''){ 
    $info				=	getimagesize($src);
    if(!$info){
        return false;
    }
    $srcWidth		=	intval($info[0]);
    $srcHeight		=	intval($info[1]);
    $srcType			=	intval($info[2]);
    $ext					=	image_type_to_extension($srcType,false);
    $func				=	str_replace('jpg','jpeg',$ext);
    $srcRate			=	$srcWidth / $srcHeight;
    $thumbRate		=	$thumbWidth / $thumbHeight;
	$thumb_file		=	$newfile?$newfile:$src;

    $thumbX = $thumbY = $srcX = $srcY = 0;

	if($srcWidth>$thumbWidth||$srcHeight>$thumbHeight){
		if($srcRate>$thumbRate){//1000%160
			$iwidth =$thumbWidth;
			$iheight =$thumbWidth/$srcRate;
		}else{
			$iheight =$thumbHeight;
			$iwidth =$thumbHeight*$srcRate;
		}
	}else{
		$iwidth = $srcWidth;
		$iheight = $srcHeight;
	}

	$func_create	=	'imagecreatefrom'.$func;
	$func_save		=	'image'.$func;
    $src					=	$func_create( $src );
	if($ext=='png'){//上传透明logo
		imagesavealpha($src,true);
		$thumb = imagecreatetruecolor($iwidth, $iheight);
		imagealphablending($thumb,false);
		imagesavealpha($thumb,true);
	}else{
		$thumb				=	imagecreatetruecolor( $iwidth, $iheight );
	}
	imagecopyresampled ($thumb, $src, 0, 0, 0, 0, $iwidth, $iheight, $srcWidth, $srcHeight);
    imagedestroy( $src );
	if($func=='jpeg'){
		$func_save( $thumb, $thumb_file, 90);
	}else{
		$func_save( $thumb, $thumb_file);
	}
    imagedestroy( $thumb );
}

function getThumb($src,$thumbWidth,$thumbHeight,$newfile='',$cutpos=2){   
    $info				=	getimagesize($src);
    if(!$info){
        return false;
    }
    $srcWidth		=	intval($info[0]);
    $srcHeight		=	intval($info[1]);
    $srcType			=	intval($info[2]);
    $ext					=	image_type_to_extension($srcType,false);
    $func				=	str_replace('jpg','jpeg',$ext);
    $srcRate			=	$srcWidth / $srcHeight;
    $thumbRate		=	$thumbWidth / $thumbHeight;
	$thumb_file		=	$newfile?$newfile:$src;

    $thumbX = $thumbY = $srcX = $srcY = 0;

    if ( $srcRate > $thumbRate ) {
        $a					=	$srcHeight*$thumbRate;
        $b				=	$srcHeight;
    } else {
        $a					=	$srcWidth;
        $b				=	$srcWidth/$thumbRate;
    }

    if( $cutpos == 1 ){
        $srcX			=	$srcY	=	0;
    }elseif($cutpos==2){
        $srcX			=	round(($srcWidth-$a)/2);
        $srcY			=	round(($srcHeight-$b)/2);
    }elseif($cutpos==3){
        $srcX			=	round($srcWidth-$a);
        $srcY			=	round($srcHeight-$b);
    }

    $srcWidth		=	round($a);
    $srcHeight		=	round($b);

	$func_create	=	'imagecreatefrom'.$func;
	$func_save		=	'image'.$func;
    $src					=	$func_create( $src );
	if($ext=='png'){//上传透明logo
		imagesavealpha($src,true);
		$thumb = imagecreatetruecolor($thumbWidth, $thumbHeight);
		imagealphablending($thumb,false);
		imagesavealpha($thumb,true);
	}else{
		$thumb				=	imagecreatetruecolor( $thumbWidth, $thumbHeight );
	}
	imagecopyresampled ( $thumb, $src, $thumbX, $thumbY, $srcX, $srcY, $thumbWidth, $thumbHeight, $srcWidth , $srcHeight);
    imagedestroy( $src );
	if($func=='jpeg'){
		$func_save( $thumb, $thumb_file);
	}else{
		$func_save( $thumb, $thumb_file);
	}
    imagedestroy( $thumb );
}

function get($sql, $rows = 0, $page = 0, $dbname = '', $dbsource = '', $urlrule = '', $distinct_field = '', $catid = 0,$style='pages_z')
{
	$db=MySQL::getdb();
	if(!$sql) return false;
	
	$rows = intval($rows);
	if(!isset($page)) $page = 1;
	$page = max(intval($page), 0);
	$pages = $limit = '';
	if($page)
	{
		$offset = $rows*($page-1);
		$limit = " LIMIT $offset, $rows";
		if($dbname || $dbsource)
		{
			$r = $db->get_one("SELECT COUNT(*) AS `count` ".stristr($sql, 'from'));
			$total = $r['count'];
		}
		elseif($distinct_field)
		{
			$total = $db->get_one("SELECT COUNT(distinct $distinct_field) AS `count` ".stristr($sql, 'from'));
            $total = intval($total['count']);
		}
		else
		{
			$total = $db->get_one("SELECT COUNT(*) AS `count` ".stristr($sql, 'from'));
            $total = intval($total['count']);
		}
		
		$pages = $style($total, $page, $rows, $urlrule, '', $catid);
	}
	elseif($rows > 0)
	{
		$limit = " LIMIT $rows";
	}
	$data = $rows == -1 ? $db->get_one($sql) : $db->getAll($sql.$limit);

	if($page)
	{
		$count = count($data);
		if(!isset($total)) $total = $count;
		return array('data'=>$data, 'total'=>$total, 'count'=>count($data), 'pages'=>$pages);
	}
	else
	{
		return $data;
	}
}
function location($url){
    echo '<script>window.location.href="'.$url.'";</script>';
    exit;
}
function fc($mydata,$limit=8,$ignore =false, $showa =false, $stats =false, $duality =false,$multi = 0,$xattr = 'n,nz') {
		$cws = scws_new();
		$cws->set_charset('utf8');
		$cws->set_dict(ini_get('scws.default.fpath') . '/dict.utf8.xdb');	
		$cws->set_rule(ini_get('scws.default.fpath') . '/rules.utf8.ini');
		$cws->set_duality($duality);
		$cws->set_ignore($ignore);
		$cws->set_multi($multi);
		$cws->send_text($mydata);
		$list = $cws->get_result();
		//$list = $cws->get_tops($limit, $xattr);
		return $list;
}
function toTree($arr, $key_node_id, $key_parent_id = 'parent_id',
                       $key_children = 'nodes', & $refs = null) {
    $refs = array();
    foreach ($arr as $offset => $row) {
        $refs[$row[$key_node_id]] =& $arr[$offset];
    }
    $tree = array();
    foreach ($arr as $offset => $row) {
        $parent_id = $row[$key_parent_id];
        if ($parent_id) {
            if (!isset($refs[$parent_id])) {
                $tree[] =& $arr[$offset];
                continue;
            }
            
            $parent =& $refs[$parent_id];
            $parent[$key_children][] =& $arr[$offset];
            
        } else {
            $tree[] =& $arr[$offset];
        }
    }

    return $tree;
}
class Auth{
    public static function encode($string,$key='',$expiry=0){return self::mcode($string, 'ENCODE', $key, $expiry);}
    public static function decode($string,$key='',$expiry=0){ return self::mcode($string, 'DECODE', $key, $expiry);}
    private static function mcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
        $ckey_length = 4;$key = md5($key ? $key : AUTH_KEY);$keya = md5(substr($key, 0, 16));$keyb = md5(substr($key, 16, 16));
        $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
        $cryptkey = $keya.md5($keya.$keyc); $key_length = strlen($cryptkey);
        $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
        $string_length = strlen($string);$result = '';$box = range(0, 255);$rndkey = array();
        for($i = 0; $i <= 255; $i++) { $rndkey[$i] = ord($cryptkey[$i % $key_length]); }
        for($j = $i = 0; $i < 256; $i++) {$j = ($j + $box[$i] + $rndkey[$i]) % 256;$tmp = $box[$i]; $box[$i] = $box[$j];$box[$j] = $tmp;}
        for($a = $j = $i = 0; $i < $string_length; $i++) { $a = ($a + 1) % 256; $j = ($j + $box[$a]) % 256;$tmp = $box[$a];$box[$a] = $box[$j];$box[$j] = $tmp; $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256])); }
        if($operation == 'DECODE') {
            if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {return substr($result, 26);} else {return '';}
        } else { return $keyc.str_replace('=', '', base64_encode($result)); }
    }
}
class Cookie{
    static function is_set($name) { return isset($_COOKIE[COOKIE_PRE.$name]);}
    static function get($name) { $value = isset($_COOKIE[COOKIE_PRE.$name]) ? $_COOKIE[COOKIE_PRE.$name] : ''; $value =  unserialize(base64_decode($value)); return $value;}
    static function set($name,$value,$expire='',$path='',$domain='') {
        if($expire=='') { $expire =  COOKIE_TTL;}
        if(empty($path)) { $path = COOKIE_PATH; }
        if(empty($domain)) { $domain = COOKIE_DOMAIN; }
        $expire = !empty($expire)? time()+$expire :  0;
        $value  = base64_encode(serialize($value));
        setcookie(COOKIE_PRE.$name, $value,$expire,$path,$domain);
        $_COOKIE[COOKIE_PRE.$name] = $value;
    }
    static function delete($name) {  setcookie(COOKIE_PRE.$name,'',time()-8640000,COOKIE_PATH,COOKIE_DOMAIN); unset($_COOKIE[COOKIE_PRE.$name]); }
    static function clear() { unset($_COOKIE);}
}

function iauth($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	$ckey_length = 4;
	$key = md5($key != '' ? $key : 'aimosoft');
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);

	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);

	$result = '';
	$box = range(0, 255);

	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}

	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}

	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}

	if($operation == 'DECODE') {
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		return $keyc.str_replace('=', '', base64_encode($result));
	}

}


function my_mp3_url($url){
	$t=time();
	$code_org='music'.(date('YmdH',($t-28800)));
	$code_key=md5($code_org);
	$key=substr($code_key,0,7);
	$string=$key.'_'.$t;
	$code_str=Xxteaems::encode($string,$key);
	$code=str_replace(array('/','+'),array('_','!'),base64_encode($code_str));
	return str_replace('qy_mp3',$code,$url);// 'http://qyw116351.my3w.com/'.$code.'/'.$id.'.mp3';
}
function getIcon($n)
{
    global $db;
    $icon = $db->findOne('select `icon` from `web_menu_item` where `id`='.$n);
    echo $icon;
}
function getCount($n,$userid)
{
    global $db;
    $count=$db->findOne('select count(*) from `web_plugin_bbs` where `siteuserid`='.$userid.' and `cateid`='.$n);
    echo $count;
}
class Xxteaems {

    /**
     *
     * 加密字符串
     *
     * @access static
     *
     * @param string $str 字符串
     * @param string $key 加密key
     *
     * @return string
     */
    public static function encode($str, $key) {
        if ($str == "") {
            return "";
        }
        $v = self::str2long($str, true);
        $k = self::str2long($key, false);
        $n = count($v) - 1;

        $z = $v[$n];
        $y = $v[0];
        $delta = 0x9E3779B9;
        $q = floor(6 + 52 / ($n + 1));
        $sum = 0;
        while (0 < $q--) {
            $sum = self::int32($sum + $delta);
            $e = $sum >> 2 & 3;
            for ($p = 0; $p < $n; $p++) {
                $y = $v[$p + 1];
                $mx = self::int32((($z >> 5 & 0x07ffffff) ^ $y << 2) + (($y >> 3 & 0x1fffffff) ^ $z << 4)) ^ self::int32(($sum ^ $y) + ($k[$p & 3 ^ $e] ^ $z));
                $z = $v[$p] = self::int32($v[$p] + $mx);
            }
            $y = $v[0];
            $mx = self::int32((($z >> 5 & 0x07ffffff) ^ $y << 2) + (($y >> 3 & 0x1fffffff) ^ $z << 4)) ^ self::int32(($sum ^ $y) + ($k[$p & 3 ^ $e] ^ $z));
            $z = $v[$n] = self::int32($v[$n] + $mx);
        }
        return self::long2str($v, false);
    }

    /**
     *
     * 解密字符串
     *
     *
     * @access static
     *
     * @param string $str 字符串
     * @param string $key 加密key
     *
     * @return string
     */
    public static function long2str($v, $w) {
        $len = count($v);
        $s = array();
        for ($i = 0; $i < $len; $i++) {
            $s[$i] = pack("V", $v[$i]);
        }
        if ($w) {
            return substr(join('', $s), 0, $v[$len - 1]);
        }else{
            return join('', $s);
        }
    }

    public static function str2long($s, $w) {
        $v = unpack("V*", $s. str_repeat("\0", (4 - strlen($s) % 4) & 3));
        $v = array_values($v);
        if ($w) {
            $v[count($v)] = strlen($s);
        }
        return $v;
    }

    public static function int32($n) {
        while ($n >= 2147483648) $n -= 4294967296;
        while ($n <= -2147483649) $n += 4294967296;
        return (int)$n;
    }

}