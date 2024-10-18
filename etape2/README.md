# Docker TP2 - Étape 2

## Description

Pour réaliser l'étape 2 de votre projet, nous allons créer trois conteneurs Docker : un conteneur HTTP avec NGINX, un conteneur PHP avec PHP-FPM, et un conteneur de base de données avec MariaDB. Nous allons également créer une page test_bdd.php qui exécutera des requêtes CRUD.

Cette étape consiste à configurer un environnement Docker avec trois conteneurs :
- **HTTP** : Un conteneur Nginx servant des fichiers PHP.
- **SCRIPT** : Un conteneur PHP-FPM pour l'exécution des scripts PHP.
- **DATA** : Un conteneur MySQL pour la gestion de la base de données.

L'application contient une page `test_bdd.php` qui effectue des opérations CRUD (Create, Read, Update, Delete) sur la base de données MySQL et affiche les résultats.

### Fonctionnalités

- Page `test_bdd.php` qui effectue des opérations de lecture et d'écriture sur la base de données.
- Affichage des résultats en fonction du contenu de la base de données à chaque actualisation de la page.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé sur votre machine :
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Structure des répertoires

Voici la structure des répertoires du projet :

docker-tp2/ │ ├── etape2/ │ ├── config/ │ │ └── nginx.conf # Configuration de Nginx │ │ │ ├── db/ │ │ └── init.sql # Script SQL pour initialiser la base de données │ │ │ ├── src/ │ │ ├── index.php # Page PHP pour afficher phpinfo() │ │ └── test_bdd.php # Page PHP pour exécuter des opérations CRUD sur la base de données │ │ │ └── docker-compose.yml # Fichier Docker Compose pour orchestrer les conteneurs │ └── README.md # Instructions sur la façon d'exécuter le projet
