@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Berita</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
            <tr>
                <th>Judul Berita</th>
                <td>{{ $data->judul_berita }}</td>
            </tr>
            <tr>
                <th>Lokasi</th>
                <td>{{ $data->lokasi }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>{{ $data->tanggal }}</td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>{{ $data->penulis }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{!! $data->deskripsi !!}</td>
            </tr>
            </table>
            <div class="mt-3">  
                <a href="{{ route ('berita.index') }}" class="btn btn-primary btn-md">Kembali</a>
            </div>
        </div>
    </div>
    
</div>

@endsection