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
                <span style="color: #5bbe82;">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $beritaItem->tanggal)->format('d-m-Y') }}</span>
                <h3 class="berita-name">{{ $beritaItem->judul_berita }}</h3>
                <h5 class="berita-loc">
                    <i class="fa-solid fa-location-dot"  style="color: #5bbe82; margin-bottom: 13px"></i> {{ $beritaItem->lokasi }} <br> 
                    <i class="fa-regular fa-user" style="color: #5bbe82;"></i><span> {{ $beritaItem->penulis }}</span>
                </h5>
                
                <habitant class="berita-quote">
                    <p>{!! $beritaItem->deskripsi !!}</p>
                <br>
                <a href="{{ route('user.berita.index') }}" class="btn" style="background-color: #5bbe82; color: white;">Kembali</a>
            </div>
        </div>
    </section>
</main>


@endsection




