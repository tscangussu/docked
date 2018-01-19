FROM dockium/wordpress:4.9.1_2

ARG PHP_VERSION=7.1

RUN apt-get update; \
    DEBIAN_FRONTEND=noninteractive apt-get install --no-install-recommends -y \
    git \
    openssh-client; \
    rm -rf /var/lib/apt/lists/*

COPY ./wp-content /var/www/data/wp-content

RUN set -ex; \
    chown -R www-data:www-data /var/www/data/; \
    find /var/www/data/ -type f -exec chmod 644 -- {} +; \
    find /var/www/data/ -type d -exec chmod 755 -- {} +

VOLUME /var/www/data
