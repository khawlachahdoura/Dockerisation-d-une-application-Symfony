# Dockerisation-d-une-application-Symfony

Docker + Symfony 5 +php 7.4 +Nginx + Mysql 

Installation
1- Cloné le projet avec git clone https://github.com/khawlachahdoura/Dockerisation-d-une-application-Symfony.git

(posissionnez sur la branche :appsymfony) : git checkout appsymfony

2-passer la commande : docker-compose up -d --build ( vous devez avoir docker et docker compose déjà installé )

 3 containers sont déployé :

Creating symfony-docker_db_1    ... done
Creating symfony-docker_php_1   ... done
Creating symfony-docker_nginx_1 ... done

puis passer la commande :
docker exec -it  symfony-docker_php_1 bash
puis, 
curl -sS https://get.symfony.com/cli/installer | bash
mv /root/.symfony/bin/symfony /usr/local/bin/symfony
symfony new symfony --dir=/var/www/symfony

puis tapez l'adresse : localhost:8001 

dans le fichier .env vous devez changer :
DATABASE_URL=mysql://User:Password@127.0.0.1:3306/nameDatabasse?serverVersion=5.7
 vous pouvez changer user , password et le nameDatabase.
