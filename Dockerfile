# Start from the official PHP-FPM 8.1 image with Alpine base
FROM php:8.1-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install necessary dependencies and tools
RUN apk --no-cache add --virtual .build-deps \
    $PHPIZE_DEPS \
    curl-dev \
    libpng-dev \
    libzip-dev \
    postgresql-dev \
    && apk --no-cache add \
    nginx \
    postgresql-libs \
    supervisor \
    zlib-dev

RUN apk --no-cache add nginx vim postgresql-dev

# Install necessary PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    opcache \
    bcmath \
    && pecl install redis \
    && docker-php-ext-enable redis

# Copy the Nginx configuration file
COPY docker_config/nginx.conf /etc/nginx/http.d/default.conf

# Copy the default Laravel application
COPY . /var/www/html

# Set up permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD nginx && php-fpm
