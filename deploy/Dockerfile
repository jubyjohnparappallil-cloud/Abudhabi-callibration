# WordPress (SQLite) with the Abu Dhabi Calibration theme pre-installed.
# Uses SQLite so NO external MySQL/Postgres database is required — ideal for
# a free Render.com demo. Serves on the port Render provides ($PORT).
FROM wordpress:php8.2-apache

# --- Make Apache listen on Render's dynamic $PORT (defaults to 10000) ---
ENV PORT=10000
RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf \
    && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/' /etc/apache2/sites-available/000-default.conf

# --- Add the SQLite Database Integration drop-in (no MySQL needed) ---
# Download the official SQLite integration plugin and wire up db.php.
RUN set -eux; \
    apt-get update && apt-get install -y --no-install-recommends unzip curl && rm -rf /var/lib/apt/lists/*; \
    mkdir -p /usr/src/wordpress/wp-content/plugins; \
    curl -L -o /tmp/sqlite.zip https://downloads.wordpress.org/plugin/sqlite-database-integration.latest-stable.zip; \
    unzip -q /tmp/sqlite.zip -d /usr/src/wordpress/wp-content/plugins/; \
    cp /usr/src/wordpress/wp-content/plugins/sqlite-database-integration/db.copy /usr/src/wordpress/wp-content/db.php; \
    rm /tmp/sqlite.zip

# --- Copy our custom theme ---
COPY abucal-theme /usr/src/wordpress/wp-content/themes/abucal-theme

# Dummy DB values so WordPress boots (SQLite drop-in ignores them).
ENV WORDPRESS_DB_HOST=localhost \
    WORDPRESS_DB_NAME=wordpress \
    WORDPRESS_DB_USER=root \
    WORDPRESS_DB_PASSWORD=root

EXPOSE 10000
