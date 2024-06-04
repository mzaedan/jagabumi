@extends('layouts.admin')

@section('title')
  Berita
@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="card-body">
                <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary shadow-sm mb-3">
                    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Berita
                </a>
                <div class="table-responsive">
                    <table class="tabel table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Judul Berita</th>
                                <th style="text-align: center;">Lokasi</th>
                                <th style="text-align: center;">Tanggal</th>
                                <th style="text-align: center;">Penulis</th>
                                <th style="text-align: center;">Foto</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td style="text-align: center;">{{ ($items->currentPage()-1) * $items->perPage() + $loop->iteration }}</td>
                                <td style="text-align: left;">{{ $item->judul_berita }}</td>
                                <td style="text-align: center;">{{ $item->lokasi }}</td>
                                <td style="text-align: center;">{{ $item->tanggal }}</td>
                                <td style="text-align: center;">{{ $item->penulis }}</td>
                                <td style="text-align: center;"><img src="{{ Storage::url($item->foto) }}" style="width: 150px" class="img-thumbnail" /></td>
                                <td style="text-align:center;">
                                    <a href="{{ route('berita.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline">
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
</div>

@endsection

@push('addon-script')

@endpush
