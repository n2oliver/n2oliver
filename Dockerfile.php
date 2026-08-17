FROM php:7.3-apache

# Node.js
COPY --from=node:lts /usr/local/bin/ /usr/local/bin/
COPY --from=node:lts /usr/local/lib/ /usr/local/lib/
COPY --from=node:lts /usr/local/include/ /usr/local/include/

# PHP
RUN docker-php-ext-install pdo pdo_mysql

# PHP configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Apache
RUN a2enmod rewrite

WORKDIR /var/www/html

# Node dependencies
COPY package.json ./
RUN npm install

# Project
COPY vite.config.mjs ./
COPY index.html ./
COPY .env.development ./
COPY src ./src
COPY public ./public
COPY api ./api

# Build
RUN npm run build

# .htaccess
COPY .htaccess /var/www/html/dist/.htaccess

# Apache DocumentRoot -> dist
RUN sed -ri 's!/var/www/html!/var/www/html/dist!g' \
    /etc/apache2/sites-available/000-default.conf \
    /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]