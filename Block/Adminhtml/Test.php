<?php  

class Inchoo_HelloDeveloper_Block_Adminhtml_Test extends Mage_Adminhtml_Block_Template {

    public function __construct()
    {
       
    }

  public function getStudent(){

        //$model = Mage::getModel('student/student');


//addd data
     /*   $model->setData('name','yyy');
        $model->setData('age',2);
        $model->setData('mobile',666666);
        
        try{
            $model->save();die('saved success');
        }catch(\Exception $ex)
        {
            echo $ex->getMessage();die('excetions');
        }*/

        // get data 
/*$model = Mage::getModel('student/student')->getCollection()->addFieldToFilter('id',array('in'=>[1,2]));*/

//update data 

$model = Mage::getModel('student/student')->load(2);

$model->setData('name','lll');

        $model->setData('age',2);
        $model->setData('mobile',33);
try{
            $model->save();die('saved success');
    }catch(\Exception $ex)
    {
        echo $ex->getMessage();die('excetions');
    }


    // dELETE   

/*
$model = Mage::getModel('student/student')->load(2);
       $model->delete();   */ 
  

$model = Mage::getModel('student/student')->load('yyy','name'); // load by field
print_r($model->getData());

    
       //die('get studenrt');
  }

    public function getAmazonCategories(){
        $optionValue = [
            "All","Baby","Beauty","Blended","Books","Collectibles","Electronics","Fashion","FashionBaby","FashionBoys",
            "FashionGirls","FashionMen","FashionWomen","GiftCards","Grocery","HealthPersonalCare","HomeGarden",
            "Industrial","KindleStore","LawnAndGarden","Luggage","MP3Downloads","Magazines","Merchants","MobileApps",
            "Movies","Music","MusicalInstruments","OfficeProducts","PCHardware","PetSupplies","Software",
            "SportingGoods","Tools","Toys","UnboxVideo","VideoGames","Wine","Wireless"
               ];
        return $optionValue;
    }

}