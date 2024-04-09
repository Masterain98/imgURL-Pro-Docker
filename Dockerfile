# Use the official PHP 7.4 runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy PHP application code into the container
COPY . /var/www/html/

# Install Basic PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libzip-dev \
        libmagickwand-dev \
        --no-install-recommends && \
    docker-php-ext-install \
        pdo \
        pdo_mysql \
        gd \
        zip

# Install ImageMagick dependency
RUN pecl install imagick && \
    docker-php-ext-enable imagick

# Install PHP-Redis dependency
RUN pecl install redis && \
    docker-php-ext-enable redis

# Install PHP Mysqli dependency
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Enable apache rewrite module 
RUN a2enmod rewrite

# Clean up package cache
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
