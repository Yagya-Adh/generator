<?php

namespace Yagya\Generator\OTP;

class OTP
{

    public static $title = "YAGYA OTP GENERATOR";

    public function otp($num)
    {
        $random_num = "1236789045";
        $result = "";
        for ($i = 1; $i <= $num; $i++) {
            $result .= substr($random_num, (rand() % (strlen($random_num))), 1);
        }
        return $result;
    }
}