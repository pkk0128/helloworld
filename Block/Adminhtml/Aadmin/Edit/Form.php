<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 4:13 PM
 */
class Inchoo_HelloDeveloper_Block_Adminhtml_Aadmin_Edit_Form extends Mage_Adminhtml_Block_Widget_Form

{

    protected function _prepareForm()

    {

        $form = new Varien_Data_Form(array(

                'id' => 'edit_form',

                'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),

                'method' => 'post',

                'enctype' => 'multipart/form-data'

            )

        );

        $form->setUseContainer(true);

        $this->setForm($form);

        return parent::_prepareForm();

    }

}