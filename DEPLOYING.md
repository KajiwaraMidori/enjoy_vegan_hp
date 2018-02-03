## Deploy to Heroku
- The `dev` branch is already live on heroku [here][https://enjoy-vegan.herokuapp.com/].
- How to deploy to heroku from scratch:
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

## Troubleshooting
- In order to reset your installation of wordpress:
  - Find the envvar `CLEARDB_DATABASE_URL` in the [heroku dashboard][https://dashboard.heroku.com].
  - bash `mysql --user {user} --password={pw} -h {host} -D {database}` based on envvar.
  - DROP all TABLES.
  - Access the heroku top domain again.
  - You should be navigated through the WP installation process.
  - Make sure you note the admin password and keep it in a safe location!