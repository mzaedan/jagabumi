@extends('layouts.admin')

@section('header-name')
  Kontak
@endsection

@section('content')

<div class="section">
    <div class="container-fluid">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-resposive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
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
                { data : 'nama', name: 'nama', className: 'text-left'},
                { data : 'email', name: 'email', className: 'text-center'},
                { data : 'subject', name: 'subject', className: 'text-center'},
                { data : 'message', name: 'message', className: 'text-left'},
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