<?php

define('PerMVC',realpath(' /'));
define('CORE',PerMVC.'/core');
define('APP',PerMVC.'/app');
define('DEBUG',true);
define('MODULE','app');

include 'vendor/autoload.php';
if(DEBUG){
   $whoops = new \Whoops\Run;
   $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
   $whoops->register();
   ini_set('display_error','On');
}else{
  ini_set('display_error','Off');
}
include CORE.'/common/function.php';
include CORE.'/coreZ.php';

spl_autoload_register('\core\coreZ::load');
\core\coreZ::run();
