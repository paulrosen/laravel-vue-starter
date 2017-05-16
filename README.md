# Starting App for Laravel/Vue

This app will hopefully be the starting place for all apps I write that have Laravel on the backend and are a SPA with Vue on the front end.

I'll be adding more to this, and hopefully keep it up to date with the latest Laravel, Webpack, and Vue changes.

## Features:

* Example route for api
* Example route for view
* vue-router operational
* font-awesome
* scss
* babel w/EC6

## To run on localhost:

* copy `.env.example` to `.env` and change as needed.
* npm install
* composer install
* npm run watch

## Viewing in browser

To see the app in the browser is beyond the scope of this project and there are a few ways to do it; however, here's the way I do it:

```bash
cd /path/to/app
sudo vi /etc/hosts
127.0.0.1 APP-NAME.dev
sudo cp /etc/apache2/users/local-sites/vue-app.pattern /etc/apache2/users/local-sites/APP-NAME.conf
sudo vi /etc/apache2/users/local-sites/APP-NAME.conf
:%s/vue-app/APP-NAME /g
sudo apachectl restart
./unprotect.sh APP-NAME

```

Where `vue-app.pattern` contains:
```apacheconfig
<VirtualHost *:80>
    DocumentRoot "/path/to/app/vue-app/public"

    ServerName vue-app.dev

    ErrorLog "/path/to/app/log/vue-app-error.log"
    CustomLog "/path/to/app/log/vue-app-access.log" common

    <Directory "/path/to/app/vue-app">
        Require all granted
        AllowOverride None
    </Directory>

   <Directory "/path/to/app/vue-app/public">
      Options +FollowSymLinks
      AllowOverride All
   </Directory>
</VirtualHost>

```
And `unprotect.sh` is:
```bash
#!/bin/sh
echo "Changing the ownership of a laravel site so that it can be run in a browser."

exec_cmd() {
    CMD=$1
    echo "    $CMD"
    $CMD
}

BASE_PATH="."
# This assumes that all the installations are at $BASE_PATH.

#Look in the httpd conf file for the user and group names.
HTTP_USER=_www
HTTP_GROUP=_www

if [ ! $# == 1 ]; then
  echo "Usage: $0 which_installation"
  echo "Example: '$0 my_blog' will change the permissions of ~/www/my_blog."
  exit
fi

FOLDER=$BASE_PATH/$1
if [ -d $FOLDER ]; then
  exec_cmd "sudo chown -R $HTTP_USER:$HTTP_GROUP $FOLDER/storage"
  exec_cmd "sudo chown -R $HTTP_USER:$HTTP_GROUP $FOLDER/bootstrap/cache"

else
  echo "Installation '$FOLDER' not found!"
fi
```
## To deploy:

TODO
