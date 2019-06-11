<?php

class RonisBT_StoreLocator_Model_Resource_Locator extends Mage_Core_Model_Resource_Db_Abstract {


    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->_init('storelocators/locator','loc_id');
    }
}