@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')

 <main>
    <!-- detail -->
    <section class="berita-section">
        <div class="berita-container">
            <!-- <h2 class="testimonial-title">Detail Berita</h2> -->
            <div class="berita-card">
                <img src="{{ url('images/tanam-hutan.jpeg') }}" alt="Headline Berita" class="berita-image" />
                <h3 class="berita-name">Soil and water conservation</h3>
                <h5 class="berita-loc"><i class="fa-solid fa-location-dot"></i> Bandung, Indonesia</h5>
                <habitant class="berita-quote">"In total 6566 m stone bunds and 100 percolation ponds have been constructed in 2022. These walls are not meant to lock people out, but to keep fertile soil inside the forest. The captured soft sediment provides water and nutrients to the young plants. It stimulates the growth of seedlings and natural regeneration. Our little plants had a survival rate of over 90% last year, an internal record, and a milestone to be proud of!. 
                    
                <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae libero vitae nunc tincidunt aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae libero vitae nunc tincidunt aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae libero vitae nunc tincidunt aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas." <br>
            </div>
        </div>
    </section>
</main>


@endsection




