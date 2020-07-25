#!/bin/bash

docker rmi tpw-session --force
docker build -t tpw-session .
docker run -p 5001:80 tpw-session


# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done