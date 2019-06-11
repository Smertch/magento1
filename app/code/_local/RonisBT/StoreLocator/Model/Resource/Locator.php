<?php

class RonisBT_StoreLocator_Model_Resource_Locator extends Mage_Core_Model_Mysql4_Abstract {

    public function _construct()
    {
        parent::_construct();
        $this->_init('storelocators/locator','loc_id');
    }
}