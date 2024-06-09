@extends('layouts.app')

@section('title')
  Detail Berita
@endsection

@section('content')

 <main>
    <!-- detail -->
    <section class="berita-section">
        <div class="berita-container">
            <!-- <h2 class="testimonial-title">Detail Berita</h2> -->
            <div class="berita-card">
                <img src="{{ Storage::url($beritaItem->foto) }}" alt="Headline Berita" class="berita-image" />
                <h3 class="berita-name">{{ $beritaItem->judul_berita }}</h3>
                <h5 class="berita-loc"><i class="fa-solid fa-location-dot"></i> {{ $beritaItem->lokasi }} - <span>{{ $beritaItem->penulis }}</span></h5>
                
                <habitant class="berita-quote">
                    <p>{!! $beritaItem->deskripsi !!}</p>
                <br>
            </div>
        </div>
    </section>
</main>


@endsection




