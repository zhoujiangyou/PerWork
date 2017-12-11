<?php
namespace application\admin\ctrl;
use \core\lib\controller;
class uploadCtrl extends controller{
  public function index(){
    $this->assign('data','hello word upload index');
    $this->display('index');
  }
}
