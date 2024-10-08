@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Guru Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.index_guru') }}">Guru Mata Pelajaran</a></li>
                <li class="breadcrumb-item active">Edit Guru Mata Pelajaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.guru.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Guru Mata Pelajaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Daftar Urut Kepangkatan</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="no_duk" placeholder="Masukkan No DUK">
                              @error('no_duk')
                                  <small>{{ $message }}</small>
                              @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Guru Mata Pelajaran</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="guru" value="{{ $data->nama_guru }} " placeholder="Masukkan Mata Pelajaran">
                            @error('guru')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Beban Mengajar</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="beban_mengajar" value="{{ $data->beban_mengajar }} " placeholder="Masukkan Jam Pelajaran">
                            @error('beban_mengajar')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->

                </div>
              </div>
        </form>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  </div>
@endsection
