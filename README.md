# Crear estructura con Docker para PHP Core y MySQL
no es necesario wmapserver, xmapp etc
realizado sobre linux ubuntu 20.04
------------------------------------------------------

## estructura
---------------------------------
/docker/ archivos de docker.
/www/ carpeta para archivos PHP.

## listado images docker php apache
-------------------------------------
https://hub.docker.com/_/php

## ejecutar servicios docker-compose 
--------------------------------------
$ docker-compose up --build -d 
$ docker-compose start
$ docker-compose stop

## acceder a docker mysql
------------------------
docker exec -i -t 15fc58cfd6af /bin/bash
mysql -u dbuser -pdbpass
ó
mysql -u dbuser -p
pss: dbpass

## acceso desde navegador
--------------------------------------------
http://localhost:8081/pdo/conexion.php
http://localhost:8081/index.php

## acceso desde consola (local) a docker mysql
--------------------------------------------------------------
mysql -h 172.25.0.1 -P 3360 --protocol=tcp -uroot -pdbpass
mysql -h 172.25.0.1 -P 3360 --protocol=tcp -udbuser -pdbpass

dentro de mysql ya puedo consultar:
-------------------------------------
SELECT user FROM mysql.user;

## eliminar todos los contenedores
-----------------------------------
docker rm $(docker ps -a -q) -f

## eliminar todas las imagenes
-------------------------------
docker rmi $(docker images -q) 