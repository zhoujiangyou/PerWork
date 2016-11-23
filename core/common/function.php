<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 * 全局函数库
 */

/**
 * 获取全局配置变量快捷方法
 */
function C($key,$default=""){

  $config = \core\lib\config::getConfig();

  return $config->get($key,$default);

}


