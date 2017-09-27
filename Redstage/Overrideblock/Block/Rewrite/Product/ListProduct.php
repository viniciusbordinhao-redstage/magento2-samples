<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 26/09/17
 * Time: 16:46
 */

namespace Redstage\Overrideblock\Block\Rewrite\Product;


class ListProduct extends \Magento\Catalog\Block\Product\ListProduct
{
    protected function _getProductCollection()
    {
        parent::_getProductCollection();
        $this->_productCollection->addAttributeToSelect('redstage_zibby_leasable');

        return $this->_productCollection;
    }
}