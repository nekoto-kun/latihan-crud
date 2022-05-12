# PHP with Autoload PSR-4 and Composer

Project ini menunjukkan penerapan Autoload PSR-4 menggunakan Composer dalam aplikasi CRUD sederhana. Referensi tutorial mengenai langkah-langkah penerapannya bisa dilihat di [artikel blog ini](https://medium.com/easyread/memahami-konsep-psr-4-autoloading-pada-php-ba6cdefe068b).

## Penjelasan singkat tentang Teknik Autoloading di PHP

Autoloading merupakan proses untuk mengotomatisasi pemuatan (_loading_) kelas-kelas PHP tanpa harus melalui perintah `require` atau `include`. Bisa dibilang, autoloading merupakan alternatif yang disediakan PHP supaya kita dapat melakukan "impor file/kelas PHP" dengan lebih efisien.

Untuk menerapkan teknik autoloading ini, struktur project perlu dirapikan lagi seperti yang ditunjukkan dalam repo ini. Kemudian, untuk memudahkan pengembangan kita dapat menggunakan **Composer**, yaitu sebuah _tool_ yang dapat membantu mengelola dependensi proyek PHP.

Adapun langkah-langkah yang dilakukan sebagai berikut:

1. Jalankan perintah `composer init` di root folder project (program `composer` sudah tersedia jika menggunakan **Laragon**). Ikuti langkah-langkah yang ditunjukkan (tekan Enter saja sampai selesai untuk permulaan) dan nanti akan muncul file `composer.json`.
2. Edit file `composer.json` dengan menambahkan baris kode berikut tepat setelah baris `"require": {}`:

   ```php
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
   ```

3. Rapikan struktur project menjadi seperti yang ditunjukkan oleh repo ini. Hirarkinya kurang lebih seperti berikut:

   ```text
    .
    ├── public/
    │   └── index.php
    ├── src/
    │   ├── controllers/
    │   │   ├── CourseController.php
    │   │   └── ModuleController.php
    │   ├── helpers/
    │   │   └── Connection.php
    │   └── models/
    │       ├── Course.php
    │       └── Module.php
    ├── composer.json
    └── README.md
   ```

4. Jalankan perintah `composer install`.
5. (Langkah 5-6 hanya menunjukkan tata cara kode program supaya dapat saling menggunakan kelas berdasarkan namespace) Sebagai uji coba, edit kode `Course.php` dengan membuat sebuah kelas sederhana dan tambahkan sebuah _namespace_.

   ```php
   namespace App\Models;
   ```

6. Pada file `index.php`, tambahkan kode PHP berikut di awal baris. Perlu diperhatikan! Baris kode `require '../vendor/autoload.php'` penting ditambahkan sebelum menggunakan perintah `use` terhadap kelas PHP melalui _namespace_.

   ```php
   require '../vendor/autoload.php';

   use App\Models\Course;
   ```
  
7. Jalankan perintah `composer dump-autoload` setiap kali ada perubahan/penambahan kelas.
8. Jalankan perintah `php -S 127.0.0.1:80 -t public` untuk membuka simulasi aplikasi web project ini dengan mengarahkan langsung ke folder public (di sana sudah ada `index.php`). Untuk mengakses melalui browser, masuk ke alamat `127.0.0.1:80`. (`127.0.0.1` atau `localhost` sama saja). Pastikan juga server MySQL (database) sudah menyala.
