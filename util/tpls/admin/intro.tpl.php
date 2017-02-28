<?php include T('seller_admin','header');?>
<link rel="stylesheet" href="/static/css/jquery-ui.css" type="text/css" media="all" />
<script src="/static/js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>

<div id="bread" class="cont">
	<p><a href="/">首页</a> <i class="fa fa-angle-right" aria-hidden="true"></i><?=$c_title?></p>
</div>
<style type="text/css">
#intro_index .fllix select{padding:2px 5px;}
#intro_index .mr10{padding:0px 10px 0px 3px;}
#intro_index .btn{padding:10px 32px;color:#fff;background-color:#78a001;border-radius:5px;-webkit-border-radius:5px;}
#intro_index table{width:100%;overflow:hidden;} 
#intro_index table th{width:100px;text-align:right;height:60px;line-height:60px;}
#intro_index table tr{margin:15px 0;}
#intro_index table td{padding-left:10px;}
#intro_index table th em{color:red}
#intro_index table input.itxt{line-height:30px;text-indent:5px;width:120px;}
#intro_index table  textarea{width:290px;height:90px;padding:5px;}
#intro_index table .div_2{float:left;margin-left:30px;}
#intro_index table .img{width:100px;height:100px;overflow:hidden;float:left;}
#intro_index table .img img{width:100%}
#intro_index table .div_2 .ifram{position:relative;width:110px;height:32px;margin-top:20px;overflow:hidden;}
#intro_index table .div_2 .ifram img{width:100%;}
#intro_index table .div_2 .ifram_1{position:absolute;top:0;left:0;opacity:0;}
</style>
<div id="main" class="cont">
	<?php include T('admin','left');?>
	<div id="right">
		<div class="r_tit">个人资料</div>
			<div id="intro_index">
				<form method="post" action="/?m=admin&a=intro&c=save" id="cate_form">
					<table>
						<tr>
							<th>头 像：</th>
							<td id="img">
								<input type="hidden" name="img" value="<?=$infos['img']?$infos['img']:'';?>" />
								<div  class="img"><img src="<?=$infos['img']?$infos['img']:'';?>" alt="头像" width="100" height="100"/></div>
								<div class="div_2">
									<p>支持jpg/jpeg格式照片,照片大小100*100</br>文件小于1MB</p>
									<p class="ifram">	<img src="/static/img/up_c1.png" alt="上传图片" />
									
										<iframe style="margin-top:10px;" src="/log/upfile.php?tb=2" width="110" height="32" frameborder="0" class="ifram_1"></iframe>
									</p>
									
								</div>
							</td>
						</tr>
						<tr>
							<th><em>*</em>昵 称：</th>
							<td><input type="text" class="itxt" maxlength="20" id="nickname" name="nickname" value="<?=$infos['nickname']?$infos['nickname']:'';?>"></td>
						</tr>
						<tr>
							<th><em>*</em>性 别：</th>
							<td>
								<input type="radio" name="sex" class="jdradio" value="0" <?php if($infos['sex']=='0'){echo "checked";}?> id="sex_0"><label class="mr10" for="sex_0">男</label>
								<input type="radio" name="sex" class="jdradio" value="1" <?php if($infos['sex']=='1'){echo "checked";}?> id="sex_1"><label class="mr10"for="sex_1">女</label>
								<input type="radio" name="sex" class="jdradio" value="2" <?php if($infos['sex']=='2'){echo "checked";}?> id="sex_2"><label class="mr10"for="sex_2">保密</label>
								
							</td>
						</tr>
						
						<tr>
							<th>生 日：</th>
							<td>
								<div class=" birthday-info">
									<input type="text"  class="itxt" value="<?=date('Y-m-d',$infos['birth']?$infos['birth']:TIME)?>" id="birth" placeholder="选择生日" name="birth">
									<span class="ftx03">填生日有惊喜哦~</span>
								</div>
							</td>
						</tr>
						<tr>
							<th>联系电话:</th>
							<td><input type="text" name="phone" class="itxt" value="<?=$infos['phone']?>"></td>
						</tr>
						
						<tr>
							<th>所在地：</th>
							<td>
								<div class="">
						<?php 
							$all_pc=$db->getAll("select `areaid`,`name` from `web_mall`.`web_area` where `parentid`=0");
							if($infos['areaid']){
								$city=intval($infos['areaid']);
								$city_info=$db->get_one("select `parentid`,`arrparentid` from `web_mall`.`web_area` where `areaid`={$city}");
								$top_pid_arr=explode(',',$city_info['arrparentid']);
								$top_pid=intval($top_pid_arr[0]);
								$parent=$db->get_one("select `areaid`,`arrchildid` from `web_mall`.`web_area` where `areaid`={$city_info['parentid']}");
								$ac_sql="select `areaid`,`name` from `web_mall`.`web_area` where `areaid` in ({$parent['arrchildid']})";
								$all_city=$db->getAll($ac_sql);
							}?>
						<select id="p" onchange="selectCity(this.value)">
						<option value="0">请选择</option>
	<?php foreach($all_pc as $p){?>
						<option value="<?=$p['areaid']?>" <?php if($p['areaid']==$top_pid){echo 'selected';}?>><?=$p['name']?></option>
	<?php }?>
						</select>
						<select id="c" name="areaid">
							<option value="0">请选择</option>
	<?php if($all_city&&$city){foreach($all_city as $c){?>
						<option value="<?=$c['areaid']?>" <?php if($c['areaid']==$city){echo 'selected';}?>><?=$c['name']?></option>
	<?php }}?>
						</select>
							</div>
							</td>
						</tr>
						<tr>
							<th></th>
							<td><a href="javascript:void(0)" class="btn">提交</a></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</div>
<script type="text/javascript">
function setImg(d){
	$('#img').find('input').val(d);
	$('#img').find('.img img').attr('src',d);


}
	$(function(){
		$('.btn').click(function(){
			var nickname=$.trim($('#nickname').val());
			if (nickname.length==0){
				art.dialog.tips('昵称不能为空');
				return false;
			}
			$('#cate_form').submit();
		});	
	});
	function selectCity(e){
		$.ajax({
			type:'post',
			url:'/ac.php',
			data:{'m':'admin','a':'area','id':e},
			success:function(r){
                var o = document.getElementById('c');
                o.options.length = 0;
                eval('var city='+r+';');
                for(var i=0,l=city.length;i<l;i++){
                    o.options.add(new Option(city[i].name,city[i].id));
                }
			}
		});
	}
$("#birth").datepicker({
	dateFormat : 'yy-mm-dd',
	dayNames : ['星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
	dayNamesShort : ['周日','周一','周二','周三','周四','周五','周六'],
	dayNamesMin : ['日','一','二','三','四','五','六'],
	monthNames : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
	monthNamesShort : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
	changeMonth: true,
	changeYear: true
});
</script>
<?php include T('seller_admin','footer');?>