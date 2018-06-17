<?php
 
class Inchoo_HelloDeveloper_Block_Adminhtml_Student extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {

        $this->_blockGroup = 'test';
        $this->_controller = 'adminhtml_student';
        $this->_headerText = Mage::helper('Inchoo_HelloDeveloper')->__('Orders - Inchoo');
 		
        parent::__construct();
//        $this->_removeButton('add');
    }
}