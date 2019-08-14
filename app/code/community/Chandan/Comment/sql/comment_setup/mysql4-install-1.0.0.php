<?php
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('comment')};
CREATE TABLE {$this->getTable('comment')} (
  `comment_id` int(11) unsigned NOT NULL auto_increment,
  `ordernumber` varchar(255) NULL default '',  
  `customeremail` varchar(255) NULL default '',  
  `comment` varchar(255) NULL default '',  
  `status` smallint(6) NULL default '1',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

$installer->endSetup(); 