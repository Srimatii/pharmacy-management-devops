# Use an official PHP + Apache image
FROM php:8.1-apache

# Copy project files into the container
COPY . /var/www/html/

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html/
