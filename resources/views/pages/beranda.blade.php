@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')

<div id="jumbotron">
    <div id="jumbotron-text">
        <h1>Bersama Kita Bisa Menyelamatkan Bumi dan Indonesia</h1>
        <p>
        Jaga Bumi adalah platform bagi para individu untuk berkontribusi
        dalam menjaga bumi, Kami percaya bahwa setiap individu memiliki
        peran penting dalam menjaga bumi.
        </p>
    </div>
    <div id="jumbotron-illustration">
        <img
        src="{{ url('images/aside.jpg') }}"
        alt="gambar-furniture"
        class="gambar-furniture"
        />
    </div>
</div>

<main>
    <article id="tentang-kami">
        <div class="tentang-kami-image"></div>
        <div class="tentang-kami-description">
            <h2 class="text-dark">Tentang Kami</h2>
            <p class="text-dark">
            Kami adalah inisiatif yang berfokus pada pemberdayaan masyarakat
            untuk bersama-sama menanggulangi perubahan iklim. Kami percaya bahwa
            dengan gotong royong, kita bisa menciptakan dampak yang nyata dan
            positif bagi lingkungan
            </p>
            <div class="stats">
            <div>
                <p class="text-dark stats-header">50+</p>
                <p class="stats-description">Projects</p>
            </div>
            <span class="stats-divider"></span>
            <div>
                <p class="text-dark stats-header">1000+</p>
                <p class="stats-description">volunteer</p>
            </div>
            </div>
        </div>
    </article>
    <!-- Our Projects-->
    <article id="project">
        <h2>Our Project</h2>
        <div class="underline"></div>
        <p>
          Mari Gabung Bersatu Padu, Jaga Bumi Untuk Masa Depan Yang Lebih
          Gemilang
        </p>
        <div class="project-container">
          <div class="project-item">
            <a href="detail.html">
              <img src="{{ url('images/tanam-mangrove.jpeg') }}" />
              <div class="project-description">
                <h3>Menanam Mangrove</h3>
                <div class="project-date">
                  <img src="{{ url('images/calender-icon.png') }}" alt="" />
                  <p>10 Mei 2024</p>
                </div>
                <div class="project-location">
                 <img src="{{ url('images/location.png') }}" alt="" />
                  <p>Pulau Harapan, Kepulauan Seribu</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <a href="project.html" class="btn-hijau">Lihat lebih banyak</a>
      </article>
    </main>
@endsection
