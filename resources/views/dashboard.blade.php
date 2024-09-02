@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {{-- @can('view_dashboard') --}}
        <div class="row">
            <div class="col-lg-4 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $guru }}</h3>
                  <p>Guru</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-people"></i>
                </div>
                <a href="{{ route('admin.index_guru')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $kelas }}</h3>
                  <p>Kelas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-grid"></i>
                </div>
                <a href="{{ route('admin.index_kelas')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $mapel }}</h3>
                  <p>Mata Pelajaran</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-book"></i>
                </div>
                <a href="{{ route('admin.index_mapel')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-8 text-center">
              <div class="welcome-box">
                <h1>SELAMAT DATANG DI APLIKASI PEMBUATAN JADWAL MATA PELAJARAN SMAN 1 SINGAPARNA</h1>
                <div class="logo mt-4">
                 <img src="{{ asset('img/logo.png') }}" alt="" class="brand-image img-circle elevation-3">
                </div>
              </div>
            </div>
          </div>
          {{-- @endcan --}}

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
