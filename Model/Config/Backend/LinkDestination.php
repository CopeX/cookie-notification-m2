<?php
/**
 * CopeX
 *
 * @category   CopeX
 * @package    CopeX_CookieNotification
 * @copyright  Copyright (c) 2017 CopeX (https://copex.io)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace CopeX\CookieNotification\Model\Config\Backend;

class LinkDestination implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $destination = array();

        $destination[] = [
            'value' => 1,
            'label' => __('Same Frame')
        ];
        $destination[] = [
            'value' => 2,
            'label' => __('New Window')
        ];

        return $destination;
    }
}
