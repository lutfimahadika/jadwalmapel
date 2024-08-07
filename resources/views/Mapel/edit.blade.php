@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.index_mapel') }}">Mata Pelajaran</a></li>
              <li class="breadcrumb-item active">Edit Mata Pelajaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.mapel.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Mata Pelajaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mata Pelajaran</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="mapel" value="{{ $data->mata_pelajaran }} " placeholder="Masukkan Mata Pelajaran">
                            @error('mapel')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jam Pelajaran</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="jp" value="{{ $data->jp }} " placeholder="Masukkan Jam Pelajaran">
                            @error('jp')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tingkatan Kelas</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="tingkat" value="{{ $data->tingkat }} " placeholder="Masukkan Tingkatan Kelas">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan" value="{{ $data->jurusan }} " placeholder="Masukkan Jurusan">
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
