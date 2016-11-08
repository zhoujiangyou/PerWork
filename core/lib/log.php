<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core\lib;
use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;
use \Monolog\Handler\FirePHPHandler;
/**
 * log file
 * use the monolog
 * https://github.com/Seldaek/monolog
 */
class log
{
  private static $_instance;
  private $logger=null;
  /**
   * log constructor.
   */
  private  function __construct()
  {
    $name =date("Ymd",time());
    $file =PerMVC.'temp/log/'.$name.'.log';
    $fileModel = new file();
    if(!is_file($file)){
      $fileModel->createFile($file);
    }
    $stream = new StreamHandler($file, Logger::DEBUG);
    $logger = new Logger('PerMVC');
    $logger->pushHandler($stream);
    $logger->pushHandler(new FirePHPHandler());
    $this->logger=$logger;
  }
  //创建 __clone 防止对象被克隆
  public function __clone(){
    trigger_error('Clone is not allow!',E_USER_ERROR);
  }

  /**
   * @return \core\lib\log
   */
  public static function getLogger(){
    if(self::$_instance == Null){
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  /**
   * @param string $str
   * @param array $content
   * INFO (200): Interesting events. Examples: User logs in, SQL logs.
   */
  public function set_Info_log($str='info !', $content=array()){
     $this->logger->addInfo($str,$content);
   }


  /**
   * @param string $str
   * @param array $content
   *  DEBUG (100): Detailed debug information.
   */
  public function set_Debug_log($str='debug !', $content=array()){
     $this->logger->addDebug($str,$content);
   }


  /**
   * @param string $str
   * @param array $content
   * NOTICE (250): Normal but significant events.
   */
  public function set_Notice_log($str='notice !', $content=array()){
     $this->logger->addNotice($str,$content);
   }


  /**
   * @param string $str
   * @param array $content
   *   WARNING (300): Exceptional occurrences that are not errors. Examples: Use of deprecated APIs,
       poor use of an API, undesirable things that are not necessarily wrong.
   */
  public function set_Warning_log($str='warning !', $content=array()){
     $this->logger->addWarning($str,$content);
   }


  /**
   * @param string $str
   * @param array $content
   *ERROR (400): Runtime errors that do not require immediate action but should typically be logged and monitored.
   */
  public function set_Error_log($str='warning !', $content=array()){
     $this->logger->addError($str,$content);
  }
}
