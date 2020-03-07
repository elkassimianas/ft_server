#!/bin/bash

service php7.3-fpm start
chown -R  mysql: /var/lib/mysql
service mysql start
echo "GRANT ALL PRIVILEGES ON *.* TO 'ael-kass'@'localhost' IDENTIFIED BY 'anas123';" | mysql -u root
echo "CREATE DATABASE hamid;" | mysql -u root
mysql -u root hamid < /root/hamid.sql
service nginx start
