<?php
class Inchoo_HelloDeveloper_Block_Adminhtml_Gridtable extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		//die('dying in block grid container');
		$this->_blockGroup='test';
		$this->_controller='adminhtml_gridtable';
		$this->_headerText=Mage::helper('Inchoo_HelloDeveloper')->__('GridtableHeader');
		parent::__construct();
		//$this->removeButton('add');
	}
}