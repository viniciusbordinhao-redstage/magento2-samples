<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 20/09/17
 * Time: 10:52
 */

namespace Redstage\Test\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Test extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('redstage_contact', 'id');
    }
}