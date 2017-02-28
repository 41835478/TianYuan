<?php
$head['title']='找回密码';
if($_userid){
	header_302('/wap/home.html','');
}
define('NOBANNER',true);
$head_pos_str='<span>&gt;</span><a href="#">找回密码</a>';
$forward = empty($_REQUEST['forward']) ? getRefer() : urlSafe($_REQUEST['forward']);
include T('passport','reg_m');//T('passport','login');