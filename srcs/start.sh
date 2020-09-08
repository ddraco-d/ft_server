#!/bin/bash
service mysql start

#SSL
mkdir /etc/nginx/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx-selfsigned.key -out /etc/nginx/ssl/nginx-selfsigned.crt -subj "/C=RU/ST=Russia/L=Moscow/O=School/OU=ddraco/CN=localhost"

#CONFIG NGINX
mv localhost /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
rm -rf /etc/nginx/sites-enabled/default

#CREATE DB
bash db.sh

#WP
mv wp-config.php /var/www/wordpress

#PHPMyAdmin
mv phpMyAdmin-4.9.5-all-languages wordpress/phpmyadmin

#Rights
chown -R www-data:www-data /var/www/wordpress
chmod 777 -R /var/www/*

service nginx start && service php7.3-fpm start

sleep infinity &
wait