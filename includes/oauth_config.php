<?php
require_once "../google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("1052238463611-e7t0t34hdmtu192nubi5p33bugfalh05.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://127.0.0.1:8000/php/login.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>