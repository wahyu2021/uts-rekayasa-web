# Praktikum UTS - Proyek E-commerce Sederhana

Proyek ini adalah aplikasi e-commerce sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini merupakan bagian dari Ujian Tengah Semester (UTS) untuk mata kuliah Rekayasa Web.

## Daftar Isi

- [Fitur](#fitur)
- [Prasyarat](#prasyarat)
- [Instalasi & Konfigurasi](#instalasi--konfigurasi)
- [Menjalankan Aplikasi](#menjalankan-aplikasi)
- [Struktur Folder](#struktur-folder)
- [Kontribusi](#kontribusi)

## Fitur
-   Tampilan beranda (sudah diimplementasikan)
-   Tampilan produk (belum diimplementasikan)
-   Halaman detail produk (belum diimplementasikan)
-   Keranjang belanja (belum diimplementasikan)
-   Sistem otentikasi pengguna (belum diimplementasikan)
-   Desain responsif menggunakan Bootstrap

## Prasyarat

Pastikan lingkungan pengembangan Anda memenuhi persyaratan berikut sebelum memulai:

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   Database MySQL atau MariaDB

## Instalasi & Konfigurasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini secara lokal:

1.  **Clone repository:**
    ```bash
    git clone https://github.com/wahyu2021/uts-rekayasa-web.git
    cd uts-rekayasa-web
    ```

2.  **Install dependensi PHP:**
    ```bash
    composer install
    ```

3.  **Install dependensi JavaScript:**
    ```bash
    npm install
    ```

4.  **Buat file `.env`:**
    Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Generate kunci aplikasi:**
    ```bash
    php artisan key:generate
    ```

6.  **Konfigurasi database:**
    Buka file `.env` dan sesuaikan pengaturan database Anda (`DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

7.  **Jalankan migrasi database:**
    Ini akan membuat tabel-tabel yang diperlukan dalam database Anda.
    ```bash
    php artisan migrate
    ```

8.  **(Opsional) Jalankan seeder:**
    Ini akan mengisi database dengan data dummy.
    ```bash
    php artisan db:seed
    ```

9.  **Build aset frontend:**
    ```bash
    npm run build
    ```

## Menjalankan Aplikasi

Untuk menjalankan server pengembangan lokal, gunakan perintah berikut:

```bash
php artisan serve
```

Aplikasi akan tersedia di `http://127.0.0.1:8000`.

Untuk mengkompilasi aset frontend saat melakukan perubahan (mode watch), jalankan:
```bash
npm run dev
```
Atau untuk menjalankan keduanya secara bersamaan, gunakan perintah berikut:
```bash
composer run dev
```

## Struktur Folder

Berikut adalah gambaran umum struktur folder penting dalam proyek Laravel ini:

```
.
├── app/                # Logika inti aplikasi (model, controller, provider)
├── bootstrap/          # Skrip untuk bootstraping framework
├── config/             # File-file konfigurasi aplikasi
├── database/           # Migrasi, seeder, dan factory database
├── public/             # Entry point aplikasi (index.php) dan aset publik
├── resources/
│   ├── css/            # CSS mentah
│   ├── js/             # JavaScript mentah
│   ├── views/          # Template Blade untuk tampilan
│   └── lang/           # File-file bahasa
├── routes/             # Definisi rute aplikasi (web.php, api.php)
├── storage/            # File cache, log, dan file yang diunggah
├── tests/              # File-file pengujian (unit & feature)
└── vendor/             # Dependensi dari Composer
```

## Kontribusi

Kontribusi dalam bentuk apapun sangat kami hargai. Jika Anda ingin berkontribusi, silakan fork repository ini dan buat pull request.

1.  Fork a project
2.  Buat branch fitur Anda 
```bash
git checkout -b feature/AmazingFeature
```
3.  Commit perubahan Anda 
```bash
git commit -m 'Add some AmazingFeature'
```
4.  Push ke branch 
```bash
git push origin feature/AmazingFeature
```
5.  Buka Pull Request
