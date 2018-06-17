<?php
class Inchoo_HelloDeveloper_Adminhtml_PankajgController extends Mage_Adminhtml_Controller_Action
{
	public function pankaj_3aAction()
	{
		$student=array(
			array(
				'name'=>'Pankaj',
				'address'=>'Lucknow'),
			array (
				'name'=>'Saurabh',
				'address'=>'Gorakhpur'),
			array(
				'name'=>'Raj',
				'address'=>'Singarnagar')
			);
		/*$installer = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
        $installer->startSetup();
        $installer->getConnection()->insertArray(
            'table_name', 
            ['name', 'address']
            , $student
             );*/


//This is style 2 to insert


             Mage::getSingleton('core/resource')->getConnection('core_write')->insertArray(
            'table_name', 
            ['name', 'address']
            , $student
             );
			/*
			foreach($student as $array_to_insert)/* Importent hai check kar lo 
/*
{
	Mage::getModel('student/tablename')->setData($array_to_insert)->save();
}
die('All data has been Inserted');*/

// $model = Mage::getModel('student/tablename')->load(4);
// $model->addData(['name'=>'Ramzz33z','address'=>'','mobile'=>'','discreption'=>'',]);
// $model->save();
// die('Data has updated');
		/*$model= Mage::getModel('student/tablename')->getcollection()->getAllIds();
foreach($model as $id)
{
	Mage::getModel('student/tablename')->load($id)->delete();
}
die('all table data died'); */
		 /* getModel('model_handle_name/from model folder...filename table.php') */
		
		// $model->setData([ 'name'=>'pankaj','mobile'=>'12345'])
		//  $model->delete();
		//die ('Hello tablename Table is getting in  Controller...');
		// echo 'Pankaj_3a is running Now..';
		// $this->loadLayout();
		// $this->renderLayout();
		

	}
}