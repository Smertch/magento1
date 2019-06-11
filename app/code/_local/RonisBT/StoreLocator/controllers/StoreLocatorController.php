<?php


class RonisBT_StoreLocator_StoreLocatorController extends Mage_Core_Controller_Front_Action
{


    public function mytestAction()
    {
        die('test');
    }

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    /**
     *
     */
    public function informationAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

}