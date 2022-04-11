# Kledo Backend Assesment Test

aplikasi dengan konsep REST-API pada sisi backend untuk memenuhi kebutuhan sistem perhitungan lembur.
Ada 2 metode perhitungan lembur yang digunakan.
* Salary / 173
* Fixed
Jika yang digunakan adalah metode pertama, maka semua upah lembur dari pegawai yang ada akan dihitung menggunakan metode tersebut. Begitu juga jika yang dipilih adalah metode kedua.
Khusus untuk pegawai dalam masa percobaan, upah lembur mulai dihitung saat durasi lembur lebih dari 1 jam. Saat lebih dari 1 jam, yang dihitung adalah durasi setelah 1 jam tersebut. Namun tidak akan dihitung jika durasi setelah 1 jam belum mencapai 1 jam, aturan ini berlaku kelipatan. Durasi lembur untuk pegawai dalam masa percobaan ini dihitung pada setiap lembur yang dilakukan, bukan dari akumulasi lembur per-bulan.
Contoh hasil perhitungan lembur pegawai dalam masa percobaan seperti berikut.
* Lembur 2 jam, maka mendapatkan upah lembur 1 jam
* Lembur 2,5 jam, maka mendapatkan upah lembur 1 jam
* Lembur 1,5 jam, maka tidak mendapatkan upah lembur
* Lembur 3,9 jam, maka mendapatkan upah lembur 2 jam


## Getting Started

Instruksi berikut ini akan membuat Anda mendapatkan salinan repository yang dapat berjalan di mesin lokal Anda untuk tujuan pengembangan dan pengujian.
Lihat penerapan untuk catatan tentang cara menerapkan proyek pada sistem langsung. Cukup jalankan beberapa command berikut.

### Installation

```
$ git clone https://github.com/alifwr/kledo-backend-assesment.git
$ cd kledo-backend-assesment
$ composer install
```

Proses instalasi dependensi akan berjalan.

### Configuration

Panduan langkah-langkah berikut ini yang akan memberi tahu Anda cara mengaktifkan dan menjalankan lingkungan pengembangan.

```
$ Buat file .env dengan mengcopy file .env.example (juga bisa dilakukan dengan command "cp .env.example .env")
$ Atur nama database dan kredensial dari server yang akan digunakan pada file .env
$ Jalankan command "php artisan migrate --seed"
$ Jalankan "php artisan serve" pada folder utama dari projek dan kunjungi http://127.0.0.1:8000 (kondisi default)
```

## Unit Testing

Beberapa langkah untuk melakukan unit testing secara otomatis menggunakan PHPUnit.

```
$ php artisan migrate:fresh --seed
$ php artisan test
```

## Doccumentation

Dokumentasi dapat dilihat pada route /api/documentation. (jika settingan laravel default, maka dapat dilihat pada http://127.0.0.1:8000/api/documentation).
