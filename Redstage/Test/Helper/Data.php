<?php

namespace Redstage\Test\Helper;


use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_ENABLED = 'redstage/basic/enabled';

    public function isEnabled(){
        return $this->scopeConfig->getValue(self::XML_PATH_ENABLED,ScopeInterface::SCOPE_STORE);
    }

}