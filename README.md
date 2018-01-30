# enjoy_vegan_hp
This is the Enjoy Vegan Japan website repo.

## Requirements
- PHP 7.1.10
- Apache Server

## Get Started
- Install all requirements
- `git clone https://github.com/KajiwaraMidori/enjoy_vegan_hp`
- `cd enjoy_vegan_hp`
- `mysql.server start`
- `mysql -uroot`
- `CREATE USER 'wp_vegan_server'@'localhost' IDENTIFIED BY '09876';`
- `CREATE DATABASE wp_vegan_db;`
- `GRANT all privileges ON wp_vegan_db.* TO 'wp_vegan_server'@'localhost';`
- `QUIT;`
- `mysql.server start`
- `sudo apachectl start`
- open `http://localhost/wp-admin` in your favorite browser

## Shutting down
- `sudo apachectl stop`
- `mysql.server stop`

## Deploy to Heroku
- The `dev` branch is already live on heroku [here][https://enjoy-vegan.herokuapp.com/].
- However, here's how to deploy to heroku from scratch:
  - `heroku login`
  - go to this repo's directory (`cd enjoy_vegan_hp`)
  - `heroku create`
  - `heroku addons:add cleardb`
  - `heroku addons:add sendgrid`
  - `heroku addons:add memcachier`
  - `heroku addons:add papertrail`
  - A couple of envvars will be automatically generated by the addons,  
    including `CLEARDB_DATABASE_URL`.
  - [Log into heroku dashboard][https://dashboard.heroku.com],  
    and connect this Github repo to the newly created app.
  - Deplooooooooy

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
