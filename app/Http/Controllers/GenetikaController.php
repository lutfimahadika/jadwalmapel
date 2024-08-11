<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Genetika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenetikaController extends Controller
{
    public function index()
    {
        set_time_limit(0);

        $populasi = 50;
        $crossOver = 0.7;
        $mutasi = 10000;

        $genetika = new Genetika($populasi, $crossOver, $mutasi);

        $genetika->AmbilData();

        $genetika->Inisialisai();

        $fitness = $genetika->HitungFitness();
        $genetika->Seleksi($fitness);
        $genetika->StartCrossOver();
        $fitness = $genetika->Mutasi();

        $best_individual_index = array_keys($fitness, max($fitness))[0];
        $best_individual = $genetika->GetIndividu($best_individual_index);

        Jadwal::truncate();

        foreach ($best_individual as $datas) {
            $dataToInsert = [
                'mapel_id' => $datas['mapel'],
                'guru_id' => $datas['pengampu'],
                'kelas_id' => $datas['ruang'],
                'hari_id' => $datas['hari'],
                'jam_id' => $datas['jam'],
                'waktu_mulai' => $datas['jam_mulai'],
                'waktu_selesai' => $datas['jam_selesai'],
            ];

            $existingData = Jadwal::where('mapel_id', $dataToInsert['mapel_id'])
                ->where('guru_id', $dataToInsert['guru_id'])
                ->where('kelas_id', $dataToInsert['kelas_id'])
                ->where('hari_id', $dataToInsert['hari_id'])
                ->where('jam_id', $dataToInsert['jam_id'])
                ->where('waktu_mulai', $dataToInsert['waktu_mulai'])
                ->where('waktu_selesai', $dataToInsert['waktu_selesai'])
                ->first();

            if (!$existingData) {
                Jadwal::insert($dataToInsert);
            }
        }


        $schedules = Jadwal::with('jam')
        ->join('jams', 'jadwals.jam_id', '=', 'jams.id')
        ->orderBy('jadwals.kelas_id')
        ->orderBy('jadwals.hari_id')
        ->orderBy('jams.jam_awal')
        ->orderBy('jadwals.mapel_id')
        ->select('jadwals.*')
        ->get();
        return view('genetika.index', ['schedules' => $schedules]);
    }
}
