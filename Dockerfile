FROM php:7.4-fpm
COPY --from=composer/composer /usr/bin/composer /usr/bin/composer
ADD . .

RUN apt-get update \
    # && apt-get install iputils-ping \
    && docker-php-ext-install mysqli 
    # && docker-php-ext-enable mysqli 
     #&& /usr/bin/composer install
