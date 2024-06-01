@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Paket Travel</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
            <tr>
                <th>Nama Kegiatan</th>
                <td>{{ $data->nama_kegiatan }}</td>
            </tr>
            <tr>
                <th>Tanggal Kegiatan</th>
                <td>{{ $data->tanggal_kegiatan }}</td>
            </tr>
            <tr>
                <th>Lokasi Kegiatan</th>
                <td>{{ $data->lokasi_kegiatan }}</td>
            </tr>
            <tr>
                <th>Tempat Kumpul</th>
                <td>{{ $data->tempat_kumpul }}</td>
            </tr>
            <tr>
                <th>Batas Registrasi</th>
                <td>{{ $data->batas_registrasi }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ $data->link }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{!! $data->deskripsi !!}</td>
            </tr>
            </table>
            <div class="mt-3">  
                <a href="{{ route ('project.index') }}" class="btn btn-primary btn-md">Kembali</a>
            </div>
        </div>
    </div>
    
</div>

@endsection