<!DOCTYPE html>
<html>

<head>
    <title>Jadwal Pelajaran</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            size: legal
        }

        table{
            font-size:8px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 2px
        }

        table {
            width: 50%;
            border-spacing: 0;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div style="text-align: center; line-height: 0.2;">
        <h3>JADWAL KEGIATAN BELAJAR MENGAJAR SEMESTER 2 (GENAP)</h3>
        <h4>SMA NEGERI 1 SINGAPARNA</h4>
        <h5>TAHUN PELAJARAN 2023/2024</h5>
    </div>
    <hr>
    <div style="text-align: center;margin:0 auto;">
        <table style="border: 1px solid black; padding: 0 10px; margin: 0 auto;">
            <thead>
                <tr style="border: 1px solid black;">
                    <th rowspan="1">No</th>
                    <th rowspan="1">Ha</th>
                    <th rowspan="1">Jam</th>
                    <th rowspan="1">Waktu</th>
                    <th colspan="12">Kelas X
                        (FASE E)</th>
                    <th colspan="12">Kelas XI
                    </th>
                    <th colspan="12" style="border-bottom: 1px solid black;">Kelas XII</th>
                </tr>
                <tr style="border: 1px solid black;">
                    <th></th>
                    <th>Ri</th>
                    <th>Ke</th>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>M1</th>
                    <th>M2</th>
                    <th>M3</th>
                    <th>M4</th>
                    <th>M5</th>
                    <th>M6</th>
                    <th>M7</th>
                    <th>M8</th>
                    <th>S1</th>
                    <th>S2</th>
                    <th>S3</th>
                    <th>S4</th>
                    <th>M1</th>
                    <th>M2</th>
                    <th>M3</th>
                    <th>M4</th>
                    <th>M5</th>
                    <th>M6</th>
                    <th>M7</th>
                    <th>M8</th>
                    <th>S1</th>
                    <th>S2</th>
                    <th>S3</th>
                    <th>S4</th>
                </tr>
            </thead>
            <tbody>
                {{-- Hari Senin --}}
                <tr style="border: 1px solid black;">
                    <td rowspan="14">1</td>
                    <td rowspan="14" style="writing-mode: vertical-rl; text-orientation: upright;">Senin</td>
                    <td>1</td>
                    <td>06.45 - 07.45</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>2</td>
                    <td>07.45 - 08.30</td>
                    <td>{{dataJadwal(1,1,2)}}</td>
                    <td>{{dataJadwal(2,1,2)}}</td>
                    <td>{{dataJadwal(3,1,2)}}</td>
                    <td>{{dataJadwal(4,1,2)}}</td>
                    <td>{{dataJadwal(5,1,2)}}</td>
                    <td>{{dataJadwal(6,1,2)}}</td>
                    <td>{{dataJadwal(7,1,2)}}</td>
                    <td>{{dataJadwal(8,1,2)}}</td>
                    <td>{{dataJadwal(9,1,2)}}</td>
                    <td>{{dataJadwal(10,1,2)}}</td>
                    <td>{{dataJadwal(11,1,2)}}</td>
                    <td>{{dataJadwal(12,1,2)}}</td>
                    <td>{{dataJadwal(13,1,2)}}</td>
                    <td>{{dataJadwal(14,1,2)}}</td>
                    <td>{{dataJadwal(15,1,2)}}</td>
                    <td>{{dataJadwal(16,1,2)}}</td>
                    <td>{{dataJadwal(17,1,2)}}</td>
                    <td>{{dataJadwal(18,1,2)}}</td>
                    <td>{{dataJadwal(19,1,2)}}</td>
                    <td>{{dataJadwal(20,1,2)}}</td>
                    <td>{{dataJadwal(21,1,2)}}</td>
                    <td>{{dataJadwal(22,1,2)}}</td>
                    <td>{{dataJadwal(23,1,2)}}</td>
                    <td>{{dataJadwal(24,1,2)}}</td>
                    <td>{{dataJadwal(25,1,2)}}</td>
                    <td>{{dataJadwal(26,1,2)}}</td>
                    <td>{{dataJadwal(27,1,2)}}</td>
                    <td>{{dataJadwal(28,1,2)}}</td>
                    <td>{{dataJadwal(29,1,2)}}</td>
                    <td>{{dataJadwal(30,1,2)}}</td>
                    <td>{{dataJadwal(31,1,2)}}</td>
                    <td>{{dataJadwal(32,1,2)}}</td>
                    <td>{{dataJadwal(33,1,2)}}</td>
                    <td>{{dataJadwal(34,1,2)}}</td>
                    <td>{{dataJadwal(35,1,2)}}</td>
                    <td>{{dataJadwal(36,1,2)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td>{{dataJadwal(1,1,3)}}</td>
                    <td>{{dataJadwal(2,1,3)}}</td>
                    <td>{{dataJadwal(3,1,3)}}</td>
                    <td>{{dataJadwal(4,1,3)}}</td>
                    <td>{{dataJadwal(5,1,3)}}</td>
                    <td>{{dataJadwal(6,1,3)}}</td>
                    <td>{{dataJadwal(7,1,3)}}</td>
                    <td>{{dataJadwal(8,1,3)}}</td>
                    <td>{{dataJadwal(9,1,3)}}</td>
                    <td>{{dataJadwal(10,1,3)}}</td>
                    <td>{{dataJadwal(11,1,3)}}</td>
                    <td>{{dataJadwal(12,1,3)}}</td>
                    <td>{{dataJadwal(13,1,3)}}</td>
                    <td>{{dataJadwal(14,1,3)}}</td>
                    <td>{{dataJadwal(15,1,3)}}</td>
                    <td>{{dataJadwal(16,1,3)}}</td>
                    <td>{{dataJadwal(17,1,3)}}</td>
                    <td>{{dataJadwal(18,1,3)}}</td>
                    <td>{{dataJadwal(19,1,3)}}</td>
                    <td>{{dataJadwal(20,1,3)}}</td>
                    <td>{{dataJadwal(21,1,3)}}</td>
                    <td>{{dataJadwal(22,1,3)}}</td>
                    <td>{{dataJadwal(23,1,3)}}</td>
                    <td>{{dataJadwal(24,1,3)}}</td>
                    <td>{{dataJadwal(25,1,3)}}</td>
                    <td>{{dataJadwal(26,1,3)}}</td>
                    <td>{{dataJadwal(27,1,3)}}</td>
                    <td>{{dataJadwal(28,1,3)}}</td>
                    <td>{{dataJadwal(29,1,3)}}</td>
                    <td>{{dataJadwal(30,1,3)}}</td>
                    <td>{{dataJadwal(31,1,3)}}</td>
                    <td>{{dataJadwal(32,1,3)}}</td>
                    <td>{{dataJadwal(33,1,3)}}</td>
                    <td>{{dataJadwal(34,1,3)}}</td>
                    <td>{{dataJadwal(35,1,3)}}</td>
                    <td>{{dataJadwal(36,1,3)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>09.15 - 09.30</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>4</td>
                    <td>09.30 - 10.15</td>
                    <td>{{dataJadwal(1,1,4)}}</td>
                    <td>{{dataJadwal(2,1,4)}}</td>
                    <td>{{dataJadwal(3,1,4)}}</td>
                    <td>{{dataJadwal(4,1,4)}}</td>
                    <td>{{dataJadwal(5,1,4)}}</td>
                    <td>{{dataJadwal(6,1,4)}}</td>
                    <td>{{dataJadwal(7,1,4)}}</td>
                    <td>{{dataJadwal(8,1,4)}}</td>
                    <td>{{dataJadwal(9,1,4)}}</td>
                    <td>{{dataJadwal(10,1,4)}}</td>
                    <td>{{dataJadwal(11,1,4)}}</td>
                    <td>{{dataJadwal(12,1,4)}}</td>
                    <td>{{dataJadwal(13,1,4)}}</td>
                    <td>{{dataJadwal(14,1,4)}}</td>
                    <td>{{dataJadwal(15,1,4)}}</td>
                    <td>{{dataJadwal(16,1,4)}}</td>
                    <td>{{dataJadwal(17,1,4)}}</td>
                    <td>{{dataJadwal(18,1,4)}}</td>
                    <td>{{dataJadwal(19,1,4)}}</td>
                    <td>{{dataJadwal(20,1,4)}}</td>
                    <td>{{dataJadwal(21,1,4)}}</td>
                    <td>{{dataJadwal(22,1,4)}}</td>
                    <td>{{dataJadwal(23,1,4)}}</td>
                    <td>{{dataJadwal(24,1,4)}}</td>
                    <td>{{dataJadwal(25,1,4)}}</td>
                    <td>{{dataJadwal(26,1,4)}}</td>
                    <td>{{dataJadwal(27,1,4)}}</td>
                    <td>{{dataJadwal(28,1,4)}}</td>
                    <td>{{dataJadwal(29,1,4)}}</td>
                    <td>{{dataJadwal(30,1,4)}}</td>
                    <td>{{dataJadwal(31,1,4)}}</td>
                    <td>{{dataJadwal(32,1,4)}}</td>
                    <td>{{dataJadwal(33,1,4)}}</td>
                    <td>{{dataJadwal(34,1,4)}}</td>
                    <td>{{dataJadwal(35,1,4)}}</td>
                    <td>{{dataJadwal(36,1,4)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <td>{{dataJadwal(1,1,5)}}</td>
                    <td>{{dataJadwal(2,1,5)}}</td>
                    <td>{{dataJadwal(3,1,5)}}</td>
                    <td>{{dataJadwal(4,1,5)}}</td>
                    <td>{{dataJadwal(5,1,5)}}</td>
                    <td>{{dataJadwal(6,1,5)}}</td>
                    <td>{{dataJadwal(7,1,5)}}</td>
                    <td>{{dataJadwal(8,1,5)}}</td>
                    <td>{{dataJadwal(9,1,5)}}</td>
                    <td>{{dataJadwal(10,1,5)}}</td>
                    <td>{{dataJadwal(11,1,5)}}</td>
                    <td>{{dataJadwal(12,1,5)}}</td>
                    <td>{{dataJadwal(13,1,5)}}</td>
                    <td>{{dataJadwal(14,1,5)}}</td>
                    <td>{{dataJadwal(15,1,5)}}</td>
                    <td>{{dataJadwal(16,1,5)}}</td>
                    <td>{{dataJadwal(17,1,5)}}</td>
                    <td>{{dataJadwal(18,1,5)}}</td>
                    <td>{{dataJadwal(19,1,5)}}</td>
                    <td>{{dataJadwal(20,1,5)}}</td>
                    <td>{{dataJadwal(21,1,5)}}</td>
                    <td>{{dataJadwal(22,1,5)}}</td>
                    <td>{{dataJadwal(23,1,5)}}</td>
                    <td>{{dataJadwal(24,1,5)}}</td>
                    <td>{{dataJadwal(25,1,5)}}</td>
                    <td>{{dataJadwal(26,1,5)}}</td>
                    <td>{{dataJadwal(27,1,5)}}</td>
                    <td>{{dataJadwal(28,1,5)}}</td>
                    <td>{{dataJadwal(29,1,5)}}</td>
                    <td>{{dataJadwal(30,1,5)}}</td>
                    <td>{{dataJadwal(31,1,5)}}</td>
                    <td>{{dataJadwal(32,1,5)}}</td>
                    <td>{{dataJadwal(33,1,5)}}</td>
                    <td>{{dataJadwal(34,1,5)}}</td>
                    <td>{{dataJadwal(35,1,5)}}</td>
                    <td>{{dataJadwal(36,1,5)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td>{{dataJadwal(1,1,6)}}</td>
                    <td>{{dataJadwal(2,1,6)}}</td>
                    <td>{{dataJadwal(3,1,6)}}</td>
                    <td>{{dataJadwal(4,1,6)}}</td>
                    <td>{{dataJadwal(5,1,6)}}</td>
                    <td>{{dataJadwal(6,1,6)}}</td>
                    <td>{{dataJadwal(7,1,6)}}</td>
                    <td>{{dataJadwal(8,1,6)}}</td>
                    <td>{{dataJadwal(9,1,6)}}</td>
                    <td>{{dataJadwal(10,1,6)}}</td>
                    <td>{{dataJadwal(11,1,6)}}</td>
                    <td>{{dataJadwal(12,1,6)}}</td>
                    <td>{{dataJadwal(13,1,6)}}</td>
                    <td>{{dataJadwal(14,1,6)}}</td>
                    <td>{{dataJadwal(15,1,6)}}</td>
                    <td>{{dataJadwal(16,1,6)}}</td>
                    <td>{{dataJadwal(17,1,6)}}</td>
                    <td>{{dataJadwal(18,1,6)}}</td>
                    <td>{{dataJadwal(19,1,6)}}</td>
                    <td>{{dataJadwal(20,1,6)}}</td>
                    <td>{{dataJadwal(21,1,6)}}</td>
                    <td>{{dataJadwal(22,1,6)}}</td>
                    <td>{{dataJadwal(23,1,6)}}</td>
                    <td>{{dataJadwal(24,1,6)}}</td>
                    <td>{{dataJadwal(25,1,6)}}</td>
                    <td>{{dataJadwal(26,1,6)}}</td>
                    <td>{{dataJadwal(27,1,6)}}</td>
                    <td>{{dataJadwal(28,1,6)}}</td>
                    <td>{{dataJadwal(29,1,6)}}</td>
                    <td>{{dataJadwal(30,1,6)}}</td>
                    <td>{{dataJadwal(31,1,6)}}</td>
                    <td>{{dataJadwal(32,1,6)}}</td>
                    <td>{{dataJadwal(33,1,6)}}</td>
                    <td>{{dataJadwal(34,1,6)}}</td>
                    <td>{{dataJadwal(35,1,6)}}</td>
                    <td>{{dataJadwal(36,1,6)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>11.45 - 12.15</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>7</td>
                    <td>12.15 - 13.00</td>
                    <td>{{dataJadwal(1,1,7)}}</td>
                    <td>{{dataJadwal(2,1,7)}}</td>
                    <td>{{dataJadwal(3,1,7)}}</td>
                    <td>{{dataJadwal(4,1,7)}}</td>
                    <td>{{dataJadwal(5,1,7)}}</td>
                    <td>{{dataJadwal(6,1,7)}}</td>
                    <td>{{dataJadwal(7,1,7)}}</td>
                    <td>{{dataJadwal(8,1,7)}}</td>
                    <td>{{dataJadwal(9,1,7)}}</td>
                    <td>{{dataJadwal(10,1,7)}}</td>
                    <td>{{dataJadwal(11,1,7)}}</td>
                    <td>{{dataJadwal(12,1,7)}}</td>
                    <td>{{dataJadwal(13,1,7)}}</td>
                    <td>{{dataJadwal(14,1,7)}}</td>
                    <td>{{dataJadwal(15,1,7)}}</td>
                    <td>{{dataJadwal(16,1,7)}}</td>
                    <td>{{dataJadwal(17,1,7)}}</td>
                    <td>{{dataJadwal(18,1,7)}}</td>
                    <td>{{dataJadwal(19,1,7)}}</td>
                    <td>{{dataJadwal(20,1,7)}}</td>
                    <td>{{dataJadwal(21,1,7)}}</td>
                    <td>{{dataJadwal(22,1,7)}}</td>
                    <td>{{dataJadwal(23,1,7)}}</td>
                    <td>{{dataJadwal(24,1,7)}}</td>
                    <td>{{dataJadwal(25,1,7)}}</td>
                    <td>{{dataJadwal(26,1,7)}}</td>
                    <td>{{dataJadwal(27,1,7)}}</td>
                    <td>{{dataJadwal(28,1,7)}}</td>
                    <td>{{dataJadwal(29,1,7)}}</td>
                    <td>{{dataJadwal(30,1,7)}}</td>
                    <td>{{dataJadwal(31,1,7)}}</td>
                    <td>{{dataJadwal(32,1,7)}}</td>
                    <td>{{dataJadwal(33,1,7)}}</td>
                    <td>{{dataJadwal(34,1,7)}}</td>
                    <td>{{dataJadwal(35,1,7)}}</td>
                    <td>{{dataJadwal(36,1,7)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td>{{dataJadwal(1,1,8)}}</td>
                    <td>{{dataJadwal(2,1,8)}}</td>
                    <td>{{dataJadwal(3,1,8)}}</td>
                    <td>{{dataJadwal(4,1,8)}}</td>
                    <td>{{dataJadwal(5,1,8)}}</td>
                    <td>{{dataJadwal(6,1,8)}}</td>
                    <td>{{dataJadwal(7,1,8)}}</td>
                    <td>{{dataJadwal(8,1,8)}}</td>
                    <td>{{dataJadwal(9,1,8)}}</td>
                    <td>{{dataJadwal(10,1,8)}}</td>
                    <td>{{dataJadwal(11,1,8)}}</td>
                    <td>{{dataJadwal(12,1,8)}}</td>
                    <td>{{dataJadwal(13,1,8)}}</td>
                    <td>{{dataJadwal(14,1,8)}}</td>
                    <td>{{dataJadwal(15,1,8)}}</td>
                    <td>{{dataJadwal(16,1,8)}}</td>
                    <td>{{dataJadwal(17,1,8)}}</td>
                    <td>{{dataJadwal(18,1,8)}}</td>
                    <td>{{dataJadwal(19,1,8)}}</td>
                    <td>{{dataJadwal(20,1,8)}}</td>
                    <td>{{dataJadwal(21,1,8)}}</td>
                    <td>{{dataJadwal(22,1,8)}}</td>
                    <td>{{dataJadwal(23,1,8)}}</td>
                    <td>{{dataJadwal(24,1,8)}}</td>
                    <td>{{dataJadwal(25,1,8)}}</td>
                    <td>{{dataJadwal(26,1,8)}}</td>
                    <td>{{dataJadwal(27,1,8)}}</td>
                    <td>{{dataJadwal(28,1,8)}}</td>
                    <td>{{dataJadwal(29,1,8)}}</td>
                    <td>{{dataJadwal(30,1,8)}}</td>
                    <td>{{dataJadwal(31,1,8)}}</td>
                    <td>{{dataJadwal(32,1,8)}}</td>
                    <td>{{dataJadwal(33,1,8)}}</td>
                    <td>{{dataJadwal(34,1,8)}}</td>
                    <td>{{dataJadwal(35,1,8)}}</td>
                    <td>{{dataJadwal(36,1,8)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td>{{dataJadwal(1,1,9)}}</td>
                    <td>{{dataJadwal(2,1,9)}}</td>
                    <td>{{dataJadwal(3,1,9)}}</td>
                    <td>{{dataJadwal(4,1,9)}}</td>
                    <td>{{dataJadwal(5,1,9)}}</td>
                    <td>{{dataJadwal(6,1,9)}}</td>
                    <td>{{dataJadwal(7,1,9)}}</td>
                    <td>{{dataJadwal(8,1,9)}}</td>
                    <td>{{dataJadwal(9,1,9)}}</td>
                    <td>{{dataJadwal(10,1,9)}}</td>
                    <td>{{dataJadwal(11,1,9)}}</td>
                    <td>{{dataJadwal(12,1,9)}}</td>
                    <td>{{dataJadwal(13,1,9)}}</td>
                    <td>{{dataJadwal(14,1,9)}}</td>
                    <td>{{dataJadwal(15,1,9)}}</td>
                    <td>{{dataJadwal(16,1,9)}}</td>
                    <td>{{dataJadwal(17,1,9)}}</td>
                    <td>{{dataJadwal(18,1,9)}}</td>
                    <td>{{dataJadwal(19,1,9)}}</td>
                    <td>{{dataJadwal(20,1,9)}}</td>
                    <td>{{dataJadwal(21,1,9)}}</td>
                    <td>{{dataJadwal(22,1,9)}}</td>
                    <td>{{dataJadwal(23,1,9)}}</td>
                    <td>{{dataJadwal(24,1,9)}}</td>
                    <td>{{dataJadwal(25,1,9)}}</td>
                    <td>{{dataJadwal(26,1,9)}}</td>
                    <td>{{dataJadwal(27,1,9)}}</td>
                    <td>{{dataJadwal(28,1,9)}}</td>
                    <td>{{dataJadwal(29,1,9)}}</td>
                    <td>{{dataJadwal(30,1,9)}}</td>
                    <td>{{dataJadwal(31,1,9)}}</td>
                    <td>{{dataJadwal(32,1,9)}}</td>
                    <td>{{dataJadwal(33,1,9)}}</td>
                    <td>{{dataJadwal(34,1,9)}}</td>
                    <td>{{dataJadwal(35,1,9)}}</td>
                    <td>{{dataJadwal(36,1,9)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td>{{dataJadwal(1,1,10)}}</td>
                    <td>{{dataJadwal(2,1,10)}}</td>
                    <td>{{dataJadwal(3,1,10)}}</td>
                    <td>{{dataJadwal(4,1,10)}}</td>
                    <td>{{dataJadwal(5,1,10)}}</td>
                    <td>{{dataJadwal(6,1,10)}}</td>
                    <td>{{dataJadwal(7,1,10)}}</td>
                    <td>{{dataJadwal(8,1,10)}}</td>
                    <td>{{dataJadwal(9,1,10)}}</td>
                    <td>{{dataJadwal(10,1,10)}}</td>
                    <td>{{dataJadwal(11,1,10)}}</td>
                    <td>{{dataJadwal(12,1,10)}}</td>
                    <td>{{dataJadwal(13,1,10)}}</td>
                    <td>{{dataJadwal(14,1,10)}}</td>
                    <td>{{dataJadwal(15,1,10)}}</td>
                    <td>{{dataJadwal(16,1,10)}}</td>
                    <td>{{dataJadwal(17,1,10)}}</td>
                    <td>{{dataJadwal(18,1,10)}}</td>
                    <td>{{dataJadwal(19,1,10)}}</td>
                    <td>{{dataJadwal(20,1,10)}}</td>
                    <td>{{dataJadwal(21,1,10)}}</td>
                    <td>{{dataJadwal(22,1,10)}}</td>
                    <td>{{dataJadwal(23,1,10)}}</td>
                    <td>{{dataJadwal(24,1,10)}}</td>
                    <td>{{dataJadwal(25,1,10)}}</td>
                    <td>{{dataJadwal(26,1,10)}}</td>
                    <td>{{dataJadwal(27,1,10)}}</td>
                    <td>{{dataJadwal(28,1,10)}}</td>
                    <td>{{dataJadwal(29,1,10)}}</td>
                    <td>{{dataJadwal(30,1,10)}}</td>
                    <td>{{dataJadwal(31,1,10)}}</td>
                    <td>{{dataJadwal(32,1,10)}}</td>
                    <td>{{dataJadwal(33,1,10)}}</td>
                    <td>{{dataJadwal(34,1,10)}}</td>
                    <td>{{dataJadwal(35,1,10)}}</td>
                    <td>{{dataJadwal(36,1,10)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.15 - 15.45</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.45 - 16.30</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                </tr>
                {{-- Hari Selasa --}}
                <tr style="border: 1px solid black;">
                    <td rowspan="14">2</td>
                    <td rowspan="14" style="writing-mode: vertical-rl; text-orientation: upright;">Selasa</td>
                    <td>1</td>
                    <td>06.45 - 07.45</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>2</td>
                    <td>07.45 - 08.30</td>
                    <td>{{dataJadwal(1,2,2)}}</td>
                    <td>{{dataJadwal(2,2,2)}}</td>
                    <td>{{dataJadwal(3,2,2)}}</td>
                    <td>{{dataJadwal(4,2,2)}}</td>
                    <td>{{dataJadwal(5,2,2)}}</td>
                    <td>{{dataJadwal(6,2,2)}}</td>
                    <td>{{dataJadwal(7,2,2)}}</td>
                    <td>{{dataJadwal(8,2,2)}}</td>
                    <td>{{dataJadwal(9,2,2)}}</td>
                    <td>{{dataJadwal(10,2,2)}}</td>
                    <td>{{dataJadwal(11,2,2)}}</td>
                    <td>{{dataJadwal(12,2,2)}}</td>
                    <td>{{dataJadwal(13,2,2)}}</td>
                    <td>{{dataJadwal(14,2,2)}}</td>
                    <td>{{dataJadwal(15,2,2)}}</td>
                    <td>{{dataJadwal(16,2,2)}}</td>
                    <td>{{dataJadwal(17,2,2)}}</td>
                    <td>{{dataJadwal(18,2,2)}}</td>
                    <td>{{dataJadwal(19,2,2)}}</td>
                    <td>{{dataJadwal(20,2,2)}}</td>
                    <td>{{dataJadwal(21,2,2)}}</td>
                    <td>{{dataJadwal(22,2,2)}}</td>
                    <td>{{dataJadwal(23,2,2)}}</td>
                    <td>{{dataJadwal(24,2,2)}}</td>
                    <td>{{dataJadwal(25,2,2)}}</td>
                    <td>{{dataJadwal(26,2,2)}}</td>
                    <td>{{dataJadwal(27,2,2)}}</td>
                    <td>{{dataJadwal(28,2,2)}}</td>
                    <td>{{dataJadwal(29,2,2)}}</td>
                    <td>{{dataJadwal(30,2,2)}}</td>
                    <td>{{dataJadwal(31,2,2)}}</td>
                    <td>{{dataJadwal(32,2,2)}}</td>
                    <td>{{dataJadwal(33,2,2)}}</td>
                    <td>{{dataJadwal(34,2,2)}}</td>
                    <td>{{dataJadwal(35,2,2)}}</td>
                    <td>{{dataJadwal(36,2,2)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td>{{dataJadwal(1,2,3)}}</td>
                    <td>{{dataJadwal(2,2,3)}}</td>
                    <td>{{dataJadwal(3,2,3)}}</td>
                    <td>{{dataJadwal(4,2,3)}}</td>
                    <td>{{dataJadwal(5,2,3)}}</td>
                    <td>{{dataJadwal(6,2,3)}}</td>
                    <td>{{dataJadwal(7,2,3)}}</td>
                    <td>{{dataJadwal(8,2,3)}}</td>
                    <td>{{dataJadwal(9,2,3)}}</td>
                    <td>{{dataJadwal(10,2,3)}}</td>
                    <td>{{dataJadwal(11,2,3)}}</td>
                    <td>{{dataJadwal(12,2,3)}}</td>
                    <td>{{dataJadwal(13,2,3)}}</td>
                    <td>{{dataJadwal(14,2,3)}}</td>
                    <td>{{dataJadwal(15,2,3)}}</td>
                    <td>{{dataJadwal(16,2,3)}}</td>
                    <td>{{dataJadwal(17,2,3)}}</td>
                    <td>{{dataJadwal(18,2,3)}}</td>
                    <td>{{dataJadwal(19,2,3)}}</td>
                    <td>{{dataJadwal(20,2,3)}}</td>
                    <td>{{dataJadwal(21,2,3)}}</td>
                    <td>{{dataJadwal(22,2,3)}}</td>
                    <td>{{dataJadwal(23,2,3)}}</td>
                    <td>{{dataJadwal(24,2,3)}}</td>
                    <td>{{dataJadwal(25,2,3)}}</td>
                    <td>{{dataJadwal(26,2,3)}}</td>
                    <td>{{dataJadwal(27,2,3)}}</td>
                    <td>{{dataJadwal(28,2,3)}}</td>
                    <td>{{dataJadwal(29,2,3)}}</td>
                    <td>{{dataJadwal(30,2,3)}}</td>
                    <td>{{dataJadwal(31,2,3)}}</td>
                    <td>{{dataJadwal(32,2,3)}}</td>
                    <td>{{dataJadwal(33,2,3)}}</td>
                    <td>{{dataJadwal(34,2,3)}}</td>
                    <td>{{dataJadwal(35,2,3)}}</td>
                    <td>{{dataJadwal(36,2,3)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>09.15 - 09.30</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>4</td>
                    <td>09.30 - 10.15</td>
                    <td>{{dataJadwal(1,2,4)}}</td>
                    <td>{{dataJadwal(2,2,4)}}</td>
                    <td>{{dataJadwal(3,2,4)}}</td>
                    <td>{{dataJadwal(4,2,4)}}</td>
                    <td>{{dataJadwal(5,2,4)}}</td>
                    <td>{{dataJadwal(6,2,4)}}</td>
                    <td>{{dataJadwal(7,2,4)}}</td>
                    <td>{{dataJadwal(8,2,4)}}</td>
                    <td>{{dataJadwal(9,2,4)}}</td>
                    <td>{{dataJadwal(10,2,4)}}</td>
                    <td>{{dataJadwal(11,2,4)}}</td>
                    <td>{{dataJadwal(12,2,4)}}</td>
                    <td>{{dataJadwal(13,2,4)}}</td>
                    <td>{{dataJadwal(14,2,4)}}</td>
                    <td>{{dataJadwal(15,2,4)}}</td>
                    <td>{{dataJadwal(16,2,4)}}</td>
                    <td>{{dataJadwal(17,2,4)}}</td>
                    <td>{{dataJadwal(18,2,4)}}</td>
                    <td>{{dataJadwal(19,2,4)}}</td>
                    <td>{{dataJadwal(20,2,4)}}</td>
                    <td>{{dataJadwal(21,2,4)}}</td>
                    <td>{{dataJadwal(22,2,4)}}</td>
                    <td>{{dataJadwal(23,2,4)}}</td>
                    <td>{{dataJadwal(24,2,4)}}</td>
                    <td>{{dataJadwal(25,2,4)}}</td>
                    <td>{{dataJadwal(26,2,4)}}</td>
                    <td>{{dataJadwal(27,2,4)}}</td>
                    <td>{{dataJadwal(28,2,4)}}</td>
                    <td>{{dataJadwal(29,2,4)}}</td>
                    <td>{{dataJadwal(30,2,4)}}</td>
                    <td>{{dataJadwal(31,2,4)}}</td>
                    <td>{{dataJadwal(32,2,4)}}</td>
                    <td>{{dataJadwal(33,2,4)}}</td>
                    <td>{{dataJadwal(34,2,4)}}</td>
                    <td>{{dataJadwal(35,2,4)}}</td>
                    <td>{{dataJadwal(36,2,4)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <td>{{dataJadwal(1,2,5)}}</td>
                    <td>{{dataJadwal(2,2,5)}}</td>
                    <td>{{dataJadwal(3,2,5)}}</td>
                    <td>{{dataJadwal(4,2,5)}}</td>
                    <td>{{dataJadwal(5,2,5)}}</td>
                    <td>{{dataJadwal(6,2,5)}}</td>
                    <td>{{dataJadwal(7,2,5)}}</td>
                    <td>{{dataJadwal(8,2,5)}}</td>
                    <td>{{dataJadwal(9,2,5)}}</td>
                    <td>{{dataJadwal(10,2,5)}}</td>
                    <td>{{dataJadwal(11,2,5)}}</td>
                    <td>{{dataJadwal(12,2,5)}}</td>
                    <td>{{dataJadwal(13,2,5)}}</td>
                    <td>{{dataJadwal(14,2,5)}}</td>
                    <td>{{dataJadwal(15,2,5)}}</td>
                    <td>{{dataJadwal(16,2,5)}}</td>
                    <td>{{dataJadwal(17,2,5)}}</td>
                    <td>{{dataJadwal(18,2,5)}}</td>
                    <td>{{dataJadwal(19,2,5)}}</td>
                    <td>{{dataJadwal(20,2,5)}}</td>
                    <td>{{dataJadwal(21,2,5)}}</td>
                    <td>{{dataJadwal(22,2,5)}}</td>
                    <td>{{dataJadwal(23,2,5)}}</td>
                    <td>{{dataJadwal(24,2,5)}}</td>
                    <td>{{dataJadwal(25,2,5)}}</td>
                    <td>{{dataJadwal(26,2,5)}}</td>
                    <td>{{dataJadwal(27,2,5)}}</td>
                    <td>{{dataJadwal(28,2,5)}}</td>
                    <td>{{dataJadwal(29,2,5)}}</td>
                    <td>{{dataJadwal(30,2,5)}}</td>
                    <td>{{dataJadwal(31,2,5)}}</td>
                    <td>{{dataJadwal(32,2,5)}}</td>
                    <td>{{dataJadwal(33,2,5)}}</td>
                    <td>{{dataJadwal(34,2,5)}}</td>
                    <td>{{dataJadwal(35,2,5)}}</td>
                    <td>{{dataJadwal(36,2,5)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td>{{dataJadwal(1,2,6)}}</td>
                    <td>{{dataJadwal(2,2,6)}}</td>
                    <td>{{dataJadwal(3,2,6)}}</td>
                    <td>{{dataJadwal(4,2,6)}}</td>
                    <td>{{dataJadwal(5,2,6)}}</td>
                    <td>{{dataJadwal(6,2,6)}}</td>
                    <td>{{dataJadwal(7,2,6)}}</td>
                    <td>{{dataJadwal(8,2,6)}}</td>
                    <td>{{dataJadwal(9,2,6)}}</td>
                    <td>{{dataJadwal(10,2,6)}}</td>
                    <td>{{dataJadwal(11,2,6)}}</td>
                    <td>{{dataJadwal(12,2,6)}}</td>
                    <td>{{dataJadwal(13,2,6)}}</td>
                    <td>{{dataJadwal(14,2,6)}}</td>
                    <td>{{dataJadwal(15,2,6)}}</td>
                    <td>{{dataJadwal(16,2,6)}}</td>
                    <td>{{dataJadwal(17,2,6)}}</td>
                    <td>{{dataJadwal(18,2,6)}}</td>
                    <td>{{dataJadwal(19,2,6)}}</td>
                    <td>{{dataJadwal(20,2,6)}}</td>
                    <td>{{dataJadwal(21,2,6)}}</td>
                    <td>{{dataJadwal(22,2,6)}}</td>
                    <td>{{dataJadwal(23,2,6)}}</td>
                    <td>{{dataJadwal(24,2,6)}}</td>
                    <td>{{dataJadwal(25,2,6)}}</td>
                    <td>{{dataJadwal(26,2,6)}}</td>
                    <td>{{dataJadwal(27,2,6)}}</td>
                    <td>{{dataJadwal(28,2,6)}}</td>
                    <td>{{dataJadwal(29,2,6)}}</td>
                    <td>{{dataJadwal(30,2,6)}}</td>
                    <td>{{dataJadwal(31,2,6)}}</td>
                    <td>{{dataJadwal(32,2,6)}}</td>
                    <td>{{dataJadwal(33,2,6)}}</td>
                    <td>{{dataJadwal(34,2,6)}}</td>
                    <td>{{dataJadwal(35,2,6)}}</td>
                    <td>{{dataJadwal(36,2,6)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>11.45 - 12.15</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>7</td>
                    <td>12.15 - 13.00</td>
                    <td>{{dataJadwal(1,2,7)}}</td>
                    <td>{{dataJadwal(2,2,7)}}</td>
                    <td>{{dataJadwal(3,2,7)}}</td>
                    <td>{{dataJadwal(4,2,7)}}</td>
                    <td>{{dataJadwal(5,2,7)}}</td>
                    <td>{{dataJadwal(6,2,7)}}</td>
                    <td>{{dataJadwal(7,2,7)}}</td>
                    <td>{{dataJadwal(8,2,7)}}</td>
                    <td>{{dataJadwal(9,2,7)}}</td>
                    <td>{{dataJadwal(10,2,7)}}</td>
                    <td>{{dataJadwal(11,2,7)}}</td>
                    <td>{{dataJadwal(12,2,7)}}</td>
                    <td>{{dataJadwal(13,2,7)}}</td>
                    <td>{{dataJadwal(14,2,7)}}</td>
                    <td>{{dataJadwal(15,2,7)}}</td>
                    <td>{{dataJadwal(16,2,7)}}</td>
                    <td>{{dataJadwal(17,2,7)}}</td>
                    <td>{{dataJadwal(18,2,7)}}</td>
                    <td>{{dataJadwal(19,2,7)}}</td>
                    <td>{{dataJadwal(20,2,7)}}</td>
                    <td>{{dataJadwal(21,2,7)}}</td>
                    <td>{{dataJadwal(22,2,7)}}</td>
                    <td>{{dataJadwal(23,2,7)}}</td>
                    <td>{{dataJadwal(24,2,7)}}</td>
                    <td>{{dataJadwal(25,2,7)}}</td>
                    <td>{{dataJadwal(26,2,7)}}</td>
                    <td>{{dataJadwal(27,2,7)}}</td>
                    <td>{{dataJadwal(28,2,7)}}</td>
                    <td>{{dataJadwal(29,2,7)}}</td>
                    <td>{{dataJadwal(30,2,7)}}</td>
                    <td>{{dataJadwal(31,2,7)}}</td>
                    <td>{{dataJadwal(32,2,7)}}</td>
                    <td>{{dataJadwal(33,2,7)}}</td>
                    <td>{{dataJadwal(34,2,7)}}</td>
                    <td>{{dataJadwal(35,2,7)}}</td>
                    <td>{{dataJadwal(36,2,7)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td>{{dataJadwal(1,2,8)}}</td>
                    <td>{{dataJadwal(2,2,8)}}</td>
                    <td>{{dataJadwal(3,2,8)}}</td>
                    <td>{{dataJadwal(4,2,8)}}</td>
                    <td>{{dataJadwal(5,2,8)}}</td>
                    <td>{{dataJadwal(6,2,8)}}</td>
                    <td>{{dataJadwal(7,2,8)}}</td>
                    <td>{{dataJadwal(8,2,8)}}</td>
                    <td>{{dataJadwal(9,2,8)}}</td>
                    <td>{{dataJadwal(10,2,8)}}</td>
                    <td>{{dataJadwal(11,2,8)}}</td>
                    <td>{{dataJadwal(12,2,8)}}</td>
                    <td>{{dataJadwal(13,2,8)}}</td>
                    <td>{{dataJadwal(14,2,8)}}</td>
                    <td>{{dataJadwal(15,2,8)}}</td>
                    <td>{{dataJadwal(16,2,8)}}</td>
                    <td>{{dataJadwal(17,2,8)}}</td>
                    <td>{{dataJadwal(18,2,8)}}</td>
                    <td>{{dataJadwal(19,2,8)}}</td>
                    <td>{{dataJadwal(20,2,8)}}</td>
                    <td>{{dataJadwal(21,2,8)}}</td>
                    <td>{{dataJadwal(22,2,8)}}</td>
                    <td>{{dataJadwal(23,2,8)}}</td>
                    <td>{{dataJadwal(24,2,8)}}</td>
                    <td>{{dataJadwal(25,2,8)}}</td>
                    <td>{{dataJadwal(26,2,8)}}</td>
                    <td>{{dataJadwal(27,2,8)}}</td>
                    <td>{{dataJadwal(28,2,8)}}</td>
                    <td>{{dataJadwal(29,2,8)}}</td>
                    <td>{{dataJadwal(30,2,8)}}</td>
                    <td>{{dataJadwal(31,2,8)}}</td>
                    <td>{{dataJadwal(32,2,8)}}</td>
                    <td>{{dataJadwal(33,2,8)}}</td>
                    <td>{{dataJadwal(34,2,8)}}</td>
                    <td>{{dataJadwal(35,2,8)}}</td>
                    <td>{{dataJadwal(36,2,8)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.15 - 15.45</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.45 - 16.30</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                </tr>


                {{-- Hari Rabu --}}
                <tr style="border: 1px solid black;">
                    <td rowspan="14">3</td>
                    <td rowspan="14" style="writing-mode: vertical-rl; text-orientation: upright;">Rabu</td>
                    <td>1</td>
                    <td>06.45 - 07.45</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>2</td>
                    <td>07.45 - 08.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>09.15 - 09.30</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>4</td>
                    <td>09.30 - 10.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>11.45 - 12.15</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>7</td>
                    <td>12.15 - 13.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.15 - 15.45</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                </tr>
                <tr class="page-break" style="border: 1px solid black;">
                    <td></td>
                    <td>15.45 - 16.30</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                </tr>
                 {{-- Hari Kamis --}}
                 <tr style="border: 1px solid black;">
                    <td rowspan="14">4</td>
                    <td rowspan="14" style="writing-mode: vertical-rl; text-orientation: upright;">Kamis</td>
                    <td>1</td>
                    <td>06.45 - 07.45</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>2</td>
                    <td>07.45 - 08.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>09.15 - 09.30</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>4</td>
                    <td>09.30 - 10.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>11.45 - 12.15</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>7</td>
                    <td>12.15 - 13.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.15 - 15.45</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.45 - 16.30</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                </tr>

                 {{-- Hari Jumat --}}
                 <tr style="border: 1px solid black;">
                    <td rowspan="14">5</td>
                    <td rowspan="14" style="writing-mode: vertical-rl; text-orientation: upright;">Jumat</td>
                    <td>1</td>
                    <td>06.45 - 07.45</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">PPK/UPACARA
                        BENDERA</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>2</td>
                    <td>07.45 - 08.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>09.15 - 09.30</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        Istirahat</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>4</td>
                    <td>09.30 - 10.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>11.45 - 12.15</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                    <td colspan="12" style="background-color: skyblue; color: white; font-style: italic;">SHALAT
                        DZUHUR BERJAMAAH</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>7</td>
                    <td>12.15 - 13.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.15 - 15.45</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                    <td colspan="12" style="background-color: rgb(98, 98, 255); color: white; font-style: italic;">
                        IBADAH SHOLAT ASHAR</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td></td>
                    <td>15.45 - 16.30</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                    <td colspan="12" style="background-color: rgb(98, 213, 255); color: white; font-style: italic;">
                        EKSTRAKURIKULER PILIHAN SISWA</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
