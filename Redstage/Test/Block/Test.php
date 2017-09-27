<?php

namespace Redstage\Test\Block;

class Test extends \Magento\Framework\View\Element\Template
{

    public function getTestMessage(){
        $message = $this->_scopeConfig->getValue('test/more/more', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $message;
    }
}