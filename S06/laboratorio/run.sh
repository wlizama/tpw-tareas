#!/bin/bash

docker rmi tpw-form --force
docker build -t tpw-form .
docker run -p 5001:80 tpw-form


# for a in `docker ps -a -q`
# do
#   echo "Stopping container - $a"
#   docker stop $a
# done