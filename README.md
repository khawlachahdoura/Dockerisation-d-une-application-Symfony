# Dockerisation-d-une-application-Symfony
c'est l'application Gestion IT qui ce trouve dans le dossier symfony dans la branche appsymfony 


Prérequi
*Prérequis sur votre machine pour le bon fonctionnement de ce projet :

          *PHP Version 7.4.11 Installer PHP -- Mettre à jour PHP en 7.4 (Ubuntu)   
          *MySQL Installer MySQL ou Installer MariaDB
          *Symfony version 5.0 minimum avec le CLI(Binaire) Symfony Installer Symfony -- Installer Binaire Symfony
          *Composer Installer Composer
          
 *Installation
Après avoir cloné le projet avec git clone https://github.com/khawlachahdoura/Dockerisation-d-une-application-Symfony.git



Ensuite, dans l'ordre taper les commandes dans votre terminal :

1 composer install afin d'installer toutes les dépendances composer du projet.

2 installer la base de donnée MySQL. Pour paramétrer la création de votre base de donnée, rdv dans le fichier .env du projet, et modifier la variable d'environnement selon vos paramètres :

DATABASE_URL=mysql://User:Password@127.0.0.1:3306/nameDatabasse?serverVersion=5.7

Puis exécuter la création de la base de donnée avec la commande : symfony console doctrine:database:create

3 Exécuter la migration en base de donnée : symfony console doctrine:migration:migrate
4 Vous pouvez maintenant accéder à votre portfolio en vous connectant au serveur : symfony server:start
