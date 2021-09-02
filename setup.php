<?php 
require_once("vendor/autoload.php");


$google=new Google_Client();
$google->setClientId('620454666411-nlnvo25ttohu7s3c47g8p2q0hn9m8tsg.apps.googleusercontent.com');
$google->setClientSecret('GzFw9KCyQLUmc1YN0YsdabS2');
$google->setredirectUri('http://localhost/payal/payalproject/profile.php');
$google->addScope('email');
$google->addScope('profile');
session_start();
?>