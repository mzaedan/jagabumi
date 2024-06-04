@extends('layouts.admin')

@section('title')
  Project
@endsection

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Project</h1>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="card-body">
                <a href="{{ route('project.create') }}" class="btn btn-sm btn-primary shadow-sm mb-3">
                    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Project
                </a>
                <div class="table-responsive">
                    <table class="tabel table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Nama Kegiatan</th>
                                <th style="text-align: center;">Tanggal Kegiatan</th>
                                <th style="text-align: center;">Status Kegiatan</th>
                                <th style="text-align: center;">Foto</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td style="text-align: center;">{{ ($items->currentPage()-1) * $items->perPage() + $loop->iteration }}</td>
                                <td style="text-align: left;">{{ $item->nama_kegiatan }}</td>
                                <td style="text-align: center;">{{ $item->tanggal}}</td>
                                <td style="text-align: center;">{{ $item->status_project}}</td>
                                <td style="text-align: center;"><img src="{{ Storage::url($item->foto) }}" style="width: 150px" class="img-thumbnail" /></td>
                                <td style="text-align:center;">
                                    <a href="{{ route('project.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('project.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('project.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are You Sure, You Want To Delete This Data?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <br><br>
                {{ $items->links() }}
            </div>
        </div>
    </div>

    <style>
        .pagination {
            margin-top: 50px;
            justify-content: center;
        }
    </style>

</div>

@endsection

@push('addon-script')

@endpush