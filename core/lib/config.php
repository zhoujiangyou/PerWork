<?php
namespace core\lib;
/**
 * Created by PhpStorm.
 * User: 周海天
 * Date: 2016/11/8
 * Time: 15:30
 */

class config{

    private static $_instance;
    private $conf=null;
    /**
     * log constructor.
     */
    private  function __construct()
    {
      $this->conf= \Noodlehaus\Config::load('config');
    }
    //创建 __clone 防止对象被克隆
    public function __clone(){
        trigger_error('Clone is not allow!',E_USER_ERROR);
    }

    /**
     * @return \core\lib\log
     */
    public static function getConfig(){
        if(self::$_instance == Null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * @param $keyname
     * @param $default
     *
     * @return mixed|null
     */
    public  function get($keyname, $default=''){
        return $this->conf->get($keyname,$default);
    }

}
