<?php
class Inchoo_HelloDeveloper_Adminhtml_RajController extends Mage_Adminhtml_Controller_Action 
{
	public function PankajAction()
	{
		$helper = Mage::Helper('Inchoo_HelloDeveloper');
		echo get_class($helper);
		$this->Test.php;
		echo 'Hello Raj';
	}
	public function RajAction()
	{
		echo 'Hello Raj Once again..';
	}

	public function Pankaj_2Action()
	{
		echo 'Welcome Pankaj_2 Once Again';
	}
	public function pankaj_3Action()
	{
		echo 'Pankaj_3 is running Now..';
	}
	
}