FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade

RUN apt-get install -y nginx mariadb-server \
php-fpm php-mysql php-mbstring php-zip php-gd php-curl php-gd php-intl php-soap php-xml php-xmlrpc \
wget

WORKDIR /var/www/

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz && \
wget https://ru.wordpress.org/latest-ru_RU.tar.gz && tar xzvf phpMyAdmin-4.9.5-all-languages.tar.gz && \
tar xzvf latest-ru_RU.tar.gz

COPY srcs/ .

EXPOSE 80 443

CMD ["bash", "start.sh"]