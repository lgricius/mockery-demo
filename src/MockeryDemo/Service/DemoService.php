<?php
namespace MockeryDemo\Service;

use MockeryDemo\Helper\DateHelper;

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
        return $this->generateMessage($name);
    }

    /**
     * @param $name
     * @return string
     */
    private function generateMessage($name)
    {
        return sprintf(
            'Hello, %s! Current time is %s',
            $name,
            DateHelper::fullDate()
        );
    }
}