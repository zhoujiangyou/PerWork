<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core\lib;
class route{
    private   $ctrl;
    private   $action;
    private   $module;
    private   $params;

     //获取路由中
      function __construct(){
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
           $path = $_SERVER['REQUEST_URI'];
           $path= preg_replace("/(\\.)([\\s\\S]*)/",'',$path);
           $patharr= explode('/',trim($path,'/'));
           if(isset($patharr[0])){
               $this->module=$patharr[0];
           }
           if(isset($patharr[1])){
               $this->ctrl=$patharr[1];
           }
            if(isset($patharr[2])){
                $this->action=$patharr[2];
            }
            $count=count($patharr);
            $i=3;
            while($i<$count){
              if(isset($patharr[$i+1])){
                  $this->params[$patharr[$i]]=$patharr[$i + 1];
              }
              $i+=2;
            }
        }else{
            $this->module='app';
            $this->ctrl = 'index';
            $this->action='index';
        }
         //增加日記記錄
         $log = log::getLogger();
         $log->set_Info_log('request is :'. $this->module.'/'.$this->ctrl.'/'.$this->action);
     }


    /**
     * @return mixed
     */
    public  function getParams(){
        return $this->params;
     }

    /**
     * 获取module
     * @return string
     */
    public  function getModule(){
        return $this->module;
    }

    /**
     * 获取controller
     * @return string
     */
    public  function getController(){
        return $this->ctrl;
    }

    /**
     * 获取action
     * @return string
     */
    public  function getAction(){
        return $this->action;
    }
}
