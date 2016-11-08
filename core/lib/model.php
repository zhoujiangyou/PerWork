<?php
/**
 * Created by PhpStorm.
 * User: 周海天
 */
namespace core\lib;
/**
 *
 */
class model extends \medoo
{

  function __construct()
  {
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
