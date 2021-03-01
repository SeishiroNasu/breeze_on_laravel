# Building Laravel Env on Docker

## Specs

- php:8.0.2-buster
- composer:1.10
- nginx:1.18-alpine
- mysql:8.0

### detail
- service `app`is built on custom php-based image.
- nginx and mysql are built on default images.

## Instruction

## prep.

`mkdir laravel`

### building Docker image and containers
`docker-compose build -p --no-cache`

`docker-compose run -d`

### laravel installation

log into app bash

`docker-compose exec app bash`

install laralve in app

`composer create-project --prefer-dist "laravel/laravel=8.*"`

### check

check the installation was success by accessing `localhost:8080`

laravel welcome-page should appear
