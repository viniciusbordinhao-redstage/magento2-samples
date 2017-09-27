<?php
/**
 * Created by PhpStorm.
 * User: viniciusbord9
 * Date: 21/09/17
 * Time: 16:15
 */

namespace Redstage\Test\Test\Unit\Helper;


/**
 * Class DataTest
 * @package Redstage\Test\Test\Unit\Helper
 */
class DataTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @var
     */
    protected $objectManagerHelper;


    /**
     * @var
     */
    protected $scopeConfigMock;

    /**
     * @var
     */
    protected $customerSessionMock;

    /**
     * @var
     */
    protected $customerViewHelperMock;

    /**
     * @var
     */
    protected $helper;


    protected function setUp(){
        $this->objectManagerHelper = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $className = '\Redstage\Test\Helper\Data';
        $arguments = $this->objectManagerHelper->getConstructArguments($className);

        $context = $arguments['context'];
        $this->scopeConfigMock = $context->getScopeConfig();
        //$this->customerSessionMock = $arguments['customerSession'];
        //$this->customerViewHelperMock = $arguments['customerViewHelper'];
        $this->helper = $this->objectManagerHelper->getObject($className, $arguments);
    }

    public function testIsEnabled()
    {
        $this->scopeConfigMock->expects($this->once())
            ->method('getValue')
            ->willReturn('1');

        $this->assertTrue(is_string($this->helper->isEnabled()));
    }


}