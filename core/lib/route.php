<?php
namespace core\lib;
class route{
     public $ctrl;
     public $action;
     public $module;
     public function __construct(){
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
                 $_GET[$patharr[$i]]=$patharr[$i + 1];
              }
              $i+=2;
            }
        }else{
            $this->module='home';
            $this->ctrl = 'index';
            $this->action='index';
        }
         //增加日記記錄
         $log = log::getLogger();
         $log->set_Info_log('request is :'. $this->ctrl.'/'.$this->action);
     }
}
