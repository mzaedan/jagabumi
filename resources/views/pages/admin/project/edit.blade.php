@extends('layouts.admin')

@section('title')
  Edit Kegiatan
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Kegiatan</h2>
            <p class="dashboard-subtitle">Edit Kegiatan</p>
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
                            <form action="{{ route('project.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Nama Kegiatan</label>
                                            <input type="text" name="nama_kegiatan" class="form-control" required value="{{ $item->nama_kegiatan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tanggal Kegiatan</label>
                                            <input type="date" name="tanggal" class="form-control" required value="{{ $item->tanggal }}">
                                        </div>
                                    </div>
                                     <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Lokasi Kegiatan</label>
                                            <input type="text" name="lokasi" class="form-control" required value="{{ $item->lokasi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Tempat Kumpul</label>
                                            <input type="text" name="tempat_kumpul" class="form-control" required value="{{ $item->tempat_kumpul }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Batas Registrasi</label>
                                            <input type="date" name="batas_registrasi" class="form-control" required value="{{ $item->batas_registrasi }}" >
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="link" class="form-control" required value="{{ $item->link }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label>Foto <small style="color:green">(pdf) * opsional</small></label> <br/>
                                                @if ($item->foto === null)
                                                    <span class="text-danger"><i class="fa fa-times"></i> <i>Tidak ada file yang diupload</i></span>
                                                @else
                                                    <img class="img-fluid" width="150" src="{{ asset('storage/'.$item->foto)}}" alt="foto.jpg" />
                                                @endif
                                            </div>
                                            <input type="file" accept="image/*" name="foto" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Status Kegiatan</label>
                                            <select name="status_project" class="form-select" required>
                                                <option value="{{ $item->status_project }}">
                                                    {{ $item->status_project }}
                                                </option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
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

{{-- <script>
    function removeFile() {
        // Remove the current file and allow the user to select a new one
        $('input[name="foto"]').val('');
    }
</script> --}}
    
@endpush