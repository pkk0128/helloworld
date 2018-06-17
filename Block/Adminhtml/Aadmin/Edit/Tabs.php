<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 4:13 PM
 */
class Inchoo_HelloDeveloper_Block_Adminhtml_Aadmin_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {

        parent::__construct();

        $this->setId('form_tabs');

        $this->setDestElementId('edit_form');

        $this->setTitle(Mage::helper('Inchoo_HelloDeveloper')->__('forForms Information'));


    }

    protected function _beforeToHtml()
    {

        $this->addTab('form_section', array(

            'label' => Mage::helper('Inchoo_HelloDeveloper')->__('Student Information'),

            'title' => Mage::helper('Inchoo_HelloDeveloper')->__('Student Information'),

            'content' => $this->getLayout()->createBlock('test/adminhtml_aadmin_edit_tab_form')->toHtml(),

        ));/*Something wrong after tab_form*/

        return parent::_beforeToHtml();

    }
}