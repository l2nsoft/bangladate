<?php
namespace bangladate;


class EnglishDateInBangla extends DateTimeRef
{

    private $date = '';
    private $cDate = '';
    private $format = '';

    public function __construct($time = "now" , $timezone = "Asia/Dhaka")
    {
        parent::__construct($time);
        $this->_setTimezone($timezone);
    }


    private function set_format($format = 'F - j,Y')
    {
        $this->format = $format;
    }


    private function convert_into_output_format()
    {
        $this->date = $this->_format($this->format);
    }


    private function convert_into_bangla()
    {
        $engArray = array(
            1,2,3,4,5,6,7,8,9,0,
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
            'am', 'pm', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
        );

        $bangArray = array(
            '১','২','৩','৪','৫','৬','৭','৮','৯','০',
            'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
            'সকাল', 'দুপুর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
        );

        $this->cDate = str_replace($engArray, $bangArray, $this->date);
    }

    public function get_date($format = 'd-m-Y')
    {
        $this->set_format($format);
        $this->convert_into_output_format();
        $this->convert_into_bangla();
        return $this->cDate;
    }

}
