<p align="center"><a href="https://jagabumi.masuk.id/" target="_blank"><img src="https://github.com/mzaedan/jagabumi/blob/master/public/images/logo.png" width="400" alt="Jaga Bumi Logo"></a></p>

<h1 align="center"><b>Jaga Bumi - Bersama Kita Bisa Menyelamatkan Bumi dan Indonesia</b></h1>

Jaga Bumi hadir sebagai platform online yang menghubungkan perusahaan sosial dan masyarakat dalam upaya kolektif memerangi perubahan iklim. Platform ini bertujuan untuk Memperkuat peran perusahaan sosial dalam mengembangkan proyek-proyek iklim berbasis komunitas yang efektif dan berkelanjutan, Mendukung upaya masyarakat lokal dalam mengatasi perubahan iklim di wilayah mereka.

## Tim C624-PS020

- F1316YB262 – [Syafa’at Akbar](https://github.com/SyafaatAkbar123) - Politeknik Negeri Malang
- F1716YB199 – [M. Zaedan Al Ghifari](https://github.com/mzaedan) - STMIK Mardira Indonesia
- F2376YB295  – [Mohamad Hasan](https://github.com/MuhammadHasan3 ) - Universitas Komputer Indonesia


## Dokumen
- [Project Brief](https://docs.google.com/document/d/1BKAL7HBaoyeZ4x-YyRIY379EO1ukGdF32pBLJCuAbKM/edit?usp=sharing)
- [Working Doc](https://docs.google.com/document/d/1su4x1RqE7LkzMH5yu8X3ChkuGQpmPAoUumzToc_4E7s/edit)
- [User Guide](https://docs.google.com/document/d/1ogVoFdZ728NlvFcpasqjhgFSZlWBaPznjKBFcr45knk/edit?usp=sharing )
- [Slide Presentasi](https://docs.google.com/presentation/d/1wvEeG14pleMrxyj1Rg3x_d3xvbwXfz6rTbo4PCXG60E/edit?usp=sharing )
- [Video Presentasi](https://youtu.be/oaDmvAjFuJ8)
- [Video Demo Aplikasi](https://youtu.be/N7kCYcRSQg0)

## Resources
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/768px-HTML5_logo_and_wordmark.svg.png" width="150" alt="Logo HTML"></span>
<a href="https://www.w3.org/Style/CSS/" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/512px-CSS3_logo.svg.png" width="200" alt="Logo CSS">
</a>
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" width="150" alt="Logo Javascript"></span>
<a href="https://www.php.net/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="150" alt="Logo PHP"></a>
<a href="https://laravel.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" width="150" alt="Logo Laravel"></a>
<a href="https://getbootstrap.com/" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" width="200" alt="Logo Bootstrap">
</a>

## Instalasi / Cara menjalankan di lokal
1. Clone proyek
```bash
  git clone https://github.com/mzaedan/jagabumi.git
```
2. Jalankan composer update
```bash
  composer update
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
