@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')


<main>
      <!-- Project List-->
      <article id="project">
        <h2>List Project</h2>
        <div class="underline"></div>
        <p>
          Mari Gabung Bersatu Padu, Jaga Bumi Untuk Masa Depan Yang Lebih
          Gemilang
        </p>

        
        <div class="project-container">
          @foreach($projectItems as $projectItem)
          <div class="project-item">
            <a href="detail.html">
              <img src="{{ Storage::url($projectItem->foto) }}" />
              <div class="project-description">
                <a href="{{ route('user.project.show', ['id' => $projectItem->id]) }}">
                  <h3>{{ $projectItem->nama_kegiatan }}</h3>
                </a>
                <div class="project-date">
                  <img src="assets/image/calender-icon.png" alt="" />
                  <p>{{ $projectItem->tanggal_kegiatan }}</p>
                </div>
                <div class="project-location">
                  <img src="assets/image/location.png" alt="" />
                  <p>{{ $projectItem->lokasi_kegiatan }}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        
      </article>
    </main>


@endsection
