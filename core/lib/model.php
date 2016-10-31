<?php
namespace core\lib;
/**
 *
 */
class model extends \medoo
{

  function __construct()
  {
    // $dsn = 'mysql:host=localhost;dbname=test';
    // $username ='root';
    // $passwd='';
    // try {
    //      parent::__construct($dsn,$username,$passwd);
    // } catch (\PDOException $e) {
    //      echo $e->getMessage();
    // }
    $option= array(
      'database_type' => 'mysql',
      'database_name' => 'test',
      'server' => 'localhost',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',);
    parent::__construct($option);
  }
}
