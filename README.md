# Demo PHP App

My demo PHP web application with Docker

## Comandi Docker

To start the project:

`docker-compose up -d`

To stop the project:

`docker-compose down`

To composer install:

`docker-compose exec php-fpm composer install --no-plugins --no-scripts`

To delete all containers:

`docker rm $(docker ps -a -q)`

To delete all images:

`docker rmi $(docker images -q)`
