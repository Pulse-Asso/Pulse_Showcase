# Utilise l'image PHP officielle
FROM php:8.2-cli

# Copie tout le contenu du dossier actuel dans /app
WORKDIR /app
COPY . /app

# Expose le port que Render attend
EXPOSE 10000

# Commande de démarrage pour Render
EXPOSE 10000
CMD ["php", "-S", "0.0.0.0:10000", "-t", "Pulse_Showcase-main/src/html"]
# Installe les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip
# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Installe les dépendances du projet
RUN composer install --no-dev --optimize-autoloader
# Nettoyage des fichiers temporaires
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Définit le répertoire de travail
WORKDIR /app/Pulse_Showcase-main/src/html

