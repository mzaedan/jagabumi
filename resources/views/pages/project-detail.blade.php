@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')

 <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>{{ $projectItem->nama_kegiatan }}</h1>
                <p>{{ $projectItem->lokasi_kegiatan }}</p>
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      src="{{ Storage::url($projectItem->foto) }}"
                      class="xzoom"
                      id="xzoom-default"
                      xoriginal="assets/image/bersih-pantai.png"
                    />
                  </div>
                </div>
                <h2>Tentang Kegiatan</h2>
                <p>{{ $projectItem->deskripsi }}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>{{ $projectItem->nama_kegiatan }}</h2>
                <hr />
                <h2>Detail Informasi</h2>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Tanggal Kegiatan</th>
                    <td width="50%" class="text-right">{{ $projectItem->tanggal_kegiatan }}</td>
                  </tr>
                  <tr>
                    <th width="50%">Tempat Kumpul</th>
                    <td width="50%" class="text-right">{{ $projectItem->tempat_kumpul }}</td>
                  </tr>
                  <tr>
                    <th width="50%">Batas Registrasi</th>
                    <td width="50%" class="text-right">{{ $projectItem->batas_registrasi }}</td>
                  </tr>
                </table>
              </div>
              <div class="join-container">
                <a
                  href="{{ $projectItem->link }}"
                  class="btn btn-block btn-join-now mt-3 py-2"
                >
                  Gabung Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>


@endsection




