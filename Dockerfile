FROM php:7.3-apache
WORKDIR /var/www/html/
COPY . .
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
