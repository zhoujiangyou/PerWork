<?php
namespace core\lib;
/**
 *
 */
class controller
{
  public $ass;

 public function assign($name,$data){
        $this->ass[$name]=$data;
 }

//show
 public function display($file){
       $file = PerMVC.'app/views/'.$file.'.html';
       if(is_file($file)){
         extract($this->ass);
          include $file;
       }else{
          return false;
       }
 }

}
