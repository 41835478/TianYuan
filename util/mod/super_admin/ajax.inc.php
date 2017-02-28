<?php
$id = intval($_POST['id']);
if($id>0){
    $cate=$db->get_One('select * from `web_cate` where id='.$id);
	if($cate['parent']==0){//第二级
		$cate_arr=$db->getAll('select * from `web_cate` where parent='.$id);
		if(empty($cate_arr)){//没有三级分类
			echo '1';
		}else{
			$op_arr='<select name="catid" lay-filter="sid" ><option value="" selected="selected">请选择分类</option>';
			foreach($cate_arr as $k=>$v) {
				$op_arr.='<option value="'.$v['id'].'">'.$v['name'].'</option>';
			}
			$op_arr.='</select>';
			echo $op_arr;
		}
	}else{//第三级
		$cate_arr=$db->getAll('select * from `web_cate` where parent='.$id);
		if(empty($cate_arr)){//没有三级分类
			echo '1';
		}else{
			$op_arr='<select name="catid"><option value="" selected="selected">请选择分类</option>';
			foreach($cate_arr as $k=>$v) {
				$op_arr.='<option value="'.$v['id'].'">'.$v['name'].'</option>';
			}
			$op_arr.='</select>';
			echo $op_arr;
			
		}
	}
}