<?php
class Inchoo_HelloDeveloper_Model_Resource_Aadmin extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        //die('cc');
        $this->_init('student/aadmin', 'id'); // id is primary key
    }
}