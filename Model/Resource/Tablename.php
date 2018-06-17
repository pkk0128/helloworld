<?php
Class Inchoo_HelloDeveloper_Model_Resource_Tablename extends Mage_Core_Model_Mysql4_Abstract
{
	public function _construct()
	{
		$this->_init('student/tablename','id');
	}
}
?>