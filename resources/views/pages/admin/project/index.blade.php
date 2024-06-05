@extends('layouts.admin')

@section('header-name')
  Project
@endsection

@section('content')

<div class="section">
    <div class="container-fluid">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">
                                + Tambah Project
                            </a>
                            <div class="table-resposive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Status Kegiatan</th>
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
                { data : 'nama_kegiatan', name: 'nama_kegiatan', className: 'text-left'},
                { data : 'tanggal', name: 'tanggal', className: 'text-center'},
                { data : 'status_project', name: 'status_project', className: 'text-center'},
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