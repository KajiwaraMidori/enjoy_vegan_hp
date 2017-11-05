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
- `mysql> create user 'username'@'localhost' identified by '12345';`
- `mysql> create database db_vegan;`
- `sudo apachectl start`

## Shutting down
`sudo apachectl stop`
`mysql.server stop`

## Reference
- If experiencing permission issues, run `sudo chmod 755` to /vegan/enjoy_vegan_hp.
- MacOS Wordpress installation instructions here:  
  https://qiita.com/purio/items/416a6762583c087ece61
