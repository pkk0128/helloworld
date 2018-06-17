<?php 

$installer = $this;
$installer->startSetup();



$installer->run("CREATE TABLE IF NOT EXISTS  
	`{$this->getTable('student1')}`
	 (
`id` int(11) unsigned NOT NULL auto_increment,
`name` text,
`age` int(11) unsigned NOT NULL default '0',
`mobile` int(11) unsigned NOT NULL default '0',
`city` text,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 ");

 $installer->endSetup();
