<?php

namespace Redstage\Test\Test\Integration\Model;


class TestTest extends \PHPUnit_Framework_TestCase
{
    protected $_model;

    protected function setUp()
    {
        $this->_model = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
            \Redstage\Test\Model\Test::class
        );
    }

    public function testCRUD(){
        $this->_model->setName('teste 1')
                ->setEmail('teste@teste.com.br')
                ->setComment('Esse e um test');

        $crud = new \Magento\TestFramework\Entity($this->_model, ['name' => 'teste 2']);
        $crud->testCrud();
    }
}