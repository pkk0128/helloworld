<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 17/6/18
 * Time: 4:38 PM
 */
class Inchoo_HelloDeveloper_Model_Resource_Aamodel extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        //die('cc');
        $this->_init('student/aamodel', 'id'); // id is primary key
    }
}