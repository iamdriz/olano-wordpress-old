# Olano WordPress

Enter description here.

## Local

````
git clone https://github.com/iamdriz/olano.git
cd wordpress-docker
````

Then:

````
docker-compose up -d
````

Note: When using Docker the `index.php` and `wp-config.php` under `/public` are not used.

[http://localhost:8000](http://localhost:8000)

## Heroku

Deployment to Heroku uses the PHP and Nginx build-pack: `heroku-php-nginx`.

[https://olano-preview.herokuapp.com](https://olano-preview.herokuapp.com)

`Procfile` tells Heroku how to boot our application.