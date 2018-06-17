<?php
class Inchoo_HelloDeveloper_Block_Adminhtml_Newgrid_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	public function __construct()

	{

	parent::__construct();

	 

	$this->_objectId = 'id_1';

	$this->_blockGroup = 'test';

	$this->_controller = 'adminhtml_newgrid';

	 

	$this->_updateButton('save', 'label', Mage::helper('Inchoo_HelloDeveloper')->__('Save'));

	$this->_updateButton('delete', 'label', Mage::helper('Inchoo_HelloDeveloper')->__('Delete'));

       // $this->_updateButton('back', 'onlick', "setLocation('{$this->getUrl('*/Aadmin/aadmin')}')");



	$this->_addButton('saveandcontinue', array(

	'label' => Mage::helper('adminhtml')->__('Save And Continue Edit'),

	'onclick' => 'saveAndContinueEdit()',

	'class' => 'save',

	), -100);

        $this->_addButton('new_back', array(
            'label'   => Mage::helper('catalog')->__('Back'),
            'onclick' => "setLocation('{$this->getUrl('*/*/aadmin')}')",
            'class'   => 'back
            '
        ));

        $this->_removeButton('back');
	
	}

	public function getHeaderText()

	{

	return Mage::helper('Inchoo_HelloDeveloper')->__('My Form Container');

	}


}