@extends('layouts.app')

@section('title')
  Berita
@endsection

@section('content')

<main>
    <article id="project">
        <h2>Berita</h2>
        <div class="underline"></div>
    </article>
    <section id="news">

        <div class="news-container">
            @foreach($beritaItems as $beritaItem)
            <div class="news-card">
                <div class="news-img">
                    <img src="{{ Storage::url($beritaItem->foto) }}" />
                </div>
                <div class="news-text">
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $beritaItem->tanggal)->format('d-m-Y') }}</span>
                    <a href="{{ url('/berita/' . $beritaItem->slug) }}" class="card-title"
                    >{{ $beritaItem->judul_berita }}</a
                    >
                    <p>
                    {{ strip_tags($beritaItem->deskripsi) }}
                    </p>
                    <a href="{{ url('/berita/' . $beritaItem->slug) }}">Baca selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>

    </section>
</main>



@endsection
