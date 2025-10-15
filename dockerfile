FROM php:8.2-apache

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Activar mod_rewrite de Apache
RUN a2enmod rewrite

# Permitir el uso de .htaccess
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
  > /etc/apache2/conf-available/z-override.conf \
  && a2enconf z-override

# 🚀 Copiar directamente el contenido de tu carpeta MVC_Blog
COPY ./MVC_Blog/ /var/www/html/

# Establecer carpeta de trabajo
WORKDIR /var/www/html

# Exponer el puerto
EXPOSE 80
