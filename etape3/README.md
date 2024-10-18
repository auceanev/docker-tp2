# Docker TP2 - Étape 3

## Description

Cette étape consiste à configurer un environnement Docker avec trois conteneurs :
- **HTTP** : Un conteneur Nginx servant WordPress.
- **SCRIPT** : Un conteneur PHP-FPM pour l'exécution des scripts PHP de WordPress.
- **DATA** : Un conteneur MariaDB pour la gestion de la base de données WordPress.



## Comment exécuter l'application
1. Clonez ce repository :

git clone https://github.com/ton-compte/docker-tp2.git

cd docker-tp2/etape3

2. Lancez les conteneurs Docker :
docker-compose up -d


3. Ouvrez un navigateur et accédez à `http://localhost:8082`

4. Suivez les instructions pour finaliser l'installation de WordPress :


- Entrez les détails de la base de données :
- Nom de la base de données : wordpress
- Nom d'utilisateur : wordpressuser
- Mot de passe : wordpresspassword
- Hôte de la base de données : data (c'est le nom du service dans Docker Compose)
- Préfixe de table : wp_ (par défaut)
