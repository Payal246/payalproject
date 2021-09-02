<?php
error_reporting(0);
require_once("setup.php");


if(isset($_GET['code'])){

    $token=$google->fetchAccessTokenWithAuthCode($_GET['code']);

    $_SESSION['token']=$token;
    if(!isset($token['error']))
    {
        $google->setAccessToken($token['access_token']);
        $service=new Google_Service_Oauth2($google);

        $data=$service->userinfo->get();
        $_SESSION['email']=$data['email'];
        //$email=$_SESSION['emil'];
        
        header("location:dashboard.php");
       
    }
}



?>

