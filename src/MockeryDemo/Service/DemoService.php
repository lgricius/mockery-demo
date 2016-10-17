<?php
namespace MockeryDemo\Service;

/**
 * Class DemoService
 * @package MockeryDemo\Service
 */
class DemoService
{
    /**
     * @param $name
     * @return string
     */
    public function sayHelloGenerator($name)
    {
        return $this->generateMessage(
            $name,
            \MockeryDemo\Helper\DateHelper::fullDate()
        );
    }

    /**
     * @param string $name
     * @param string $date
     * @return string
     */
    protected function generateMessage($name, $date)
    {
        return sprintf(
            'Hello, %s! Current time is %s',
            $name,
            $date
        );
    }
}