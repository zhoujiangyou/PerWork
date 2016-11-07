<?php
namespace core\lib;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/7
 * Time: 13:53
 */

//todo 还没完善文件上传组件  后端没写完 前端还没引入插件
class upload{

     private $storage;
     private $file;
     function __construct()
     {
          $filedir='upload/'.date("Ymd",time());
          $fileModel = new file();
          if(!is_file($filedir)){
             $fileModel->createFile($filedir);
          }
         $this->storage =new \Upload\Storage\FileSystem($filedir);
         $this->file = new \Upload\File('file_name',$this->storage);
     }


     public function upload_file(){


          // MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
          $this->file->addValidations(array(
               // Ensure file is of type "image/png"
              new \Upload\Validation\Mimetype('image/png'),

               //You can also add multi mimetype validation
               //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

               // Ensure file is no larger than 5M (use "B", "K", M", or "G")
              new \Upload\Validation\Size('5M')
          ));


          try {
               // Success!
               $this->file->upload();
          } catch (\Exception $e) {
               // Fail!
               $errors = $this->file->getErrors();
               throw new  \exception($errors);
          }
     }

    /**
     * set file name = uniqid
     */
     private function set_file_name(){
          $new_filename = uniqid();
          $this->file->setName($new_filename);
     }


}