<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 22/09/17
 * Time: 16:36
 */

namespace Redstage\Test\Block\Adminhtml;


use Magento\Backend\Block\Widget\Grid\Container;

class Test extends Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'Redstage_Test';
        $this->_controller = 'adminhtml_test';
        $this->_headerText = __('Items');
        $this->_addButtonLabel = __('Add New Item');
        parent::_construct();
    }
}