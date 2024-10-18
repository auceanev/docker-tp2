# Docker TP2
Ce projet a pour but de configurer des conteneurs Docker pour différents environnements d'application PHP, y compris un serveur HTTP, un interpréteur PHP et une base de données SQL. Les étapes suivantes décrivent le processus de création de l'infrastructure requise.

## Étape 1

### Objectif
Créer 2 conteneurs :
- **HTTP** : 1 conteneur avec un serveur HTTP qui écoute sur le port 8080
- **SCRIPT** : 1 conteneur avec un interpréteur PHP (plus le protocole FPM pour NGINX)

### Instructions
- Créez une page `index.php` qui, lorsqu'elle est appelée, exécute la fonction `phpinfo()`. Cette page sera située dans le répertoire `/app` dans les conteneurs.
  
### Test de validité
- Avec un navigateur, accédez à `http://localhost:8080/index.php` pour voir le résultat de l'exécution de `phpinfo()`.

## Étape 2

### Objectif
Créer 3 conteneurs :
- **HTTP** : 1 conteneur avec un serveur HTTP qui écoute sur le>
- **SCRIPT** : 1 conteneur avec un interpréteur PHP (plus le pr>
- **DATA** : 1 conteneur avec un serveur de base données SQL (MariaDB, MySQL, PostgreSQL, ...)

### Instructions
Créez une page test_bdd.php qui, lorsqu'elle est appelée, va exécuter 2 requêtes CRUD (Request : lecture, Create Update Delete : écriture) au minimum sur le serveur SQL : 1 lecture et 1 écriture.

###Test de validité
Avec un navigateur, accédez à http://localhost:8080/test_bdd.php pour voir le résultat de l'exécution de la page, retournant un résultat différent et dépendant du contenu de la base de données à chaque rafraîchissement de la page.

## Étape 3

### Objectif
Créer 3 conteneurs :
- **HTTP** : 1 conteneur avec un serveur HTTP qui écoute sur le>
- **SCRIPT** : 1 conteneur avec un interpréteur PHP (plus le pr>
- **DATA** : 1 conteneur avec un serveur de base données SQL (M>

### Instructions
Remplacer la ou les pages PHP simples par un package WordPress complet.

### Test de validité
Avec un navigateur, accédez à http://localhost:8080 pour voir l'interface d'admin/installation de WordPress afin de finaliser l'installation de celui-ci.


## Étape 4

### Objectif
Convertir la configuration de l'étape 3 en Docker Compose.

### Test de validité
Le test de validité de l'exercice est identique à celui de l'étape 3.


# Installation et Exécution
## Prérequis
Docker et Docker Compose doivent être installés sur votre machine.
