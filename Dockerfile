FROM php:7.4-apache
WORKDIR /var/www/html

COPY . .

# create data dir inside webroot and set permissions
RUN mkdir -p /var/www/html/data && chown -R www-data:www-data /var/www/html/data

# expose is optional
EXPOSE 80
