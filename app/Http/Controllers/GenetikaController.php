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
        $data = Jadwal::with('pengampu.guru', 'hari', 'jam')->get();
        return view('genetika.index', compact('data'));
    }


    public function generate()
    {
        $genetik = new Genetika(
            100, // jumlah populasi
            0.70, // probabilitas crossover
            0.40, // probabilitas mutasi
            1000, // jumlah generasi
            1,
            5,
            '5-6-7',
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

                        if ($guruMengajar->mapel->jp == 4) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_akhir;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_awal;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_akhir;


                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                    if ($hari->id == 1) {
                                       if(($cekKeyJam + 1) == 1){
                                           $jamMulai2 = Jam::where('id', ($cekKeyJam + 2))->first()->jam_awal;
                                           $jamSelesai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_akhir;
                                       }
                                    }


                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai = $jamMulai;
                                $insertJadwal->waktu_selesai = $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->pengampu_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->waktu_mulai = $jamMulai2;
                                $insertJadwal2->waktu_selesai = $jamSelesai2;
                                $insertJadwal2->save();

                            }else{

                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_akhir;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_awal;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_awal;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_akhir;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 3])->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_akhir;
                                        }
                                    }
                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 2])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 3])->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_akhir;
                                        }
                                    }

                                    if ($hari->id == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam - 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam - 2))->first()->jam_akhir;
                                        }
                                     }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai = $jamMulai;
                                $insertJadwal->waktu_selesai = $jamSelesai;
                                $insertJadwal->save();


                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->pengampu_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->waktu_mulai = $jamMulai2;
                                $insertJadwal2->waktu_selesai = $jamSelesai2;
                                $insertJadwal2->save();
                            }

                        }elseif ($guruMengajar->mapel->jp == 3) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_akhir;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai = $jamMulai;
                                $insertJadwal->waktu_selesai = $jamSelesai;
                                $insertJadwal->save();

                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_akhir;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_awal;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai = $jamMulai;
                                $insertJadwal->waktu_selesai = $jamSelesai;
                                $insertJadwal->save();
                            }

                        }elseif ($guruMengajar->mapel->jp == 2) {
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_akhir;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai =  $jamMulai;
                                $insertJadwal->waktu_selesai =  $jamSelesai;
                                $insertJadwal->save();
                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_akhir;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_awal;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai =  $jamMulai;
                                $insertJadwal->waktu_selesai =  $jamSelesai;
                                $insertJadwal->save();
                            }
                        }elseif ($guruMengajar->mapel->jp == 1) {
                            $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                            $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_akhir;

                            $insertJadwal = new Jadwal();
                            $insertJadwal->pengampu_id = $jadwal[$k][0];
                            $insertJadwal->jam_id = $jadwal[$k][1];
                            $insertJadwal->hari_id = $jadwal[$k][2];
                            $insertJadwal->waktu_mulai =  $jamMulai;
                            $insertJadwal->waktu_selesai =  $jamSelesai;
                            $insertJadwal->save();

                        }elseif($guruMengajar->mapel->jp == 5){
                            $cekKeyJam = array_search($jadwal[$k][1], $genetik->jam);
                            if (array_key_exists($cekKeyJam + 2, $genetik->jam)) {
                                $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                                $jamSelesai = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_akhir;

                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 1])->first()->jam_awal;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam + 2])->first()->jam_akhir;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                    if ($hari->id == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 2))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_akhir;
                                        }
                                     }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                    if ($hari->id == 1) {
                                        if(($cekKeyJam + 1) == 1){
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 2))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_akhir;
                                        }
                                     }
                                }

                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai =  $jamMulai;
                                $insertJadwal->waktu_selesai =  $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->pengampu_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->waktu_mulai =  $jamMulai2;
                                $insertJadwal2->waktu_selesai =  $jamSelesai2;
                                $insertJadwal2->save();

                            }else{
                                $jamSelesai = Jam::where('id', $jadwal[$k][1])->first()->jam_akhir;
                                $jamMulai = Jam::where('id', $genetik->jam[$cekKeyJam - 2])->first()->jam_awal;


                                $jamMulai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1] - 1)->first()->jam_awal;
                                $jamSelesai2 = Jam::where('id', $genetik->jam[$cekKeyJam - 1])->first()->jam_akhir;

                                $cekKeyHari = array_search($jadwal[$k][2], $genetik->hari);
                                $hari = Hari::where('id', $jadwal[$k][2])->first();
                                if (array_key_exists($cekKeyHari + 1, $genetik->hari)) {
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari + 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }

                                }else{
                                    $hari = Hari::where('id', $genetik->hari[$cekKeyHari  - 1])->first();
                                    if ($hari->id == 5) {
                                        if (in_array($cekKeyJam + 1,[5,6,7])) {
                                            $jamMulai2 = Jam::where('id', ($cekKeyJam + 3))->first()->jam_awal;
                                            $jamSelesai2 = Jam::where('id', ($cekKeyJam + 4))->first()->jam_akhir;
                                        }
                                    }
                                }


                                $insertJadwal = new Jadwal();
                                $insertJadwal->pengampu_id = $jadwal[$k][0];
                                $insertJadwal->jam_id = $jadwal[$k][1];
                                $insertJadwal->hari_id = $jadwal[$k][2];
                                $insertJadwal->waktu_mulai =  $jamMulai;
                                $insertJadwal->waktu_selesai =  $jamSelesai;
                                $insertJadwal->save();

                                $insertJadwal2 = new Jadwal();
                                $insertJadwal2->pengampu_id = $jadwal[$k][0];
                                $insertJadwal2->jam_id = $jadwal[$k][1];
                                $insertJadwal2->hari_id = $hari->id;
                                $insertJadwal2->waktu_mulai =  $jamMulai2;
                                $insertJadwal2->waktu_selesai =  $jamSelesai2;
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
