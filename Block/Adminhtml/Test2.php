<?php
class Inchoo_HelloDeveloper_Block_Adminhtml_Test2 extends Mage_Adminhtml_Block_Template {

	public function __construct()
	{

	}
	public function Test2Block()
	{
		$model=Mage::getModel('student/student2'); /*model handle/model name(entity)*/
		$model->setData('name','pankaj_test2');
		try{
			$model->save(); /*die('name set success');*/
		}catch(\Exception $ex) 
		{
			echo $ex->getMassage();/*die('name set fail');*/
		}
	}
}