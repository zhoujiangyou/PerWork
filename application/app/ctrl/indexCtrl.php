<?php
namespace application\app\ctrl;
use \core\lib\controller;
use \core\lib\log;
use \core\lib\config;
class indexCtrl extends controller{
  public function index(){

  $log =log::getLogger();
  $log->set_info_log();
  $this->assign('data','欢迎使用PerWork');
  $this->display('index');
}
}
