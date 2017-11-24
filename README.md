# enjoy_vegan_hp
This is the Enjoy Vegan Japan website repo.

## Requirements
- PHP 7.1.10
- Apache Server

## Get Started
- Install all requirements
- Open Apache's `httpd.conf` and
  set `DocumentRoot` and `Directory` to this repo's `index.php`
- `git clone https://github.com/KajiwaraMidori/enjoy_vegan_hp`
- `cd enjoy_vegan_hp`
- `mysql.server start`
- `mysql -uroot`
- `mysql> CREATE USER 'wp_vegan_server'@'localhost' IDENTIFIED BY '09876';`
- `mysql> CREATE DATABASE wp_vegan_db;`
- `mysql> GRANT all privileges ON wp_vegan_db.* TO 'wp_vegan_server'@'localhost';`
- `mysql> QUIT;`
- `sudo apachectl start`
- goto `localhost`

## Shutting down
- `sudo apachectl stop`
- `mysql.server stop`

## Reference
- If experiencing permission issues, run `sudo chmod 755` to /vegan/enjoy_vegan_hp.
- `mysql -uroot` then `SHOW DATABASES;` to see list of databases.  
  https://dev.mysql.com/doc/refman/5.7/en/mysql.html
- MacOS
  - [How to install Wordpress on MacOS](https://qiita.com/purio/items/416a6762583c087ece61)    
  - [How to update MacOS PHP to the latest version](https://php-osx.liip.ch/)
  - Updates and theme/plugin installs will fail to work at first.  
    Set Apache's `httpd.conf`'s `User` setting to the Mac User,  
    and `sudo apachectl restart`
  - Open Apache's `/etc/apache2/httpd.conf` and:
    - Comment out 'LoadModule php5_module libexec/apache2/libphp5.so'
    - Set `DocumentRoot` and `Directory` to this repo's `index.php`
