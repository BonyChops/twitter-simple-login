<title>Twitter OAuth LOGIN Result</title>
<?php
session_start();
print("These access token won't keep automatically so keep it by yourself!\n<a href=\"logout.php\">LOGOUT</a><br><h1>Access Token</h1>\n<pre><code>");
var_dump($_SESSION['ACCESS_TOKEN']);
print("</pre></code><h1>User Data</h1>\n<pre><code>");
var_dump($_SESSION['USER_INFO']);
print("</pre></code>");
?>