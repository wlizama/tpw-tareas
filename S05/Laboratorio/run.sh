#!/bin/bash

docker rmi tpw-calculadora --force
docker build -t tpw-calculadora .
docker run -p 5001:80 tpw-calculadora


# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done