<!doctype html>
<html class="no-js fixed-layout">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>商城管理中心</title>
<meta name="description" content="">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/static/cc/amazeui.min.css"/>
<link rel="stylesheet" href="http://amazeui.org/css/admin.css">
<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="/static/js/j.js"></script>
<script type="text/javascript" src="http://vote.7192.com/static/plugin/artDialog/jquery.artDialog.js?skin=aero"></script>
<style type="text/css">
::selection {
background: #21b384; 
color: #fff;
}
::-webkit-scrollbar {
width: 7px;
height: 7px;
}
::-webkit-scrollbar-thumb {
background-color: rgba(50,50,50,0.3);
}
.am-g,.am-form{min-height:500px;overflow:hidden;}
.pages{text-align:center;}
th,td{text-align:center;}
a{cursor:pointer}
.am-btn-default{background-color:#fff;}
</style>
</head>
<body>
<header class="am-topbar am-topbar-inverse admin-header">
	<div class="am-topbar-brand">
		<strong>QUANYING</strong> <small>商城管理中心 1.0</small>
	</div>
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
		
			<li class="am-dropdown" data-am-dropdown>
				<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
					<span class="am-icon-users"></span> <?=$user['username']?> <span class="am-icon-caret-down"></span>
				</a>
				<ul class="am-dropdown-content">
					<li><a href="/?m=wxsite&mod=logout"><span class="am-icon-power-off"></span> 退出</a></li>
				</ul>
			</li>
			<li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText"> 开启全屏</span></a></li>
		</ul>
	</div>
</header>