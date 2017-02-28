<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>upload</title>
	<meta name="Author" content="Zero">
	<style type="text/css">
		html{overflow:hidden;}
		body{margin:0;padding:0;font:12px 'Microsoft YaHei',Arial,Times New Roman,"\5B8B\4F53",san-serif;overflow:hidden;}
		div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
		table,td,tr,th{font-size:12px}
		li{list-style-type:none}
		img{vertical-align:top;border:0}
		ol,ul{list-style:none}
		h1,h2,h3,h4,h5,h6{font-size:12px;font-weight:normal}
		address,cite,code,em{font-weight:normal;font-style:normal}
		a{text-decoration:none;}
		a:hover{text-decoration:underline;}		
		p{margin:0;padding:0;font-size:12px;color:#f30;font-family:Tahoma;}
		#path{width:110px;height:32px;overflow:hidden;border:1px solid red;opacity:0;filter:alpha(opacity=0);-moz-opacity:0;position:absolute;right:0}
		a#upload_img1{display:inline-block;width:110px;height:32px;overflow:hidden;background:url('/static/img/all_bg.png') no-repeat 0 -670px;cursor:pointer;position:relative;}
	</style>
	<style type="text/css">
	/* CSS Document */
	body{margin:0;padding:0;font:12px Arial,Times New Roman,"\5B8B\4F53",san-serif}
	div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
	#path{width:110px;height:32px;overflow:hidden;border:1px solid red;opacity:0;filter:alpha(opacity=0);-moz-opacity:0;position:absolute;right:0}
	span#upload_img1{display:inline-block;width:110px;height:32px;overflow:hidden;background:url('/static/img/all_bg.png') no-repeat 0 -670px;cursor:pointer;position:relative;}
	#filter{display:none;}
	</style>
	<meta name="renderer" content="webkit" />
	<link href="favicon.ico" rel="shortcut icon" />
	<script type="text/javascript">
	var $ = function(e){return document.getElementById(e);};
	var $P = function(e){return window.parent.document.getElementById(e);};
	function doCheck(){
		if($('path').value == '') {
			window.top.art.dialog.alert('请选择文件!');
			return false;
		}else{
			document.getElementById('filter').style.display="block";
			document.getElementById('aa').submit();
		}
	}
	</script>
</head>
<body>
	<div >
		<form id="aa" method="post" enctype="multipart/form-data">
			<span id="upload_img1"><input name="file" id="path" type="file" size="15" onchange="doCheck()" /></span>
			<input type="hidden" name="cp" id="cp" value="2" />
			<input type="hidden" name="w" value="<?=$w?>" />
			<input type="hidden" name="h" value="<?=$h?>" />
			<input type="hidden" name="c" value="save" />
			<input type="hidden" name="dosubmit" value="test_ad_upload" />
		</form>
	</div>
	<div id="filter"></div>
</body>
</html>