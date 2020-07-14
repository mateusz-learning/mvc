<?php

session_start();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

//$url - Array website address parameters
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
