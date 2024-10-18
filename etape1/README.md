# Docker TP2 - Étape 1

## Description

Cette étape consiste à configurer un environnement Docker avec deux conteneurs :
- **HTTP** : Un conteneur Nginx servant des fichiers PHP.
- **SCRIPT** : Un conteneur PHP-FPM pour l'exécution des scripts PHP.

L'application contient une page `index.php` qui appelle la fonction `phpinfo()` pour afficher les informations de configuration PHP.

### Fonctionnalités

- Page `index.php` qui affiche les informations de configuration PHP via `phpinfo()`.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé sur votre machine :
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Structure des répertoires

Voici la structure des répertoires du projet :



## Comment exécuter l'application

1. Clonez ce repository :
git clone https://github.com/ton-compte/docker-tp2.git

cd docker-tp2/etape1


2. Lancez les conteneurs Docker :
docker-compose up -d


3. Ouvrez un navigateur et accédez à `http://localhost:8080` pour voir la page PHP avec `phpinfo()`.

![Image de l'étape 1](home\auce\docker-tp2\etape1/etape1.png)
