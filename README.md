<p align="center"><a href="https://jagabumi.masuk.id/" target="_blank"><img src="https://raw.githubusercontent.com/CodeWithRey/satu-hati/master/public/assets/images/logo-no-text.png" width="400" alt="Jaga Bumi Logo"></a></p>

<h1 align="center"><b>Jaga Bumi - Bersama Kita Bisa Menyelamatkan Bumi dan Indonesia</b></h1>

Jaga Bumi hadir sebagai platform online yang menghubungkan perusahaan sosial dan masyarakat dalam upaya kolektif memerangi perubahan iklim. Platform ini bertujuan untuk Memperkuat peran perusahaan sosial dalam mengembangkan proyek-proyek iklim berbasis komunitas yang efektif dan berkelanjutan, Mendukung upaya masyarakat lokal dalam mengatasi perubahan iklim di wilayah mereka.

## Tim C624-PS020

- F1316YB262 – [Syafa’at Akbar](https://github.com/SyafaatAkbar123) - Politeknik Negeri Malang
- F1716YB199 – [M. Zaedan Al Ghifari](https://github.com/mzaedan) - STMIK Mardira Indonesia
- F2376YB295  – [Mohamad Hasan](https://github.com/MuhammadHasan3 ) - Universitas Komputer Indonesia


## Dokumen
- [Project Brief](https://docs.google.com/document/d/1BKAL7HBaoyeZ4x-YyRIY379EO1ukGdF32pBLJCuAbKM/edit?usp=sharing)
- [Working Doc](https://docs.google.com/document/d/1su4x1RqE7LkzMH5yu8X3ChkuGQpmPAoUumzToc_4E7s/edit)
- [User Guide](https://drive.google.com/file/d/18hm3B0_AvFsl3RpuRLiHuImNf5BiyKUq/view)
- [Slide Presentasi](https://www.canva.com/design/DAF2xqg-uyM/raYMYC651Q5XHpfHW3S1rg/edit)
- [Video Presentasi](https://www.youtube.com/watch?v=EAymPVOEpuM)
- [Video Demo Aplikasi](https://www.youtube.com/watch?v=oVFswb0BQKM)

## Resources
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/768px-HTML5_logo_and_wordmark.svg.png" width="150" alt="Logo HTML"></span>
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" width="150" alt="Logo Javascript"></span>
<a href="https://www.php.net/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="150" alt="Logo PHP"></a>
<a href="https://laravel.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" width="150" alt="Logo Laravel"></a>
<a href="https://tailwindcss.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/512px-Tailwind_CSS_Logo.svg.png?20230715030042" width="200" alt="Logo TailwindCSS"></a>

## Instalasi / Cara menjalankan di lokal
1. Clone proyek
```bash
  git clone https://github.com/CodeWithRey/satu-hati.git
```
2. Jalankan composer update
```bash
  composer update
```
3. Instal library menggunakan npm
```bash
  npm install
```
4. Setup database mySQL di local
5. Copy + Paste .env.example lalu rename menjadi .env
6. Generate `APP_KEY` pada file .env dengan
```bash
  php artisan key:generate
```
8. Konfigurasi `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD` di file .env
9. Jalankan seeder database
```bash
  php artisan migrate:fresh --seed
```
9. Buat link storage ke public directory
```bash
  php artisan storage:link
```
