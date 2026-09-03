# WordPress (SQLite) with the Abu Dhabi Calibration theme pre-installed.
# Uses SQLite so NO external database is required — ideal for a free Render demo.
FROM wordpress:php8.2-apache

# --- Add the SQLite Database Integration drop-in (no MySQL needed) ---
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

# Force the correct public site URL and trust Render's HTTPS proxy so
# redirects (and /wp-admin) resolve properly instead of "Not Found".
ENV WORDPRESS_CONFIG_EXTRA="\
define('WP_HOME','https://abudhabi-calibration.onrender.com');\
define('WP_SITEURL','https://abudhabi-calibration.onrender.com');\
if (isset(\$_SERVER['HTTP_X_FORWARDED_PROTO']) && \$_SERVER['HTTP_X_FORWARDED_PROTO']==='https') { \$_SERVER['HTTPS']='on'; }\
"

# --- Startup script: bind Apache to Render's $PORT at runtime ---
# Render sets $PORT (usually 10000). We rewrite Apache's listen port when the
# container starts, then hand off to the official WordPress entrypoint.
RUN printf '#!/bin/bash\nset -e\nPORT="${PORT:-80}"\nsed -i "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf\nsed -i "s/<VirtualHost \\*:[0-9]*>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf\nexec docker-entrypoint.sh apache2-foreground\n' > /usr/local/bin/render-start.sh \
    && chmod +x /usr/local/bin/render-start.sh

EXPOSE 10000
CMD ["/usr/local/bin/render-start.sh"]
