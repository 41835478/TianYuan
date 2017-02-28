<?php
/*
特殊不在框架内部，不需要加载原始初始化信息，但又需要初始化的插件等
*/
error_reporting(E_ALL);
ini_set('error_log',APP_DIR.'/log/phperror.log');
define ( 'Q_DIR', dirname(__FILE__));
include(Q_DIR.'/util/action.inc.php');