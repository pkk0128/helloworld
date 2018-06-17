<?php 
class Inchoo_HelloDeveloper_Block_Adminhtml_Student3 extends Mage_Adminhtml_Block_Widget_Grid_Container

{
	public function __construct()
	{
		$this->_blockGroup="test";
		$this->_controller="adminhtml_student3";
		$this->_headerText= Mage::helper('Inchoo_HelloDeveloper')->__('Student3name');
		parent::__construct();
//		$this->_removeButton('add');

		/*$this->_blockGroup='test';
		$this->_controller='adminhtml_gridtable';
		$this->_headerText=Mage::helper('Inchoo_HelloDeveloper')->__('GridtableHeader');
		parent::__construct();
		$this->removeButton('add');*/
	}
}