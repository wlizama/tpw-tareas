docker run -p 3300:3306 --name bdfinal -v /home/wilderlizama/WildPersonal/Software/data-mysql-final:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=secret -d mysql:5.7
docker run -p 3179:80 -v /home/wilderlizama/WildPersonal/Develop/other-apps/tpw-tareas/EXMFinal:/var/www/html --name phpexmfinal -d --link bdfinal php:7.2-apache
