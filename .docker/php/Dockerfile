ARG VERSION=alpine
FROM exozet/php-fpm:8.1-$VERSION as base

ENV COMPOSER_VERSION=2
ENV COMPOSER_HOME=/tmp

ARG API_VERSION="0.0.0"

RUN chown www-data:www-data /usr/src/app

ADD --chown=www-data:www-data . /usr/src/app

WORKDIR /usr/src/app

USER www-data

RUN composer config version $API_VERSION \
    && composer install --no-interaction --no-progress --no-scripts --optimize-autoloader

RUN rm -f auth.json

FROM base as php-cli

USER www-data

FROM base as php-fpm
