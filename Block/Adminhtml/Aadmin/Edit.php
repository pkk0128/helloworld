<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 4:11 PM
 */
class Inchoo_HelloDeveloper_Block_Adminhtml_Aadmin_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()

    {

        parent::__construct();



        $this->_objectId = 'id';

        $this->_blockGroup = 'test';

        $this->_controller = 'adminhtml_aadmin';



        $this->_updateButton('save', 'label', Mage::helper('Inchoo_HelloDeveloper')->__('Save'));

        $this->_updateButton('delete', 'label', Mage::helper('Inchoo_HelloDeveloper')->__('Delete'));

        $this->_updateButton('back', 'onclick', "setLocation('{$this->getUrl('*/Aadmin/aadmin')}')");

        $this->_addButton('save_and_continue', array(
            'label'     => Mage::helper('catalog')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class' => 'save'
        ), 100);

        $this->_formScripts[] = "function saveAndContinueEdit()" .
            "{editForm.submit($('edit_form').action + 'back/edit/')}";

    }

    public function getHeaderText()

    {

        return Mage::helper('Inchoo_HelloDeveloper')->__('My Form Container');

    }


}