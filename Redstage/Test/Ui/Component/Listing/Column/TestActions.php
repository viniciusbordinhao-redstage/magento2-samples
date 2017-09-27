<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 22/09/17
 * Time: 16:42
 */

namespace Redstage\Test\Ui\Component\Listing\Column;


use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class TestActions extends Column
{

    public function __construct(ContextInterface $context, UiComponentFactory $uiComponentFactory, array $components = [], array $data = [])
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        return $dataSource;
    }
}