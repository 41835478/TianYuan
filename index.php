<?php
/*
*全影商城主入口
*新结构目录
/util/						php目录
	/util/core/			基础程序类库
	/util/mod/			基础模型
	/util/action/			ajax等模型外应用
	/util/tpls/			相关模板文件
/static/					静态目录
	/static/css/			静态css
	/static/img/			相关img
	/static/js/			相关js
	/static/plugin/		插件应用

/logs/						日志目录

/index.php					主入口
/web.config				服务器配置文件
/favicon.ico				ico文件

echo '<!--';
var_dump($_REQUEST);
echo '-->';
*/

define('WXSITE',true);
define('WXID','wx54eb2d3121bf3c9b');
define('WXSEC','ed3574f0cf088f12857dabb47e77f76c');
define ( 'Q_DIR', dirname(__FILE__));
include(Q_DIR.'/util/origin.inc.php');
