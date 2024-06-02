@extends('layouts.admin')

@section('title')
  Edit Berita
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Berita</h2>
            <p class="dashboard-subtitle">Edit Berita</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('berita.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input type="text" name="judul_berita" class="form-control" required value="{{ $item->judul_berita }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>lokasi</label>
                                            <input type="text" name="lokasi" class="form-control" required value="{{ $item->lokasi }}">
                                        </div>
                                    </div>
                                     <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" required value="{{ $item->tanggal }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input type="text" name="penulis" class="form-control" required value="{{ $item->penulis }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            @if ($item->foto === null)
                                                <span class="text-danger"><i class="fa fa-times"></i> <i>Tidak ada file yang diupload</i></span>
                                            @else
                                                <img class="img-fluid" width="200" src="{{ asset('storage/'.$item->foto)}}" alt="foto.jpg" />
                                            @endif
                                        </div>
                                        <input type="file" accept="image/*" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8" style="margin-top:20px">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi" id="editor" required>{{ $item->deskripsi }}</textarea>
                                    </div>
                                </div>                   
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'editor' );
</script>
    
@endpush