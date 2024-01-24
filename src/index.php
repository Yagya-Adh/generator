<?php
use Yagya\Generator\OTP\OTP;

require_once __DIR__ . "./../vendor/autoload.php";

$otp = new OTP();

// generate 5 digits otp ;
// echo $otp->otp(5);

// var_dump($otp->otp(5));

echo "<h1>" . OTP::$title . "</h1>";
echo "<br>" . "<p>Please reload  to generate otp here</p>" . "<br/>" . "<span>soon we update its features,thank you. </span>";
print_r($otp->otp(5));


