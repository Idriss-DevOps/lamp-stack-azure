#!/bin/bash
# ============================================================
# docker-entrypoint.sh
# Render.com injects a PORT environment variable.
# Apache must listen on that port, not hardcoded 80.
# ============================================================

# Default to 80 if PORT is not set (local Docker testing)
PORT="${PORT:-80}"

echo "Starting Apache on port ${PORT}..."

# Update Apache ports.conf
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/"           /etc/apache2/sites-enabled/000-default.conf

# Start Apache in foreground
exec apache2-foreground
