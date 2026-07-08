# Usa la imagen base de PHP con Apache
FROM php:8.2-apache

# 1. Habilita el módulo de reescritura de Apache (esencial para rutas MVC)
RUN a2enmod rewrite

# 2. Instala las extensiones de base de datos necesarias para tu sistema
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 3. Copia todo tu proyecto al directorio del servidor
COPY . /var/www/html/

# 4. Cambia el DocumentRoot para que apunte a la carpeta 'public'
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 5. Ajusta los permisos de los archivos para que el servidor web pueda leerlos
RUN chown -R www-data:www-data /var/www/html