<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 * 全局函数库
 */

/**
 * 获取全局配置变量快捷方法
 */
if(!function_exists('C')){
    function C($key,$default=""){

        $config = \core\lib\config::getConfig();

        return $config->get($key,$default);

    }
}

if(!function_exists('urlParams')){

    /**
     * 将string类型的参数转换成数组
     * @param $str :param=value1&param2=value2
     */
    function urlParams($str){
        $res=[];
        $parmaArr= explode($str,'&');
        foreach ($parmaArr as $key=>$value){
            $map = explode($value,'=');
            $res[$map[0]]=$map[1];
        }
        return $res;
    }
}

