<?php


class RonisBT_StoreLocator_Model_Locator extends Mage_Core_Model_Abstract {

    public function _construct()
    {
        parent::_construct();
        $this->_init('storelocators/locator');
    }
}