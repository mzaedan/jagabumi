@extends('layouts.app')

@section('title')
  Beranda
@endsection

@section('content')


<main>
    <article id="project">
        <h2>Kontak Kami</h2>
        <div class="underline"></div>
    </article>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                    <h5>Jl. Parahyangan Raya No.7</h5>
                    <p>Kabupaten Bandung Barat, Jawa Barat 40553</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                    <h5>+62 81233456789</h5>
                    <p>Jaga Bumi</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                    <h5>JagaBumi@gmail.com</h5>
                    <p>Kirimkan pertanyaan anda melalui email kepada kami</p>
                    </span>
                </div>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="contact-col">
                <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="nama" placeholder="Masukan Nama Anda" required />
                    <input type="email" name="email" placeholder="Masukan Email Anda" required />
                    <input type="text" name="subject" placeholder="Masukan Subject" />
                    <textarea type="text" rows="8" placeholder="Pesan..." name="message" required></textarea>
                    <button type="submit" class="hero-btn">Kirim</button>
                </form>
            </div>
        </div>
    </section>

      <section class="location">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.6705826623243!2d107.45694562691672!3d-6.867115198986592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fbf593d01b2b%3A0xb1b59ad87be2bd4e!2sLokapadma%207!5e0!3m2!1sen!2sid!4v1716231704682!5m2!1sen!2sid"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
    </main>



@endsection




