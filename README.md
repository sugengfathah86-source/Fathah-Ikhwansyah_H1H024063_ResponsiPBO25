# Golbat_PokeCare_Project

Proyek sederhana PHP native untuk responsi PokéCare.

## Cara menjalankan
1. Letakkan folder `Golbat_PokeCare` di web root (mis. `htdocs` atau `www`).
2. Pastikan PHP terinstall (PHP 7.4+ direkomendasikan).
3. Akses `public/index.php` melalui browser.

## File penting
- `src/` : kelas OOP (Pokemon, Golbat, Training, TrainingLog)
- `public/` : halaman web (index.php, latihan.php, riwayat.php)
- `data/log.json` : penyimpanan riwayat latihan (JSON)

## Catatan
- Semua data disimpan di `data/log.json`. Jika mau pakai database, bisa ganti `TrainingLog` ke MySQL.
- Implementasi OOP: abstraksi (`Pokemon` abstract), enkapsulasi (private/protected + getter/setter), pewarisan (`Golbat` extends `Pokemon`), dan polimorfisme (method `train` di-override).
