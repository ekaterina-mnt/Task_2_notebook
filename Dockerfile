FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
# RUN echo "max_file_uploads=100" >> /usr/local/etc/php/conf.d/docker-php-ext-max_file_uploads.ini
RUN echo "upload_max_filesize=3M" >> /usr/local/etc/php/conf.d/docker-php-ext-upload_max_filesize.ini