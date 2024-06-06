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
          @foreach($projectItems->filter(function ($item) {
          return $item->status_project == 'Aktif';
          }) as $projectItem)
          <div class="project-item">
            <a href="{{ url('/project/' . $projectItem->slug) }}">
              <img src="{{ Storage::url($projectItem->foto) }}" />
              <div class="project-description">
                  <h3>{{ $projectItem->nama_kegiatan }}</h3>
                <div class="project-date">
                  <img src="{{ url('images/calender-icon.png') }}" alt="" />
                  <p>{{ $projectItem->tanggal }}</p>
                </div>
                <div class="project-location">
                  <img src="{{ url('images/location.png') }}" alt="" />
                  <p>{{ $projectItem->lokasi }}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        
      </article>
    </main>


@endsection
