<?php

namespace RedStage\Test\Model;


use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;


    const CACHE_TAG = 'redstage_test';

    protected $_cacheTag = 'redstage_test';

    protected $_eventPrefix = 'redstage_test';


    protected function _construct()
    {
        $this->_init('Redstage\Test\Model\ResourceModel\Test');
    }

    public function getIdentities(){
        return [self::CACHE_TAG.'_'.$this->getId(), self::CACHE_TAG.'_'.$this->getId()];
    }

    public function getAvailableStatuses(){
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }

}