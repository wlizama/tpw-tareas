docker run -p 3306:3306 --name tpw-s08 -v /home/wilderlizama/WildPersonal/Software/data-mysql:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=secret -d mysql:5.7
docker run -p 5001:80 -v /home/wilderlizama/WildPersonal/Develop/other-apps/tpw-tareas/S08/laboratorio:/var/www/html --name myphpserverS08 -d --link tpw-s08 php:7.2-apache

docker ps
docker exec -i -t myphpserverS08 bash
# docker-php-ext-install mysqli
# cd /usr/local/etc/php
docker restart myphpserverS08
