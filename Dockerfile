# Базовый образ с PHP и Apache
FROM php:8.3-apache

# Устанавливаем необходимые пакеты
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo_mysql mbstring zip gd

# Включаем mod_rewrite для Apache
RUN a2enmod rewrite

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Копируем проект в контейнер
COPY . /var/www/html

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Устанавливаем права на storage и bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Устанавливаем зависимости PHP через Composer
RUN composer install --no-dev --optimize-autoloader

# Expose порт 80
EXPOSE 80

# Команда для запуска Apache в контейнере
CMD ["apache2-foreground"]