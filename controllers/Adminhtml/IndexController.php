<?php
 
class Inchoo_HelloDeveloper_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
    	$helper = Mage::Helper('Inchoo_HelloDeveloper');
    	get_class($helper);
    	$helper->test();
        //echo 'Hello developer...';
    }
 
    public function rajAction()
    {

    	$this->loadLayout();
    	$this->renderLayout();
      
    }
    public function gridAction()
    {
        //die('grid controller is dying');
        $this->loadLayout();
        $this->renderLayout();
    }
}
?>