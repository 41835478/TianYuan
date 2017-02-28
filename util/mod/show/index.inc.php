<?php
$notice=$db->getAll('select * from `web_notice` order by time desc limit 2');
$time=TIME;


if($ismobile||$_GET['t']==11){
	include T('show/m/','index');
}else{
	include T('show/pc/','index');
}


