<?php
/**
 * Created by PhpStorm.
 * User: smert
 * Date: 09.06.2019
 * Time: 16:19
 */

class RonisBT_StoreLocator_Block_Stor extends Mage_Core_Block_Template
{
    protected $_template = 'storelocator/stor.phtml';

    /**
     *
     */
    public function getStorses(){

        $stores = Mage::getModel('storelocators/locator')->getResource();
        $stores2 = Mage::getModel('storelocators/locator')->getCollection();
        $stores3 = Mage::getModel('storelocators/locator')->getEntityId();
        return $stores;/*
            ->addFieldToFilter('store_status',array('eq'=>RonisBT_StoreLocator_Block_Stor::ENABLED));*/
    }
}