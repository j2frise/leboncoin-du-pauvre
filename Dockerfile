FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql json \
&& a2enmod rewrite

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \ 
&& php composer-setup.php && php -r "unlink('composer-setup.php');" \ 
&& mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html