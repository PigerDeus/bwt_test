FROM php:7.0-fpm

RUN apt-get update -y
RUN docker-php-ext-install pdo_mysql
RUN apt-get install mysql-client -y
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"
RUN apt-get install git libzip-dev libpng-dev unzip -y
RUN docker-php-ext-install zip gd
RUN docker-php-ext-enable zip gd
RUN docker-php-ext-install mysqli pdo

WORKDIR /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
