<?php

$installer = $this;
$installer->startSetup();



$installer->run("
CREATE TABLE IF NOT EXISTS  `{$this->getTable('student')}` (
`id` int(11) unsigned NOT NULL auto_increment,
`name` text,
`age` int(11) unsigned NOT NULL default '0',
`mobile` int(11) unsigned NOT NULL default '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 ");

 $installer->endSetup();