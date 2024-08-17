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
            $this->pengampu[$i] = intval($data->id);
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

    public function Inisialisai()
    {

        $jumlahPengampu = count($this->pengampu);
        $jumlahJam = count($this->jam);
        $jumlahHari = count($this->hari);
        $jumlahRuangReguler = count($this->ruangReguler);

        for ($i = 0; $i < $this->populasi; $i++) {

            for ($j = 0; $j < $jumlahPengampu; $j++) {

                $jp = $this->jp[$j];

                $this->individu[$i][$j][0] = $j;

                // Penentuan jam secara acak ketika 1 jp
                if ($jp == 1) {
                    $this->individu[$i][$j][1] = mt_rand(0,  $jumlahJam - 1);
                }

                // Penentuan jam secara acak ketika 2 jp
                if ($jp == 2) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlahJam - 1) - 1);
                }

                // Penentuan jam secara acak ketika 3 jp
                if ($jp == 3) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlahJam - 1) - 2);
                }

                // Penentuan jam secara acak ketika 4 jp
                if ($jp == 4) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlahJam - 1) - 3);
                }

                $this->individu[$i][$j][2] = mt_rand(0, $jumlahHari - 1); // Penentuan hari secara acak
                $this->individu[$i][$j][3] = mt_rand(0, $jumlahRuangReguler - 1);
            }
        }
    }

    private function CekFitness($indv)
    {
        $penalty = 0;

        // $hari_jumat = intval($this->kode_jumat);
        // $jumat_0 = intval($this->range_jumat[0]);
        // $jumat_1 = intval($this->range_jumat[1]);
        // $jumat_2 = intval($this->range_jumat[2]);

        //var_dump($this->range_jumat);
        //exit();

        $jumlah_pengampu = count($this->pengampu);

        for ($i = 0; $i < $jumlah_pengampu; $i++) {
            if (!isset($this->individu[$indv][$i][1])) continue;

            $jp = intval($this->jp[$i]);

            $jam_a = intval($this->individu[$indv][$i][1]);
            $hari_a = intval($this->individu[$indv][$i][2]);
            $ruang_a = intval($this->individu[$indv][$i][3]);
            $dosen_a = intval($this->dosen[$i]);


            for ($j = 0; $j < $jumlah_pengampu; $j++) {
                if (!isset($this->individu[$indv][$j][1])) continue;
                $jam_b = intval($this->individu[$indv][$j][1]);
                $hari_b = intval($this->individu[$indv][$j][2]);
                $ruang_b = intval($this->individu[$indv][$j][3]);
                $dosen_b = intval($this->dosen[$j]);


                //1.bentrok ruang dan waktu dan 3.bentrok dosen

                //ketika pemasaran matakuliah sama, maka langsung ke perulangan berikutnya
                if ($i == $j)
                    continue;

                //#region Bentrok Ruang dan Waktu
                //Ketika jam,hari dan ruangnya sama, maka penalty + satu
                if (
                    $jam_a == $jam_b &&
                    $hari_a == $hari_b &&
                    $ruang_a == $ruang_b
                ) {
                    $penalty += 1;
                }

                //Ketika jp  = 2,
                //hari dan ruang sama, dan
                //jam kedua sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($jp >= 2) {
                    if (
                        $jam_a + 1 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b
                    ) {
                        $penalty += 1;
                    }
                }


                //Ketika jp  = 3,
                //hari dan ruang sama dan
                //jam ketiga sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($jp >= 3) {
                    if (
                        $jam_a + 2 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b
                    ) {
                        $penalty += 1;
                    }
                }

                //Ketika jp  = 4,
                //hari dan ruang sama dan
                //jam ketiga sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($jp >= 4) {
                    if (
                        $jam_a + 3 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b
                    ) {
                        $penalty += 1;
                    }
                }

                //______________________BENTROK DOSEN
                if (
                    //ketika jam sama
                    $jam_a == $jam_b &&
                    //dan hari sama
                    $hari_a == $hari_b &&
                    //dan dosennya sama
                    $dosen_a == $dosen_b
                ) {
                    //maka...
                    $penalty += 1;
                }



                if ($jp >= 2) {
                    if (
                        //ketika jam sama
                        ($jam_a + 1) == $jam_b &&
                        //dan hari sama
                        $hari_a == $hari_b &&
                        //dan dosennya sama
                        $dosen_a == $dosen_b
                    ) {
                        //maka...
                        $penalty += 1;
                    }
                }

                if ($jp >= 3) {
                    if (
                        //ketika jam sama
                        ($jam_a + 2) == $jam_b &&
                        //dan hari sama
                        $hari_a == $hari_b &&
                        //dan dosennya sama
                        $dosen_a == $dosen_b
                    ) {
                        //maka...
                        $penalty += 1;
                    }
                }

                if ($jp >= 4) {
                    if (
                        //ketika jam sama
                        ($jam_a + 3) == $jam_b &&
                        //dan hari sama
                        $hari_a == $hari_b &&
                        //dan dosennya sama
                        $dosen_a == $dosen_b
                    ) {
                        //maka...
                        $penalty += 1;
                    }
                }
            }
        }

        $fitness = floatval(1 / (1 + $penalty));

        return $fitness;
    }

    public function HitungFitness()
    {
        //hard constraint
        //1.bentrok ruang dan waktu
        //2.bentrok sholat jumat
        //3.bentrok dosen
        //4.bentrok keinginan waktu dosen
        //5.bentrok waktu dhuhur
        //=>6.praktikum harus pada ruang lab {telah ditetapkan dari awal perandoman
        //    bahwa jika praktikum harus ada pada LAB dan mata kuliah reguler harus
        //    pada kelas reguler


        //soft constraint //TODO
        //$fitness = array();

        for ($indv = 0; $indv < $this->populasi; $indv++) {
            $fitness[$indv] = $this->CekFitness($indv);
        }

        return $fitness;
    }

    public function Seleksi($fitness)
    {
        $jumlah = 0;
        $rank   = array();

        for ($i = 0; $i < $this->populasi; $i++) {
            //proses ranking berdasarkan nilai fitness
            $rank[$i] = 1;
            for ($j = 0; $j < $this->populasi; $j++) {
                //ketika nilai fitness jadwal sekarang lebih dari nilai fitness jadwal yang lain,
                //ranking + 1;
                //if (i == j) continue;

                $fitnessA = floatval($fitness[$i]);
                $fitnessB = floatval($fitness[$j]);

                if ($fitnessA > $fitnessB) {
                    $rank[$i] += 1;
                }
            }

            $jumlah += $rank[$i];
        }

        $jumlah_rank = count($rank);
        for ($i = 0; $i < $this->populasi; $i++) {
            //proses seleksi berdasarkan ranking yang telah dibuat
            //int nexRandom = random.Next(1, jumlah);
            //random = new Random(nexRandom);
            $target = mt_rand(0, $jumlah - 1);

            $cek    = 0;
            for ($j = 0; $j < $jumlah_rank; $j++) {
                $cek += $rank[$j];
                if (intval($cek) >= intval($target)) {
                    $this->induk[$i] = $j;
                    break;
                }
            }
        }
    }

    public function StartCrossOver()
    {
        $individu_baru = array(array(array()));
        $jumlah_pengampu = count($this->pengampu);

        for ($i = 0; $i < $this->populasi; $i += 2) //perulangan untuk jadwal yang terpilih
        {
            $b = 0;

            $cr = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

            //Two point crossover
            if (floatval($cr) < floatval($this->crossOver)) {
                //ketika nilai random kurang dari nilai probabilitas pertukaran
                //maka jadwal mengalami prtukaran

                $a = mt_rand(0, $jumlah_pengampu - 2);
                while ($b <= $a) {
                    $b = mt_rand(0, $jumlah_pengampu - 1);
                }


                //var_dump($this->induk);


                //penentuan jadwal baru dari awal sampai titik pertama
                for ($j = 0; $j < $a; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }

                //Penentuan jadwal baru dai titik pertama sampai titik kedua
                for ($j = $a; $j < $b; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i + 1]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i]][$j][$k];
                    }
                }

                //penentuan jadwal baru dari titik kedua sampai akhir
                for ($j = $b; $j < $jumlah_pengampu; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            } else { //Ketika nilai random lebih dari nilai probabilitas pertukaran, maka jadwal baru sama dengan jadwal terpilih
                for ($j = 0; $j < $jumlah_pengampu; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            }
        }

        $jumlah_pengampu = count($this->pengampu);

        for ($i = 0; $i < $this->populasi; $i += 2) {
            for ($j = 0; $j < $jumlah_pengampu; $j++) {
                for ($k = 0; $k < 4; $k++) {
                    $this->individu[$i][$j][$k] = $individu_baru[$i][$j][$k];
                    $this->individu[$i + 1][$j][$k] = $individu_baru[$i + 1][$j][$k];
                }
            }
        }
    }

    public function Mutasi()
    {
        $fitness = array();
        //proses perandoman atau penggantian komponen untuk tiap jadwal baru
        $r       = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
        $jumlah_pengampu = count($this->pengampu);
        $jumlah_jam = count($this->jam);
        $jumlah_hari = count($this->hari);
        $jumlah_ruang_reguler = count($this->ruangReguler);

        for ($i = 0; $i < $this->populasi; $i++) {
            //Ketika nilai random kurang dari nilai probalitas Mutasi,
            //maka terjadi penggantian komponen

            if ($r < $this->mutasi) {
                //Penentuan pada matakuliah dan kelas yang mana yang akan dirandomkan atau diganti
                $krom = mt_rand(0, $jumlah_pengampu - 1);

                $j = intval($this->sks[$krom]);

                switch ($j) {
                    case 1:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 1);
                        break;
                    case 2:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 1);
                        break;
                    case 3:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 2);
                        break;
                    case 4:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 3);
                        break;
                }
                //Proses penggantian hari
                $this->individu[$i][$krom][2] = mt_rand(0, $jumlah_hari - 1);

                //proses penggantian ruang
                $this->individu[$i][$krom][3] = $this->ruangReguler[mt_rand(0, $jumlah_ruang_reguler - 1)];
            }

            $fitness[$i] = $this->CekFitness($i);
        }
        return $fitness;
    }


    public function GetIndividu($indv)
    {
        //return individu;

        //int[,] individu_solusi = new int[mata_kuliah.Length, 4];
        $individu_solusi = array(array());

        for ($j = 0; $j < count($this->pengampu); $j++) {
            $individu_solusi[$j][0] = intval($this->pengampu[$this->individu[$indv][$j][0]]);
            $individu_solusi[$j][1] = intval($this->jam[$this->individu[$indv][$j][1]]);
            $individu_solusi[$j][2] = intval($this->hari[$this->individu[$indv][$j][2]]);
            $individu_solusi[$j][3] = intval($this->individu[$indv][$j][3]);
        }

        return $individu_solusi;
    }
}
