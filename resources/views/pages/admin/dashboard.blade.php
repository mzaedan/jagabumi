@extends('layouts.admin')

@section('header-name')
  Dashboard
@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Rekap</h2>
    </div>
    <div class="container-fluid mt-3">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $jumlah_project_aktif }}</h3>
            <p>Project Aktif</p>
          </div>
          <div class="icon">
            <i class="fas fa-tasks"></i>
          </div>
          <a href="{{ route('project.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $jumlah_project_tidak_aktif }}</h3>
            <p>Project Tidak Aktif</p>
          </div>
          <div class="icon">
            <i class="fas fa-tasks"></i>
          </div>
          <a href="{{ route('project.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $jumlah_berita }}</h3>
            <p>Jumlah Berita</p>
          </div>
          <div class="icon">
            <i class="fas fa-newspaper"></i>
          </div>
          <a href="{{ route('berita.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $jumlah_pesan }}</h3>
            <p>Jumlah Pesan</p>
          </div>
          <div class="icon">
            <i class="fas fa-envelope-open-text"></i>
          </div>
          <a href="{{ route('berita.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
    
  </div>
  
</section>
<!-- /.content -->
@endsection