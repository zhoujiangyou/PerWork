<?php
namespace app\ctrl;
use \core\lib\controller;
class indexCtrl extends controller{
  public function index(){
    $this->assign('data','hello word');
    $this->display('index');
  }

  public  function test(){
    $this->assign('data','hello word');
    $this->display('test');
  }
}
