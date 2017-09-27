<?php

namespace Redstage\Test\Model\ResourceModel\Test;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected $storeManager;

    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        parent::__construct(
            $entityFactory, $logger,
            $fetchStrategy, $eventManager,
            $connection,
            $resource);
        $this->storeManager = $storeManager;
    }

    protected function _construct()
    {
        parent::_construct('Redstage\Test\Model\Test', 'Redstage\Test\Model\ResourceModel\Test');
    }
}