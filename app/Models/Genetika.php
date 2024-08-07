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
            ->select('a.id', 'b.jp', 'a.guru_id', 'b.jurusan', 'a.mapel_id as mapel')
            ->get();

        foreach ($rs_data as $i => $data) {
            $this->pengampu[$i] = intval($data->guru_id);
            $this->jp[$i] = intval($data->jp);
            $this->dosen[$i] = intval($data->guru_id);
            $this->jenis_mk[$i] = $data->jurusan;
            $this->mapel[$i] = $data->mapel;
        }

        $this->jam = DB::table('jams')->pluck('id')->toArray();
        $this->hari = DB::table('haris')->pluck('id')->toArray();
        $this->ruangReguler = DB::table('kelas')->pluck('id')->toArray();

        $rs_waktu_dosen = DB::table('gurus')
            ->select('id', 'beban_mengajar')
            ->get();

        foreach ($rs_waktu_dosen as $i => $data) {
            $this->idosen[$i] = intval($data->id);
            $this->waktu_dosen[$i] = [$data->id, $data->beban_mengajar];
        }
    }

    public function Inisialisai()
    {
        $jumlah_pengampu = count($this->pengampu);
        $jumlah_jam = count($this->jam);
        $jumlah_hari = count($this->hari);
        $jumlah_ruang_reguler = count($this->ruangReguler);

        for ($i = 0; $i < $this->populasi; $i++) {
            for ($j = 0; $j < $jumlah_pengampu; $j++) {
                $jp = $this->jp[$j];
                $jam = array_rand(array_slice($this->jam, 0, max(1, $jumlah_jam - ($jp - 1))));

                $this->individu[$i][$j] = [
                    'pengampu' => $j,
                    'jam' => $jam,
                    'hari' => array_rand($this->hari),
                    'ruang' => $this->ruangReguler[array_rand($this->ruangReguler)],
                ];
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

            for ($j = 0; $j < $jumlah_pengampu; $j++) {
                if (!isset($this->individu[$indv][$j]['jam'])) continue;

                $jam_b = $this->individu[$indv][$j]['jam'];
                $hari_b = $this->individu[$indv][$j]['hari'];
                $ruang_b = $this->individu[$indv][$j]['ruang'];
                $dosen_b = $this->dosen[$j];

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

    public function StartCrossOver()
    {
        $jumlah_pengampu = count($this->pengampu);

        for ($i = 0; $i < $this->populasi; $i += 2) {
            if (mt_rand() / mt_getrandmax() < $this->crossOver) {
                list($this->individu[$i], $this->individu[$i + 1]) = $this->IndividuCrossOver($this->induk[$i], $this->induk[$i + 1], $jumlah_pengampu);
            } else {
                $this->individu[$i] = $this->induk[$i];
                $this->individu[$i + 1] = $this->induk[$i + 1];
            }
        }
    }

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

                switch ($j) {
                    case 1:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 1);
                        break;
                    case 2:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 2);
                        break;
                    case 3:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 3);
                        break;
                    case 4:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 4);
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
                'pengampu' => $this->pengampu[$ind['pengampu']],
                'jam' => $this->jam[$ind['jam']],
                'hari' => $this->hari[$ind['hari']],
                'ruang' => $ind['ruang'],
                'mapel' => $this->mapel[$ind['pengampu']]
            ];
        }, $this->individu[$indv]);
    }

    private function IndividuCrossOver($indv1, $indv2, $jumlah_pengampu)
    {
        $acak = mt_rand(1, $jumlah_pengampu - 1);

        for ($i = 0; $i < $jumlah_pengampu; $i++) {
            if ($i <= $acak) {
                $temp_indv1[$i] = $indv1[$i];
                $temp_indv2[$i] = $indv2[$i];
            } else {
                $temp_indv1[$i] = $indv2[$i];
                $temp_indv2[$i] = $indv1[$i];
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
