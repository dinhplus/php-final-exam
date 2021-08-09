<?php
session_start();
define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("WEBROOT"."\\index.php","", $_SERVER["SCRIPT_FILENAME"]));
define("HOST",$_SERVER['HTTP_HOST']);
require_once 'mvc/core/preload.php';
require_once 'mvc/route.php';
$myApp = new App();
// echo "abc";