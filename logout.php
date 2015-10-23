<?php
session_start(); 
session_destroy();

define('LG_DIR', $_SERVER['HTTP_HOST']);
define('LG_PRO', '/neqa/index.php');

$logpath = LG_DIR.LG_PRO;

?>

<meta http-equiv='refresh' content='0;url=/neqa/'>
