<?php
namespace application\app\ctrl;
use \core\lib\controller;
use \core\lib\log;
use \core\lib\config;
class indexCtrl extends controller{
  public function index(){

    $log =log::getLogger();
    $log->set_info_log();
    $this->assign('data',$_SESSION['MODULE']);
    $this->display('index');
  }

  public  function test(){
    $this->assign('data','hello word');
    $this->display('test');
  }
}
