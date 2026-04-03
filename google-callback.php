<?php
session_start();

require 'vendor/autoload.php';
require 'config.php';

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])) {

        $client->setAccessToken($token['access_token']);

        $google_service = new Google_Service_Oauth2($client);

        $data = $google_service->userinfo->get();

        $_SESSION['user_name'] = $data->name;
        $_SESSION['user_email'] = $data->email;
        $_SESSION['user_picture'] = $data->picture;

        echo "Welcome " . $_SESSION['user_name'] . "<br>";

    }

}

?>