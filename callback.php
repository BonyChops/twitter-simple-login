<?php
include_once __DIR__.'/define.php';
use Abraham\TwitterOAuth\TwitterOAuth;

session_start();
//oauth_tokenとoauth_verifierを取得
if($_SESSION['oauth_token'] == $_GET['oauth_token'] and $_GET['oauth_verifier']){

	//Twitterからアクセストークンを取得する
	$connection = new TwitterOAuth(Consumer_Key, Consumer_Secret, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
	$access_token = $connection->oauth('oauth/access_token', array('oauth_verifier' => $_GET['oauth_verifier'], 'oauth_token'=> $_GET['oauth_token']));

	//取得したアクセストークンでユーザ情報を取得
	$user_connection = new TwitterOAuth(Consumer_Key, Consumer_Secret, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user_info = $user_connection->get('account/verify_credentials');

    print("These access token won't keep automatically so keep it by yourself!\n<a href=\"logout.php\">LOGOUT</a><br><h1>Access Token</h1>\n<pre><code>");
    var_dump($access_token);
    print("</pre></code><h1>User Data</h1>\n<pre><code>");
    var_dump($user_info);
    print("</pre></code>");
	exit();
}else{
	print("You have to access login.php first!");
	exit();
}
