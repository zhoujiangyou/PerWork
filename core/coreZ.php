<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core;
use core\lib\route;
class coreZ
{
   public static $classMap =array();
    static   public function run(){
        $route = new route();
         $moduleClass=$route->getModule();
         $ctrlClass = $route->getController();
         $actionClass = $route->getAction();
         $ctrlfile=PerMVC.APPLICATION.'/'.$moduleClass.'/ctrl/'.$ctrlClass.'Ctrl.php';
         $conClass = '\\'.APPLICATION.'\\'.$moduleClass.'\ctrl\\'.$ctrlClass.'Ctrl';
         if(is_file($ctrlfile)){
           include_once $ctrlfile ;
           $ctrl = new $conClass($moduleClass);
             try{
                 $ctrl->$actionClass();
             }catch (\Error $e){
                 //debug模式下显示错误信息
                 if(DEBUG){
                     throw new \ErrorException($e->getFile().$e->getLine().$e->getMessage());
                 }else{
                     header('Location:/500.html');
                 }
             }

         }else{
             //debug模式下显示错误信息，否则就跳转到404页面
             if(DEBUG){
                 throw new \ErrorException('找不到控制器'.$moduleClass.'/'.$ctrlClass);
             }else{
                 //路由404处理
                 header('Location:/404.html');
             }

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
