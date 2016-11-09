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
    $option= C('database');
    parent::__construct($option);
  }
}
