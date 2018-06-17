<?php
class Inchoo_HelloDeveloper_Model_Resource_Student2 extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {

        $this->_init('student/student2', 'id'); // id is primary key
    }
     


}