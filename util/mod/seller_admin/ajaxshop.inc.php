<?php
$id = intval($_POST['id']);
$cate=$db->getAll('select * from `web_cate_shop` where parent='.$id);
$op_arr='<select name="shop_catid" lay-filter="shop_catid" ><option value="" selected="selected">请选择分类</option>';
foreach($cate as $k=>$v) {
	$op_arr.='<option value="'.$v['id'].'">'.$v['name'].'</option>';
}
$op_arr.='</select>';
echo $op_arr;
			
