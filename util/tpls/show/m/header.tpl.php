<!DOCTYPE html>
<html>
<head>
<title><?=$uc_config['sitename']?></title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection" />
<meta name="generator" content="bd-mobcard">
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
<link href="/static/css/m.css" rel="stylesheet">
<script type="text/javascript">  
    var phoneWidth =  parseInt(window.screen.width);  
    var phoneScale = phoneWidth/640;  
    var ua = navigator.userAgent;  
    if (/Android (\d+\.\d+)/.test(ua)){  
        var version = parseFloat(RegExp.$1);  
        if(version>2.3){  
            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');  
        }else{  
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');  
        }  
    } else {  
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');  
    }  
</script>  
</head>
<body>

