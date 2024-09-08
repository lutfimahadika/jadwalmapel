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
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <a href="{{ route('admin.jadwal.generate') }}" class="btn btn-primary btn-lg"
                                    style="margin:15px;">Generate Jadwal</a>
                                <div id="loading-overlay" style="display: none;">
                                    <div class="spinner"></div>
                                    <p style="font-size: large; font-weight: bold; font-style: italic;color:white;">Sedang Menggenerate Jadwal ...</p>
                                </div>
                                <a href="{{ route('admin.jadwal.export') }}" class="btn btn-success btn-lg"
                                    style="margin:15px;">Export Jadwal</a>
                                <table class="table table-hover text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Guru</th>
                                            <th>Kelas</th>
                                            <th>JP</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $jadwal)
                                            <tr>
                                                <td>{{ $jadwal->pengampu->mapel->mata_pelajaran }}</td>
                                                <td>{{ $jadwal->pengampu->guru->nama_guru }}</td>
                                                <td>{{ $jadwal->pengampu->kelas->nama_kelas }}</td>
                                                <td>{{ $jadwal->pengampu->mapel->jp }}</td>
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
@section('css')
    <style>
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const generateButton = document.querySelector('a[href="{{ route('admin.jadwal.generate') }}"]');
            const loadingOverlay = document.getElementById('loading-overlay');

            generateButton.addEventListener('click', function() {
                loadingOverlay.style.display = 'flex';
            });
        });
    </script>
@endsection
