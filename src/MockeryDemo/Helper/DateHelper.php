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
        echo 1;
        return date('c');
    }
}