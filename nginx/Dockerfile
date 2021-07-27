FROM centos
RUN groupadd -g 1002 www && useradd -u 1001 -g www -s /sbin/nologin www \
	&& yum install -y yum-utils \
    && echo -e "[nginx-stable] \
    \nname=nginx stable repo \
    \nbaseurl=http://nginx.org/packages/centos/\$releasever/\$basearch \
    \ngpgcheck=1 \
    \nenabled=1 \
    \ngpgkey=https://nginx.org/keys/nginx_signing.key \
    \nmodule_hotfixes=true \
    \n[nginx-mainline] \
    \nname=nginx mainline repo \
    \nbaseurl=http://nginx.org/packages/mainline/centos/\$releasever/\$basearch \
    \ngpgcheck=1 \
    \nenabled=0 \
    \ngpgkey=https://nginx.org/keys/nginx_signing.key \
    \nmodule_hotfixes=true" > /etc/yum.repos.d/nginx.repo \
    && yum install -y nginx-1.20.1 \
	&& sed -i 's/user  nginx/user  www/g' /etc/nginx/nginx.conf 

CMD ["nginx", "-g", "daemon off;"]
