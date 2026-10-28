# ---- Sitesking (Laravel) · PHP-FPM + Nginx, corre como www-data ----
FROM serversideup/php:8.4-fpm-nginx AS app

ENV AUTORUN_ENABLED=true \
    AUTORUN_LARAVEL_MIGRATION=false \
    PHP_OPCACHE_ENABLE=1 \
    HEALTHCHECK_PATH=/up

USER root
RUN install-php-extensions intl gd exif

COPY --chmod=755 docker/entrypoint.d/10-sitesking-dirs.sh /etc/entrypoint.d/10-sitesking-dirs.sh
COPY --chmod=755 docker/entrypoint.d/60-sitesking-cache.sh /etc/entrypoint.d/60-sitesking-cache.sh

USER www-data
WORKDIR /var/www/html

COPY --chown=www-data:www-data composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --no-scripts --no-autoloader

COPY --chown=www-data:www-data . .
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
