@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')

<main>
    <article id="project">
        <h2>Berita</h2>
        <div class="underline"></div>
    </article>
    <section id="news">
        <div class="news-container">
            <div class="news-card">
                <div class="news-img">
                    <img src="assets/image/tanam-mangrove.jpeg" />
                </div>
                <div class="news-text">
                    <span>18 Mei 2024</span>
                    <a href="news-detail.html" class="card-title"
                    >Upaya Pelestarian: Penanaman Mangrove di Pulau Harapan,
                    Kepulauan Seribu untuk Mitigasi Perubahan Iklim</a
                    >
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium enim nobis aspernatur aperiam laborum harum ipsa
                    vitae eos quisquam culpa? Minus alias quod vitae asperiores
                    maiores, natus repellat ducimus facere?
                    </p>
                    <a href="news-detail.html">Baca selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection
