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
        $data = Jadwal::with('pengampu.guru', 'hari', 'jam')->whereHas('pengampu',function($q){
            $q->orderBy('kelas_id');
        })->orderBy('hari_id')->orderBy('jam_id')->get();
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
                        $guruMengajar = GuruMapel::with('mapel', 'guru')->where('id', $jadwal[$k][0])->first();

                        if ($guruMengajar->mapel->jp ==  5 || $guruMengajar->mapel->jp == 4) {
                            $jamMulai = Jam::where('id', $jadwal[$k][1])->first()->jam_awal;
                            $jamSelesai = Jam::where('id', ($jadwal[$k][1]) + ($guruMengajar->mapel->jp - 2))->first()->jam_akhir;
                        } else {
                            $jamMulai = Jam::where('id', $jadwal[$k][1] )->first()->jam_awal;
                            $jamSelesai = Jam::where('id', $jadwal[$k][1] + ($guruMengajar->mapel->jp - 1))->first()->jam_akhir;
                        }

                        $insertJadwal = new Jadwal();
                        $insertJadwal->pengampu_id = $jadwal[$k][0];
                        $insertJadwal->jam_id = $jadwal[$k][1];
                        $insertJadwal->hari_id = $jadwal[$k][2];
                        $insertJadwal->waktu_mulai =  $jamMulai;
                        $insertJadwal->waktu_selesai =  $jamSelesai;
                        $insertJadwal->save();
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

        $executionTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        return back()->with('success', "Genetika algorithm executed successfully! Waktu eksekusi : $executionTime detik");
    }
}
