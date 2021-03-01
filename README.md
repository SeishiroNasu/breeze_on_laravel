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
`docker-compose build --parallel --no-cache`

`docker-compose up -d`

### laravel installation

log into app bash

`docker-compose exec app bash`

install laralve in app

`composer create-project --prefer-dist "laravel/laravel=8.*" .`

make sure .env is not in the directory.

`rm .env` or delete from GUI

### solve permission-problems

`docker-compose exec app bash`

```
chmod 777 -R storage/logs/
chmod 777 -R storage/framework/sessions/
chmod 777 -R storage/framework/views/
```

### check

check the installation was success by accessing `localhost:8080`

laravel welcome-page should appear

