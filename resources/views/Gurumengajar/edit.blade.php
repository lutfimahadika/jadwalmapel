@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Guru Mengajar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.index_gurumengajar') }}">Guru Mengajar</a></li>
                <li class="breadcrumb-item active">Edit Guru Mengajar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.gurumengajar.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Edit Guru Mengajar</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="guru">Guru Mata Pelajaran</label>
                                <input type="text" name="guru_name" id="guru_name" class="form-control" value="{{ $data->guru->nama_guru }}" readonly>
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
