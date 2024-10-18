# Utiliser une image PHP-FPM de base
FROM php:7.4-fpm

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Optionnel : Installer d'autres dépendances ou extensions selon vos besoins
# RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev
# RUN docker-php-ext-configure gd --with-freetype --with-jpeg
# RUN docker-php-ext-install gd
