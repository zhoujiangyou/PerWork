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

     //获取路由中module controller action 以及参数
      function __construct(){
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
           $path = $_SERVER['REQUEST_URI'];
           $this->urlParamsDeal($path);//处理url后参数
           $path= preg_replace("/(\\.)([\\s\\S]*)/",'',$path);
           $aliasPath = $this->getAlias($path);
           $patharr=strlen($aliasPath)==0?explode('/',trim($path,'/')):explode('/',trim($aliasPath,'/'));
           if(isset($patharr[0])){
               $this->module=$patharr[0];
           }
           if(isset($patharr[1])){
               $this->ctrl=$patharr[1];
           }
            if(isset($patharr[2])){
                $this->action=$patharr[2];
            }

        }else{
            $this->module=C('default_module');
            $this->ctrl = C('default_controller');
            $this->action=C('default_action');
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


    /**
     * 获取路由别名
     * @param $url ：/admin/index/index/a/123123/c/333?a=12312 去掉.php等伪静态后缀
     * @return string
     */
    protected  function getAlias($url){
        $path =  preg_replace("/(\\?)([\\s\\S]*)/",'',$url);
        return array_key_exists($path,C('route_alise'))?C('route_alise')["$path"]:'';
    }

    /**
     *路由参数处理
     *           http://xxxx/module/controller/action/param1/value1....
     *           http://xxxx/module/controller/action?param1=value1&&
     *
     *      $count=count($patharr);
            $i=3;
            while($i<$count){
            if(isset($patharr[$i+1])){
            $this->params[$patharr[$i]]=$patharr[$i + 1];
            }
            $i+=2;
            }
     */
    protected function urlParamsDeal($url){
        preg_match("/(\\?[\s\S]*)/",$url,$out);
        $params=ltrim($out[1],'?');
        $this->params=urlParams($params);
    }
}
