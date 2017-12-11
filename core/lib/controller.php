<?php
namespace core\lib;
/**
 * Created by PhpStorm.
 * User: 周海天
 */
class controller
{
      public $ass;
      public $module;
        function __construct($module)
        {
            $this->module=$module;
        }

        public function assign($name,$data){
            $this->ass[$name]=$data;
         }

        //show template
         public function display($file){
               $filed = APPLICATION.'/'.$this->module.'/views/'.$file.'.html';
               if(is_file($filed)){

                  $loader = new \Twig_Loader_Filesystem('application');
                  $twig = new \Twig_Environment($loader, array(
                      'cache' => 'temp/html',
                      'debug'=>VIEWDEBUG,
                  ));

                  $template = $twig->loadTemplate($this->module.'/views/'.$file.'.html');
                  $template->display($this->ass?$this->ass:[]);
               }else{
                   throw new \ErrorException('没有找到匹配视图文件'.$file);
               }
         }

}
