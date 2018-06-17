<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 17/6/18
 * Time: 4:26 PM
 */
class Inchoo_HelloDeveloper_Block_Adminhtml_Aamodel extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        //die('dying in aamodel block adminhtml');
        $this->_blockGroup='test';
        $this->_controller='adminhtml_aamodel';
        $this->_headerText=Mage::helper('Inchoo_HelloDeveloper')->__('Aamodelheader');
        parent::__construct();
    }
}