<?php
require __DIR__."vendor/autoload.php";
if(!file_exists(__DIR__."/config.json")){
    print("You have to setup first! Read README.md to get more information.");
    exit;
}
$data = json_decode(file_get_contents(__DIR__."/config.json"), true);
define("Consumer_Key", $data['accessToken']);
define("Consumer_Secret", $data['accessTokenSecret']);
define('Callback', $data['redirectURL']);