<?php
/**
 * CopeX
 *
 * @category   CopeX
 * @package    CopeX_CookieNotification
 * @copyright  Copyright (c) 2017 CopeX (https://copex.io)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace CopeX\CookieNotification\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue($config_path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
