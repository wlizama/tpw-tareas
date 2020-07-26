#!/bin/bash

docker rmi tpw-tcpc02-2 --force
docker build -t tpw-tcpc02-2 .
docker run -p 5001:80 tpw-tcpc02-2


# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done