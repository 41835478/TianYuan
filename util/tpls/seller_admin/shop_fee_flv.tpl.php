<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>运费模板</title>
	<meta name="Author" content="Zero">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<meta name="renderer" content="webkit" />
	<link href="favicon.ico" rel="shortcut icon" />
	<style type="text/css">
		@charset "utf-8";
		/* CSS Document */
		body{margin:0;padding:0;font:12px 'Microsoft YaHei',Arial,Times New Roman,"\5B8B\4F53",san-serif}
		div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
		table,td,tr,th{font-size:12px}
		li{list-style-type:none}
		img{vertical-align:top;border:0}
		ol,ul{list-style:none}
		h1,h2,h3,h4,h5,h6{font-size:12px;font-weight:normal}
		address,cite,code,em{font-weight:normal;font-style:normal}
		a{text-decoration:none;}
		a:hover{text-decoration:underline;}
		
		#main{width:300px;min-height:200px;overflow:hidden;}
		#main table{background-color:#eee;width:100%;height:100%}
		#main table tr th{background-color:#fff;line-height:30px;text-align:left;font-weight:100;}
		#main table tr td{background-color:#fff;}
		#main table tr td input{height:30px;width:90%}
		#main table tr td select{height:30px;width:90%}
		#main table tr td button{padding:6px 10px;cursor:pointer;}
	</style>
	<script type="text/javascript" src="/static/js/j.js"></script>
</head>
<body>
	<div id="main">
	<form method="post" id="sort_form">
		<table cellpadding="3" cellspacing="1">
			<tr>
				<th><b><?=$shop_info['username']?></b></th>
			</tr>
			<tr>
				<th>运费模板标题：</th>
			</tr>
			<tr>
				<td><input type="text" name="title" id="i_title" value="<?=$flv['title']?>" /></td>
			</tr>
			<tr>
				<th>计费类型：</th>
			</tr>
			<tr>
				<td><select name="type">
<?php foreach($fee_tp as $k=>$v) {?>
					<option value="<?=$k?>"<?=$k==$flv['id']?' selected':''?>><?=$v['tit']?></option>
<?php }?>
				</select></td>
			</tr>
			<tr>
				<td><button type="button" name="dosubmit" onclick="save_flv()" value="1">保存模板</button></td>
			</tr>
		</table>
		<input type="hidden" name="m" value="admin" />
		<input type="hidden" name="a" value="trans" />
		<input type="hidden" name="c" value="saveflv">
<?php if($id){?>
		<input type="hidden" name="id" value="<?=$id?>" />
<?php }?>
		<input type="hidden" name="uid" value="<?=$uid?>" />
	</form>
	</div>
	<script type="text/javascript">
		function save_flv(){
			var i_title=$('#i_title').val();
			if (i_title.length<1){
				window.top.art.dialog.tips('请填写一个模板标题');
				return false;
			}
			var datas=$('#sort_form').serialize();
			$.ajax({
				type:'post',
				url:'/',
				data:datas,
				success:function(d){
					if (d=='ok'){
						window.top.art.dialog.tips('保存成功');
						setTimeout(function(){
							window.top.location.reload(true);
						},1000);
					}else{
						window.top.art.dialog.tips(d);
					}
				}
			});
		}
	</script>


</body>
</html>