#!/bin/bash

docker rmi tpw-calculadora --force
docker build -t tpw-calculadora .
docker run -p 5001:80 tpw-calculadora
