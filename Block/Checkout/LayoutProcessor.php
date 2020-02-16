<?php

namespace Yu\Checkout\Block\Checkout;

class LayoutProcessor implements \Magento\Checkout\Block\Checkout\LayoutProcessorInterface
{

    /**
     * Process js Layout of block
     *
     * @param array $jsLayout
     * @return array
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function process($jsLayout)
    {
        if (!isset($jsLayout['components']['checkout']['children']['sidebar']['children']['shipping-information'])) {
            unset($jsLayout['components']['checkout']['children']['sidebar']['children']['shipping-information']);
        }
        
        if (!isset($jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['totals'])) {
            unset($jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['totals']);
        }

        return $jsLayout;
    }

}
