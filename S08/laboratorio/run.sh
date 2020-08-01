#!/bin/bash

docker rmi tpw-s08 --force
docker build -t tpw-s08 .
docker run -p 5001:80 tpw-s08


# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done