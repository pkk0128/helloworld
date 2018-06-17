<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 1:18 PM
 */
class Inchoo_HelloDeveloper_Block_Adminhtml_Aadmin extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup='test';
        $this->_controller='adminhtml_aadmin';
        $this->_headerText=Mage::helper('Inchoo_HelloDeveloper')->__('Aadminheader');
        parent::__construct();
    }
}