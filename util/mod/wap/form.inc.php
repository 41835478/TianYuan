<?php
//微网站的首页相关
$id=isset($_REQUEST['id'])?intval($_REQUEST['id']):0;
define('NOBANNER',true);
$tjdata_forms=$db->get_one('select * from `web_data_main` where `id`='.$id);
if(!empty($tjdata_forms)&&($tjdata_forms['userid']==$userid)){
	$type=$tjdata_forms['type'];
	$color=$tjdata_forms['color'];
	$pos=$tjdata_forms['pos'];
	$all_tjdata_items=$db->getAll('select * from `web_data_rel` where `dataid`='.$id.' order by sort desc,`id` asc');
	$style=$pos==1?3:4;
	$foot_wx_js=true;
	$foot_wx_img='http://'.$sdomain.str_replace('_real','_200_200',$all_cates[$cid]['icon']);
	$banner_image_arr=false;
	$head['title']=$tjdata_forms['title'];
	$this_tj_dataid=0;
	include(PHPCMS_ROOT.APP_DIR.'/util/core/data.class.php');
	include T('wap','form/1');
}else{
	sta_404(1);
}