# Docker TP2 - Étape 3

## Objectif

Dans cette étape, nous allons remplacer les pages PHP simples de l'Étape 2 par un package WordPress complet. Nous allons toujours utiliser trois conteneurs :
- **HTTP** : Un conteneur Nginx servant WordPress.
- **SCRIPT** : Un conteneur PHP-FPM pour l'exécution des scripts PHP de WordPress.
- **DATA** : Un conteneur MariaDB pour la gestion de la base de données WordPress.


L'objectif est de configurer WordPress et de vérifier que l'installation fonctionne correctement via l'interface d'administration.



## Instructions

1. **Configuration des conteneurs**

   Utilisez les mêmes conteneurs que dans l'Étape 2, mais remplacez le contenu de `SCRIPT` par WordPress.

   - **HTTP** : Reste inchangé.
   - **SCRIPT** : Téléchargez et placez les fichiers WordPress dans le volume monté `/app`.
   - **DATA** : Reste inchangé, mais assurez-vous que la base de données est correctement configurée pour WordPress.

2. **Télécharger WordPress**

   Téléchargez la dernière version de WordPress et placez les fichiers dans le répertoire approprié. Vous pouvez le faire manuellement ou ajouter une commande dans votre Dockerfile pour l'étape de construction.



## Comment exécuter l'application
1. Clonez ce repository :
`git clone https://github.com/ton-compte/docker-tp2.git`
`cd docker-tp2/etape3`

2. Lancez les conteneurs Docker :
`docker-compose up -d`


3. Ouvrez un navigateur et accédez à `http://localhost:8082`

4. Suivez les instructions pour finaliser l'installation de WordPress :


- ** Entrez les détails de la base de données :**
- Nom de la base de données : wordpress
- Nom d'utilisateur : wordpressuser
- Mot de passe : wordpresspassword
- Hôte de la base de données : data (c'est le nom du service dans Docker Compose)
- Préfixe de table : wp_ (par défaut)
