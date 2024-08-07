<!-- resources/views/jadwals/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>
<body>
    <h1>Jadwal Kelas</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.jadwals.generate') }}" method="POST">
        @csrf
        <button type="submit">Generate Schedule</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Kelas</th>
                <th>Jam</th>
                <th>Mata Pelajaran</th>
                <th>Guru</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals->sortByDesc(['hari.nama_hari', 'kelas.nama_kelas']) as $jadwal)
                <tr>
                    <td>{{ $jadwal->hari->nama_hari }}</td>
                    <td>{{ $jadwal->kelas->nama_kelas }}</td>
                    <td>{{ $jadwal->jam->jam_awal }} - {{ $jadwal->jam->jam_akhir }}</td>
                    <td>{{ $jadwal->mapel->mata_pelajaran }}</td>
                    <td>{{ $jadwal->guru->nama_guru }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
