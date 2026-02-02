FROM php:8.2-cli

# Dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    curl \
    ca-certificates \
    gnupg \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd

# Node 20 (OBRIGATÓRIO para Vite atual)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

# Permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# Backend
RUN composer install --no-dev --optimize-autoloader

# Frontend (🔥 ESSENCIAL 🔥)
RUN npm install
RUN npm run build

# Render usa variável PORT
CMD php artisan optimize:clear && \
    php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=$PORT
