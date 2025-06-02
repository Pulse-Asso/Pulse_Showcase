# Utilise l'image PHP officielle
FROM php:8.2-cli

# Copie tout le contenu du dossier actuel dans /app
WORKDIR /app
COPY . /app

# Expose le port que Render attend
EXPOSE 10000

# Commande de démarrage pour Render
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
