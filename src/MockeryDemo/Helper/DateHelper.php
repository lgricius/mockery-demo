<?php
namespace MockeryDemo\Helper;

/**
 * Class DateHelper
 * @package MockeryDemo\Helper
 */
class DateHelper
{
    /**
     * @return bool|string
     */
    public static function fullDate()
    {
        print('asas');
        return date('c');
    }
}