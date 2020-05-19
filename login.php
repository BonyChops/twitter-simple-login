<title>Twitter OAuth LOGIN</title>
<?php
include_once __DIR__.'/define.php';
use Abraham\TwitterOAuth\TwitterOAuth;


if(!isset($_GET['ready']) || ($_GET['ready'] != "true")){
    print("<h1>Final Check</h1>\nIs it all right?<pre><code>");
    var_dump($config);
    print("</pre></code>\nIf it so, then <a href=\"login.php?ready=true\">LOGIN</a> !!!");
    exit;
}

$connection = new TwitterOAuth(Consumer_Key, Consumer_Secret);
$request_token = $connection->oauth("oauth/request_token", array("oauth_callback" => Callback));
$url = $connection->url("oauth/authorize", array("oauth_token" => $request_token['oauth_token']));
session_start();
$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
header('Location: ' . $url);