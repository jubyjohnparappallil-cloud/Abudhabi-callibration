# WordPress with the Abu Dhabi Calibration theme pre-installed.
# Works on Render.com (Docker web service) or any Docker host.
FROM wordpress:php8.2-apache

# Copy our custom theme into the image.
COPY abucal-theme /usr/src/wordpress/wp-content/themes/abucal-theme

# Apache listens on the port Render provides (defaults to 10000 on Render).
# WordPress image already serves on port 80; Render maps it automatically.
EXPOSE 80
