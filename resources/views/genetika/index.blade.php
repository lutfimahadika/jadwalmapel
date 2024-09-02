@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">GENERATE JADWAL</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">GENERATE JADWAL</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">GENERATE JADWAL</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <a href="{{ route('admin.jadwal.generate') }}" class="btn btn-primary btn-lg"
                                    style="margin:15px;">Generate Jadwal</a>
                                <table class="table table-hover text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Guru</th>
                                            <th>Kelas</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $jadwal)
                                            <tr>
                                                <td>{{ $jadwal->pengampu->mapel->mata_pelajaran }}</td>
                                                <td>{{ $jadwal->pengampu->guru->nama_guru }}</td>
                                                <td>{{ $jadwal->pengampu->kelas->nama_kelas }}</td>
                                                <td>{{ $jadwal->hari->nama_hari }}</td>
                                                <td>{{ $jadwal->waktu_mulai }}</td>
                                                <td>{{ $jadwal->waktu_selesai }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
