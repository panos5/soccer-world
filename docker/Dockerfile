FROM php:7.0-apache

# Install base packages
RUN curl -sL https://deb.nodesource.com/setup_4.x | bash - && \
    apt-get update -q -y && \
    apt-get install -y  --force-yes  --no-install-recommends git zip unzip curl vim \
    libfreetype6-dev libjpeg62-turbo-dev libpng12-dev bc libicu-dev libpango1.0-dev nodejs openssh-client libmagickwand-dev && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install gd pdo_mysql zip && \
    a2enmod rewrite && \
    a2enmod proxy_http && \
    usermod -u 1000 www-data && \
    usermod -G staff www-data && \
    npm install grunt -g && \
    npm install bower -g

ADD config/soccer-world.conf /etc/apache2/sites-enabled/000-default.conf
ADD config/php.ini /usr/local/etc/php/php.ini

# We mount the site here using the Volumnes in docker-compose.yml
WORKDIR /var/www
