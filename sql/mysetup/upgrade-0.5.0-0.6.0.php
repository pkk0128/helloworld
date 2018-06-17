<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 1:40 PM
 */
$installer=$this;

$installer->startSetup();
$installer->run("CREATE TABLE IF NOT EXISTS`{$this->getTable('student/aadmin')}`(
  `id` int(10) unsigned NOT NULL auto_increment,
  `name`text,`address`text,
  `mobile`int(20) NOT NULL,
  `discription`text,
  PRIMARY KEY (`id`))ENGINE InnoDB DEFAULT CHARSET=utf8;");
$installer->endSetup();
?>