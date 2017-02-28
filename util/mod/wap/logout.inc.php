<?php
unset($_SESSION['userid']);
unset($_SESSION['username']);
Cookie::delete('Uin');
Cookie::delete('Uas');
show_mb_msg('退出成功','/');