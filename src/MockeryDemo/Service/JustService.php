<?php
namespace MockeryDemo\Service;

/**
 * Class JustService
 */
class JustService
{
    /**
     * @var DemoService
     */
    protected $service;

    /**
     * JustService constructor.
     *
     * @param DemoService $service
     */
    public function __construct(DemoService $service)
    {
        $this->service = $service;
    }

    /**
     * @param $name
     * @return string
     */
    public function makeTitle($name)
    {
        return $this->service->sayHelloGenerator($name);
    }

    /**
     * Returns Service
     *
     * @return DemoService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set service
     *
     * @param DemoService $service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}