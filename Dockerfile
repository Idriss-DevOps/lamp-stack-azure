# ============================================================
# Dockerfile – LAMP Stack for Render.com Free Hosting
# PHP 8.2 + Apache | Listens on PORT env variable (Render requirement)
# ============================================================

FROM php:8.2-apache

LABEL description="LAMP Stack – Render.com Free Hosting"

# Install PHP extensions
RUN apt-get update && apt-get install -y curl libpng-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# ---- CRITICAL FOR RENDER ----
# Render assigns a dynamic PORT via environment variable.
# This script sets Apache to listen on that port at runtime.
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Copy app files
COPY app/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
