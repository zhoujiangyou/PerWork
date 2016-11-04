<?php
namespace core;
class coreZ
{
   public static $classMap =array();
    static   public function run(){
         $route = new \core\lib\route();
         $ctrlClass = $route->ctrl;
         $actionClass = $route->action;
         $ctrlfile=PerMVC.'app/ctrl/'.$ctrlClass.'Ctrl.php';
         $conClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';

         if(is_file($ctrlfile)){
           include $ctrlfile ;
           $ctrl = new $conClass();
           $ctrl->$actionClass();
         }else{
          throw new \ErrorException('找不到控制器'.$ctrlClass);
         }
      }

    /**
     * @param $class
     *
     * @return bool
     */
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
            return false;
          }
        }

    }

    
}
