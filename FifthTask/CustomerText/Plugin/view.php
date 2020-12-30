<?php

namespace FifthTask\CustomerText\Plugin;
use Magento\Customer\Api\Data\CustomerInterface;

class view 
{
    public function afterGetCustomerName(\Magento\Customer\Helper\View $subject,$result,CustomerInterface $customerData)
        
    {
        return $result.'Customer';
}

}
