FROM php:7.3-fpm-alpine

# Define timezone
ENV TZ=Europe/Amsterdam

MAINTAINER Anher Khamees

# Install packages
RUN apk --no-cache add \
    bash \
    tzdata \
    bzip2-dev \
    nginx \
    supervisor \
    curl \
    php-soap \
    mysql \
    wget \
    nano \
    icu-dev \
    libmcrypt-dev \
    oniguruma-dev \
    dos2unix

# Install PHP extensions
RUN docker-php-ext-install mbstring intl pdo_mysql

# Install composer
RUN php -r "copy('http://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/bin --filename=composer

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php7/php-fpm.d/zzz_custom.conf
COPY config/php.ini /etc/php7/conf.d/zzz_custom.ini
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime
RUN echo "${TZ}" > /etc/timezone
RUN sed -i "s|;*date.timezone =.*|date.timezone = ${TZ}|i" /etc/php7/php.ini

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Add application
RUN mkdir -p /var/www/app
WORKDIR /var/www/app

COPY ./start.sh /var/www/start.sh
RUN dos2unix /var/www/start.sh

RUN chmod +x /var/www/start.sh

CMD /bin/bash /var/www/start.sh
