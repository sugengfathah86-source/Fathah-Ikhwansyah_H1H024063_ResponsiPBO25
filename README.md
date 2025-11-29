Nama : Fathah Ikhwansyah
Nim : H1H024063
Shift awal : D
Shift Akhir : D

Deskripsi Singkat Aplikasi

PokéCare adalah aplikasi berbasis PHP Native tanpa framework yang mensimulasikan latihan Pokémon.
Pada proyek ini, Pokémon yang digunakan adalah Golbat (Poison / Flying).

Fitur utama aplikasi:

Menampilkan informasi awal Golbat (level, HP, tipe, jurus).

Simulasi latihan berbasis intensitas (ringan, sedang, berat).

Setiap latihan akan:

Menambah level

Menambah HP

Menyimpan log latihan ke data/log.json

Halaman riwayat latihan untuk melihat sejarah peningkatan Golbat.

Tampilan halaman menggunakan HTML + CSS buatan sendiri (tanpa framework).

Penjelasan Singkat Kode
1. index.php

Menampilkan data awal Golbat, gambar, tombol mulai latihan, dan navigasi ke riwayat.

2. latihan.php

Mengambil pilihan latihan pengguna, memproses peningkatan stat, lalu menyimpan ke log.

3. riwayat.php

Menampilkan tabel berisi semua log latihan dari file JSON.

4. src/Training.php

Class yang menangani logika latihan Pokémon.

5. src/TrainingLog.php

Class untuk membaca/menulis log ke file log.json.

6. data/log.json

Tempat menyimpan riwayat latihan.

7. styles.css

File CSS buatan sendiri untuk mempercantik tampilan.
