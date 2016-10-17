<?php
namespace MockeryDemoTest\Service;

use MockeryDemo\Service\DemoService;

class DemoServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Mockery\MockInterface
     */
    protected $serviceMock;

    /**
     * @test
     */
    public function sayHelloGeneratorWithNoName()
    {
        $name = 'DEMO';
        $date = date('c');

        $helperMock = \Mockery::mock('alias:MockeryDemo\Helper\DateHelper')
            ->shouldReceive('fullDate')
            ->andReturn($date)
            ->getMock();

        $this->serviceMock
            ->shouldReceive('sayHelloGenerator')
                ->with('DEMO')
                ->andReturn(
                    sprintf('Hello, %s! Current time is %s', $name, $date)
                )
            ->getMock();

        $service = (new \MockeryDemo\Service\DemoService())
            ->sayHelloGenerator($name);

        \Ass
    }

    protected function setUp()
    {
        $this->serviceMock = \Mockery::mock(DemoService::class);
    }
}
