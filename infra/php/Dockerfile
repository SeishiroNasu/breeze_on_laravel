FROM php:7.4-fpm-buster

SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

RUN apt-get -y update
RUN apt-get -y install git unzip libzip-dev libicu-dev libonig-dev
RUN apt-get -y clean
RUN rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install intl pdo_mysql zip bcmath

RUN apt-get -y update
RUN apt-get -y install curl gnupg

## install NodeJS
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest -g

## install yarn
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get -y update
RUN apt-get -y install yarn

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work

