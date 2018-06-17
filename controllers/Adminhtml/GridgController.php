<?php
class Inchoo_HelloDeveloper_Adminhtml_GridgController extends Mage_Adminhtml_Controller_Action

{
	public function gridtableAction()
	{
		//die('grid is dying in Action');
		$this->loadLayout();
		$this->renderLayout();
		
	}
	public function grid2action()
	{
		$this->loadLayout();
		$this->getResponse()->setBody($this->getLayout()->createBlock('test/adminhtml_Gridtable_grid')->toHtml());
	}
	public function massDeleteAction()
	{

		$ids = $this->getRequest()->getParam('id');
		foreach($ids as $id)
		{
			Mage::getModel('student/student1')->load($id)->delete();
		}
		
		Mage::getSingleton('adminhtml/session')->addSuccess(count($ids).'   Record Deleted Successfully');
		$this->_redirect('*/*/gridtable');

	}
	public function grid3Action()
	{
		//die('dying in action');
		$this->loadLayout();
		$this->renderLayout();
		//$this->getResponse()->setBody($this->getLayout()->createBlock('test/adminhtml_student3_grid')->toHtml());
	}
    public function grid0Action()
    {
        //die('dying in action');
        $this->loadLayout();

        $this->getResponse()->setBody($this->getLayout()->createBlock('test/adminhtml_student3_grid')->toHtml());
    }



	public function newAction() {

	
	$this->_forward('edit');

	}
	public function editAction() {
		//die('grid controller died');

	$id = $this->getRequest()->getParam('id');

	$model = Mage::getModel('student/student')->load($id);

	

	if ($model->getId() || $id == 0) {

	$data = Mage::getSingleton('adminhtml/session')->getFormData(true);

	if (!empty($data)) {

	$model->setData($data);

	}

	 

	Mage::register('student', $model);

	 

	$this->loadLayout();

	$this->_setActiveMenu('student/id');

	 

	$this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));

	$this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

	 

	$this->_addContent($this->getLayout()->createBlock('test/adminhtml_newgrid_edit'))

	->_addLeft($this->getLayout()->createBlock('test/adminhtml_newgrid_edit_tabs'));

	$this->renderLayout();

	} else {

	Mage::getSingleton('adminhtml/session')->addError(Mage::helper('test')->__('Item does not exist'));

	$this->_redirect('*/*/');

	}

	}

	public function saveAction() {
		$data=$this->getRequest()->getParams();
		/*print_r($data);die('diedhhhh');*/
			$Model=Mage::getModel('student/student');
			$Model->setData($data)->setId($this->getRequest()->getParam('id'));
		
				if($Model->getCreatedTime()==NULL||$Model->getUpdateTime()== NULL)
				{
					$Model->setCreatedTime(now())->setUpdateTime(now());
				}else {
					$Model->setUpdateTime(now());
				}

				$Model->save();
				$this->_redirect('*/*/gridtable');

		
	}



		
}