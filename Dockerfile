FROM debian:buster

EXPOSE 80 443

RUN apt-get update

# ------------- #
# Install nginx #
# ------------- #

RUN apt-get install -y php-fpm && \
	apt-get install -y nginx && \
	echo "daemon off;" >> /etc/nginx/nginx.conf

# ------------- #
# Install tools #
# ------------- #

RUN apt-get install -y vim wget dpkg lsb-release gnupg && \
	apt-get install -y php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi && \
	apt-get install  -y php-curl php-intl php-soap php-xmlrpc

# ------------- #
# Install MySQL #
# ------------- #

RUN export DEBIAN_FRONTEND=noninteractive && \
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb &&\
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections && \
dpkg -i mysql-apt-config_0.8.13-1_all.deb && \
apt-get update && \
apt-get install -y  mysql-server && \
chown -R  mysql: /var/lib/mysql && \
rm -rf mysql-apt-config_0.8.13-1_all.deb

# ------------------ #
# Install phpMyAdmin #
# ------------------ #

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.tar.gz && \
tar xvf phpMyAdmin-5.0.1-all-languages.tar.gz && \
rm -rf phpMyAdmin-5.0.1-all-languages.tar.gz && \
mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin


RUN chown -R www-data:www-data /var/www/* && \
	chmod -R 755 /var/www/*

# ----------------- #
# Install WordPress #
# ----------------- #

RUN wget https://wordpress.org/latest.tar.gz && \
	tar xvf latest.tar.gz && \
	mv wordpress /var/www/html/ && \
	chown -R www-data:www-data /var/www/html/wordpress


COPY ./srcs/wp-config.php ./var/www/html/wordpress
COPY ./srcs/config.inc.php ./var/www/html/phpmyadmin/
COPY ./srcs/hamid.sql /root/
COPY ./srcs/localhost.crt /root/
COPY ./srcs/localhost.key /root/
COPY ./srcs/script.sh ./
COPY srcs/default ./etc/nginx/sites-available/
COPY ./srcs/index.php ./var/www/html/

RUN chmod +x script.sh

ENTRYPOINT ["./script.sh"]
