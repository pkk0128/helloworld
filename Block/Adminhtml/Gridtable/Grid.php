<?php
class Inchoo_HelloDeveloper_Block_Adminhtml_Gridtable_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	//die('dying in grid..')
	public function __construct()
    {

        parent::__construct();
        $this->setId('inchoo_order_grid');
        $this->setDefaultSort('increment_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }
 
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('student/student')->getCollection();
           
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }
 
    protected function _prepareColumns()
    {
        $helper = Mage::helper('Inchoo_HelloDeveloper');
        $currency = (string) Mage::getStoreConfig(Mage_Directory_Model_Currency::XML_PATH_CURRENCY_BASE);
 
        $this->addColumn('id', array(
            'header' => $helper->__('id'),
            'index'  => 'id' // YE COULMN HAI
        ));
 
        $this->addColumn('name', array(
            'header' => $helper->__('name'),
            'type'   => 'text',
            'index'  => 'name'
        ));
        $this->addColumn('age', array(
            'header' => $helper->__('age'),
            'type'   => 'text',
            'index'  => 'age'
        ));
        $this->addColumn('mobile', array(
            'header' => $helper->__('Mobile'),
            'type'   => 'text',
            'index'  => 'mobile'
        ));
        $this->addColumn('address', array(
            'header' => $helper->__('Address'),
            'type'   => 'text',
            'index'  => 'address'
        ));
        $this->addColumn('action',
            array(
                'header'    => Mage::helper('catalog')->__('Action'),
                'width'     => '50px',
                'type'      => 'action',
                'getter'     => 'getId',
                'actions'   => array(
                    array(
                        'caption' => Mage::helper('catalog')->__('Edit'),
                        'url'     => array(
                            'base'=>'*/*/edit',
                            'params'=>array('store'=>$this->getRequest()->getParam('store'))
                        ),
                        'field'   => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
            ));
        /*$this->addColumn('products', array(
            'header'       => $helper->__('Products Purchased'),
            'index'        => 'products',
            'filter_index' => '(SELECT GROUP_CONCAT(\' \', x.name) FROM sales_flat_order_item x WHERE main_table.entity_id = x.order_id AND x.product_type != \'configurable\')'
        ));*/
 
        // $this->addColumn('address', array(
        //     'header'       => $helper->__('Name'),
        //     'index'        => 'address',
        //    ));
 
        // $this->addColumn('city', array(
        //     'header' => $helper->__('City'),
        //     'index'  => 'city'
        // ));
 
        // $this->addColumn('country', array(
        //     'header'   => $helper->__('Country'),
        //     'index'    => 'country_id',
        //     'renderer' => 'adminhtml/widget_grid_column_renderer_country'
        // ));
 
        // $this->addColumn('customer_group', array(
        //     'header' => $helper->__('Customer Group'),
        //     'index'  => 'customer_group_code'
        // ));
 
        // $this->addColumn('grand_total', array(
        //     'header'        => $helper->__('Grand Total'),
        //     'index'         => 'grand_total',
        //     'type'          => 'currency',
        //     'currency_code' => $currency
        // ));
 
        // $this->addColumn('shipping_method', array(
        //     'header' => $helper->__('Shipping Method'),
        //     'index'  => 'shipping_description'
        // ));
 
        // $this->addColumn('order_status', array(
        //     'header'  => $helper->__('Status'),
        //     'index'   => 'status',
        //     'type'    => 'options',
        //     'options' => Mage::getSingleton('sales/order_config')->getStatuses(),
        // ));
 
        $this->addExportType('*/*/exportInchooCsv', $helper->__('CSV'));
        $this->addExportType('*/*/exportInchooExcel', $helper->__('Excel XML'));
 
        return parent::_prepareColumns();
    }
 
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid2', array('_current'=>true));
    }

    public function _prepareMassaction()
    {
        $this->setMassactionIdField('id');
        $this->getMassactionBlock()->setFormFieldName('id');
        $this->getMassactionBlock()->addItem('Delete',array(
            'label'=>Mage::helper('Inchoo_HelloDeveloper')->__('Delete'),
            'url'=>$this->getUrl('*/*/massDelete'),
            'confirm'=>Mage::helper('Inchoo_HelloDeveloper')->__('Are you sure')
            ));
        $this->getMassactionBlock()->addItem('Edit',array(
            'label'=>Mage::helper('Inchoo_HelloDeveloper')->__('Edit'),
            'url'=>$this->getUrl('*/*/massEdit'),
            'confirm'=>Mage::helper('Inchoo_HelloDeveloper')->__('Are you sure')
        ));
        return $this;
    }
}