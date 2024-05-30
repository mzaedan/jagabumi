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
                <h1>Bersih - Bersih Pantai</h1>
                <p>Bali, Indonesia</p>
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      src="{{ url('images/bersih-pantai.png') }}"
                      class="xzoom"
                      id="xzoom-default"
                      xoriginal="assets/image/bersih-pantai.png"
                    />
                  </div>
                </div>
                <h2>Tentang Kegiatan</h2>
                <p>
                  Nusa Penida is an island southeast of Indonesia’s island Bali
                  and a district of Klungkung Regency that includes the
                  neighbouring small island of Nusa Lembongan. The Badung Strait
                  separates the island and Bali. The interior of Nusa Penida is
                  hilly with a maximum altitude of 524 metres. It is drier than
                  the nearby island of Bali.
                </p>
                <p>
                  Bali and a district of Klungkung Regency that includes the
                  neighbouring small island of Nusa Lembongan. The Badung Strait
                  separates the island and Bali.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Bersih - Bersih Pantai</h2>
                <hr />
                <h2>Detail Informasi</h2>
                <table class="trip-information">
                  <tr>
                    <th width="50%">Tanggal Kegiatan</th>
                    <td width="50%" class="text-right">16 Mei 2024</td>
                  </tr>
                  <tr>
                    <th width="50%">Tempat Kumpul</th>
                    <td width="50%" class="text-right">Hotel Asia Afrika</td>
                  </tr>
                  <tr>
                    <th width="50%">Batas Registrasi</th>
                    <td width="50%" class="text-right">13 Mei 2024</td>
                  </tr>
                </table>
              </div>
              <div class="join-container">
                <a
                  href="checkout.html"
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




