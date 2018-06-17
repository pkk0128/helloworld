<?php 
$installer=$this;
$installer->startSetup();


$installer->run("
	CREATE TABLE IF NOT EXISTS `{$this->getTable('student2')}` (
	`id` int(10) unsigned NOT NULL auto_increment,
	`name` text,
	`address` text,
	`mobile` int(20) NOT NULL,
	`discreption` text,
	PRIMARY KEY (`id`)) Engine=InnoDB DEFAULT CHARSET=utf8;
	");
$installer->endSetup();