<?php
/*
 定义常量
 加载函数库
 启动框架

*/
define('PerMVC',realpath(' /'));
define('CORE',PerMVC.'/core');
define('APP',PerMVC.'/app');
define('DEBUG',true);


if(DEBUG){
   ini_set('display_error','On');
}else{
  ini_set('display_error','Off');
}

include CORE.'/common/function.php';
include CORE.'/coreZ.php';

spl_autoload_register('\core\coreZ::load');
\core\coreZ::run();
