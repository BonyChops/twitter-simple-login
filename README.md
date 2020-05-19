# Twitter-Simple-Login
OAuthで認証して、トークンを返します。  
Authenticate by using OAuth and get token.

# Warning
開発者の確認用なので、これをそのままユーザーの認証に使うのはおやめください。  
(それと、これは自分用に作ったやつなので多分ガバあります)  
Please DO NOT use this for user authentication. This is just for checking by developers.

# Setup
### Before you setup, you have to install these.
- [PHP](https://www.php.net/) 7.3 or more.
- [Apache](https://httpd.apache.org/) or some other software that can host a web page.

1. Locate this repo directory in a place where can access by browser thought internet (domain/URL is required).
2. Run this.
```
composer install
```
3. Go to [developer.twitter.com/](https://developer.twitter.com) and create your own app. Redirect URL must be `http(s)://path/to/here/callback.php`
1. Modify `config-sample.json` and rename to `config.json`.
1. Modify `.htaccess` to block user which is not you (follow instructions written in `.htaccess`).

# Get token
1. Access `login.php` and click `LOGIN`.
1. You will get access token and secret. Hooray!