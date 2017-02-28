<?php
unset($_SESSION['userid']);
unset($_SESSION['username']);
Cookie::delete('Uin');
Cookie::delete('Uas');
Cookie::delete('auth');
Cookie::delete('from');
show_mb_msg('退出成功','/');