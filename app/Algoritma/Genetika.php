<?php

namespace App\Algoritma;

use App\Models\Jam;
use App\Models\Guru;
use App\Models\GuruMapel;
use App\Models\Kelas;
use App\Models\GuruMengajar;
use App\Models\Hari;
use Illuminate\Support\Arr;

class Genetika
{

    private $guruMengajar = [];
    private $mapel = [];
    private $guru = [];
    public $hari = [];
    public  $jam = [];
    public $kelas = [];
    private $jamPelajaran = [];
    private $tingkatMapel = [];
    private $jurusanMapel = [];
    // Parameter
    private $populasi;
    private $crossover;
    private $mutasi;
    private $generasi;
    private $individu = array(array(array()));
    private $induk = [];

    // parameter Kelas
    // private $kelas = [];
    // private $kelasTingkat1 = [];
    // private $kelasTingkat2 = [];
    // private $kelasTingkat3 = [];
    // private $kelasMipa = [];
    // private $kelasIps = [];

    private $senin;
    private $jumat;
    private $range_jumat;
    private $dzuhur;

    function __construct($populasi, $crossover, $mutasi, $generasi, $senin, $jumat, $range_jumat, $dzuhur)
    {
        $this->populasi = intval($populasi);
        $this->crossover = $crossover;
        $this->mutasi = $mutasi;
        $this->generasi = $generasi;
        $this->senin = $senin;
        $this->jumat = $jumat;
        $this->range_jumat = $range_jumat;
        $this->dzuhur = $dzuhur;
    }

    // Ambil Data Guru Mengajar
    public function AmbilData()
    {
        $datas = GuruMapel::with('guru', 'mapel')->take(100)->get();

        $i = 0;
        foreach ($datas as $data) {
            $this->guruMengajar[$i] = $data->id;
            $this->kelas[$i] = $data->kelas_id;
            $this->mapel[$i] = $data->mapel_id;
            $this->guru[$i] = $data->guru_id;
            $this->jamPelajaran[$i] = $data->mapel->jp;
            $i++;
        }

        $dataJam = Jam::all();

        $i = 0;
        foreach ($dataJam as $key => $jam) {
            $this->jam[$i] = $jam->id;
            $i++;
        }

        $dataHari = Hari::all();
        $i = 0;
        foreach ($dataHari as $key => $hari) {
            $this->hari[$i] = $hari->id;
            $i++;
        }
    }

    // Inisialisasi Populasi
    public function InisialisasiPopulasi()
    {
        $jumlahGuruMengajar = count($this->guruMengajar);
        $jumlahJam = count($this->jam);
        $jumlahHari = count($this->hari);

        for ($i = 0; $i < $this->populasi; $i++) {
            for ($j = 0; $j < $jumlahGuruMengajar; $j++) {

                $jamPelajaran = $this->jamPelajaran[$j];

                $this->individu[$i][$j][0] = $j;

                //Penentuan Jam Secara Acak berdasarkan jam pelajaran dan hari acak
                if ($jamPelajaran == 5 || $jamPelajaran == 3) {
                    //Penentuan Jam Secara Acak
                    $this->individu[$i][$j][1] = rand(0, ($jumlahJam - 1) - 2);
                }

                if ($jamPelajaran == 4 || $jamPelajaran == 2) {
                    //Penentuan Jam Secara Acak
                    $this->individu[$i][$j][1] = rand(0, ($jumlahJam - 1) - 1);
                }

                if ($jamPelajaran == 1) {
                    //Penentuan Jam Secara Acak
                    $this->individu[$i][$j][1] = rand(0, ($jumlahJam - 1));
                }

                $this->individu[$i][$j][2] = rand(0, ($jumlahHari - 1));
            }
        }
    }


    // Evaluasi Fitness
    private function CekFitness($individu)
    {
        $penalty = 0;

        $hari_jumat = intval($this->jumat);
        $hari_senin = intval($this->senin);
        $jumat_0 = intval($this->range_jumat[0]);
        $jumat_1 = intval($this->range_jumat[1]);
        $jumat_2 = intval($this->range_jumat[2]);

        $jumlahGuruMengajar = count($this->guruMengajar);

        for ($i = 0; $i < $jumlahGuruMengajar; $i++) {

            $jamPelajaran = intval($this->jamPelajaran[$i]);


            $jam_a = $this->individu[$individu][$i][1];
            $hari_a = $this->individu[$individu][$i][2];
            $kelas_a = $this->kelas[$i];
            $guru_a = $this->guru[$i];

            for ($j = 0; $j < $jumlahGuruMengajar; $j++) {
                $jam_b = $this->individu[$individu][$j][1];
                $hari_b = $this->individu[$individu][$j][2];
                $kelas_b = $this->kelas[$j];
                $guru_b = $this->guru[$j];

                // Cek Bentrok Jam, Hari, Kelas
                if ($i == $j)
                    continue;

                // jika jam , hari dan  ruang bentrok penalty + 1
                if (
                    ($jam_a == $jam_b) &&
                    ($hari_a == $hari_b) &&
                    ($kelas_a == $kelas_b)
                ) {
                    $penalty += 1;
                }

                if ($jamPelajaran == 3 || $jamPelajaran == 2) {
                    if (
                        (($jam_a) == ($jam_b - 1)) &&
                        ($hari_a == $hari_b) &&
                        ($kelas_a == $kelas_b)
                    ) {
                        $penalty += 1;
                    }
                }

                if ($jamPelajaran == 5 || $jamPelajaran == 4) {
                    if (
                        (($jam_a) == ($jam_b - 2)) &&
                        ($hari_a == $hari_b) &&
                        ($kelas_a == $kelas_b)
                    ) {
                        $penalty += 1;
                    }
                }


                if ($jamPelajaran == 3) {
                    if (
                        (($jam_a + 2) == $jam_b) &&
                        ($hari_a == $hari_b) &&
                        ($kelas_a == $kelas_b)
                    ) {
                        $penalty += 1;
                    }
                }

                if ($jamPelajaran == 2) {
                    if (
                        ($jam_a + 1 == $jam_b) &&
                        ($hari_a == $hari_b) &&
                        ($kelas_a == $kelas_b)
                    ) {
                        $penalty += 1;
                    }
                }

                // __________________Bentrok Guru____________________
                if (
                    ($jam_a == $jam_b) &&
                    ($hari_a == $hari_b) &&
                    ($guru_a == $guru_b)
                ) {
                    $penalty += 1;
                }

                if ($jamPelajaran == 3 || $jamPelajaran == 2) {
                    if (
                        (($jam_a) == ($jam_b - 1)) &&
                        ($hari_a == $hari_b) &&
                        ($guru_a == $guru_b)
                    ) {
                        $penalty += 1;
                    }
                }

                if ($jamPelajaran == 5 || $jamPelajaran == 4) {
                    if (
                        (($jam_a) == ($jam_b - 2)) &&
                        ($hari_a == $hari_b) &&
                        ($guru_a == $guru_b)
                    ) {
                        $penalty += 1;
                    }
                }


                if ( $jamPelajaran == 3) {
                    if (
                        (($jam_a + 2) == $jam_b) &&
                        ($hari_a == $hari_b) &&
                        ($guru_a == $guru_b)
                    ) {
                        $penalty += 1;
                    }
                }

                if ($jamPelajaran == 2) {
                    if (
                        ($jam_a + 1 == $jam_b) &&
                        ($hari_a == $hari_b) &&
                        ($guru_a == $guru_b)
                    ) {
                        $penalty += 1;
                    }
                }
            }

            if (($hari_a + 1) == $hari_jumat) {

                if ($jamPelajaran == 4 || $jamPelajaran == 5) {
                    if (
                        ($jam_a == ($jumat_0 + 2)) ||
                        ($jam_a == ($jumat_1 + 2)) ||
                        ($jam_a == ($jumat_2 + 2))
                    ) {
                        $penalty += 1;
                    }
                }

                if ($jamPelajaran == 3) {
                    if (
                        ($jam_a == ($jumat_0 - 3)) ||
                        ($jam_a == ($jumat_0 - 2)) ||
                        ($jam_a == ($jumat_0 - 1)) ||
                        ($jam_a == ($jumat_1 - 1)) ||
                        ($jam_a == ($jumat_2 - 1))
                    ) {
                        // dd('sini');
                        $penalty += 1;
                    }
                }
                if ($jamPelajaran == 1) {
                    if (
                        ($jam_a == ($jumat_0 + 1)) ||
                        ($jam_a == ($jumat_1 + 1)) ||
                        ($jam_a == ($jumat_2 + 1))
                    ) {
                        // dd('sini');
                        $penalty += 1;
                    }
                }
            }

            if (($hari_a + 1) == $hari_senin) {
                if ($jam_a == 0) {
                    $penalty += 1;
                }
            }
        }

        $fitness =  floatval(1 / ($penalty + 1));
        return $fitness;
    }

    public function HitungFitness()
    {
        for ($individu = 0; $individu < $this->populasi; $individu++) {
            $fitness[$individu] = $this->CekFitness($individu);
        }

        return $fitness;
    }

    //Seleksi
    public function Seleksi($fitness)
    {
        $jumlah = 0;
        $rank = array();

        for ($i = 0; $i < $this->populasi; $i++) {
            //Proses ranking berdasarkan fitness
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

    public function StartCrossover()
    {
        $individu_baru = array(array(array()));
        $jumlah_guruMengajar = count($this->guruMengajar);

        // Perulangan untuk jadwal terpilih
        for ($i = 0; $i < $this->populasi; $i += 2) {
            $b = 0;
            $cr = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
            //Two point crossover
            if (floatval($cr) < floatval($this->crossover)) {
                //ketika nilai random kurang dari nilai probabilitas pertukaran
                //maka jadwal mengalami prtukaran

                $a = mt_rand(0, $jumlah_guruMengajar - 2);
                while ($b <= $a) {
                    $b = mt_rand(0, $jumlah_guruMengajar - 1);
                }


                //var_dump($this->induk);
                //penentuan jadwal baru dari awal sampai titik pertama
                for ($j = 0; $j < $a; $j++) {
                    for ($k = 0; $k < 3; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }

                //Penentuan jadwal baru dai titik pertama sampai titik kedua
                for ($j = $a; $j < $b; $j++) {
                    for ($k = 0; $k < 3; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i + 1]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i]][$j][$k];
                    }
                }

                //penentuan jadwal baru dari titik kedua sampai akhir
                for ($j = $b; $j < $jumlah_guruMengajar; $j++) {
                    for ($k = 0; $k < 3; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            } else { //Ketika nilai random lebih dari nilai probabilitas pertukaran, maka jadwal baru sama dengan jadwal terpilih
                for ($j = 0; $j < $jumlah_guruMengajar; $j++) {
                    for ($k = 0; $k < 3; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            }
        }

        $jumlah_guruMengajar = count($this->guruMengajar);

        for ($i = 0; $i < $this->populasi; $i += 2) {
            for ($j = 0; $j < $jumlah_guruMengajar; $j++) {
                for ($k = 0; $k < 3; $k++) {
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
        $jumlah_guruMengajar = count($this->guruMengajar);
        $jumlah_jam = count($this->jam);
        $jumlah_hari = count($this->hari);

        for ($i = 0; $i < $this->populasi; $i++) {
            //Ketika nilai random kurang dari nilai probalitas Mutasi,
            //maka terjadi penggantian komponen

            if ($r < $this->mutasi) {
                //Penentuan pada mapel dan kelas yang mana yang akan dirandomkan atau diganti
                $krom = mt_rand(0, $jumlah_guruMengajar - 1);

                $j = intval($this->jamPelajaran[$krom]);

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
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 1);
                        break;
                    case 5:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 2);
                        break;
                }
                //Proses penggantian hari
                $this->individu[$i][$krom][2] = mt_rand(0, ($jumlah_hari - 1));
            }

            $fitness[$i] = $this->CekFitness($i);
        }
        return $fitness;
    }

    public function GetIndividu($indv)
    {
        $individu_solusi = array(array());
        for ($j = 0; $j < count($this->guruMengajar); $j++) {
            $individu_solusi[$j][0] = $this->guruMengajar[$this->individu[$indv][$j][0]];
            $individu_solusi[$j][1] = $this->jam[$this->individu[$indv][$j][1]];
            $individu_solusi[$j][2] = $this->hari[$this->individu[$indv][$j][2]];
        }

        return $individu_solusi;
    }
}
