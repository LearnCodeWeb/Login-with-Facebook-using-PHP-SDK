<?php
session_start();
include_once('php-graph-sdk-5.x/src/Facebook/autoload.php');
$fb = new Facebook\Facebook(array(
	'app_id' => '', // Replace with your app id
	'app_secret' => '',  // Replace with your app secret
	'default_graph_version' => 'v3.2',
));

$helper = $fb->getRedirectLoginHelper();
?>