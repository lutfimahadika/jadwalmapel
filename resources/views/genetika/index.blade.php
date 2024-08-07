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
                  <a href="{{ route('admin.genetika.generate') }}" class="btn btn-primary btn-lg" style="margin:15px;">Generate Jadwal</a>
                  <table class="table table-hover text-nowrap">
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
                      @foreach ($schedules as $schedule)
                          @if (
                              is_null($schedule->mapel) &&
                              is_null($schedule->jam_id) &&
                              is_null($schedule->guru) &&
                              is_null($schedule->kelas) &&
                              is_null($schedule->hari) &&
                              is_null($schedule->jam->jam_awal) &&
                              is_null($schedule->jam->jam_akhir )
                          )
                              @continue
                          @endif

                          <tr>
                              <td>
                                  @if ($schedule->mapel && $schedule->mapel->mata_pelajaran)
                                      {{ $schedule->mapel->mata_pelajaran }}
                                  @elseif (is_null($schedule->mapel) && is_null($schedule->jam_id))
                                      ISTIRAHAT
                                  @else
                                      UPACARA
                                  @endif
                              </td>
                              <td>
                                  @if ($schedule->guru && $schedule->guru->nama_guru)
                                      {{ $schedule->guru->nama_guru }}
                                  @elseif (is_null($schedule->guru) && is_null($schedule->jam_id))
                                      ISTIRAHAT
                                  @else
                                      UPACARA
                                  @endif
                              </td>
                              <td>{{ isset($schedule->kelas->nama_kelas) ? $schedule->kelas->nama_kelas : '' }}</td>
                              <td>{{ isset($schedule->hari->nama_hari) ? $schedule->hari->nama_hari : '' }}</td>
                              <td>{{ isset($schedule->jam->jam_awal) ? $schedule->jam->jam_awal : '' }}</td>
                              <td>{{ isset($schedule->jam->jam_akhir) ? $schedule->jam->jam_akhir : '' }}</td>
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
