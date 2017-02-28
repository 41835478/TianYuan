<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>文件上传</title>
	<style type="text/css">
	/* CSS Document */
	html{overflow:hidden;}
	body{margin:0;padding:0;font:12px Arial,Times New Roman,"\5B8B\4F53",san-serif;overflow:hidden}
	div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,hr,pre,form,fieldset,input,textarea,blockquote,p,object{padding:0;margin:0}
	body{width:400px;min-height:200px;min-height:0;overflow:hidden;margin:0 auto;
	}
 .add_img {width:150px;font-size:16px;color:#fff;margin:0 auto;padding:13px;margin-top:60px;margin-bottom:10px;
text-align:center;background-color:#FF0E41;border-radius:5px;-webkit-border-radius:5px;}
 .add_img .o{width:21px;height:2px;background-color:#fff;display:inline-block;position:relative;top:-4px}
 .add_img .t{width:2px;height:21px;background-color:#fff;display:inline-block;position:relative;left:-11px;top:6px}
	#add_img label{display:inline-block;width:150px;height:100px;line-height:60px;overflow:hidden;padding:13px;text-align:center;border:1px solid black;}
	#path {border:1px solid #cacaca;width:174px;height:28px;line-height:28px;position:relative;z-index:5;vertical-align:top;}

	#filter{width:100px;height:60px;background:url('/static/img/func/file_loading.gif') no-repeat left center #F1F1F1;display:none;z-index:99}
	</style>
	<script type="text/javascript">
	var $ = function(e){return document.getElementById(e);};
	var $P = function(e){return window.parent.document.getElementById(e);};
	function doCheck(){
		if($('path').value == '') {
			window.top.art.dialog.tips('请选择文件!');
			return false;
		}else{
			document.getElementById('filter').style.display="block";
			document.getElementById('aa').submit();
		}
	}
	</script>
</head>
<body>
	<div style="position:relative">
		<div class="add_img" ><em class="o"></em><em class="t"></em> 
			<label for="path"> 添加晒单图片</label>
		</div>
		<form id="aa" method="post" enctype="multipart/form-data" style="width:0;height:0;overflow:hidden;position:absolute;z-index:-1">
			<input name="file" id="path" type="file" accept="image/jpeg" size="15" onchange="doCheck()" style="filter:alpha(opacity=0);-moz-opacity:0;opacity:0;" />
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