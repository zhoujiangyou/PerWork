<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core;
class coreZ
{
   public static $classMap =array();
    static   public function run(){
        session_start() ;
         $route = new \core\lib\route();
         $moduleClass=$route->module;
         $ctrlClass = $route->ctrl;
         $actionClass = $route->action;
         $ctrlfile=PerMVC.APPLICATION.'/'.$moduleClass.'/ctrl/'.$ctrlClass.'Ctrl.php';
         $conClass = '\\'.APPLICATION.'\\'.$moduleClass.'\ctrl\\'.$ctrlClass.'Ctrl';
         $_SESSION['MODULE']=$moduleClass;
         if(is_file($ctrlfile)){
           include $ctrlfile ;
           $ctrl = new $conClass();
           $ctrl->$actionClass();
         }else{
          throw new \ErrorException('找不到控制器'.$moduleClass.'/'.$ctrlClass);
         }
      }

    static  public function load($class){

        if(isset($classMap[$class])){
            return true;
        }else{
          str_replace('\\','/',$class);
          $file =PerMVC.$class.'.php';
          if(is_file($file)){
             include($file);
             self::$classMap[$class]=$class;
          }else{
            return false; //这边不能抛出异常，抛出异常之后 所引用插件exception 不能正常执行。类引入被截断。
          }
        }

    }

    public function __destruct()
    {
        session_destroy();
    }


}
