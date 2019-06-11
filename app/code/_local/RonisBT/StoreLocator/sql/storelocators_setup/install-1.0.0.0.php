<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->run("CREATE TABLE `{$this->getTable('storelocators/locator')}`( 
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `coordinates` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `store_status` tinyint(4) NOT NULL,
  `operation_mode` varchar(100) NOT NULL,
  `store_option` json NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

$installer->endSetup();

