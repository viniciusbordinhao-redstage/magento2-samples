<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 21/09/17
 * Time: 15:15
 */

namespace Redstage\Test\Test\Unit\Model;


use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Class Test
 * @package Redstage\Test\Test\Unit\Model
 */
class TestTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $_model;

    protected function setUp(){
        $this->_model = (new ObjectManager($this))->getObject('Redstage\Test\Model\Test');
    }

    public function testIdentities(){
        $this->assertTrue(is_array($this->_model->getIdentities()));
    }

    public function testAvailableStatuses(){
        $this->assertTrue(is_array($this->_model->getAvailableStatuses()));
    }

}