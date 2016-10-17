<?php
namespace MockeryDemoTest\Service;

use MockeryDemo\Service\JustService;

/**
 * Class JustServiceTest
 *
 * @package MockeryDemoTest\Service
 */
class JustServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Mockery\MockInterface
     */
    protected $helperMock;

    /**
     * @test
     */
    public function makeTitleWithName()
    {
        $name = 'MyName';
        $date = date('c');
        $title = sprintf('Hello, %s! Current time is %s', $name, $date);

        // Playing with static
        $this->helperMock
            ->shouldReceive('fullDate')
            ->once()
            ->andReturn($date)
            ->getMock();

        $demoServiceMock = \Mockery::mock('\MockeryDemo\Service\DemoService')
            // allow protected
            ->shouldAllowMockingProtectedMethods()
            // allow calls to original class
            ->shouldDeferMissing();

        // mocking expectations
        $demoServiceMock->shouldReceive('generateMessage')
            ->with($name, $date)
            ->once()
            ->andReturn($title);

        $service = new JustService($demoServiceMock);
        $result = $service->makeTitle($name);

        static::assertEquals($title, $result);
    }

    /**
     * Initial setup
     */
    protected function setUp()
    {
        $this->helperMock = \Mockery::mock('alias:\MockeryDemo\Helper\DateHelper');
    }

    /**
     * Cleanup and Mockery stuff
     */
    protected function tearDown()
    {
        \Mockery::close();
    }
}
