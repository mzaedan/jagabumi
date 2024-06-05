@extends('layouts.admin')

@section('header-name')
  Berita
@endsection

@section('content')

<div class="section">
    <div class="container-fluid">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">
                                + Tambah Berita
                            </a>
                            <div class="table-resposive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal</th>
                                            <th>Penulis</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data : 'no', name: 'no', className: 'text-center' },
                { data : 'judul_berita', name: 'judul_berita', className: 'text-left'},
                { data : 'lokasi', name: 'lokasi', className: 'text-center'},
                { data : 'tanggal', name: 'tanggal', className: 'text-center'},
                { data : 'penulis', name: 'penulis', className: 'text-center'},
                { data : 'foto', name: 'foto', className: 'text-center'},
                {
                    data : 'action',
                    name : 'action',
                    orderable : false,
                    searcable : false,
                    width: '15%',
                    className: 'text-center'
                },
            ]
        })
    </script>
@endpush