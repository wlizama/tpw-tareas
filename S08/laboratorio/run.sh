#!/bin/bash

docker rm s08-mysql --force
# docker run -d -p 3306:3306 --name s08-mysql -e MYSQL_ROOT_PASSWORD=secret --mount src=s08-mysql-data,dst=/var/lib/mysql mysql
docker run -d -p 3306:3306 --name s08-mysql -e MYSQL_ROOT_PASSWORD=secret --mount src=s08-mysql-data,dst=/var/lib/mysql mysql --default-authentication-plugin=mysql_native_password
# docker run -d --name s08-mysql --mount src=s08-mysql-data,dst=/var/lib/mysql mysql

docker rmi tpw-s08 --force
docker build -t tpw-s08 .
# docker run -p 5001:80 tpw-s08
docker run -p 5001:80 tpw-s08 --link s08-mysql:mysql

# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done