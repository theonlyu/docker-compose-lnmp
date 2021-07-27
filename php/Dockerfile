FROM centos
RUN groupadd -g 1002 www && useradd -u 1001 -g www -s /sbin/nologin www \
	&& yum -y install epel-release yum-utils \
	&& yum -y install https://rpms.remirepo.net/enterprise/remi-release-8.rpm \
	&& dnf -y module list php \
	&& dnf -y module enable php:remi-8.0 \
	&& dnf -y install php php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-json php-redis --skip-broken \
	&& sed -i 's/user = apache/user = www/g' /etc/php-fpm.d/www.conf \
	&& sed -i 's/group = apache/group = www/g' /etc/php-fpm.d/www.conf \
	&& sed -i 's/listen = \/run\/php-fpm\/www.sock/listen = 0.0.0.0:9000/g' /etc/php-fpm.d/www.conf \
	&& sed -i 's/listen.allowed_clients = 127.0.0.1/;listen.allowed_clients/g' /etc/php-fpm.d/www.conf \
	&& mkdir /run/php-fpm	

CMD ["php-fpm","--nodaemonize"]
