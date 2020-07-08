<?php

//load configuration and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

//Autoload classess
function my_autoloader($class) {
  if (file_exists(ROOT . DS . 'core' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'core' . DS . $class . '.php');
  }
  elseif (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $class . '.php');
  }
  elseif (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $class . '.php')) {
    require_once(ROOT . DS . 'app' . DS . 'models' . DS . $class . '.php');
  }
}

spl_autoload_register('my_autoloader');

//Route the request
Router::route($url);
