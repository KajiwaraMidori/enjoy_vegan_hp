# enjoy_vegan_hp
This is the Enjoy Vegan Japan website repo.

## Requirements
- PHP
- Apache Server

## Get Started
- Install all requirements
- `git clone https://github.com/KajiwaraMidori/enjoy_vegan_hp`
- `cd enjoy_vegan_hp`
- `mysql.server start`
- `mysql -uroot`
- `mysql> CREATE USER 'wp_vegan_server'@'localhost' IDENTIFIED BY '09876';`
- `mysql> CREATE DATABASE wp_vegan_db;`
- `mysql> GRANT all privileges ON wp_vegan_db.* TO 'wp_vegan_server'@'localhost';`
- `mysql> QUIT;`
- `sudo apachectl start`

## Shutting down
- `sudo apachectl stop`
- `mysql.server stop`

## Reference
- If experiencing permission issues, run `sudo chmod drwxr-xr-x`.
- MacOS Wordpress installation instructions here:  
  https://qiita.com/purio/items/416a6762583c087ece61
- `mysql -uroot` then `SHOW DATABASES;` to see list of databases.  
  https://dev.mysql.com/doc/refman/5.7/en/mysql.html