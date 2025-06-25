# Gunakan PHP CLI agar artisan serve bisa digunakan
FROM php:8.2-cli

# Install dependencies sistem
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer (dari image composer resmi)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy semua file ke dalam container
COPY . .

# Install dependency Laravel
RUN composer install

# Set permission folder storage
RUN chmod -R 755 /var/www/storage

# Expose port agar Laravel bisa diakses
EXPOSE 8000

# Jalankan Laravel development server
CMD php artisan serve --host=0.0.0.0 --port=8000
