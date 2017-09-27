<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 21/09/17
 * Time: 11:15
 */

namespace Redstage\Test\Test\Unit\Block;


use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Class TestTest
 * @package Redstage\Test\Test\Unit\Block
 */
class TestTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @var
     */
    protected $contextMock;


    /**
     * @var
     */
    protected $textBlock;


    /**
     * @var
     */
    protected $scopeConfig;

    protected function setUp(){
        $this->contextMock = $this->contextMock = $this->getMockBuilder('Magento\Framework\View\Element\Template\Context')
            ->disableOriginalConstructor()
            ->setMethods(['getScopeConfig'])
            ->getMock();

        $this->scopeConfig = $this->getMockBuilder('\Magento\Framework\App\Config')
            ->setMethods(['getValue'])
            ->disableOriginalConstructor()->getMock();

        $this->scopeConfig->expects($this->once())->method('getValue')
            ->with('test/more/more', \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
            ->willReturn('Hi, it\'s a test');

        $this->contextMock->expects($this->once())->method('getScopeConfig')->will($this->returnValue($this->scopeConfig));

        $this->textBlock = new \Redstage\Test\Block\Test($this->contextMock);
    }

    public function testMessage(){
        $this->assertNotEmpty($this->textBlock->getTestMessage());
    }
}