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
       $filed = PerMVC.'app/views/'.$file.'.html';
       if(is_file($filed)){
        // extract($this->ass);
          // include $file;
          \Twig_Autoloader::register();
          $loader = new \Twig_Loader_Filesystem('app/views');
          $twig = new \Twig_Environment($loader, array(
              'cache' => 'temp/html',
              'debug'=>DEBUG,
          ));
          $template = $twig->loadTemplate($file.'.html');
          $template->display($this->ass?$this->ass:'');
       }else{
          return false;
       }
 }

}
