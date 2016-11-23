<?php
namespace application\demo\ctrl;
use \core\lib\controller;
class funCtrl extends controller{


    /**
     * @throws views login
     */
    public function login(){
        $this->display('login');
    }

    public function register(){
        $this->display('register');
    }
}