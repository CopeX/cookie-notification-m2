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

class Position implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $position = array();

        $position[] = [
            'value' => 'top',
            'label' => __('Top')
        ];
        $position[] = [
            'value' => 'bottom',
            'label' => __('Bottom')
        ];

        return $position;
    }
}
