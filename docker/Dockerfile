FROM ufotech/php:8.4-fpm

# базовий образ не містить pdo_pgsql, а тести підтримують усі три рушії
RUN apt-get update \
    && apt-get install -y --no-install-recommends libpq-dev \
    && docker-php-ext-install -j"$(nproc)" pdo_pgsql \
    && apt-get purge -y --auto-remove \
    && rm -rf /var/lib/apt/lists/*
