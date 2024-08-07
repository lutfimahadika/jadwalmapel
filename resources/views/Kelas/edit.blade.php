@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Kelas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.index_kelas') }}">Kelas</a></li>
              <li class="breadcrumb-item active">Edit Kelas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.kelas.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Kelas</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Kelas</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kelas" value="{{ $data->nama_kelas }} " placeholder="Masukkan Kelas">
                            @error('nama_kelas')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tingkat</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="tingkat" value="{{ $data->tingkat }} " placeholder="Masukkan Tingkatan Kelas">
                            @error('tingkat')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan" value="{{ $data->jurusan }} " placeholder="Masukkan Jam Pelajaran">
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
