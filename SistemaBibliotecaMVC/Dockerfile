FROM php:8.2-apache

# Habilitar el módulo de reescritura
RUN a2enmod rewrite

# Copiar todo el código al directorio raíz de Apache
COPY . /var/www/html/


# Esto le dice a Apache que el "DocumentRoot" es /var/www/html/public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80