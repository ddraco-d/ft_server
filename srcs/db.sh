#!/bin/sh
mariadb -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mariadb -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"