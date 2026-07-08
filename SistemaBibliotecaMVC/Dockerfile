FROM php:8.2-apache

# 1. Habilitar reescritura
RUN a2enmod rewrite

# 2. Copiar código
COPY . /var/www/html/

# 3. Cambio clave: Modificar el archivo de configuración de forma más robusta
# Reemplazamos DocumentRoot /var/www/html por DocumentRoot /var/www/html/public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 4. Asegurar que Directory también apunte a public
RUN sed -i 's|<Directory /var/www/html>|<Directory /var/www/html/public>|g' /etc/apache2/sites-available/000-default.conf

# 5. Ajustar permisos solo a la carpeta public
RUN chown -R www-data:www-data /var/www/html/public

EXPOSE 80
