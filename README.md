# enjoy_vegan_hp
This is the Enjoy Vegan Japan website repo.

## Requirements
- PHP 7.1.10
- Apache Server

## Get Started
- Install all requirements
- `git clone https://github.com/KajiwaraMidori/enjoy_vegan_hp`
- `cd enjoy_vegan_hp`
- `LOCAL_DATABASE_URL = mysql://wp_vegan_server:09876@127.0.0.1/wp_vegan_db`
- `mysql.server start`
- `sudo apachectl start`
- open `http://localhost/wp-admin` in your favorite browser

## Shutting down
- `sudo apachectl stop`
- `mysql.server stop`

## Deploy to Heroku
- `heroku login`
- `heroku create`
- `heroku addons:add cleardb`
- `heroku addons:add sendgrid`
- `heroku addons:add memcachier`
- `heroku addons:add papertrail`
- `heroku addons:add newrelic`
- `CLEARDB_DATABASE_URL = mysql://root:123abc@127.0.0.1/my_wordpress_heroku_database_name`

heroku config:set AUTH_KEY=''
heroku config:set SECURE_AUTH_KEY=''
heroku config:set LOGGED_IN_KEY=''
heroku config:set NONCE_KEY=''
heroku config:set AUTH_SALT=''
heroku config:set SECURE_AUTH_SALT=''
heroku config:set LOGGED_IN_SALT=''
heroku config:set NONCE_SALT=''
Heroku config | grep CLEARDB_DATABASE_URL

mysql -u b9e73ed6c0c016 -p -h eu-cdbr-west-02.cleardb.net -D heroku_136fc16938ec963
then enter pw.

## Reference
- If experiencing permission issues, run `sudo chmod 755` to /vegan/enjoy_vegan_hp.
- `mysql -uroot` then `SHOW DATABASES;` to see list of databases.  
  https://dev.mysql.com/doc/refman/5.7/en/mysql.html
- This wordpress project uses [child themes](https://codex.wordpress.org/Child_Themes).
- MacOS
  - [How to install Wordpress on MacOS](https://qiita.com/purio/items/416a6762583c087ece61)    
  - [How to update MacOS PHP to the latest version](https://php-osx.liip.ch/)
  - Updates and theme/plugin installs will fail to work at first.  
    Set Apache's `httpd.conf`'s `User` setting to the Mac User,  
    and `sudo apachectl restart`
  - Open Apache's `/etc/apache2/httpd.conf` and:
    - Comment out 'LoadModule php5_module libexec/apache2/libphp5.so'
    - Set `DocumentRoot` and `Directory` to this repo's `index.php`
