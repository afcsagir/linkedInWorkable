<?php

session_start();

require "vendor/autoload.php";
require "LinkedIn.php";

use myPHPnotes\LinkedIn;

$app_id = "86n5i8r42kfexs";
$app_secret = "benLsRtY0aIczN8i";
$app_callback = "http://localhost:80/LinkedIn/callback.php";
$app_scopes = "r_emailaddress r_liteprofile";

$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);