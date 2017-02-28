<?php
//图片查看原图程序
$type_img=isset($_GET['tm'])?trim($_GET['tm']):'photo';
$picid=intval($picid);
$tab_arr=array(
	'photo'=>array('tab'=>'`web_shop_goods_photo`','rep'=>array()),
	'vote'=>array('tab'=>'`web_vote_item_thumbs`','rep'=>array('x_thumb','_thumb')),
	'tx'=>array('tab'=>'`web_zero_extra`','rep'=>array()),
);
if(!isset($tab_arr[$type_img])){
	$type_img='photo';
}
$tm=$type_img;
$img_info=$db->get_one("select * from {$tab_arr[$type_img]['tab']} where `id`={$picid}");

?>
<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>原图展示</title>
	<meta name="Author" content="Zero">
	<style type="text/css">
		/* CSS Document */
		body{margin:0;padding:0;font:12px Arial,Times New Roman,"\5B8B\4F53",san-serif}
		div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
		table,td,tr,th{font-size:12px}
		li{list-style-type:none}
		img{vertical-align:top;border:0}
		ol,ul{list-style:none}
		h1,h2,h3,h4,h5,h6{font-size:12px;font-weight:normal}
		address,cite,code,em,th{font-weight:normal;font-style:normal}
		a{text-decoration:none;}
		a:hover{text-decoration:underline;}
		/*base*/
		#img_org_area{width:700px;text-align:center;position:relative;min-height:210px;overflow:hidden;padding:1px;margin:0 auto;}
		#img_outer_line{display:inline-block;position:relative;max-width:100%;min-height:0;overflow:hidden;top:0;left:0}
		#img_org_area img#org_img_o{max-width:100%;overflow:hidden;}
		
	</style>
</head>
<body>
<div id="img_org_area">
	<div id="img_outer_line">
		<img src="<?=!empty($tab_arr[$type_img]['rep'])?str_replace($tab_arr[$type_img]['rep'],'',$img_info['thumb']):$img_info['thumb']?>" alt="查看原图" id="org_img_o"  />
	</div>
</div>
</body>
</html>