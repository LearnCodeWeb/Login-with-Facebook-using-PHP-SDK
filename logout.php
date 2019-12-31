<?php
include_once('fb-config.php');
session_destroy();
unset($_SESSION['fbUserId']);
unset($_SESSION['fbUserName']);
unset($_SESSION['fbAccessToken']);
header('location: https://learncodeweb.com/demo/php/login-with-facebook-using-php-sdk/index.php');
exit;
?>