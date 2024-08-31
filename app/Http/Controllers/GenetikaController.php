<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use App\Models\Hari;
use App\Models\Jadwal;
use App\Models\GuruMapel;
use App\Algoritma\Genetika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenetikaController extends Controller
{
    public function index()
    {
        return view('genetika.index');
    }


    public function genetika()
    {
        $genetik = new Genetika(
            10, // jumlah populasi
            0.70, // probabilitas crossover
            0.40, // probabilitas mutasi
            1000, // jumlah generasi
            1,
            5,
            5-6-7,
            6
        );

        $genetik->AmbilData();
        $genetik->InisialisasiPopulasi();

        $found = false;

        for ($i = 0; $i < 1000; $i++) {
            $fitness = $genetik->HitungFitness();
            $genetik->Seleksi($fitness);
            $genetik->StartCrossover();
            $fitnessAfterMutation = $genetik->Mutasi();

            for ($j = 0; $j < count($fitnessAfterMutation); $j++) {
                if ($fitnessAfterMutation[$j] == 1) {

                    Jadwal::truncate();

                    $jadwal = array(array());
                    $jadwal = $genetik->GetIndividu($j);

                    for ($k = 0; $k < count($jadwal); $k++) {
                        //cek Jam
                        $guruMengajar = GuruMapel::with('mapel','guru')->where('id', $jadwal[$k][0])->first();

                        if ($guruMengajar->mapel->jam_pelajaran == 4) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_mulai;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_selesai;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_mulai;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_selesai;


                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                    if ($hari->kode == 1) {
                                       if(($cekKeyJam + 1) == 1){
                                           $jamMulai2 = Jam::where('kode', ($cekKeyJam + 2))->first()->jam_mulai;
                                           $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_selesai;
                                       }
                                    }


                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->kelas_id = $jadwal[$k][3];
                                $insertJadwal2->jam_mulai = $jamMulai2;
                                $insertJadwal2->jam_selesai = $jamSelesai2;
                                $insertJadwal2->save();

                            }else{

                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_selesai;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_mulai;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_mulai;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_selesai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 3])->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_selesai;
                                        }
                                    }
                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 2])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 3])->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_selesai;
                                        }
                                    }

                                    if ($hari->kode == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam - 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam - 2))->first()->jam_selesai;
                                        }
                                     }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();


                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->kelas_id = $jadwal[$k][3];
                                $insertJadwal2->jam_mulai = $jamMulai2;
                                $insertJadwal2->jam_selesai = $jamSelesai2;
                                $insertJadwal2->save();
                            }

                        }elseif ($guruMengajar->mapel->jam_pelajaran == 3) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_mulai;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_selesai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();

                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_selesai;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_mulai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();
                            }

                        }elseif ($guruMengajar->mapel->jam_pelajaran == 2) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_mulai;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_selesai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();
                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_selesai;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_mulai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();
                            }
                        }elseif ($guruMengajar->mapel->jam_pelajaran == 1) {
                            $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_mulai;
                            $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_selesai;

                            $insertJadwal = new Jadwal();
                            $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                            $insertJadwal->jam_id = $jadwal[$k][1];
                            $insertJadwal->hari_id = $jadwal[$k][2];
                            $insertJadwal->kelas_id = $jadwal[$k][3];
                            $insertJadwal->jam_mulai = $jamMulai;
                            $insertJadwal->jam_selesai = $jamSelesai;
                            $insertJadwal->save();

                        }elseif($guruMengajar->mapel->jam_pelajaran == 5){
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_mulai;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_selesai;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_mulai;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_selesai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                    if ($hari->kode == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 2))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_selesai;
                                        }
                                     }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                    if ($hari->kode == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 2))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_selesai;
                                        }
                                     }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->kelas_id = $jadwal[$k][3];
                                $insertJadwal2->jam_mulai = $jamMulai2;
                                $insertJadwal2->jam_selesai = $jamSelesai2;
                                $insertJadwal2->save();

                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_selesai;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_mulai;


                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1] - 1)->first()->jam_mulai;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_selesai;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->kode == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('kode', ($cekKeyJam + 3))->first()->jam_mulai;
                                            $jamSelesai2 = Jam::where('kode', ($cekKeyJam + 4))->first()->jam_selesai;
                                        }
                                    }
                                }


                                $insertJadwal = new Jadwal();
                                $insertJadwal->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->kelas_id = $jadwal[$k][3];
                                $insertJadwal->jam_mulai = $jamMulai;
                                $insertJadwal->jam_selesai = $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->guru_mengajar_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->kelas_id = $jadwal[$k][3];
                                $insertJadwal2->jam_mulai = $jamMulai2;
                                $insertJadwal2->jam_selesai = $jamSelesai2;
                                $insertJadwal2->save();
                            }
                        }

                    }

                    $found = true;
                }

                if ($found) {
                    break;
                }
            }
            if ($found) {
                break;
            }
        }

        return back();

    }
}
