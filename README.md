# Laravel Project Setup

Panduan instalasi dan konfigurasi untuk project Laravel ini.

## Prerequisites

Sebelum memulai, pastikan Anda telah menginstal:
- PHP (versi yang kompatibel dengan Laravel)
- Node.js & NPM
- Composer
- MySQL (melalui XAMPP atau Laragon)
- Git

## Instalasi

### 1. Clone Repository

```bash
git clone [URL_REPOSITORY]
cd [NAMA_PROJECT]
```

### 2. Cek Versi Dependencies

Pastikan semua tools sudah terinstal dengan benar:

```bash
# Cek versi PHP
php -v

# Cek versi Node.js
node -v

# Cek versi Composer
composer --version
```

### 3. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 4. Konfigurasi Environment

```bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Konfigurasi Database

1. **Start MySQL Server**
   - Jalankan XAMPP atau Laragon
   - Pastikan service MySQL sudah aktif

2. **Setup Database di .env**
   
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Buat Database**
   - Buka phpMyAdmin atau MySQL client
   - Buat database sesuai dengan nama yang ditentukan di `DB_DATABASE`

### 6. Migrasi Database

```bash
# Jalankan migrasi database
php artisan migrate

# Atau jika ingin fresh migration (hapus semua data)
php artisan migrate:fresh
```

### 7. Menjalankan Aplikasi

```bash
# Start development server
composer run dev
```

## Catatan Penting

- Pastikan semua service (Apache/Nginx, MySQL) sudah berjalan sebelum menjalankan aplikasi
- Jika ada error saat migrasi, periksa kembali konfigurasi database di file `.env`
- Untuk development, gunakan `npm run dev` atau `npm run watch` untuk auto-reload assets

## Troubleshooting

- Jika `composer install` gagal, pastikan ekstensi PHP yang diperlukan sudah aktif
- Jika migrasi gagal, periksa koneksi database dan pastikan database sudah dibuat
- Jika ada error permission, pastikan direktori storage dan bootstrap/cache memiliki permission yang benar

## Kontribusi

Untuk berkontribusi pada project ini, silakan buat pull request atau hubungi maintainer.

---

**Catatan**: Sesuaikan konfigurasi sesuai dengan kebutuhan environment development Anda.
