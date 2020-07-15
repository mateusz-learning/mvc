<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

//load configuration and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

//Autoload classess
function autoload($class) {
  $core_class_path = ROOT . DS . 'core' . DS . $class . '.php';
  $controllers_class_path = ROOT . DS . 'app' . DS . 'controllers' . DS . $class . '.php';
  $models_class_path = ROOT . DS . 'app' . DS . 'models' . DS . $class . '.php';

  if (file_exists($core_class_path)) {
    require_once($core_class_path);
  }
  elseif (file_exists($controllers_class_path)) {
    require_once($controllers_class_path);
  }
  elseif (file_exists($models_class_path)) {
    require_once($models_class_path);
  }
}

spl_autoload_register('autoload');
session_start();

//$url - Array website address parameters
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];
Router::route($url);
