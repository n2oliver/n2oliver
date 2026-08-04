FROM php:7.3-apache

# Instala o Node.js da imagem oficial
COPY --from=node:lts /usr/local/bin/ /usr/local/bin/
COPY --from=node:lts /usr/local/lib/ /usr/local/lib/
COPY --from=node:lts /usr/local/include/ /usr/local/include/

# Extensões PHP
RUN docker-php-ext-install pdo pdo_mysql

# Configuração do PHP
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Diretório da aplicação
WORKDIR /var/www/html

COPY package.json ./
COPY vite.config.mjs ./
COPY index.html ./
COPY .env.development ./

COPY src ./src
COPY public ./public
COPY api ./api

RUN npm install
RUN npm run build

# Porta
EXPOSE 80

# Inicia o servidor PHP
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html/dist"]