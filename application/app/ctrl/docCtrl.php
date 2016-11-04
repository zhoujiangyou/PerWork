<?php
namespace app\ctrl;
use \core\lib\controller;
class docCtrl extends controller{
  public function index(){
    $this->assign('data','hello word');
    $this->display('doc');
  }
}
