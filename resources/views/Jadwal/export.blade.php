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
                    <td>{{dataJadwal(1,2,9)}}</td>
                    <td>{{dataJadwal(2,2,9)}}</td>
                    <td>{{dataJadwal(3,2,9)}}</td>
                    <td>{{dataJadwal(4,2,9)}}</td>
                    <td>{{dataJadwal(5,2,9)}}</td>
                    <td>{{dataJadwal(6,2,9)}}</td>
                    <td>{{dataJadwal(7,2,9)}}</td>
                    <td>{{dataJadwal(8,2,9)}}</td>
                    <td>{{dataJadwal(9,2,9)}}</td>
                    <td>{{dataJadwal(10,2,9)}}</td>
                    <td>{{dataJadwal(11,2,9)}}</td>
                    <td>{{dataJadwal(12,2,9)}}</td>
                    <td>{{dataJadwal(13,2,9)}}</td>
                    <td>{{dataJadwal(14,2,9)}}</td>
                    <td>{{dataJadwal(15,2,9)}}</td>
                    <td>{{dataJadwal(16,2,9)}}</td>
                    <td>{{dataJadwal(17,2,9)}}</td>
                    <td>{{dataJadwal(18,2,9)}}</td>
                    <td>{{dataJadwal(19,2,9)}}</td>
                    <td>{{dataJadwal(20,2,9)}}</td>
                    <td>{{dataJadwal(21,2,9)}}</td>
                    <td>{{dataJadwal(22,2,9)}}</td>
                    <td>{{dataJadwal(23,2,9)}}</td>
                    <td>{{dataJadwal(24,2,9)}}</td>
                    <td>{{dataJadwal(25,2,9)}}</td>
                    <td>{{dataJadwal(26,2,9)}}</td>
                    <td>{{dataJadwal(27,2,9)}}</td>
                    <td>{{dataJadwal(28,2,9)}}</td>
                    <td>{{dataJadwal(29,2,9)}}</td>
                    <td>{{dataJadwal(30,2,9)}}</td>
                    <td>{{dataJadwal(31,2,9)}}</td>
                    <td>{{dataJadwal(32,2,9)}}</td>
                    <td>{{dataJadwal(33,2,9)}}</td>
                    <td>{{dataJadwal(34,2,9)}}</td>
                    <td>{{dataJadwal(35,2,9)}}</td>
                    <td>{{dataJadwal(36,2,9)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td>{{dataJadwal(1,2,10)}}</td>
                    <td>{{dataJadwal(2,2,10)}}</td>
                    <td>{{dataJadwal(3,2,10)}}</td>
                    <td>{{dataJadwal(4,2,10)}}</td>
                    <td>{{dataJadwal(5,2,10)}}</td>
                    <td>{{dataJadwal(6,2,10)}}</td>
                    <td>{{dataJadwal(7,2,10)}}</td>
                    <td>{{dataJadwal(8,2,10)}}</td>
                    <td>{{dataJadwal(9,2,10)}}</td>
                    <td>{{dataJadwal(10,2,10)}}</td>
                    <td>{{dataJadwal(11,2,10)}}</td>
                    <td>{{dataJadwal(12,2,10)}}</td>
                    <td>{{dataJadwal(13,2,10)}}</td>
                    <td>{{dataJadwal(14,2,10)}}</td>
                    <td>{{dataJadwal(15,2,10)}}</td>
                    <td>{{dataJadwal(16,2,10)}}</td>
                    <td>{{dataJadwal(17,2,10)}}</td>
                    <td>{{dataJadwal(18,2,10)}}</td>
                    <td>{{dataJadwal(19,2,10)}}</td>
                    <td>{{dataJadwal(20,2,10)}}</td>
                    <td>{{dataJadwal(21,2,10)}}</td>
                    <td>{{dataJadwal(22,2,10)}}</td>
                    <td>{{dataJadwal(23,2,10)}}</td>
                    <td>{{dataJadwal(24,2,10)}}</td>
                    <td>{{dataJadwal(25,2,10)}}</td>
                    <td>{{dataJadwal(26,2,10)}}</td>
                    <td>{{dataJadwal(27,2,10)}}</td>
                    <td>{{dataJadwal(28,2,10)}}</td>
                    <td>{{dataJadwal(29,2,10)}}</td>
                    <td>{{dataJadwal(30,2,10)}}</td>
                    <td>{{dataJadwal(31,2,10)}}</td>
                    <td>{{dataJadwal(32,2,10)}}</td>
                    <td>{{dataJadwal(33,2,10)}}</td>
                    <td>{{dataJadwal(34,2,10)}}</td>
                    <td>{{dataJadwal(35,2,10)}}</td>
                    <td>{{dataJadwal(36,2,10)}}</td>
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
                    <td>{{dataJadwal(1,3,2)}}</td>
                    <td>{{dataJadwal(2,3,2)}}</td>
                    <td>{{dataJadwal(3,3,2)}}</td>
                    <td>{{dataJadwal(4,3,2)}}</td>
                    <td>{{dataJadwal(5,3,2)}}</td>
                    <td>{{dataJadwal(6,3,2)}}</td>
                    <td>{{dataJadwal(7,3,2)}}</td>
                    <td>{{dataJadwal(8,3,2)}}</td>
                    <td>{{dataJadwal(9,3,2)}}</td>
                    <td>{{dataJadwal(10,3,2)}}</td>
                    <td>{{dataJadwal(11,3,2)}}</td>
                    <td>{{dataJadwal(12,3,2)}}</td>
                    <td>{{dataJadwal(13,3,2)}}</td>
                    <td>{{dataJadwal(14,3,2)}}</td>
                    <td>{{dataJadwal(15,3,2)}}</td>
                    <td>{{dataJadwal(16,3,2)}}</td>
                    <td>{{dataJadwal(17,3,2)}}</td>
                    <td>{{dataJadwal(18,3,2)}}</td>
                    <td>{{dataJadwal(19,3,2)}}</td>
                    <td>{{dataJadwal(20,3,2)}}</td>
                    <td>{{dataJadwal(21,3,2)}}</td>
                    <td>{{dataJadwal(22,3,2)}}</td>
                    <td>{{dataJadwal(23,3,2)}}</td>
                    <td>{{dataJadwal(24,3,2)}}</td>
                    <td>{{dataJadwal(25,3,2)}}</td>
                    <td>{{dataJadwal(26,3,2)}}</td>
                    <td>{{dataJadwal(27,3,2)}}</td>
                    <td>{{dataJadwal(28,3,2)}}</td>
                    <td>{{dataJadwal(29,3,2)}}</td>
                    <td>{{dataJadwal(30,3,2)}}</td>
                    <td>{{dataJadwal(31,3,2)}}</td>
                    <td>{{dataJadwal(32,3,2)}}</td>
                    <td>{{dataJadwal(33,3,2)}}</td>
                    <td>{{dataJadwal(34,3,2)}}</td>
                    <td>{{dataJadwal(35,3,2)}}</td>
                    <td>{{dataJadwal(36,3,2)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td>{{dataJadwal(1,3,3)}}</td>
                    <td>{{dataJadwal(2,3,3)}}</td>
                    <td>{{dataJadwal(3,3,3)}}</td>
                    <td>{{dataJadwal(4,3,3)}}</td>
                    <td>{{dataJadwal(5,3,3)}}</td>
                    <td>{{dataJadwal(6,3,3)}}</td>
                    <td>{{dataJadwal(7,3,3)}}</td>
                    <td>{{dataJadwal(8,3,3)}}</td>
                    <td>{{dataJadwal(9,3,3)}}</td>
                    <td>{{dataJadwal(10,3,3)}}</td>
                    <td>{{dataJadwal(11,3,3)}}</td>
                    <td>{{dataJadwal(12,3,3)}}</td>
                    <td>{{dataJadwal(13,3,3)}}</td>
                    <td>{{dataJadwal(14,3,3)}}</td>
                    <td>{{dataJadwal(15,3,3)}}</td>
                    <td>{{dataJadwal(16,3,3)}}</td>
                    <td>{{dataJadwal(17,3,3)}}</td>
                    <td>{{dataJadwal(18,3,3)}}</td>
                    <td>{{dataJadwal(19,3,3)}}</td>
                    <td>{{dataJadwal(20,3,3)}}</td>
                    <td>{{dataJadwal(21,3,3)}}</td>
                    <td>{{dataJadwal(22,3,3)}}</td>
                    <td>{{dataJadwal(23,3,3)}}</td>
                    <td>{{dataJadwal(24,3,3)}}</td>
                    <td>{{dataJadwal(25,3,3)}}</td>
                    <td>{{dataJadwal(26,3,3)}}</td>
                    <td>{{dataJadwal(27,3,3)}}</td>
                    <td>{{dataJadwal(28,3,3)}}</td>
                    <td>{{dataJadwal(29,3,3)}}</td>
                    <td>{{dataJadwal(30,3,3)}}</td>
                    <td>{{dataJadwal(31,3,3)}}</td>
                    <td>{{dataJadwal(32,3,3)}}</td>
                    <td>{{dataJadwal(33,3,3)}}</td>
                    <td>{{dataJadwal(34,3,3)}}</td>
                    <td>{{dataJadwal(35,3,3)}}</td>
                    <td>{{dataJadwal(36,3,3)}}</td>
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
                    <td>{{dataJadwal(1,3,4)}}</td>
                    <td>{{dataJadwal(2,3,4)}}</td>
                    <td>{{dataJadwal(3,3,4)}}</td>
                    <td>{{dataJadwal(4,3,4)}}</td>
                    <td>{{dataJadwal(5,3,4)}}</td>
                    <td>{{dataJadwal(6,3,4)}}</td>
                    <td>{{dataJadwal(7,3,4)}}</td>
                    <td>{{dataJadwal(8,3,4)}}</td>
                    <td>{{dataJadwal(9,3,4)}}</td>
                    <td>{{dataJadwal(10,3,4)}}</td>
                    <td>{{dataJadwal(11,3,4)}}</td>
                    <td>{{dataJadwal(12,3,4)}}</td>
                    <td>{{dataJadwal(13,3,4)}}</td>
                    <td>{{dataJadwal(14,3,4)}}</td>
                    <td>{{dataJadwal(15,3,4)}}</td>
                    <td>{{dataJadwal(16,3,4)}}</td>
                    <td>{{dataJadwal(17,3,4)}}</td>
                    <td>{{dataJadwal(18,3,4)}}</td>
                    <td>{{dataJadwal(19,3,4)}}</td>
                    <td>{{dataJadwal(20,3,4)}}</td>
                    <td>{{dataJadwal(21,3,4)}}</td>
                    <td>{{dataJadwal(22,3,4)}}</td>
                    <td>{{dataJadwal(23,3,4)}}</td>
                    <td>{{dataJadwal(24,3,4)}}</td>
                    <td>{{dataJadwal(25,3,4)}}</td>
                    <td>{{dataJadwal(26,3,4)}}</td>
                    <td>{{dataJadwal(27,3,4)}}</td>
                    <td>{{dataJadwal(28,3,4)}}</td>
                    <td>{{dataJadwal(29,3,4)}}</td>
                    <td>{{dataJadwal(30,3,4)}}</td>
                    <td>{{dataJadwal(31,3,4)}}</td>
                    <td>{{dataJadwal(32,3,4)}}</td>
                    <td>{{dataJadwal(33,3,4)}}</td>
                    <td>{{dataJadwal(34,3,4)}}</td>
                    <td>{{dataJadwal(35,3,4)}}</td>
                    <td>{{dataJadwal(36,3,4)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <td>{{dataJadwal(1,3,5)}}</td>
                    <td>{{dataJadwal(2,3,5)}}</td>
                    <td>{{dataJadwal(3,3,5)}}</td>
                    <td>{{dataJadwal(4,3,5)}}</td>
                    <td>{{dataJadwal(5,3,5)}}</td>
                    <td>{{dataJadwal(6,3,5)}}</td>
                    <td>{{dataJadwal(7,3,5)}}</td>
                    <td>{{dataJadwal(8,3,5)}}</td>
                    <td>{{dataJadwal(9,3,5)}}</td>
                    <td>{{dataJadwal(10,3,5)}}</td>
                    <td>{{dataJadwal(11,3,5)}}</td>
                    <td>{{dataJadwal(12,3,5)}}</td>
                    <td>{{dataJadwal(13,3,5)}}</td>
                    <td>{{dataJadwal(14,3,5)}}</td>
                    <td>{{dataJadwal(15,3,5)}}</td>
                    <td>{{dataJadwal(16,3,5)}}</td>
                    <td>{{dataJadwal(17,3,5)}}</td>
                    <td>{{dataJadwal(18,3,5)}}</td>
                    <td>{{dataJadwal(19,3,5)}}</td>
                    <td>{{dataJadwal(20,3,5)}}</td>
                    <td>{{dataJadwal(21,3,5)}}</td>
                    <td>{{dataJadwal(22,3,5)}}</td>
                    <td>{{dataJadwal(23,3,5)}}</td>
                    <td>{{dataJadwal(24,3,5)}}</td>
                    <td>{{dataJadwal(25,3,5)}}</td>
                    <td>{{dataJadwal(26,3,5)}}</td>
                    <td>{{dataJadwal(27,3,5)}}</td>
                    <td>{{dataJadwal(28,3,5)}}</td>
                    <td>{{dataJadwal(29,3,5)}}</td>
                    <td>{{dataJadwal(30,3,5)}}</td>
                    <td>{{dataJadwal(31,3,5)}}</td>
                    <td>{{dataJadwal(32,3,5)}}</td>
                    <td>{{dataJadwal(33,3,5)}}</td>
                    <td>{{dataJadwal(34,3,5)}}</td>
                    <td>{{dataJadwal(35,3,5)}}</td>
                    <td>{{dataJadwal(36,3,5)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td>{{dataJadwal(1,3,6)}}</td>
                    <td>{{dataJadwal(2,3,6)}}</td>
                    <td>{{dataJadwal(3,3,6)}}</td>
                    <td>{{dataJadwal(4,3,6)}}</td>
                    <td>{{dataJadwal(5,3,6)}}</td>
                    <td>{{dataJadwal(6,3,6)}}</td>
                    <td>{{dataJadwal(7,3,6)}}</td>
                    <td>{{dataJadwal(8,3,6)}}</td>
                    <td>{{dataJadwal(9,3,6)}}</td>
                    <td>{{dataJadwal(10,3,6)}}</td>
                    <td>{{dataJadwal(11,3,6)}}</td>
                    <td>{{dataJadwal(12,3,6)}}</td>
                    <td>{{dataJadwal(13,3,6)}}</td>
                    <td>{{dataJadwal(14,3,6)}}</td>
                    <td>{{dataJadwal(15,3,6)}}</td>
                    <td>{{dataJadwal(16,3,6)}}</td>
                    <td>{{dataJadwal(17,3,6)}}</td>
                    <td>{{dataJadwal(18,3,6)}}</td>
                    <td>{{dataJadwal(19,3,6)}}</td>
                    <td>{{dataJadwal(20,3,6)}}</td>
                    <td>{{dataJadwal(21,3,6)}}</td>
                    <td>{{dataJadwal(22,3,6)}}</td>
                    <td>{{dataJadwal(23,3,6)}}</td>
                    <td>{{dataJadwal(24,3,6)}}</td>
                    <td>{{dataJadwal(25,3,6)}}</td>
                    <td>{{dataJadwal(26,3,6)}}</td>
                    <td>{{dataJadwal(27,3,6)}}</td>
                    <td>{{dataJadwal(28,3,6)}}</td>
                    <td>{{dataJadwal(29,3,6)}}</td>
                    <td>{{dataJadwal(30,3,6)}}</td>
                    <td>{{dataJadwal(31,3,6)}}</td>
                    <td>{{dataJadwal(32,3,6)}}</td>
                    <td>{{dataJadwal(33,3,6)}}</td>
                    <td>{{dataJadwal(34,3,6)}}</td>
                    <td>{{dataJadwal(35,3,6)}}</td>
                    <td>{{dataJadwal(36,3,6)}}</td>
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
                    <td>{{dataJadwal(1,3,7)}}</td>
                    <td>{{dataJadwal(2,3,7)}}</td>
                    <td>{{dataJadwal(3,3,7)}}</td>
                    <td>{{dataJadwal(4,3,7)}}</td>
                    <td>{{dataJadwal(5,3,7)}}</td>
                    <td>{{dataJadwal(6,3,7)}}</td>
                    <td>{{dataJadwal(7,3,7)}}</td>
                    <td>{{dataJadwal(8,3,7)}}</td>
                    <td>{{dataJadwal(9,3,7)}}</td>
                    <td>{{dataJadwal(10,3,7)}}</td>
                    <td>{{dataJadwal(11,3,7)}}</td>
                    <td>{{dataJadwal(12,3,7)}}</td>
                    <td>{{dataJadwal(13,3,7)}}</td>
                    <td>{{dataJadwal(14,3,7)}}</td>
                    <td>{{dataJadwal(15,3,7)}}</td>
                    <td>{{dataJadwal(16,3,7)}}</td>
                    <td>{{dataJadwal(17,3,7)}}</td>
                    <td>{{dataJadwal(18,3,7)}}</td>
                    <td>{{dataJadwal(19,3,7)}}</td>
                    <td>{{dataJadwal(20,3,7)}}</td>
                    <td>{{dataJadwal(21,3,7)}}</td>
                    <td>{{dataJadwal(22,3,7)}}</td>
                    <td>{{dataJadwal(23,3,7)}}</td>
                    <td>{{dataJadwal(24,3,7)}}</td>
                    <td>{{dataJadwal(25,3,7)}}</td>
                    <td>{{dataJadwal(26,3,7)}}</td>
                    <td>{{dataJadwal(27,3,7)}}</td>
                    <td>{{dataJadwal(28,3,7)}}</td>
                    <td>{{dataJadwal(29,3,7)}}</td>
                    <td>{{dataJadwal(30,3,7)}}</td>
                    <td>{{dataJadwal(31,3,7)}}</td>
                    <td>{{dataJadwal(32,3,7)}}</td>
                    <td>{{dataJadwal(33,3,7)}}</td>
                    <td>{{dataJadwal(34,3,7)}}</td>
                    <td>{{dataJadwal(35,3,7)}}</td>
                    <td>{{dataJadwal(36,3,7)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td>{{dataJadwal(1,3,8)}}</td>
                    <td>{{dataJadwal(2,3,8)}}</td>
                    <td>{{dataJadwal(3,3,8)}}</td>
                    <td>{{dataJadwal(4,3,8)}}</td>
                    <td>{{dataJadwal(5,3,8)}}</td>
                    <td>{{dataJadwal(6,3,8)}}</td>
                    <td>{{dataJadwal(7,3,8)}}</td>
                    <td>{{dataJadwal(8,3,8)}}</td>
                    <td>{{dataJadwal(9,3,8)}}</td>
                    <td>{{dataJadwal(10,3,8)}}</td>
                    <td>{{dataJadwal(11,3,8)}}</td>
                    <td>{{dataJadwal(12,3,8)}}</td>
                    <td>{{dataJadwal(13,3,8)}}</td>
                    <td>{{dataJadwal(14,3,8)}}</td>
                    <td>{{dataJadwal(15,3,8)}}</td>
                    <td>{{dataJadwal(16,3,8)}}</td>
                    <td>{{dataJadwal(17,3,8)}}</td>
                    <td>{{dataJadwal(18,3,8)}}</td>
                    <td>{{dataJadwal(19,3,8)}}</td>
                    <td>{{dataJadwal(20,3,8)}}</td>
                    <td>{{dataJadwal(21,3,8)}}</td>
                    <td>{{dataJadwal(22,3,8)}}</td>
                    <td>{{dataJadwal(23,3,8)}}</td>
                    <td>{{dataJadwal(24,3,8)}}</td>
                    <td>{{dataJadwal(25,3,8)}}</td>
                    <td>{{dataJadwal(26,3,8)}}</td>
                    <td>{{dataJadwal(27,3,8)}}</td>
                    <td>{{dataJadwal(28,3,8)}}</td>
                    <td>{{dataJadwal(29,3,8)}}</td>
                    <td>{{dataJadwal(30,3,8)}}</td>
                    <td>{{dataJadwal(31,3,8)}}</td>
                    <td>{{dataJadwal(32,3,8)}}</td>
                    <td>{{dataJadwal(33,3,8)}}</td>
                    <td>{{dataJadwal(34,3,8)}}</td>
                    <td>{{dataJadwal(35,3,8)}}</td>
                    <td>{{dataJadwal(36,3,8)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td>{{dataJadwal(1,3,9)}}</td>
                    <td>{{dataJadwal(2,3,9)}}</td>
                    <td>{{dataJadwal(3,3,9)}}</td>
                    <td>{{dataJadwal(4,3,9)}}</td>
                    <td>{{dataJadwal(5,3,9)}}</td>
                    <td>{{dataJadwal(6,3,9)}}</td>
                    <td>{{dataJadwal(7,3,9)}}</td>
                    <td>{{dataJadwal(8,3,9)}}</td>
                    <td>{{dataJadwal(9,3,9)}}</td>
                    <td>{{dataJadwal(10,3,9)}}</td>
                    <td>{{dataJadwal(11,3,9)}}</td>
                    <td>{{dataJadwal(12,3,9)}}</td>
                    <td>{{dataJadwal(13,3,9)}}</td>
                    <td>{{dataJadwal(14,3,9)}}</td>
                    <td>{{dataJadwal(15,3,9)}}</td>
                    <td>{{dataJadwal(16,3,9)}}</td>
                    <td>{{dataJadwal(17,3,9)}}</td>
                    <td>{{dataJadwal(18,3,9)}}</td>
                    <td>{{dataJadwal(19,3,9)}}</td>
                    <td>{{dataJadwal(20,3,9)}}</td>
                    <td>{{dataJadwal(21,3,9)}}</td>
                    <td>{{dataJadwal(22,3,9)}}</td>
                    <td>{{dataJadwal(23,3,9)}}</td>
                    <td>{{dataJadwal(24,3,9)}}</td>
                    <td>{{dataJadwal(25,3,9)}}</td>
                    <td>{{dataJadwal(26,3,9)}}</td>
                    <td>{{dataJadwal(27,3,9)}}</td>
                    <td>{{dataJadwal(28,3,9)}}</td>
                    <td>{{dataJadwal(29,3,9)}}</td>
                    <td>{{dataJadwal(30,3,9)}}</td>
                    <td>{{dataJadwal(31,3,9)}}</td>
                    <td>{{dataJadwal(32,3,9)}}</td>
                    <td>{{dataJadwal(33,3,9)}}</td>
                    <td>{{dataJadwal(34,3,9)}}</td>
                    <td>{{dataJadwal(35,3,9)}}</td>
                    <td>{{dataJadwal(36,3,9)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td>{{dataJadwal(1,3,10)}}</td>
                    <td>{{dataJadwal(2,3,10)}}</td>
                    <td>{{dataJadwal(3,3,10)}}</td>
                    <td>{{dataJadwal(4,3,10)}}</td>
                    <td>{{dataJadwal(5,3,10)}}</td>
                    <td>{{dataJadwal(6,3,10)}}</td>
                    <td>{{dataJadwal(7,3,10)}}</td>
                    <td>{{dataJadwal(8,3,10)}}</td>
                    <td>{{dataJadwal(9,3,10)}}</td>
                    <td>{{dataJadwal(10,3,10)}}</td>
                    <td>{{dataJadwal(11,3,10)}}</td>
                    <td>{{dataJadwal(12,3,10)}}</td>
                    <td>{{dataJadwal(13,3,10)}}</td>
                    <td>{{dataJadwal(14,3,10)}}</td>
                    <td>{{dataJadwal(15,3,10)}}</td>
                    <td>{{dataJadwal(16,3,10)}}</td>
                    <td>{{dataJadwal(17,3,10)}}</td>
                    <td>{{dataJadwal(18,3,10)}}</td>
                    <td>{{dataJadwal(19,3,10)}}</td>
                    <td>{{dataJadwal(20,3,10)}}</td>
                    <td>{{dataJadwal(21,3,10)}}</td>
                    <td>{{dataJadwal(22,3,10)}}</td>
                    <td>{{dataJadwal(23,3,10)}}</td>
                    <td>{{dataJadwal(24,3,10)}}</td>
                    <td>{{dataJadwal(25,3,10)}}</td>
                    <td>{{dataJadwal(26,3,10)}}</td>
                    <td>{{dataJadwal(27,3,10)}}</td>
                    <td>{{dataJadwal(28,3,10)}}</td>
                    <td>{{dataJadwal(29,3,10)}}</td>
                    <td>{{dataJadwal(30,3,10)}}</td>
                    <td>{{dataJadwal(31,3,10)}}</td>
                    <td>{{dataJadwal(32,3,10)}}</td>
                    <td>{{dataJadwal(33,3,10)}}</td>
                    <td>{{dataJadwal(34,3,10)}}</td>
                    <td>{{dataJadwal(35,3,10)}}</td>
                    <td>{{dataJadwal(36,3,10)}}</td>
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
                    <td>{{dataJadwal(1,4,2)}}</td>
                    <td>{{dataJadwal(2,4,2)}}</td>
                    <td>{{dataJadwal(3,4,2)}}</td>
                    <td>{{dataJadwal(4,4,2)}}</td>
                    <td>{{dataJadwal(5,4,2)}}</td>
                    <td>{{dataJadwal(6,4,2)}}</td>
                    <td>{{dataJadwal(7,4,2)}}</td>
                    <td>{{dataJadwal(8,4,2)}}</td>
                    <td>{{dataJadwal(9,4,2)}}</td>
                    <td>{{dataJadwal(10,4,2)}}</td>
                    <td>{{dataJadwal(11,4,2)}}</td>
                    <td>{{dataJadwal(12,4,2)}}</td>
                    <td>{{dataJadwal(13,4,2)}}</td>
                    <td>{{dataJadwal(14,4,2)}}</td>
                    <td>{{dataJadwal(15,4,2)}}</td>
                    <td>{{dataJadwal(16,4,2)}}</td>
                    <td>{{dataJadwal(17,4,2)}}</td>
                    <td>{{dataJadwal(18,4,2)}}</td>
                    <td>{{dataJadwal(19,4,2)}}</td>
                    <td>{{dataJadwal(20,4,2)}}</td>
                    <td>{{dataJadwal(21,4,2)}}</td>
                    <td>{{dataJadwal(22,4,2)}}</td>
                    <td>{{dataJadwal(23,4,2)}}</td>
                    <td>{{dataJadwal(24,4,2)}}</td>
                    <td>{{dataJadwal(25,4,2)}}</td>
                    <td>{{dataJadwal(26,4,2)}}</td>
                    <td>{{dataJadwal(27,4,2)}}</td>
                    <td>{{dataJadwal(28,4,2)}}</td>
                    <td>{{dataJadwal(29,4,2)}}</td>
                    <td>{{dataJadwal(30,4,2)}}</td>
                    <td>{{dataJadwal(31,4,2)}}</td>
                    <td>{{dataJadwal(32,4,2)}}</td>
                    <td>{{dataJadwal(33,4,2)}}</td>
                    <td>{{dataJadwal(34,4,2)}}</td>
                    <td>{{dataJadwal(35,4,2)}}</td>
                    <td>{{dataJadwal(36,4,2)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td>{{dataJadwal(1,4,3)}}</td>
                    <td>{{dataJadwal(2,4,3)}}</td>
                    <td>{{dataJadwal(3,4,3)}}</td>
                    <td>{{dataJadwal(4,4,3)}}</td>
                    <td>{{dataJadwal(5,4,3)}}</td>
                    <td>{{dataJadwal(6,4,3)}}</td>
                    <td>{{dataJadwal(7,4,3)}}</td>
                    <td>{{dataJadwal(8,4,3)}}</td>
                    <td>{{dataJadwal(9,4,3)}}</td>
                    <td>{{dataJadwal(10,4,3)}}</td>
                    <td>{{dataJadwal(11,4,3)}}</td>
                    <td>{{dataJadwal(12,4,3)}}</td>
                    <td>{{dataJadwal(13,4,3)}}</td>
                    <td>{{dataJadwal(14,4,3)}}</td>
                    <td>{{dataJadwal(15,4,3)}}</td>
                    <td>{{dataJadwal(16,4,3)}}</td>
                    <td>{{dataJadwal(17,4,3)}}</td>
                    <td>{{dataJadwal(18,4,3)}}</td>
                    <td>{{dataJadwal(19,4,3)}}</td>
                    <td>{{dataJadwal(20,4,3)}}</td>
                    <td>{{dataJadwal(21,4,3)}}</td>
                    <td>{{dataJadwal(22,4,3)}}</td>
                    <td>{{dataJadwal(23,4,3)}}</td>
                    <td>{{dataJadwal(24,4,3)}}</td>
                    <td>{{dataJadwal(25,4,3)}}</td>
                    <td>{{dataJadwal(26,4,3)}}</td>
                    <td>{{dataJadwal(27,4,3)}}</td>
                    <td>{{dataJadwal(28,4,3)}}</td>
                    <td>{{dataJadwal(29,4,3)}}</td>
                    <td>{{dataJadwal(30,4,3)}}</td>
                    <td>{{dataJadwal(31,4,3)}}</td>
                    <td>{{dataJadwal(32,4,3)}}</td>
                    <td>{{dataJadwal(33,4,3)}}</td>
                    <td>{{dataJadwal(34,4,3)}}</td>
                    <td>{{dataJadwal(35,4,3)}}</td>
                    <td>{{dataJadwal(36,4,3)}}</td>
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
                    <td>{{dataJadwal(1,4,4)}}</td>
                    <td>{{dataJadwal(2,4,4)}}</td>
                    <td>{{dataJadwal(3,4,4)}}</td>
                    <td>{{dataJadwal(4,4,4)}}</td>
                    <td>{{dataJadwal(5,4,4)}}</td>
                    <td>{{dataJadwal(6,4,4)}}</td>
                    <td>{{dataJadwal(7,4,4)}}</td>
                    <td>{{dataJadwal(8,4,4)}}</td>
                    <td>{{dataJadwal(9,4,4)}}</td>
                    <td>{{dataJadwal(10,4,4)}}</td>
                    <td>{{dataJadwal(11,4,4)}}</td>
                    <td>{{dataJadwal(12,4,4)}}</td>
                    <td>{{dataJadwal(13,4,4)}}</td>
                    <td>{{dataJadwal(14,4,4)}}</td>
                    <td>{{dataJadwal(15,4,4)}}</td>
                    <td>{{dataJadwal(16,4,4)}}</td>
                    <td>{{dataJadwal(17,4,4)}}</td>
                    <td>{{dataJadwal(18,4,4)}}</td>
                    <td>{{dataJadwal(19,4,4)}}</td>
                    <td>{{dataJadwal(20,4,4)}}</td>
                    <td>{{dataJadwal(21,4,4)}}</td>
                    <td>{{dataJadwal(22,4,4)}}</td>
                    <td>{{dataJadwal(23,4,4)}}</td>
                    <td>{{dataJadwal(24,4,4)}}</td>
                    <td>{{dataJadwal(25,4,4)}}</td>
                    <td>{{dataJadwal(26,4,4)}}</td>
                    <td>{{dataJadwal(27,4,4)}}</td>
                    <td>{{dataJadwal(28,4,4)}}</td>
                    <td>{{dataJadwal(29,4,4)}}</td>
                    <td>{{dataJadwal(30,4,4)}}</td>
                    <td>{{dataJadwal(31,4,4)}}</td>
                    <td>{{dataJadwal(32,4,4)}}</td>
                    <td>{{dataJadwal(33,4,4)}}</td>
                    <td>{{dataJadwal(34,4,4)}}</td>
                    <td>{{dataJadwal(35,4,4)}}</td>
                    <td>{{dataJadwal(36,4,4)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <td>{{dataJadwal(1,4,5)}}</td>
                    <td>{{dataJadwal(2,4,5)}}</td>
                    <td>{{dataJadwal(3,4,5)}}</td>
                    <td>{{dataJadwal(4,4,5)}}</td>
                    <td>{{dataJadwal(5,4,5)}}</td>
                    <td>{{dataJadwal(6,4,5)}}</td>
                    <td>{{dataJadwal(7,4,5)}}</td>
                    <td>{{dataJadwal(8,4,5)}}</td>
                    <td>{{dataJadwal(9,4,5)}}</td>
                    <td>{{dataJadwal(10,4,5)}}</td>
                    <td>{{dataJadwal(11,4,5)}}</td>
                    <td>{{dataJadwal(12,4,5)}}</td>
                    <td>{{dataJadwal(13,4,5)}}</td>
                    <td>{{dataJadwal(14,4,5)}}</td>
                    <td>{{dataJadwal(15,4,5)}}</td>
                    <td>{{dataJadwal(16,4,5)}}</td>
                    <td>{{dataJadwal(17,4,5)}}</td>
                    <td>{{dataJadwal(18,4,5)}}</td>
                    <td>{{dataJadwal(19,4,5)}}</td>
                    <td>{{dataJadwal(20,4,5)}}</td>
                    <td>{{dataJadwal(21,4,5)}}</td>
                    <td>{{dataJadwal(22,4,5)}}</td>
                    <td>{{dataJadwal(23,4,5)}}</td>
                    <td>{{dataJadwal(24,4,5)}}</td>
                    <td>{{dataJadwal(25,4,5)}}</td>
                    <td>{{dataJadwal(26,4,5)}}</td>
                    <td>{{dataJadwal(27,4,5)}}</td>
                    <td>{{dataJadwal(28,4,5)}}</td>
                    <td>{{dataJadwal(29,4,5)}}</td>
                    <td>{{dataJadwal(30,4,5)}}</td>
                    <td>{{dataJadwal(31,4,5)}}</td>
                    <td>{{dataJadwal(32,4,5)}}</td>
                    <td>{{dataJadwal(33,4,5)}}</td>
                    <td>{{dataJadwal(34,4,5)}}</td>
                    <td>{{dataJadwal(35,4,5)}}</td>
                    <td>{{dataJadwal(36,4,5)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td>{{dataJadwal(1,4,6)}}</td>
                    <td>{{dataJadwal(2,4,6)}}</td>
                    <td>{{dataJadwal(3,4,6)}}</td>
                    <td>{{dataJadwal(4,4,6)}}</td>
                    <td>{{dataJadwal(5,4,6)}}</td>
                    <td>{{dataJadwal(6,4,6)}}</td>
                    <td>{{dataJadwal(7,4,6)}}</td>
                    <td>{{dataJadwal(8,4,6)}}</td>
                    <td>{{dataJadwal(9,4,6)}}</td>
                    <td>{{dataJadwal(10,4,6)}}</td>
                    <td>{{dataJadwal(11,4,6)}}</td>
                    <td>{{dataJadwal(12,4,6)}}</td>
                    <td>{{dataJadwal(13,4,6)}}</td>
                    <td>{{dataJadwal(14,4,6)}}</td>
                    <td>{{dataJadwal(15,4,6)}}</td>
                    <td>{{dataJadwal(16,4,6)}}</td>
                    <td>{{dataJadwal(17,4,6)}}</td>
                    <td>{{dataJadwal(18,4,6)}}</td>
                    <td>{{dataJadwal(19,4,6)}}</td>
                    <td>{{dataJadwal(20,4,6)}}</td>
                    <td>{{dataJadwal(21,4,6)}}</td>
                    <td>{{dataJadwal(22,4,6)}}</td>
                    <td>{{dataJadwal(23,4,6)}}</td>
                    <td>{{dataJadwal(24,4,6)}}</td>
                    <td>{{dataJadwal(25,4,6)}}</td>
                    <td>{{dataJadwal(26,4,6)}}</td>
                    <td>{{dataJadwal(27,4,6)}}</td>
                    <td>{{dataJadwal(28,4,6)}}</td>
                    <td>{{dataJadwal(29,4,6)}}</td>
                    <td>{{dataJadwal(30,4,6)}}</td>
                    <td>{{dataJadwal(31,4,6)}}</td>
                    <td>{{dataJadwal(32,4,6)}}</td>
                    <td>{{dataJadwal(33,4,6)}}</td>
                    <td>{{dataJadwal(34,4,6)}}</td>
                    <td>{{dataJadwal(35,4,6)}}</td>
                    <td>{{dataJadwal(36,4,6)}}</td>
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
                    <td>{{dataJadwal(1,4,7)}}</td>
                    <td>{{dataJadwal(2,4,7)}}</td>
                    <td>{{dataJadwal(3,4,7)}}</td>
                    <td>{{dataJadwal(4,4,7)}}</td>
                    <td>{{dataJadwal(5,4,7)}}</td>
                    <td>{{dataJadwal(6,4,7)}}</td>
                    <td>{{dataJadwal(7,4,7)}}</td>
                    <td>{{dataJadwal(8,4,7)}}</td>
                    <td>{{dataJadwal(9,4,7)}}</td>
                    <td>{{dataJadwal(10,4,7)}}</td>
                    <td>{{dataJadwal(11,4,7)}}</td>
                    <td>{{dataJadwal(12,4,7)}}</td>
                    <td>{{dataJadwal(13,4,7)}}</td>
                    <td>{{dataJadwal(14,4,7)}}</td>
                    <td>{{dataJadwal(15,4,7)}}</td>
                    <td>{{dataJadwal(16,4,7)}}</td>
                    <td>{{dataJadwal(17,4,7)}}</td>
                    <td>{{dataJadwal(18,4,7)}}</td>
                    <td>{{dataJadwal(19,4,7)}}</td>
                    <td>{{dataJadwal(20,4,7)}}</td>
                    <td>{{dataJadwal(21,4,7)}}</td>
                    <td>{{dataJadwal(22,4,7)}}</td>
                    <td>{{dataJadwal(23,4,7)}}</td>
                    <td>{{dataJadwal(24,4,7)}}</td>
                    <td>{{dataJadwal(25,4,7)}}</td>
                    <td>{{dataJadwal(26,4,7)}}</td>
                    <td>{{dataJadwal(27,4,7)}}</td>
                    <td>{{dataJadwal(28,4,7)}}</td>
                    <td>{{dataJadwal(29,4,7)}}</td>
                    <td>{{dataJadwal(30,4,7)}}</td>
                    <td>{{dataJadwal(31,4,7)}}</td>
                    <td>{{dataJadwal(32,4,7)}}</td>
                    <td>{{dataJadwal(33,4,7)}}</td>
                    <td>{{dataJadwal(34,4,7)}}</td>
                    <td>{{dataJadwal(35,4,7)}}</td>
                    <td>{{dataJadwal(36,4,7)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td>{{dataJadwal(1,4,8)}}</td>
                    <td>{{dataJadwal(2,4,8)}}</td>
                    <td>{{dataJadwal(3,4,8)}}</td>
                    <td>{{dataJadwal(4,4,8)}}</td>
                    <td>{{dataJadwal(5,4,8)}}</td>
                    <td>{{dataJadwal(6,4,8)}}</td>
                    <td>{{dataJadwal(7,4,8)}}</td>
                    <td>{{dataJadwal(8,4,8)}}</td>
                    <td>{{dataJadwal(9,4,8)}}</td>
                    <td>{{dataJadwal(10,4,8)}}</td>
                    <td>{{dataJadwal(11,4,8)}}</td>
                    <td>{{dataJadwal(12,4,8)}}</td>
                    <td>{{dataJadwal(13,4,8)}}</td>
                    <td>{{dataJadwal(14,4,8)}}</td>
                    <td>{{dataJadwal(15,4,8)}}</td>
                    <td>{{dataJadwal(16,4,8)}}</td>
                    <td>{{dataJadwal(17,4,8)}}</td>
                    <td>{{dataJadwal(18,4,8)}}</td>
                    <td>{{dataJadwal(19,4,8)}}</td>
                    <td>{{dataJadwal(20,4,8)}}</td>
                    <td>{{dataJadwal(21,4,8)}}</td>
                    <td>{{dataJadwal(22,4,8)}}</td>
                    <td>{{dataJadwal(23,4,8)}}</td>
                    <td>{{dataJadwal(24,4,8)}}</td>
                    <td>{{dataJadwal(25,4,8)}}</td>
                    <td>{{dataJadwal(26,4,8)}}</td>
                    <td>{{dataJadwal(27,4,8)}}</td>
                    <td>{{dataJadwal(28,4,8)}}</td>
                    <td>{{dataJadwal(29,4,8)}}</td>
                    <td>{{dataJadwal(30,4,8)}}</td>
                    <td>{{dataJadwal(31,4,8)}}</td>
                    <td>{{dataJadwal(32,4,8)}}</td>
                    <td>{{dataJadwal(33,4,8)}}</td>
                    <td>{{dataJadwal(34,4,8)}}</td>
                    <td>{{dataJadwal(35,4,8)}}</td>
                    <td>{{dataJadwal(36,4,8)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td>{{dataJadwal(1,4,9)}}</td>
                    <td>{{dataJadwal(2,4,9)}}</td>
                    <td>{{dataJadwal(3,4,9)}}</td>
                    <td>{{dataJadwal(4,4,9)}}</td>
                    <td>{{dataJadwal(5,4,9)}}</td>
                    <td>{{dataJadwal(6,4,9)}}</td>
                    <td>{{dataJadwal(7,4,9)}}</td>
                    <td>{{dataJadwal(8,4,9)}}</td>
                    <td>{{dataJadwal(9,4,9)}}</td>
                    <td>{{dataJadwal(10,4,9)}}</td>
                    <td>{{dataJadwal(11,4,9)}}</td>
                    <td>{{dataJadwal(12,4,9)}}</td>
                    <td>{{dataJadwal(13,4,9)}}</td>
                    <td>{{dataJadwal(14,4,9)}}</td>
                    <td>{{dataJadwal(15,4,9)}}</td>
                    <td>{{dataJadwal(16,4,9)}}</td>
                    <td>{{dataJadwal(17,4,9)}}</td>
                    <td>{{dataJadwal(18,4,9)}}</td>
                    <td>{{dataJadwal(19,4,9)}}</td>
                    <td>{{dataJadwal(20,4,9)}}</td>
                    <td>{{dataJadwal(21,4,9)}}</td>
                    <td>{{dataJadwal(22,4,9)}}</td>
                    <td>{{dataJadwal(23,4,9)}}</td>
                    <td>{{dataJadwal(24,4,9)}}</td>
                    <td>{{dataJadwal(25,4,9)}}</td>
                    <td>{{dataJadwal(26,4,9)}}</td>
                    <td>{{dataJadwal(27,4,9)}}</td>
                    <td>{{dataJadwal(28,4,9)}}</td>
                    <td>{{dataJadwal(29,4,9)}}</td>
                    <td>{{dataJadwal(30,4,9)}}</td>
                    <td>{{dataJadwal(31,4,9)}}</td>
                    <td>{{dataJadwal(32,4,9)}}</td>
                    <td>{{dataJadwal(33,4,9)}}</td>
                    <td>{{dataJadwal(34,4,9)}}</td>
                    <td>{{dataJadwal(35,4,9)}}</td>
                    <td>{{dataJadwal(36,4,9)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td>{{dataJadwal(1,4,10)}}</td>
                    <td>{{dataJadwal(2,4,10)}}</td>
                    <td>{{dataJadwal(3,4,10)}}</td>
                    <td>{{dataJadwal(4,4,10)}}</td>
                    <td>{{dataJadwal(5,4,10)}}</td>
                    <td>{{dataJadwal(6,4,10)}}</td>
                    <td>{{dataJadwal(7,4,10)}}</td>
                    <td>{{dataJadwal(8,4,10)}}</td>
                    <td>{{dataJadwal(9,4,10)}}</td>
                    <td>{{dataJadwal(10,4,10)}}</td>
                    <td>{{dataJadwal(11,4,10)}}</td>
                    <td>{{dataJadwal(12,4,10)}}</td>
                    <td>{{dataJadwal(13,4,10)}}</td>
                    <td>{{dataJadwal(14,4,10)}}</td>
                    <td>{{dataJadwal(15,4,10)}}</td>
                    <td>{{dataJadwal(16,4,10)}}</td>
                    <td>{{dataJadwal(17,4,10)}}</td>
                    <td>{{dataJadwal(18,4,10)}}</td>
                    <td>{{dataJadwal(19,4,10)}}</td>
                    <td>{{dataJadwal(20,4,10)}}</td>
                    <td>{{dataJadwal(21,4,10)}}</td>
                    <td>{{dataJadwal(22,4,10)}}</td>
                    <td>{{dataJadwal(23,4,10)}}</td>
                    <td>{{dataJadwal(24,4,10)}}</td>
                    <td>{{dataJadwal(25,4,10)}}</td>
                    <td>{{dataJadwal(26,4,10)}}</td>
                    <td>{{dataJadwal(27,4,10)}}</td>
                    <td>{{dataJadwal(28,4,10)}}</td>
                    <td>{{dataJadwal(29,4,10)}}</td>
                    <td>{{dataJadwal(30,4,10)}}</td>
                    <td>{{dataJadwal(31,4,10)}}</td>
                    <td>{{dataJadwal(32,4,10)}}</td>
                    <td>{{dataJadwal(33,4,10)}}</td>
                    <td>{{dataJadwal(34,4,10)}}</td>
                    <td>{{dataJadwal(35,4,10)}}</td>
                    <td>{{dataJadwal(36,4,10)}}</td>
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
                    <td>{{dataJadwal(1,5,2)}}</td>
                    <td>{{dataJadwal(2,5,2)}}</td>
                    <td>{{dataJadwal(3,5,2)}}</td>
                    <td>{{dataJadwal(4,5,2)}}</td>
                    <td>{{dataJadwal(5,5,2)}}</td>
                    <td>{{dataJadwal(6,5,2)}}</td>
                    <td>{{dataJadwal(7,5,2)}}</td>
                    <td>{{dataJadwal(8,5,2)}}</td>
                    <td>{{dataJadwal(9,5,2)}}</td>
                    <td>{{dataJadwal(10,5,2)}}</td>
                    <td>{{dataJadwal(11,5,2)}}</td>
                    <td>{{dataJadwal(12,5,2)}}</td>
                    <td>{{dataJadwal(13,5,2)}}</td>
                    <td>{{dataJadwal(14,5,2)}}</td>
                    <td>{{dataJadwal(15,5,2)}}</td>
                    <td>{{dataJadwal(16,5,2)}}</td>
                    <td>{{dataJadwal(17,5,2)}}</td>
                    <td>{{dataJadwal(18,5,2)}}</td>
                    <td>{{dataJadwal(19,5,2)}}</td>
                    <td>{{dataJadwal(20,5,2)}}</td>
                    <td>{{dataJadwal(21,5,2)}}</td>
                    <td>{{dataJadwal(22,5,2)}}</td>
                    <td>{{dataJadwal(23,5,2)}}</td>
                    <td>{{dataJadwal(24,5,2)}}</td>
                    <td>{{dataJadwal(25,5,2)}}</td>
                    <td>{{dataJadwal(26,5,2)}}</td>
                    <td>{{dataJadwal(27,5,2)}}</td>
                    <td>{{dataJadwal(28,5,2)}}</td>
                    <td>{{dataJadwal(29,5,2)}}</td>
                    <td>{{dataJadwal(30,5,2)}}</td>
                    <td>{{dataJadwal(31,5,2)}}</td>
                    <td>{{dataJadwal(32,5,2)}}</td>
                    <td>{{dataJadwal(33,5,2)}}</td>
                    <td>{{dataJadwal(34,5,2)}}</td>
                    <td>{{dataJadwal(35,5,2)}}</td>
                    <td>{{dataJadwal(36,5,2)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>3</td>
                    <td>08.30 - 09.15</td>
                    <td>{{dataJadwal(1,5,3)}}</td>
                    <td>{{dataJadwal(2,5,3)}}</td>
                    <td>{{dataJadwal(3,5,3)}}</td>
                    <td>{{dataJadwal(4,5,3)}}</td>
                    <td>{{dataJadwal(5,5,3)}}</td>
                    <td>{{dataJadwal(6,5,3)}}</td>
                    <td>{{dataJadwal(7,5,3)}}</td>
                    <td>{{dataJadwal(8,5,3)}}</td>
                    <td>{{dataJadwal(9,5,3)}}</td>
                    <td>{{dataJadwal(10,5,3)}}</td>
                    <td>{{dataJadwal(11,5,3)}}</td>
                    <td>{{dataJadwal(12,5,3)}}</td>
                    <td>{{dataJadwal(13,5,3)}}</td>
                    <td>{{dataJadwal(14,5,3)}}</td>
                    <td>{{dataJadwal(15,5,3)}}</td>
                    <td>{{dataJadwal(16,5,3)}}</td>
                    <td>{{dataJadwal(17,5,3)}}</td>
                    <td>{{dataJadwal(18,5,3)}}</td>
                    <td>{{dataJadwal(19,5,3)}}</td>
                    <td>{{dataJadwal(20,5,3)}}</td>
                    <td>{{dataJadwal(21,5,3)}}</td>
                    <td>{{dataJadwal(22,5,3)}}</td>
                    <td>{{dataJadwal(23,5,3)}}</td>
                    <td>{{dataJadwal(24,5,3)}}</td>
                    <td>{{dataJadwal(25,5,3)}}</td>
                    <td>{{dataJadwal(26,5,3)}}</td>
                    <td>{{dataJadwal(27,5,3)}}</td>
                    <td>{{dataJadwal(28,5,3)}}</td>
                    <td>{{dataJadwal(29,5,3)}}</td>
                    <td>{{dataJadwal(30,5,3)}}</td>
                    <td>{{dataJadwal(31,5,3)}}</td>
                    <td>{{dataJadwal(32,5,3)}}</td>
                    <td>{{dataJadwal(33,5,3)}}</td>
                    <td>{{dataJadwal(34,5,3)}}</td>
                    <td>{{dataJadwal(35,5,3)}}</td>
                    <td>{{dataJadwal(36,5,3)}}</td>
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
                    <td>{{dataJadwal(1,5,4)}}</td>
                    <td>{{dataJadwal(2,5,4)}}</td>
                    <td>{{dataJadwal(3,5,4)}}</td>
                    <td>{{dataJadwal(4,5,4)}}</td>
                    <td>{{dataJadwal(5,5,4)}}</td>
                    <td>{{dataJadwal(6,5,4)}}</td>
                    <td>{{dataJadwal(7,5,4)}}</td>
                    <td>{{dataJadwal(8,5,4)}}</td>
                    <td>{{dataJadwal(9,5,4)}}</td>
                    <td>{{dataJadwal(10,5,4)}}</td>
                    <td>{{dataJadwal(11,5,4)}}</td>
                    <td>{{dataJadwal(12,5,4)}}</td>
                    <td>{{dataJadwal(13,5,4)}}</td>
                    <td>{{dataJadwal(14,5,4)}}</td>
                    <td>{{dataJadwal(15,5,4)}}</td>
                    <td>{{dataJadwal(16,5,4)}}</td>
                    <td>{{dataJadwal(17,5,4)}}</td>
                    <td>{{dataJadwal(18,5,4)}}</td>
                    <td>{{dataJadwal(19,5,4)}}</td>
                    <td>{{dataJadwal(20,5,4)}}</td>
                    <td>{{dataJadwal(21,5,4)}}</td>
                    <td>{{dataJadwal(22,5,4)}}</td>
                    <td>{{dataJadwal(23,5,4)}}</td>
                    <td>{{dataJadwal(24,5,4)}}</td>
                    <td>{{dataJadwal(25,5,4)}}</td>
                    <td>{{dataJadwal(26,5,4)}}</td>
                    <td>{{dataJadwal(27,5,4)}}</td>
                    <td>{{dataJadwal(28,5,4)}}</td>
                    <td>{{dataJadwal(29,5,4)}}</td>
                    <td>{{dataJadwal(30,5,4)}}</td>
                    <td>{{dataJadwal(31,5,4)}}</td>
                    <td>{{dataJadwal(32,5,4)}}</td>
                    <td>{{dataJadwal(33,5,4)}}</td>
                    <td>{{dataJadwal(34,5,4)}}</td>
                    <td>{{dataJadwal(35,5,4)}}</td>
                    <td>{{dataJadwal(36,5,4)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>5</td>
                    <td>10.15 - 11.00</td>
                    <td>{{dataJadwal(1,5,5)}}</td>
                    <td>{{dataJadwal(2,5,5)}}</td>
                    <td>{{dataJadwal(3,5,5)}}</td>
                    <td>{{dataJadwal(4,5,5)}}</td>
                    <td>{{dataJadwal(5,5,5)}}</td>
                    <td>{{dataJadwal(6,5,5)}}</td>
                    <td>{{dataJadwal(7,5,5)}}</td>
                    <td>{{dataJadwal(8,5,5)}}</td>
                    <td>{{dataJadwal(9,5,5)}}</td>
                    <td>{{dataJadwal(10,5,5)}}</td>
                    <td>{{dataJadwal(11,5,5)}}</td>
                    <td>{{dataJadwal(12,5,5)}}</td>
                    <td>{{dataJadwal(13,5,5)}}</td>
                    <td>{{dataJadwal(14,5,5)}}</td>
                    <td>{{dataJadwal(15,5,5)}}</td>
                    <td>{{dataJadwal(16,5,5)}}</td>
                    <td>{{dataJadwal(17,5,5)}}</td>
                    <td>{{dataJadwal(18,5,5)}}</td>
                    <td>{{dataJadwal(19,5,5)}}</td>
                    <td>{{dataJadwal(20,5,5)}}</td>
                    <td>{{dataJadwal(21,5,5)}}</td>
                    <td>{{dataJadwal(22,5,5)}}</td>
                    <td>{{dataJadwal(23,5,5)}}</td>
                    <td>{{dataJadwal(24,5,5)}}</td>
                    <td>{{dataJadwal(25,5,5)}}</td>
                    <td>{{dataJadwal(26,5,5)}}</td>
                    <td>{{dataJadwal(27,5,5)}}</td>
                    <td>{{dataJadwal(28,5,5)}}</td>
                    <td>{{dataJadwal(29,5,5)}}</td>
                    <td>{{dataJadwal(30,5,5)}}</td>
                    <td>{{dataJadwal(31,5,5)}}</td>
                    <td>{{dataJadwal(32,5,5)}}</td>
                    <td>{{dataJadwal(33,5,5)}}</td>
                    <td>{{dataJadwal(34,5,5)}}</td>
                    <td>{{dataJadwal(35,5,5)}}</td>
                    <td>{{dataJadwal(36,5,5)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>6</td>
                    <td>11.00 - 11.45</td>
                    <td>{{dataJadwal(1,5,6)}}</td>
                    <td>{{dataJadwal(2,5,6)}}</td>
                    <td>{{dataJadwal(3,5,6)}}</td>
                    <td>{{dataJadwal(4,5,6)}}</td>
                    <td>{{dataJadwal(5,5,6)}}</td>
                    <td>{{dataJadwal(6,5,6)}}</td>
                    <td>{{dataJadwal(7,5,6)}}</td>
                    <td>{{dataJadwal(8,5,6)}}</td>
                    <td>{{dataJadwal(9,5,6)}}</td>
                    <td>{{dataJadwal(10,5,6)}}</td>
                    <td>{{dataJadwal(11,5,6)}}</td>
                    <td>{{dataJadwal(12,5,6)}}</td>
                    <td>{{dataJadwal(13,5,6)}}</td>
                    <td>{{dataJadwal(14,5,6)}}</td>
                    <td>{{dataJadwal(15,5,6)}}</td>
                    <td>{{dataJadwal(16,5,6)}}</td>
                    <td>{{dataJadwal(17,5,6)}}</td>
                    <td>{{dataJadwal(18,5,6)}}</td>
                    <td>{{dataJadwal(19,5,6)}}</td>
                    <td>{{dataJadwal(20,5,6)}}</td>
                    <td>{{dataJadwal(21,5,6)}}</td>
                    <td>{{dataJadwal(22,5,6)}}</td>
                    <td>{{dataJadwal(23,5,6)}}</td>
                    <td>{{dataJadwal(24,5,6)}}</td>
                    <td>{{dataJadwal(25,5,6)}}</td>
                    <td>{{dataJadwal(26,5,6)}}</td>
                    <td>{{dataJadwal(27,5,6)}}</td>
                    <td>{{dataJadwal(28,5,6)}}</td>
                    <td>{{dataJadwal(29,5,6)}}</td>
                    <td>{{dataJadwal(30,5,6)}}</td>
                    <td>{{dataJadwal(31,5,6)}}</td>
                    <td>{{dataJadwal(32,5,6)}}</td>
                    <td>{{dataJadwal(33,5,6)}}</td>
                    <td>{{dataJadwal(34,5,6)}}</td>
                    <td>{{dataJadwal(35,5,6)}}</td>
                    <td>{{dataJadwal(36,5,6)}}</td>
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
                    <td>{{dataJadwal(1,5,7)}}</td>
                    <td>{{dataJadwal(2,5,7)}}</td>
                    <td>{{dataJadwal(3,5,7)}}</td>
                    <td>{{dataJadwal(4,5,7)}}</td>
                    <td>{{dataJadwal(5,5,7)}}</td>
                    <td>{{dataJadwal(6,5,7)}}</td>
                    <td>{{dataJadwal(7,5,7)}}</td>
                    <td>{{dataJadwal(8,5,7)}}</td>
                    <td>{{dataJadwal(9,5,7)}}</td>
                    <td>{{dataJadwal(10,5,7)}}</td>
                    <td>{{dataJadwal(11,5,7)}}</td>
                    <td>{{dataJadwal(12,5,7)}}</td>
                    <td>{{dataJadwal(13,5,7)}}</td>
                    <td>{{dataJadwal(14,5,7)}}</td>
                    <td>{{dataJadwal(15,5,7)}}</td>
                    <td>{{dataJadwal(16,5,7)}}</td>
                    <td>{{dataJadwal(17,5,7)}}</td>
                    <td>{{dataJadwal(18,5,7)}}</td>
                    <td>{{dataJadwal(19,5,7)}}</td>
                    <td>{{dataJadwal(20,5,7)}}</td>
                    <td>{{dataJadwal(21,5,7)}}</td>
                    <td>{{dataJadwal(22,5,7)}}</td>
                    <td>{{dataJadwal(23,5,7)}}</td>
                    <td>{{dataJadwal(24,5,7)}}</td>
                    <td>{{dataJadwal(25,5,7)}}</td>
                    <td>{{dataJadwal(26,5,7)}}</td>
                    <td>{{dataJadwal(27,5,7)}}</td>
                    <td>{{dataJadwal(28,5,7)}}</td>
                    <td>{{dataJadwal(29,5,7)}}</td>
                    <td>{{dataJadwal(30,5,7)}}</td>
                    <td>{{dataJadwal(31,5,7)}}</td>
                    <td>{{dataJadwal(32,5,7)}}</td>
                    <td>{{dataJadwal(33,5,7)}}</td>
                    <td>{{dataJadwal(34,5,7)}}</td>
                    <td>{{dataJadwal(35,5,7)}}</td>
                    <td>{{dataJadwal(36,5,7)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>8</td>
                    <td>13.00 - 13.45</td>
                    <td>{{dataJadwal(1,5,8)}}</td>
                    <td>{{dataJadwal(2,5,8)}}</td>
                    <td>{{dataJadwal(3,5,8)}}</td>
                    <td>{{dataJadwal(4,5,8)}}</td>
                    <td>{{dataJadwal(5,5,8)}}</td>
                    <td>{{dataJadwal(6,5,8)}}</td>
                    <td>{{dataJadwal(7,5,8)}}</td>
                    <td>{{dataJadwal(8,5,8)}}</td>
                    <td>{{dataJadwal(9,5,8)}}</td>
                    <td>{{dataJadwal(10,5,8)}}</td>
                    <td>{{dataJadwal(11,5,8)}}</td>
                    <td>{{dataJadwal(12,5,8)}}</td>
                    <td>{{dataJadwal(13,5,8)}}</td>
                    <td>{{dataJadwal(14,5,8)}}</td>
                    <td>{{dataJadwal(15,5,8)}}</td>
                    <td>{{dataJadwal(16,5,8)}}</td>
                    <td>{{dataJadwal(17,5,8)}}</td>
                    <td>{{dataJadwal(18,5,8)}}</td>
                    <td>{{dataJadwal(19,5,8)}}</td>
                    <td>{{dataJadwal(20,5,8)}}</td>
                    <td>{{dataJadwal(21,5,8)}}</td>
                    <td>{{dataJadwal(22,5,8)}}</td>
                    <td>{{dataJadwal(23,5,8)}}</td>
                    <td>{{dataJadwal(24,5,8)}}</td>
                    <td>{{dataJadwal(25,5,8)}}</td>
                    <td>{{dataJadwal(26,5,8)}}</td>
                    <td>{{dataJadwal(27,5,8)}}</td>
                    <td>{{dataJadwal(28,5,8)}}</td>
                    <td>{{dataJadwal(29,5,8)}}</td>
                    <td>{{dataJadwal(30,5,8)}}</td>
                    <td>{{dataJadwal(31,5,8)}}</td>
                    <td>{{dataJadwal(32,5,8)}}</td>
                    <td>{{dataJadwal(33,5,8)}}</td>
                    <td>{{dataJadwal(34,5,8)}}</td>
                    <td>{{dataJadwal(35,5,8)}}</td>
                    <td>{{dataJadwal(36,5,8)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>9</td>
                    <td>13.45 - 14.30</td>
                    <td>{{dataJadwal(1,5,9)}}</td>
                    <td>{{dataJadwal(2,5,9)}}</td>
                    <td>{{dataJadwal(3,5,9)}}</td>
                    <td>{{dataJadwal(4,5,9)}}</td>
                    <td>{{dataJadwal(5,5,9)}}</td>
                    <td>{{dataJadwal(6,5,9)}}</td>
                    <td>{{dataJadwal(7,5,9)}}</td>
                    <td>{{dataJadwal(8,5,9)}}</td>
                    <td>{{dataJadwal(9,5,9)}}</td>
                    <td>{{dataJadwal(10,5,9)}}</td>
                    <td>{{dataJadwal(11,5,9)}}</td>
                    <td>{{dataJadwal(12,5,9)}}</td>
                    <td>{{dataJadwal(13,5,9)}}</td>
                    <td>{{dataJadwal(14,5,9)}}</td>
                    <td>{{dataJadwal(15,5,9)}}</td>
                    <td>{{dataJadwal(16,5,9)}}</td>
                    <td>{{dataJadwal(17,5,9)}}</td>
                    <td>{{dataJadwal(18,5,9)}}</td>
                    <td>{{dataJadwal(19,5,9)}}</td>
                    <td>{{dataJadwal(20,5,9)}}</td>
                    <td>{{dataJadwal(21,5,9)}}</td>
                    <td>{{dataJadwal(22,5,9)}}</td>
                    <td>{{dataJadwal(23,5,9)}}</td>
                    <td>{{dataJadwal(24,5,9)}}</td>
                    <td>{{dataJadwal(25,5,9)}}</td>
                    <td>{{dataJadwal(26,5,9)}}</td>
                    <td>{{dataJadwal(27,5,9)}}</td>
                    <td>{{dataJadwal(28,5,9)}}</td>
                    <td>{{dataJadwal(29,5,9)}}</td>
                    <td>{{dataJadwal(30,5,9)}}</td>
                    <td>{{dataJadwal(31,5,9)}}</td>
                    <td>{{dataJadwal(32,5,9)}}</td>
                    <td>{{dataJadwal(33,5,9)}}</td>
                    <td>{{dataJadwal(34,5,9)}}</td>
                    <td>{{dataJadwal(35,5,9)}}</td>
                    <td>{{dataJadwal(36,5,9)}}</td>
                </tr>
                <tr style="border: 1px solid black;">
                    <td>10</td>
                    <td>14.30 - 15.15</td>
                    <td>{{dataJadwal(1,5,10)}}</td>
                    <td>{{dataJadwal(2,5,10)}}</td>
                    <td>{{dataJadwal(3,5,10)}}</td>
                    <td>{{dataJadwal(4,5,10)}}</td>
                    <td>{{dataJadwal(5,5,10)}}</td>
                    <td>{{dataJadwal(6,5,10)}}</td>
                    <td>{{dataJadwal(7,5,10)}}</td>
                    <td>{{dataJadwal(8,5,10)}}</td>
                    <td>{{dataJadwal(9,5,10)}}</td>
                    <td>{{dataJadwal(10,5,10)}}</td>
                    <td>{{dataJadwal(11,5,10)}}</td>
                    <td>{{dataJadwal(12,5,10)}}</td>
                    <td>{{dataJadwal(13,5,10)}}</td>
                    <td>{{dataJadwal(14,5,10)}}</td>
                    <td>{{dataJadwal(15,5,10)}}</td>
                    <td>{{dataJadwal(16,5,10)}}</td>
                    <td>{{dataJadwal(17,5,10)}}</td>
                    <td>{{dataJadwal(18,5,10)}}</td>
                    <td>{{dataJadwal(19,5,10)}}</td>
                    <td>{{dataJadwal(20,5,10)}}</td>
                    <td>{{dataJadwal(21,5,10)}}</td>
                    <td>{{dataJadwal(22,5,10)}}</td>
                    <td>{{dataJadwal(23,5,10)}}</td>
                    <td>{{dataJadwal(24,5,10)}}</td>
                    <td>{{dataJadwal(25,5,10)}}</td>
                    <td>{{dataJadwal(26,5,10)}}</td>
                    <td>{{dataJadwal(27,5,10)}}</td>
                    <td>{{dataJadwal(28,5,10)}}</td>
                    <td>{{dataJadwal(29,5,10)}}</td>
                    <td>{{dataJadwal(30,5,10)}}</td>
                    <td>{{dataJadwal(31,5,10)}}</td>
                    <td>{{dataJadwal(32,5,10)}}</td>
                    <td>{{dataJadwal(33,5,10)}}</td>
                    <td>{{dataJadwal(34,5,10)}}</td>
                    <td>{{dataJadwal(35,5,10)}}</td>
                    <td>{{dataJadwal(36,5,10)}}</td>
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
