<?php 
class Inchoo_HelloDeveloper_Adminhtml_RamController extends Mage_Adminhtml_Controller_Action
{
	public function PankajramAction()
	{
		/*$model = Mage::getModel('student/student1');

		$model->setData(
			[
			
			'name'=>'sss',
			'mobile'=>'44444'

			]);

		$model->save();*/
		/*$model = Mage::getModel('student/student1')->load(2);
		$model->setData('name','ssssdfffggfhdfgdf');
		$model->save();*/
		/*$model = Mage::getModel('student/student1')->getCollection()->addFieldToFilter('name',array('like'=>'sss'));*/

		$model = Mage::getModel('student/student1')->load(1);

		print_r($model->delete());
		echo 'Pankaj ram is running now..';
	}
}