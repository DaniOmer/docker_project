FROM alpine:edge

# Installation of Nginx and PHP
RUN apk --no-cache add nginx php-fpm

# Copy application files
COPY app /var/www/html

# Expose port 80 for Nginx
EXPOSE 80

