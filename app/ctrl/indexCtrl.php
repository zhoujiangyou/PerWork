<?php
namespace app\ctrl;
class indexCtrl extends \core\lib\controller{
  public function index(){
    echo 'this  is  controller index';
    $this->assign('data','value');
    $this->display('index');
    $model = new \core\lib\model();
  var_dump( $model->select('number','*',["id" => 100]) );exit(); 
  }
}
