<?php

require "init.php";

if ($_GET['state'] != $_SESSION['linkedincsrf']) {
    die("INVALID REQUEST");
}

$accessToken = $linkedin->getAccessToken($_GET['code']);
 
if (!$accessToken) {
    die("NO ACCESS TOKEN FOUND. LOGIN AGAIN");
}
//var_dump($accessToken);
// die();
//$_SESSION['linkedInAccessToken'] = $accessToken;
// print_r($accessToken);
 header("location: ./profile.php");
  die();