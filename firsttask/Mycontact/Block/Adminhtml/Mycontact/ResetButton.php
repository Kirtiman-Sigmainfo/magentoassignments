<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace firsttask\Mycontact\Block\Adminhtml\Mycontact;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class ResetButton
 */
class ResetButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Reset'),
            'class' => 'reset',
            'on_click' => 'location.reload();',
            'sort_order' => 30
        ];
    }
}
