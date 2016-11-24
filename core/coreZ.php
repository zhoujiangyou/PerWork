<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core;
use application\common\ctrl\indexCtrl;

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
             try{
                 $ctrl->$actionClass();
             }catch (\Error $e){
                 //todo 跳转500页面

                 /*一个比较尴尬的问题。通过header 跳转 页面中会多次反复跳转。
                  * include 正常页面中会出现500 或者404 页面内容
                  * echo 的话 会出现问题 网页底部出现。最后特么感觉应该程序哪里有问题 不停的在抛出。然后我这边不清楚是什么情况。
                  * 先要把程序中的错误问题解决才行
                  */


             }

         }else{
             //debug模式下显示错误信息，否则就跳转到404页面
             if(DEBUG){
                 throw new \ErrorException('找不到控制器'.$moduleClass.'/'.$ctrlClass);
             }else{
                 //todo 跳转404页面

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
