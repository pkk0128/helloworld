<?php
/**
 * Created by PhpStorm.
 * User: pankaj
 * Date: 16/6/18
 * Time: 1:04 PM
 */
class Inchoo_HelloDeveloper_Adminhtml_AadminController extends Mage_Adminhtml_Controller_Action
{
    public function AadminAction()
    {
        //die('Aadmin is dying');
        $this->loadLayout();
        $this->renderLayout();
    }
    public function aamodelAction()
    {

       /* $new_product    = Mage::getModel('catalog/product');

        $new_product->setWebsiteIds(array(1));
        $new_product->setSku('lu-rtest');
        $new_product->setPrice(1235);
        $new_product->setCategoryIds(array(1));
        $new_product->setAttributeSetId(4);
        $new_product->setVisibility(1);
        $new_product->setType('Simple Product');
        $new_product->setName('Name');
        $new_product->setDescription('');
        $new_product->setShortDescription('');
        $new_product->setStatus(2);
        $new_product->setTaxClassId(2);
        $new_product->setWeight(0);
        $new_product->setCreatedAt(strtotime('now'));
        $new_product->save();
        die;*//* $new_product    = Mage::getModel('catalog/product');

        $new_product->setWebsiteIds(array(1));
        $new_product->setSku('lu-rtest');
        $new_product->setPrice(1235);
        $new_product->setCategoryIds(array(1));
        $new_product->setAttributeSetId(4);
        $new_product->setVisibility(1);
        $new_product->setType('Simple Product');
        $new_product->setName('Name');
        $new_product->setDescription('');
        $new_product->setShortDescription('');
        $new_product->setStatus(2);
        $new_product->setTaxClassId(2);
        $new_product->setWeight(0);
        $new_product->setCreatedAt(strtotime('now'));
        $new_product->save();
        die;*/


        //die('check');
        $collectioion = Mage::getModel('catalog/product')->getCollection();
        //print_r($collectioion->getData());
        //die('dying in aamodle controller');
        $this->loadLayout();
        $this->renderLayout();
    }
    public function gridfAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody($this->getLayout()->createBlock('test/adminhtml_Aadmin_grid')->toHtml());
    }

    public function gridpAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody($this->getLayout()->createBlock('test/adminhtml_Aamodel_grid')->toHtml());
    }
    public function newAction()
    {
        $this->_forward('edit');
    }
    public function editAction() {
        //die('grid controller died');
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('student/aadmin')->load($id);
        if ($model->getId() || $id == 0) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if (!empty($data))
            {
                $model->setData($data);
            }
            Mage::register('aadmin', $model);
            $this->loadLayout();
            $this->_setActiveMenu('aadmin/id');

            $this->_addContent($this->getLayout()->createBlock('test/adminhtml_Aadmin_edit'))

                ->_addLeft($this->getLayout()->createBlock('test/adminhtml_Aadmin_edit_tabs'));

            $this->renderLayout();

        } else {

            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('test')->__('Item does not exist'));

            $this->_redirect('*/*/Aadmin');

        }

    }
    public function saveAction() {
        $data=$this->getRequest()->getParams();
        $saveandeddit =$this->getRequest()->getParam('back');


        /*print_r($data);die('diedhhhh');*/
        $Model=Mage::getModel('student/aadmin');
        $Model->addData($data)->setId($this->getRequest()->getParam('id'));

        if($Model->getCreatedTime()==NULL||$Model->getUpdateTime()== NULL)
        {
            $Model->setCreatedTime(now())->setUpdateTime(now());
        }else {
            $Model->setUpdateTime(now());
        }

        $Model->save();
        if($saveandeddit)
        {
            $this->_redirect('*/*/edit',array('id'=>$this->getRequest()->getParam('id')));
        }else{
            $this->_redirect('*/*/aadmin');
        }



    }
}