<?php

namespace Redstage\Test\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Framework\Registry;

abstract class Test extends Action
{
    /**
     * @var Registry|null
     */
    protected $coreRegistry = null;

    public function __construct(Action\Context $context, Registry $coreRegistry)
    {
        $this->coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    public function initPage($resultPage){
        $resultPage->setActiveMenu('Redstage_Test::redstage_test')
            ->addBreadcrumb(__('Test'), __('Test'))
            ->addBreadcrumb(__('Items'),__('Items'));

        return $resultPage;
    }

    protected function _isAllowed(){
        return $this->_authorization->isAllowed('Redstage_Test::test_menu');
    }

}