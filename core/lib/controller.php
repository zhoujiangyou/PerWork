<?php
namespace core\lib;
/**
 * Created by PhpStorm.
 * User: 周海天
 */
class controller
{
      public $ass;
        function __construct()
        {

        }

        public function assign($name,$data){
            $this->ass[$name]=$data;
         }

        //show template
         public function display($file){
               $filed = APPLICATION.'/'.$_SESSION['MODULE'].'/views/'.$file.'.html';
               if(is_file($filed)){
                  \Twig_Autoloader::register();
                  $loader = new \Twig_Loader_Filesystem('application');
                  $twig = new \Twig_Environment($loader, array(
                      'cache' => 'temp/html',
                      'debug'=>DEBUG,
                  ));
                  $template = $twig->loadTemplate($_SESSION['MODULE'].'/views/'.$file.'.html');
                  $template->display($this->ass?$this->ass:'');
               }else{
                   throw new \ErrorException('没有找到匹配视图文件'.$file);
               }
         }

}
