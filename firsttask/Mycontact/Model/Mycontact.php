<?php
//
//namespace firsttask\Mycontact\Model;
//
//class Mycontact extends \Magento\Framework\Model\AbstractModel
//{
//
//
//    protected function _construct()
//    {
//        $this->_init('firsttask\Mycontact\Model\ResourceModel\Mycontact');
//    }
//
//
////   public function getAvailableStatuses()
////    {
////
////
////        $availableOptions = ['1' => 'Enable',
////            '0' => 'Disable'];
////
////        return $availableOptions;
////    }
//}
//


namespace firsttask\Mycontact\Model;
use Magento\Framework\Model\AbstractModel;
use firsttask\Mycontact\Model\ResourceModel\Mycontact as MycontactResourceModel;

class Mycontact extends \Magento\Framework\Model\AbstractModel {

    protected function _construct() {
        $this->_init(MycontactResourceModel::class);
    }
}
