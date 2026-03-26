FROM wordpress:latest

# Copy Plugins
COPY ./plugins/ /var/www/html/wp-content/plugins/

# Fix Permissions
USER root
RUN chown -R www-data:www-data /var/www/html/wp-content/