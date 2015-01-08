<?php
namespace bangladate;

class DateTimeRef extends  \DateTime
{

    public function __construct($time = "now", \DateTimeZone $timezone = null)
    {
        parent::__construct($time, $timezone);
    }


    protected function _setTimezone($timezone = 'Asia/Dhaka')
    {
        parent::setTimezone(new \DateTimeZone($timezone));
    }


    protected function _setDate($year = '', $month = '', $day = '')
    {
        if ( ! empty($year) && $year != '' && isset($year) && is_int($year)
            && ! empty($month) && $month != '' && isset($month) && is_int($month)
            && ! empty($day) && $day != '' && isset($day) && is_int($day))
        {
            parent::setDate($year, $month, $day);
        }
    }


    protected function _setTime($hour = '', $minute = '', $second = '')
    {
        if ( ! empty($hour) && $hour != '' && isset($hour) && is_int($hour)
            && ! empty($minute) && $minute != '' && isset($minute) && is_int($minute)
            && ! empty($second) && $second != '' && isset($second) && is_int($second))
        {
            parent::setTime($hour, $minute, $second);
        }
    }


    protected function _format($format = 'd-m-Y')
    {
        return parent::format($format);
    }


    protected function _getTimezone()
    {
        return parent::getTimezone();
    }


    protected function _getTimestamp()
    {
        return parent::getTimestamp();
    }


}
