<?php
$head['title']='账户注册';

define('NOBANNER',true);
$head_pos_str='<span>&gt;</span><a href="#">账户注册</a>';
$forward = empty($_REQUEST['forward']) ? getRefer() : urlSafe($_REQUEST['forward']);
include T('show/m','reg');//T('passport','login');