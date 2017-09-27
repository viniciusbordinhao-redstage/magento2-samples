<?php

namespace Redstage\Test\Test\Unit\Controller\Index;


/**
 * Class IndexTest
 * @package Redstage\Test\Test\Unit\Controller\Index
 */
class IndexTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $_scopeConfig;

    /**
     * @var
     */
    protected $_url;


    /**
     * @var
     */
    protected $_view;


    /**
     * @var
     */
    protected $_controller;


    /**
     * @var
     */
    protected $resultPage;


    protected function setUp()
    {
         $context = $this->getMock(
            '\Magento\Framework\App\Action\Context',
            ['getRequest', 'getResponse', 'getView', 'getUrl'],
            [],
            '',
            false
        );

        $this->_url = $this->getMockForAbstractClass('\Magento\Framework\UrlInterface', [], '', false);

        $context->expects($this->any())
            ->method('getUrl')
            ->will($this->returnValue($this->_url));

        $context->expects($this->any())
            ->method('getRequest')
            ->will($this->returnValue(
                $this->getMockForAbstractClass('\Magento\Framework\App\RequestInterface', [], '', false)
            ));

        $context->expects($this->any())
            ->method('getResponse')
            ->will($this->returnValue(
                $this->getMockForAbstractClass('\Magento\Framework\App\ResponseInterface', [], '', false)
            ));

        $this->_view = $this->getMock(
            '\Magento\Framework\App\ViewInterface',
            [],
            [],
            '',
            false
        );


        $this->resultPage = $this->getMockBuilder(\Magento\Backend\Model\View\Result\Page::class)
            ->disableOriginalConstructor()
            ->getMock();

        $resultPageFactory = $this->getMockBuilder(\Magento\Framework\View\Result\PageFactory::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();

        $resultPageFactory->expects($this->atLeastOnce())
            ->method('create')
            ->willReturn($this->resultPage);

        $this->_controller = new \Redstage\Test\Controller\Index\Index(
            $context, $resultPageFactory
        );
    }

    public function testExecute()
    {
        $this->_controller->execute();
    }

}