@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Guru Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Tambah Guru Mata Pelajaran</h3>
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
                          <label for="exampleInputEmail1">Guru Mata Pelajaran</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="guru" placeholder="Masukkan Mata Pelajaran">
                            @error('guru')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Beban Mengajar Guru</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="beban_mengajar" placeholder="Masukkan Jam Pelajaran">
                            @error('beban_mengajar')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mata Pelajaran</label>
                            <select name="mapel" id="mapel" class="form-control" required>
                                <option value="">Pilih Mata Pelajaran</option>
                                @foreach ($dataMapel as $d)
                                    <option value="{{ $d->id }}">{{ $d->mata_pelajaran }}</option>
                                @endforeach
                            </select>
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
