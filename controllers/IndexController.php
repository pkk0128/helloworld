<?php
 
class Inchoo_HelloDeveloper_IndexController extends Mage_Core_Controller_Front_Action
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
        //echo 'Hello one more time..Raj.';
        $this->loadLayout();
        $this->renderLayout();
    }
    
}
?>