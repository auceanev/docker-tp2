# Docker TP2 - Étape 2

## Objectif

Dans cette étape, nous allons créer une infrastructure Docker composée de trois conteneurs :
- **HTTP** : un conteneur avec un serveur HTTP qui écoute sur le port 8080.
- **SCRIPT** : un conteneur avec un interpréteur PHP utilisant PHP-FPM.
- **DATA** : un conteneur avec un serveur de base de données SQL (MariaDB).


L'objectif est de permettre la communication entre ces conteneurs et d'exécuter des requêtes CRUD (Create, Read, Update, Delete) sur une base de données via une page PHP.

### Fonctionnalités

- Page `test_bdd.php` qui effectue des opérations de lecture et d'écriture sur la base de données.
- Affichage des résultats en fonction du contenu de la base de données à chaque actualisation de la page.

## Comment exécuter l'application

1. Lancez les conteneurs Docker : `docker-compose up -d`

2. Ouvrez un navigateur et accédez à `http://localhost:8080/test_bdd.php`

On doit voir le résultat de l'exécution de la page, qui affichera le message de succès de l'insertion.
 
