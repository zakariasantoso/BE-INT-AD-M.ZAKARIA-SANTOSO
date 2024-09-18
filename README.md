# Cara Menjalankan Aplikasi
##  Clone repository 
### `git clone https://github.com/zakariasantoso/BE-INT-AD-M.ZAKARIA-SANTOSO.git`
##  Masuk kedalam direktori aplikasi
### `cd BE-INT-AD-M.ZAKARIA-SANTOSO`
##  Konfigurasi Aplikasi
### `composer install`
###  Copy file `.env.example` menjadi `.env`
###  Sesuaikan database pada file `.env`
##  Generate key aplikasi
### `php artisan key:generate`
##  Migrasi database
### `php artisan migrate:fresh --seed`
## Jalankan Aplikasi
### `php artisan serve`

