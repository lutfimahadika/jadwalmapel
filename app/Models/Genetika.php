<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class Genetika extends Model
    {
        public $pengampu = [];
        public $jp = [];
        public $dosen = [];
        public $jenis_mk = [];
        public $mapel = [];
        public $individu = [];
        public $induk = [];
        public $waktu_dosen = [];
        public $idosen = [];
        public $jam = [];
        public $hari = [];
        public $ruangReguler = [];
        public $tingkat_kelas = [];
        public $tingkat_mapel = [];

        protected $jenis_semester;
        protected $tahun_akademik;
        protected $populasi;
        protected $crossOver;
        protected $mutasi;
        protected $kode_jumat;
        protected $range_sholat;

        public function __construct($populasi = 0, $crossOver = 0.0, $mutasi = 0.0)
        {
            parent::__construct();

            $this->populasi = intval($populasi);
            $this->crossOver = $crossOver;
            $this->mutasi = $mutasi;
            $this->kode_jumat = 5;
            $this->range_sholat = [
                'jumat' => [11.00, 13.00],
                'ashar' => [11.45, 12.00],
                'dzuhur' => [9.15, 9.30]
            ];
        }

        public function AmbilData()
        {
            $rs_data = DB::table('guru_mata_pelajaran as a')
                ->leftJoin('mapels as b', 'a.mapel_id', '=', 'b.id')
                ->leftJoin('gurus as c', 'a.guru_id', '=', 'c.id')
                ->select('a.id', 'b.jp', 'a.guru_id', 'b.jurusan', 'b.tingkat', 'a.mapel_id as mapel', 'c.beban_mengajar')
                ->get();

            foreach ($rs_data as $i => $data) {
                $this->pengampu[$i] = intval($data->guru_id);
                $this->jp[$i] = intval($data->jp);
                $this->dosen[$i] = intval($data->guru_id);
                $this->jenis_mk[$i] = $data->jurusan;
                $this->mapel[$i] = $data->mapel;
                $this->tingkat_mapel[$i] = $data->tingkat;
                $this->idosen[$i] = intval($data->guru_id);
                $this->waktu_dosen[$i] = [$data->guru_id, $data->beban_mengajar];
            }

            $this->jam = DB::table('jams')->pluck('id')->toArray();
            $this->hari = DB::table('haris')->pluck('id')->toArray();
            $this->ruangReguler = DB::table('kelas')->pluck('id')->toArray();

            $this->tingkat_kelas = DB::table('kelas')->pluck('tingkat', 'id')->toArray();
        }

    private function formatJam($jam, $menit)
    {
        $jamFormatted = str_pad($jam, 2, '0', STR_PAD_LEFT);
        $menitFormatted = str_pad($menit, 2, '0', STR_PAD_LEFT);
        return "{$jamFormatted}:{$menitFormatted}:00";
    }

    private function hitungJam($jp)
    {
        $jamMulai = 7;
        $menitMulai = 0;
        $durasi = 45;
        $totalMenitMulai = ($jamMulai * 60) + $menitMulai;
        $totalMenitSelesai = $totalMenitMulai + ($jp * $durasi);

        $jamSelesai = floor($totalMenitSelesai / 60);
        $menitSelesai = $totalMenitSelesai % 60;

        return [
            'jam_mulai' => $this->formatJam($jamMulai, $menitMulai),
            'jam_selesai' => $this->formatJam($jamSelesai, $menitSelesai)
        ];
    }

    public function Inisialisai()
{
    $jumlah_pengampu = count($this->pengampu);
    $jumlah_jam = count($this->jam);
    $jumlah_hari = count($this->hari);
    $jumlah_ruang_reguler = count($this->ruangReguler);

    for ($i = 0; $i < $this->populasi; $i++) {
        foreach ($this->ruangReguler as $ruang) {
            foreach ($this->pengampu as $j => $pengampu) {
                $jp = $this->jp[$j];
                $available_jam = $this->filterJamSKS($this->jam, $this->range_sholat, $jp);

                $jam_index = array_rand(array_slice($available_jam, 0, max(1, $jumlah_jam - ($jp - 1))));
                $jam = $available_jam[$jam_index];

                $tingkat_mapel = $this->tingkat_mapel[$j];

                if (isset($this->tingkat_kelas[$ruang]) && $this->tingkat_kelas[$ruang] == $tingkat_mapel) {
                    $jamInfo = $this->hitungJam($jp);

                    $haris = array_rand($this->hari);

                    $this->individu[$i][] = [
                        'pengampu' => $j,
                        'jam' => $jam,
                        'hari' => $haris,
                        'ruang' => $ruang,
                        'jam_mulai' => $jamInfo['jam_mulai'],
                        'jam_selesai' => $jamInfo['jam_selesai']
                    ];
                }
            }
        }
    }
}

private function CekFitness($indv)
{
    $penalty = 0;
    $jumlah_pengampu = count($this->pengampu);

    for ($i = 0; $i < $jumlah_pengampu; $i++) {
        if (!isset($this->individu[$indv][$i]['jam'])) continue;

        $jp = $this->jp[$i];
        $jam_a = $this->individu[$indv][$i]['jam'];
        $hari_a = $this->individu[$indv][$i]['hari'];
        $ruang_a = $this->individu[$indv][$i]['ruang'];
        $dosen_a = $this->dosen[$i];
        $mapel_a = $this->mapel[$i];

        for ($j = 0; $j < $jumlah_pengampu; $j++) {
            if (!isset($this->individu[$indv][$j]['jam'])) continue;

            $jam_b = $this->individu[$indv][$j]['jam'];
            $hari_b = $this->individu[$indv][$j]['hari'];
            $ruang_b = $this->individu[$indv][$j]['ruang'];
            $dosen_b = $this->dosen[$j];
            $mapel_b = $this->mapel[$j];

            if ($i == $j) continue;

            // Bentrok Jam dan Hari
            if ($jam_a == $jam_b && $hari_a == $hari_b) {
                $penalty++;
            }

            // Bentrok Jam, Hari, dan Ruang
            if ($jam_a == $jam_b && $hari_a == $hari_b && $ruang_a == $ruang_b) {
                $penalty++;
            }

            // Bentrok Dosen
            if ($jam_a == $jam_b && $hari_a == $hari_b && $dosen_a == $dosen_b) {
                $penalty++;
            }

            // Penalti jika mata kuliah yang sama tidak berada di hari yang sama secara berurutan
            if ($mapel_a == $mapel_b && $ruang_a == $ruang_b && abs($hari_a - $hari_b) > 1) {
                $penalty++;
            }
        }
    }

    return 1 / (1 + $penalty);
}


        public function Seleksi($fitness)
        {
            $total_fitness = array_sum($fitness);
            $probabilities = array_map(function ($f) use ($total_fitness) {
                return $f / $total_fitness;
            }, $fitness);

            $cumulative_probabilities = [];
            $cumulative = 0;
            foreach ($probabilities as $prob) {
                $cumulative += $prob;
                $cumulative_probabilities[] = $cumulative;
            }

            $new_population = [];
            for ($i = 0; $i < $this->populasi; $i++) {
                $random = mt_rand() / mt_getrandmax();
                foreach ($cumulative_probabilities as $index => $cumulative) {
                    if ($random <= $cumulative) {
                        $new_population[] = $this->individu[$index];
                        break;
                    }
                }
            }
            $this->induk = $new_population;
        }

        public function startCrossOver()
        {
            $individu_baru = array(array(array()));
            $jumlah_pengampu = count($this->pengampu);

            for ($i = 0; $i < $this->populasi; $i += 2) {
                if (!isset($this->induk[$i]) || !isset($this->induk[$i + 1])) {
                    continue;
                }

                $b = 0;
                $cr = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

                if (floatval($cr) < floatval($this->crossOver)) {
                    $a = mt_rand(0, $jumlah_pengampu - 2);
                    while ($b <= $a) {
                        $b = mt_rand(0, $jumlah_pengampu - 1);
                    }

                    for ($j = 0; $j < $a; $j++) {
                        for ($k = 0; $k < 5; $k++) {
                            $induk_i = intval($this->induk[$i]);
                            $induk_i1 = intval($this->induk[$i + 1]);

                            if (isset($this->individu[$induk_i][$j][$k])) {
                                $individu_baru[$i][$j][$k] = $this->individu[$induk_i][$j][$k];
                            }
                            if (isset($this->individu[$induk_i1][$j][$k])) {
                                $individu_baru[$i + 1][$j][$k] = $this->individu[$induk_i1][$j][$k];
                            }
                        }
                    }

                    for ($j = $a; $j < $b; $j++) {
                        for ($k = 0; $k < 5; $k++) {
                            $induk_i = intval($this->induk[$i]);
                            $induk_i1 = intval($this->induk[$i + 1]);

                            if (isset($this->individu[$induk_i1][$j][$k])) {
                                $individu_baru[$i][$j][$k] = $this->individu[$induk_i1][$j][$k];
                            }
                            if (isset($this->individu[$induk_i][$j][$k])) {
                                $individu_baru[$i + 1][$j][$k] = $this->individu[$induk_i][$j][$k];
                            }
                        }
                    }

                    for ($j = $b; $j < $jumlah_pengampu; $j++) {
                        for ($k = 0; $k < 5; $k++) {
                            $induk_i = intval($this->induk[$i]);
                            $induk_i1 = intval($this->induk[$i + 1]);

                            if (isset($this->individu[$induk_i][$j][$k])) {
                                $individu_baru[$i][$j][$k] = $this->individu[$induk_i][$j][$k];
                            }
                            if (isset($this->individu[$induk_i1][$j][$k])) {
                                $individu_baru[$i + 1][$j][$k] = $this->individu[$induk_i1][$j][$k];
                            }
                        }
                    }
                } else {
                    for ($j = 0; $j < $jumlah_pengampu; $j++) {
                        for ($k = 0; $k < 5; $k++) {
                            $induk_i = intval($this->induk[$i]);
                            $induk_i1 = intval($this->induk[$i + 1]);

                            if (isset($this->individu[$induk_i][$j][$k])) {
                                $individu_baru[$i][$j][$k] = $this->individu[$induk_i][$j][$k];
                            }
                            if (isset($this->individu[$induk_i1][$j][$k])) {
                                $individu_baru[$i + 1][$j][$k] = $this->individu[$induk_i1][$j][$k];
                            }
                        }
                    }
                }
            }

            for ($i = 0; $i < $this->populasi; $i += 2) {
                for ($j = 0; $j < $jumlah_pengampu; $j++) {
                    for ($k = 0; $k < 5; $k++) {
                        if (isset($individu_baru[$i][$j][$k])) {
                            $this->individu[$i][$j][$k] = $individu_baru[$i][$j][$k];
                        }
                        if (isset($individu_baru[$i + 1][$j][$k])) {
                            $this->individu[$i + 1][$j][$k] = $individu_baru[$i + 1][$j][$k];
                        }
                    }
                }
            }
        }


        // public function StartCrossOver()
        // {
        //     $jumlah_pengampu = count($this->pengampu);

        //     for ($i = 0; $i < $this->populasi; $i += 2) {
        //         if (mt_rand() / mt_getrandmax() < $this->crossOver) {
        //             list($this->individu[$i], $this->individu[$i + 1]) = $this->IndividuCrossOver($this->induk[$i], $this->induk[$i + 1], $jumlah_pengampu);
        //         } else {
        //             $this->individu[$i] = $this->induk[$i];
        //             $this->individu[$i + 1] = $this->induk[$i + 1];
        //         }
        //     }
        // }

        public function HitungFitness()
        {
            $fitness = [];
            for ($indv = 0; $indv < $this->populasi; $indv++) {
                $fitness[$indv] = $this->CekFitness($indv);
            }
            return $fitness;
        }

        public function Mutasi()
        {
            $fitness = [];
            $jumlah_pengampu = count($this->pengampu);
            $jumlah_jam = count($this->jam);
            $jumlah_hari = count($this->hari);

            for ($i = 0; $i < $this->populasi; $i++) {
                if (mt_rand(0, 100) / 100 < $this->mutasi) {
                    $krom = mt_rand(0, $jumlah_pengampu - 1);

                    $j = intval($this->jp[$krom]);

                    $available_jam = $this->filterJamSKS($this->jam, $this->range_sholat, $j);

                    switch ($j) {
                        case 1:
                            $this->individu[$i][$krom][1] = array_rand($available_jam);
                            break;
                        case 2:
                            $this->individu[$i][$krom][1] = array_rand(array_slice($available_jam, 0, count($available_jam) - 1));
                            break;
                        case 3:
                            $this->individu[$i][$krom][1] = array_rand(array_slice($available_jam, 0, count($available_jam) - 2));
                            break;
                        case 4:
                            $this->individu[$i][$krom][1] = array_rand(array_slice($available_jam, 0, count($available_jam) - 3));
                            break;
                    }

                    $this->individu[$i][$krom][2] = mt_rand(0, $jumlah_hari - 1);
                    $this->individu[$i][$krom][3] = intval($this->ruangReguler[mt_rand(0, count($this->ruangReguler) - 1)]);
                }

                $fitness[$i] = $this->CekFitness($i);
            }

            return $fitness;
        }

        public function GetIndividu($indv)
    {
        return array_map(function ($ind) {
            return [
                'pengampu' => isset($ind['pengampu']) ? $this->pengampu[$ind['pengampu']] : null,
                'jam' => isset($ind['jam']) ? $ind['jam'] : null,
                'hari' => isset($ind['hari']) ? $this->hari[$ind['hari']] : null,
                'ruang' => isset($ind['ruang']) ? $ind['ruang'] : null,
                'mapel' => isset($ind['pengampu']) ? $this->mapel[$ind['pengampu']] : null,
                'jam_mulai' => isset($ind['jam_mulai']) ? $ind['jam_mulai'] : null,
                'jam_selesai' => isset($ind['jam_selesai']) ? $ind['jam_selesai'] : null
            ];
        }, $this->individu[$indv]);
    }

        private function IndividuCrossOver($indv1, $indv2, $jumlah_pengampu)
    {
        $indv1 = array_values($indv1);
        $indv2 = array_values($indv2);

        $acak = mt_rand(1, $jumlah_pengampu - 1);

        for ($i = 0; $i < $jumlah_pengampu; $i++) {
            if (isset($indv1[$i]) && isset($indv2[$i])) {
                if ($i <= $acak) {
                    $temp_indv1[$i] = $indv1[$i];
                    $temp_indv2[$i] = $indv2[$i];
                } else {
                    $temp_indv1[$i] = $indv2[$i];
                    $temp_indv2[$i] = $indv1[$i];
                }
            }
        }

        return [$temp_indv1, $temp_indv2];
    }

        function filterJamSKS($dataJam, $rangeSholat, $jp, $hari = 1)
        {
            $excep = [];

            foreach ($rangeSholat as $k => $v) {
                if ($hari == 5 && $k == 'jumat') {
                    $excep = array_merge($excep, $v);
                } elseif ($k != 'jumat') {
                    $excep = array_merge($excep, $v);
                }
            }

            $excep = array_unique($excep);
            $excep = array_map(function ($e) {
                return $e - 1;
            }, $excep);

            return array_diff($dataJam, $excep);
        }
    }
