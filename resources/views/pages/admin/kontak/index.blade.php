@extends('layouts.admin')

@section('title')
  Kontak Pesan
@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontak Pesan</h1>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="tabel table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">email</th>
                                <th style="text-align: center;">subject</th>
                                <th style="text-align: center;">massage</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                <td style="text-align: left;">{{ $item->nama }}</td>
                                <td style="text-align: left;">{{ $item->email }}</td>
                                <td style="text-align: left;">{{ $item->subject }}</td>
                                <td style="text-align: left;">{{ $item->message }}</td>
                                <td style="text-align:center; width:100px">
                                    <form action="{{ route('kontak.destroy', $item->id) }}" method="POST" class="d-inline">
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
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-script')

@endpush
