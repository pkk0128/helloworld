<?php

class Inchoo_HelloDeveloper_Block_Adminhtml_Newgrid_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form

	{

	protected function _prepareForm()

	{

	$form = new Varien_Data_Form();

	$this->setForm($form);

	$fieldset = $form->addFieldset('forForm_form',array('legend'=>Mage::helper('Inchoo_HelloDeveloper')->__('Item information')));


	/*$fieldset->addField('id', 'text', array(

	'label' => Mage::helper('Inchoo_HelloDeveloper')->__('id'),

	'class' => 'required-entry',

	'required' => true,

	'name' => 'id',));*/

        $fieldset->addField('name', 'text', array(

            'label' => Mage::helper('Inchoo_HelloDeveloper')->__('name'),

            'class' => 'required-entry',

            'required' => true,

            'name' => 'name',));

	$fieldset->addField('age','text',array(
		'label'=>Mage::helper('Inchoo_HelloDeveloper')->__('Age'),
		'class'=>'required-entry',
		'required'=>true,
		'name'=>'age',));
	$fieldset->addField('mobile','text',array(
		'label'=>Mage::helper('Inchoo_HelloDeveloper')->__('Mobile'),
		'class'=>'required-entry',
		'required'=>true,
		'name'=>'mobile',));
        $fieldset->addField('address', 'text', array(

            'label' => Mage::helper('Inchoo_HelloDeveloper')->__('Address'),

            'class' => 'required-entry',

            'required' => true,

            'name' => 'address',));


	$fieldset->addField('content', 'editor', array(

	'name' => 'content',

	'label' => Mage::helper('Inchoo_HelloDeveloper')->__('Content'),

	'title' => Mage::helper('Inchoo_HelloDeveloper')->__('Content'),

	//'style' => 'width:700px; height:500px;',

	'wysiwyg' => false,

	'required' => true,));

	if ( Mage::getSingleton('adminhtml/session')->getlesson09Data() )

	{

	$form->setValues(Mage::getSingleton('adminhtml/session')->getlesson09Data());

	Mage::getSingleton('adminhtml/session')->setlesson09Data(null);

	} elseif ( Mage::registry('student') ) {

	$form->setValues(Mage::registry('student')->getData());

	}
	return parent::_prepareForm();

	}

	}