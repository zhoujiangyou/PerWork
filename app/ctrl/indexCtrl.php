<?php
namespace app\ctrl;
use \core\lib\controller;
use \core\lib\log;
class indexCtrl extends controller{
  public function index(){

    $log =log::getLogger();
    $log->set_info_log();
    $this->assign('data','hello word');

    $this->display('index');
  }

  public  function test(){
    $this->assign('data','hello word');
    $this->display('test');
  }
}
